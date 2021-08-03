<?php
//área de declaração das funções
function CalcularMedia($nota1, $nota2)
{
$mediaCalculada = ($nota1 + $nota2) / 2;
return $mediaCalculada;
}

//===========================================================

function testarmedia($media)
{
  if($media >=6)
    {
      echo "<p> O aluno está <span> aprovado </span>, com média final <span> $media </span> <p>";
    }
    else
    {
      echo "<p> O aluno está <span> pendente </span>, com média final <span> $media </span> <p>";
    }
}
?>