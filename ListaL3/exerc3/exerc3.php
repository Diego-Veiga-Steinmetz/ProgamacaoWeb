<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Programação Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Dados cadastrais de alunos com matrizes em PHP </h1>
 <form action="exerc3.php" method="post">
  <fieldset>
    <legend> Dados cadatrais do aluno 1 </legend>

      <label class="alinha"> Nome do aluno 1: </label>
      <input type="text" name="nome1" autofocus placeholder="Nome do aluno"> <br>

      <label class="alinha"> Matricula do aluno 1: </label>
      <input type="text" name="matric1" min="0" max="10"> <br>

      <label class="alinha"> Media 1: </label>
      <input type="number" name="media1" min="0" max="10"> <br>
  </fieldset>

  <fieldset>
    <legend> Dados cadatrais do aluno 2 </legend>

      <label class="alinha"> Nome do aluno 2: </label>
      <input type="text" name="nome2" autofocus placeholder="Nome do aluno"> <br>

      <label class="alinha"> Matricula do aluno 2: </label>
      <input type="text" name="matric2" min="0" max="10"> <br>

      <label class="alinha"> Media 2: </label>
      <input type="number" name="media2" min="0" max="10"> <br>
  </fieldset>

  <fieldset>
    <legend> Dados cadatrais do aluno 3 </legend>

      <label class="alinha"> Nome do aluno 3: </label>
      <input type="text" name="nome3" autofocus placeholder="Nome do aluno"> <br>

      <label class="alinha"> Matricula do aluno 3: </label>
      <input type="text" name="matric3" min="0" max="10"> <br>

      <label class="alinha"> Media 3: </label>
      <input type="number" name="media3" min="0" max="10"> <br>
  </fieldset>

      <button name="enviar-dados"> Cadastrar e mostrar dado do aluno com maior média</button>
  
 </form>    
 
 <?php

  //Aqui, colocamos todos os comandos em PHP que irão receber os dados do formulário, efetuar  o processamento e enviar ESTA página web de voltar para o usuário da nossa aplicação. Antes disso, devemos testar se o usuário acionou o butão submit no formulário

  if(isset($_POST['enviar-dados']))
  { 

  $aluno1 = $_POST['nome1'];
  $aluno2 = $_POST['nome2'];
  $aluno3 = $_POST['nome3'];

  $media1 = $_POST['media1'];
  $media2 = $_POST['media2'];
  $media3 = $_POST['media3'];

  $matric1 = $_POST['matric1'];
  $matric2 = $_POST['matric2'];
  $matric3 = $_POST['matric3'];

  //item a> cadastro dos dados na matriz, usando a matrícula como índice mais externo (I)

  $alunos[$matric1][0] = $aluno1;
  $alunos[$matric1][1] = $media1;

  $alunos[$matric2][0] = $aluno2;
  $alunos[$matric2][1] = $media2;

  $alunos[$matric3][0] = $aluno3;
  $alunos[$matric3][1] = $media3;

  //outra forma
  $alunos[$matric1] = [$aluno1,$media1];
  $alunos[$matric2] = [$aluno2,$media2];
  $alunos[$matric3] = [$aluno3,$media3];

  //outra forma
  $alunos = [$matric1 => [$aluno1,$media1],
            $matric2 => [$aluno2,$media2],
            $matric3 => [$aluno3,$media3]];



  /*alunos = [$aluno1 => $nota1,
              $aluno2 => $nota2,
              $aluno3 => $nota3];

  B> Descobrir os dados do aluno que tem a maior meédia da turma e mostrar essa informações na página web. Para isso criamos um vetor auxiliar scomente com as médias de cada aluno, usando a matrícula como índice associative. Em seguida, usamos a função de max para buscar, no vetor temporário, a maior média, após isso,usamos a função array search*/
  foreach ($alunos as $matric => $vetorInterno)
  {
    $vetorAuxiliar[$matric] =$vetorInterno[1];
  }
  //descobrindo a maior média
  $maiorMedia = max ($vetorAuxiliar);

  //descobrindo o número de matrícula do aluno com a maior média
  $matricComMaiorMedia = array_search ($maiorMedia, $vetorAuxiliar);

  //descobrindo o nome do aluno que está a associado a maior média
  $nomeComMaiorMedia = $alunos[$matricComMaiorMedia][0];


  $media = array_sum($vetorAuxiliar) / count($vetorAuxiliar);
  $MaiorMediaFormatada = number_format($maiorMedia,1,',','.');

  echo "<p> Caro professor, de acordo com os dados dos alunos cadastrados na matriz, os dados do aluno de maior rendimento em PRW são os seguintes: <br>.
      Nome do aluno = <span> $nomeComMaiorMedia </span> <br>
      Matrícula do aluno = <span> $matricComMaiorMedia </span> <br>
      Maior média encontrada = <span> $MaiorMediaFormatada </span> <br>.";
  }

?>
</body> 
</html> 