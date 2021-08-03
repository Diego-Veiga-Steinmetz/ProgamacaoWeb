<?php
function calcularMediaSimples($nota1, $nota2, $nota3)
    {
    $nota1 = filter_var($nota1, FILTER_VALIDATE_FLOAT);
    

    if($nota1 === false)
     {
     exit("<p> Faltou inserior a <span>primeira</span> nota. Tente novamente. </p>");
     }
     $nota2 = filter_var($nota2, FILTER_VALIDATE_FLOAT);
    

    if($nota2 === false)
     {
     exit("<p> Faltou inserior a <span>segunda</span> nota. Tente novamente. </p>");
     }
     $nota3 = filter_var($nota3, FILTER_VALIDATE_FLOAT);
    

    if($nota3 === false)
     {
     exit("<p> Faltou inserior a <span>terceira</span> nota. Tente novamente. </p>");
     }
      
     $mediaS = ($nota1 + $nota2 + $nota3) /3;
     $mediaformatadaS = number_format ($mediaS, 1,',','.');
     
     echo "<p> Média <span> $mediaformatadaS </span><br>
         Nota 1 = <span>$nota1 </span><br>
         Nota 2 = <span>$nota2 </span><br>
         Nota 3 = <span>$nota3 </span><br>. 
         </p>";
        
        
    }
function calcularMediaPonderada($nota1, $nota2, $nota3)
    {
    
    $mediaP = (($nota1*5) + ($nota2*3) + ($nota3*2)) /10;
    $mediaformatadaP = number_format ($mediaP, 1,',','.');
    
    echo "<p> Média <span> $mediaformatadaP </span><br>
        Nota 1 = <span>$nota1 </span><Br>
         Nota 2 = <span>$nota2 </span><br>
         Nota 3 = <span>$nota3 </span><br>. </p>";
    
   }
   
