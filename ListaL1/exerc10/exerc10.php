<!DOCTYPE html> 
<html lang="pt-BR"> 
 
<head> 
  <meta charset="utf-8"> 
  <title> Programação Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Processamento de compras da farmacia com PHP - resposta da aplicação </h1>
 <?php
  
  $valorCompra = $_POST["valor-compra"];

  if (filter_var($valorCompra, FILTER_VALIDATE_FLOAT))
  {
   if(isset($_POST['idade']))
   {
     $idadeCliente = $_POST['idade'];
       if($idadeCliente=='menor55') {
         $taxaDesconto = 0;
        }
       if($idadeCliente=='55a70'){
          $taxaDesconto= 5/100;
        }
       if($idadeCliente=='acima70'){
          $taxaDesconto=7/100;
        } 
      $valorPacialCompra = $valorCompra * (1-$taxaDesconto);
   }
    else{
      die ("<p> Caro usuário, você deve informar a idade do cliente. É um dado obrigatório. Tente novamente");
        }
  if(isset($_POST['cartao']))
  {
    echo "<p> O cliente pagou com cartão Fidelidade e obteve +5% de desconto.</p>";
    $fidelidade = 5/100;
    $valorPacialCompra = $valorCompra * (1-($taxaDesconto+$fidelidade)); 
  }
}
else{
  die ("<p> Caro usuário, o valor da compra efetuada pelo ciente é um dado obrigatório. Tente novamente");
}
  echo "<p>Valor inicial <span> R$$valorCompra </span><br>
  Valor final com desconto <span> R$$valorPacialCompra</span> </p>";

 ?>     
</body> 
</html> 