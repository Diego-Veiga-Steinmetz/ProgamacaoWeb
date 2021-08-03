<!DOCTYPE html> 
<html lang="pt-BR"> 
 
<head> 
  <meta charset="utf-8"> 
  <title> Programação Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Processamento Comissão com PHP - resposta da aplicação </h1>
 <?php
 
 $TotalCompra = $_POST["totalcompra"];

 define ("PERCENTUAL_COMISSÃO", $_POST["comissão"]);

 $ComissãoVendedor = $TotalCompra * PERCENTUAL_COMISSÃO;

 $ComissãoFinal = $ComissãoVendedor/100;

 $ComissãoVendedorFormatada = number_format($ComissãoFinal, 2, ",",".");
  
  echo "<p> Dados do processamento da comissão: <br>
      A venda total foi de <span>  R$$TotalCompra </span> <br>
      A comissão do vendedor foi de <span>R$$ComissãoVendedorFormatada</span> </p>";
    ?>   
  
</body> 
</html> 
