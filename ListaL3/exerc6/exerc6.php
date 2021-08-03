<!DOCTYPE html> 
<html lang="pt-BR"> 
 
<head> 
  <meta charset="utf-8"> 
  <title> Programação Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Compra virtual de medicamente com vetores em PHP </h1>
 <form action="exerc6.php" method="post">
  <fieldset>
   <legend> Lista de medicamentos disponíveis </legend>
   <label> Selecione os medicamentos a para a compra: </label> <br>

   <!-- ATENÇÃO: cuidado com o uso dos colchetes [] após o name de cada checkbox -->

   <input type="checkbox" name="medicamentos[]" value="Aspirina"> Aspirina R$20.00 <br>
   <input type="checkbox" name="medicamentos[]" value="Rivotril"> Rivotril R$25.00<br>
   <input type="checkbox" name="medicamentos[]" value="Ritalina"> Ritalina R$40.00<br> <br>

   <input type="checkbox" name="idade" value="sim"> Marque esta opção se o cliente tem 60 anos de idade ou mais <br>

  </fieldset>
  
   <button name="enviar-dados"> Processar compra do cliente </button>
  
 </form>    
 <?php

if(isset($_POST['enviar-dados']))
{
  //vamos criar um vetor armazenando o preço para cada produto do carrinho virtual
  $precos = ["Aspirina"    => 20.00,
             "Rivotril"    => 25.00,
             "Ritalina"    => 40.0];
  
  //antes de prosseguir, testamos se algum botão checkbox foi marcado no formulário
  if(!isset($_POST["medicamentos"]))
   {
   //o usuário não escolheu nenhum produto para compra
   echo "<p> Caro cliente, você optou por não adquirir nenhum medicamento de nossa loja virtual. Valor final da compra a ser pago = <span> R$0,00. </span> </p>";     
   }

  else
   {
   //o cliente comprou um ou mais produtos. Vamos fazer o PHP receber estes dados. Lembrar que o PHP recebe os dados de qualquer checkbox e os armazena em um vetor. No nosso caso, os values de cada checkbox marcado pelo usuário estarão no vetor de índice numérico $produtos

   $medicamentos = $_POST['medicamentos']; // é um vetor

   /*echo "<pre>";
   print_r($produtos);
   echo "</pre>";*/

   //para calcularmos o valor final da compra do cliente, percorremos o vetor de produtos e, para cada produto adquirido, descobrimos qual é o seu preço no vetor precos. Em seguida, acumulamos o preço de cada produto em uma variável somatória

   //cálculo da soma da despesa com a compra dos medicamentos
   $soma = 0;

   foreach($medicamentos as $indice => $nomeDoRemedio)
    {
    $soma = $soma + $precos[$nomeDoRemedio];
    }

    //testar se o cliente tem 60 anos ou mais

  if(isset($_POST["idade"]))
  {
    //sim, ele tem mais de 60 abis
    $taxadesconto = 5/100;
  }
  else
  {
    //não tem mais de 60 anos ou mais
    $taxadesconto = 0;
  }
  //cálcular o valor final da compra do cliente
  $somaFinal = $soma * (1-$taxadesconto);
   
    $somaFinalFormatada = number_format($somaFinal, 2, ",", ".");
    echo "<p> De acordo com os medicamentos adquiridos, o valor final da compra a ser pago pelo cliente é de <span> R$$somaFinalFormatada </span> </p>"; 
   }   
  }
 ?>  
</html> 
