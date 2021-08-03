

<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Programação Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Validação de idade do usuário PHP </h1>
 <form action="exerc2.php" method="post">
  <fieldset>
    <legend> Varificação da idade do usuário </legend>

    <label> Idade: </label>
    <input type="number" name="idade" min='0'> <br>

    <button name="enviar-dados"> Verificar a idade e disponibilidade de voto</button>
  </fieldset>
</form>  
<?php

//área de declaração das funções
function validarIdade($idade)
{
  $valor = filter_var($idade, FILTER_VALIDATE_INT);
  if($valor >= 0)
    {
      return $idade;
    }
    else
    {
      die("<p> Caro usuário, a idade fornecida é inválida. Tente novamente!<p>");
    }
}

//============================================================

function testarVoto($idadeValidada)
{
  if($idadeValidada >= 16)
    {
      echo "<p> O usuário está apto a votar, com a idade de <span> $idadeValidada </span> </p>";
    }
    else
    {
      echo "<p> O usuário não esta apto a votar, com a idade de <span> $idadeValidada </span> </p>";
    }
}

//============================================================

if(isset($_POST['enviar-dados']))
{
  $idade = $_POST['idade'];

  //item a> invocar a função que teste se a idade é válida
  $idadeValidada = validarIdade($idade); 

  //item b> invocar uma função que testa a se o usuário está apto (ou não) a votar
  testarVoto($idadeValidada);

}
?>
   
 </body> 
</html> 