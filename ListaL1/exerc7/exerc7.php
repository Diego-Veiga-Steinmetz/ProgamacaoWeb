<!DOCTYPE html> 
<html lang="pt-BR"> 
 
<head> 
  <meta charset="utf-8"> 
  <title> Programação Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Processamento de compras de supermercado com PHP - resposta da aplicação </h1>
 <?php
  
  $valorCompra = $_POST["valor-compra"];

    //antes do comando para receber o valor do botão de rádio selecionado, devemos fazer o pPHP testar se um dos botões foi escolhido pelo usuário

    if(isset($_POST["forma-pagamento"]))
    {
      //o botão de rádio fo marcado
    $formaPagamento = $_POST["forma-pagamento"];
    //testamos para saber se o cliente pagou com cartão ou dinheiro
    if($formaPagamento == "Cartao"){
      // pagou com cartão, damos um desconto de 5% da compra
      $valordesconto = $valorCompra * 95/100;
      $valorparcial = $valordesconto;
    }
    else{
      $valorparcial = $valorCompra;
    }
    }
    else{
      //o botão ralacionado à forma de pagamento não foi selecionado. Enviamos uma mensagem uma mensagem ao usuário e finalizamos a aplicação com comando exit()
      
      exit("<p> Caro usuário, a forma de pagamento deve ser informada. Tente novamente </p>");
    }
      //Fazemoss a mesma verificação anterior, agora aplicada aos botões de rádio relacionados à entrega a domicílio
    if(isset($_POST["entrega-domicilio"])) {   
      //o botão de rádio foi marcado
    $entregouDomicilio = $_POST["entrega-domicilio"];
    //testamos para saber se o cliente solicitou entrega domicilio ou  não
    if($entregouDomicilio =="Sim"){
      //cliente solicitou entrega a domicilio
      $valorfinal = $valorparcial * 102/100;
    }
    else {
      $valorfinal = $valorparcial;
    }
    }
    else
    {
      //o botão ralacionado à entrega a domicilio não foi selecionado. Enviamos uma mensagem uma mensagem ao usuário e finalizamos a aplicação com comando exit()
      
      exit("<p> Caro usuário, a opção de entrega a domicilio deve ser informada. Tente novamente </p>");
    }
    echo "<p> O valor final da compra é <span> R$$valorfinal</span>";

 ?>  
</body> 
</html> 
