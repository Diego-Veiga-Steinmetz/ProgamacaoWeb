<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Programação Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Dados cadastrais de alunos com matrizes em PHP </h1>
 <form action="exerc4.php" method="post">
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

  <fieldset>
    <legend> Pesquisar dados do aluno </legend>
    <label class='alinha'> Nome do aluno pesquisado </label>
    <input type='text' name='pesquisa-nome'>
  </fieldset>
      <button name="enviar-dados"> Cadastrar e mostrar dado do aluno com maior média</button>
  
 </form>    
 
 <?php

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

  $alunos[$matric1] = [$aluno1,$media1];
  $alunos[$matric2] = [$aluno2,$media2];
  $alunos[$matric3] = [$aluno3,$media3];

 //item b> Antes de mis nada, vamos fazer o php receber o aluno pesquisado na matriz
 $alunoPesquisado = $_POST['pesquisa-nome'];

 //Vamos criar um vetor auxiliar somente com o nome de cada aluno, usando a matrícula como índice associative. Em seguida usamos a função array_search() para buscar o nome do aluno no vetor e retornar o número de matrícula, se o aluno foi encontrado*/
 foreach ($alunos as $matric => $vetorInterno)
  {
    $vetorAuxiliar[$matric] =$vetorInterno[0];
  }
  //descobrindo a maior média
  $maiorMedia = max ($vetorAuxiliar);

  //descobrindo o número de matrícula do aluno sendo mesquisado
  $matricDoAlunoPesq = array_search ($alunoPesquisado, $vetorAuxiliar);

  //em seguida, mandamos o PHP testar se o aluno foi (ou não) encontrado no vetor auxiliar
  if($matricDoAlunoPesq == false)
{
echo "<p> Caro professor, o aluno(a) <span> $alunoPesquisado </span> não foi encontrado em nosso cadastro. Tente novamente! </p>";
} 
else
{
//entrando aqui, o PHP encontrou o aluno pesquisado no vetor auxiliar. Já temos duas informações deste aluno (nome e a matrícula). Basta, irmos até a matriz, usar o número de matrícula do aluno (I) e usarmos, no vetor interno, o índice 1 (J)
$mediaIndividual = $alunos[$matricDoAlunoPesq][1];  

$mediaIndividualFormata = number_format($mediaIndividual,1,',','.');

echo "<p> Caro professor, de acordo com os dados dos alunos cadastrados e a busca efetuada na matriz, obtivemos os seguintes resultados: <br>.
      Nome do aluno pesquisado = <span> $alunoPesquisado </span> <br>
      Matrícula do aluno pesquisado = <span> $matricDoAlunoPesq </span> <br>
      Média individual do aluno pesquisado = <span> $mediaIndividualFormata </span> <br>.";
}

  
}

?>
</body> 
</html> 