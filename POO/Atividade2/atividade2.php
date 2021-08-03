<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Programação Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Fundamentos da POO com PHP - atividade1 </h1>
  <?php
   
   require_once "atividade2.inc.php"; 

   //vamos criaro os objetos curso usando o contrutor peronalizado da classe 
   $curso1 = new Curso('Curso técnico de desenvolvimento de sistemas',3);

   $curso2 = new Curso('Curso superior de tecnologia em gestão da tecnologia da informação',6);

   $nomeCurso1 = $curso1->mostrarNome();
   $duracaoCurso1 = $curso1->mostrarDuracao();
   $classificCurso2 = $curso2->classificarcurso();

   $nomeCurso2 = $curso2->mostrarNome();
   $duracaoCurso2 = $curso2->mostrarDuracao();
   $classificCurso1 = $curso1->classificarcurso();

   echo "<p>Resultado do processamento dos objetos Crusos cadastrados:<br><br>
   Nome do curso1 = $nomeCurso1 <br>
   Duração do curso1 = $duracaoCurso1 semestres <br>
   Classificação do curso1 = $classificCurso1 <Br><br>
  
   Nome do curso2 = $nomeCurso2 <br>
   Duração do curso1 = $duracaoCurso2 semestres <br>
   Classificação do curso2' = $classificCurso2 </p>";
   
  ?>  
</body> 
</html> 