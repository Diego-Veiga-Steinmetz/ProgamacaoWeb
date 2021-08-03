<!DOCTYPE html> 
<html lang="pt-BR"> 
 
<head> 
  <meta charset="utf-8"> 
  <title> Programação Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Cálculo de médias com PHP - resposta da aplicação </h1>
 <?php
  //área de comandos do PHP
  /* Posso abrir estas áreas
     de execução do PHP
     quantas vezes eu quiser neste arquivo*/

  //Neste ponto, o PHP já recebeu os dados do navegador e já disponibilizou estes dados no vetor $_POST. Agora, acessamos acada célula deste vetor e guardamos os dados em variáveis simples

  /*mostrar os dados de qualquer vetor em PHP
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";*/

  $nomeDoAluno = $_POST["aluno"];
  $nota1       = $_POST['nota1'];
  $peso1       = $_POST['peso1'];
  $nota2       = $_POST['nota2'];
  $peso2       = $_POST["peso2"];
     
//cálculo da média aritmética ponderada
$media = ($nota1 * $peso1 + $nota2 * $peso2)/($peso1 + $peso2);

$mediaFormatada = $media = number_format($media, 1, ",", ".");
 
 echo "<p> Caro(a) <span>$nomeDoAluno, </span> de acordo com os dados fornecidos, sua média artmética ponderada na UC Programação web é igual a <span>$mediaFormatada</span> </p>" ;
 ?>  
</body> 
</html> 
