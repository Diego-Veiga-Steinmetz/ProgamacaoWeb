<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Programação Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Calcular média com função em PHP </h1>
 <form action="exerc8.php" method="post">
  <fieldset>
   <legend> Calcular média </legend>

   <label> Nota 1:</label>
   <input type="number" name="nota1" step="0.01">   <br> <br>

   <label> Nota 2:</label>
   <input type="number" name="nota2" step="0.01">   <br> <br>

   <label> Nota 3:</label>
   <input type="number" name="nota3" step="0.01">   <br> <br>

   <label> Opção de calculo </label> <br>
   <input type="radio" name="calcular" value="mediaS"> Calcular média aritmética simples <br>
   <input type="radio" name="calcular" value="mediaP"> Calcular média ponderada  <br>

   <button name="enviar-dados"> Calcular média </button>
  </fieldset>
 </form> 
  <?php
   
   require_once "exercicio8.inc.php";


   //=====================script principal==============================

   if(isset($_POST["enviar-dados"]))
    {
    
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    //testando os botões de rádio
    if(isset($_POST['calcular']))
     {
     //um botão foi selecionado 
     $escalaEscolhida = $_POST['calcular'];

     //testando qual calculo foi selecionada pelo usuário
     if($escalaEscolhida == "mediaS")
      {
        calcularMediaSimples($nota1, $nota2, $nota3);
      }
     else
      {
        calcularMediaPonderada($nota1, $nota2, $nota3);
      }
     }
    else
     {
     exit("<p> Você deve escolher uma forma de calcular. Tente novamente! </p>");
     }    
    }
      
  ?>  
</body> 
</html> 