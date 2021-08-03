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
?>