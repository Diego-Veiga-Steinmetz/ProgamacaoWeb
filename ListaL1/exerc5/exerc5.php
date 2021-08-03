<!DOCTYPE html> 
<html lang="pt-BR"> 
 
<head> 
  <meta charset="utf-8"> 
  <title> Programação Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Processamento de conversão Dolar-Real com PHP - resposta da aplicação </h1>
 <?php
 
  //Entrada dados dolar

  $CambioDolar = $_POST["dolar"];

  //Constante da taxa de conversão Dolar-Real

define ("TAXA_CAMBIO", $_POST["taxa"]);

  //Conversão Dolar-Real

  $ConversãoReal = $CambioDolar / TAXA_CAMBIO;

  $RealFormatado = number_format($ConversãoReal, 2, ",",".");
  

  echo "<p> Dados do processamento da conversão: <br>
      Foi convertido para um total de <span> R$ $RealFormatado </span> <BR> 
      A taxa de câmbio do Dolar-Real é de <span>5.00 BRL</span></p>";
    ?>   
  
</body> 
</html> 
