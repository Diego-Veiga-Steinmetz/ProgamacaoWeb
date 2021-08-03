<!DOCTYPE html> 
<html lang="pt-BR"> 
 
<head> 
  <meta charset="utf-8"> 
  <title> Programação Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Processamento de vendas com PHP - resposta da aplicação </h1>
 <?php
 
  $ValorVenda = $_GET["valor-venda"];
  
  //DESCONTO DADO AO CLIENTE PELA LOJA
  $descontoClient = $ValorVenda * 10/100 ;   
  
  //desconto do ICMS

  $ValorICMS = $ValorVenda * 12/100;

  //valor da comiss'ao do vendedor

  $valorcomissao = $ValorVenda * 5/100;

  
  $ValorVendaformatado     = number_format($ValorVenda, 2, ",",".");

  $ValorICMSformatado      = number_format($ValorICMS, 2, ",",".");

  $descontoClientformatado = number_format($descontoClient, 2, ",",".");

  $valorcomissaoformatado  = number_format($valorcomissao, 2, ",",".");


  echo "<p> Dados do processamento da venda: <br>
      Valor da venda  <span> $ValorVendaformatado </span> <BR>
      Valor do cliente <span> $descontoClientformatado </span> <BR>
      Valor da comissão do vendedor <span> $valorcomissaoformatado </span> <BR>
      Valor do ICMS <span> $ValorICMSformatado </span> <BR></p>" ;
 ?>  
</body> 
</html> 
