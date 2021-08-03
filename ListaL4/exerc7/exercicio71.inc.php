<?php
function converterDeFparaC($temperatura)
    {
    $valorTemp = filter_var($temperatura, FILTER_VALIDATE_FLOAT);

    if($valorTemp === false)
     {
     exit("<p> Não foi possível efetuar a conversão de temperatura. Forneça um valor numérico válido. </p>");
     }

    $C = ($temperatura - 32 ) * 9/5;
    $temperaturaFormatada = number_format($temperatura, 2, ",", ".");
    $tempCFormatada = number_format($C, 2, ",", ".");

    echo "<p> Resultado da conversão de temperaturas: <br>
              Temperatura original = <span> $temperaturaFormatada&ordm;F </span> <br>
              Temperatura convertida = <span> $tempCFormatada&ordm;C </span> </p>";
   }