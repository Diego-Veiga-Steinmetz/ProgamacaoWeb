<!DOCTYPE html> 
<html lang="pt-BR"> 
 
<head> 
  <meta charset="utf-8"> 
  <title> Programação Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Dados da viagem com PHP - resposta da aplicação </h1>
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

  //recebendo os dados do formulário por meio do vetor superglobal $_POST

  $distancia   = $_POST["distancia"];
  $autonomia   = $_POST['autonomia'];
     
  //receber o preço por litro pago e guardar como uma constate
  define("PRECO_POR_LITRO", $_POST["preco"]);
  //calculando a quantidade de litros de gasolina gasta na viagem
  $listrosGastos = $distancia / $autonomia;
  //calculando a despesa com o combustivel gasto
  $despesas = $listrosGastos * PRECO_POR_LITRO;
  
  $litrosGastosFormatado = number_format($listrosGastos, 1, ",",".");
  $despesasFormatada = number_format($despesas, 2, ",",".");

  echo "<p> Resultados do processamento dos dados da viagem: <br>
      Preço por litro = <span> R$", PRECO_POR_LITRO, "</span> <br>
      Gasto com a viagem = <span> R$ $despesasFormatada </span> <br>
      Gasto com a viagem (combustível) = <span> $litrosGastosFormatado litros </span> </p>" ;
 ?>  
</body> 
</html> 
