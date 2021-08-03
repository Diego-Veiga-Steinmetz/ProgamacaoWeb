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
  //antes de receber o valor da compra, vamos usar um comando da linguagem PHP para testarmos o conteúdo de qualquer caixa numérica
  
  $valorCompra = $_POST["valor-compra"];

  if (filter_var($valorCompra, FILTER_VALIDATE_FLOAT)){
    //agora, testamos se o botão de rádio foi marcado
    if(isset($_POST['forma-pagamento'])){
      $formaPagamento = $_POST['forma-pagamento'];
      if ($formaPagamento == "vista"){
        // desconto de 5%
        $valorFinalCompra = $valorCompra * 95/100;
      }
      else{
        //acréscimo de 2%
        $valorFinalCompra = $valorCompra * 102/100;
      }
     //testar se o checkbox esta marcado
     if(isset($_POST['cartao']))
     {
    //o cliente pagou com Visa e pode participar do sorteio
    $mensagem = "<p> O cliente pagou com cartão Visa e está apto a participar do sorteio do automóvel!.</p>";
  }
     
     else{
     //o cliente Não pagou com visa portanto não pode participar do sorteio
     $mensagem = "<p> O cliente <span>não</span> pagou com cartão Visa e não está apto a participar do sorteio do automóvel!.</p>" ;
    }

    $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",",".");
    echo "<p> O valor total da compra é de <span>$valorFinalCompraFormatado</span> </p>
    $mensagem";
    }
    else{
    die ("<p> Caro usuário, você deve informar a forma de pagamento usada pelo cliente é um dado obrigatório. Tente novamente");
    }
  }
  else{
    die ("<p> Caro usuário, o valor da compra efetuada pelo ciente é um dado obrigatório. Tente novamente");
  }
  

 ?>  
</body> 
</html> 
