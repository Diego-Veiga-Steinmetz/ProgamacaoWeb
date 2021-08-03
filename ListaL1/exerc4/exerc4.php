<!DOCTYPE html> 
<html lang="pt-BR"> 
 
<head> 
  <meta charset="utf-8"> 
  <title> Programação Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Processamento de temperetura com PHP - resposta da aplicação </h1>
 <?php
 
  $fahrenheit = $_POST["Fahrenheit"];
  
  //Calculo de Fahrenheit para Celsius

  $Celsius = ($fahrenheit-32) * 5/9 ;   

  //FormataÇão celsius

  $CelsiusFormatado = number_format($Celsius, 1, ",",".");
  

  echo "<p> Dados do processamento da temperetura: <br>
      $fahrenheit F é igual a  <span> $CelsiusFormatado ° graus celsius  </span> <BR> </p>";
    ?> 


  <form action="exerc4.html">
   <button name="enviar-dados"> Processar dados da Temperatura Novamente </button>
  </fieldset>
 </form>    
  
</body> 
</html> 
