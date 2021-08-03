<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Programação Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Dados cadastrais de alunos com matrizes em PHP </h1>
 <form action="exerc5.php" method="post">
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

      <button name="enviar-dados"> Cadastrar e ordernar os dados dos alunos pela média individual</button>
  
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

 //item b> para facilitar a ordenção dos dados de cada aluno, tomando-se como base a sua média individual em PRW, criamos um vetor auxiliar só com as médias, usando o número de matrícula com índice. A seguir, ordenamos os dados deste vetor auxiliar e finalmente, vamos até a matriz buscar o dado faltante
 foreach ($alunos as $matric => $vetorInterno)
  {
    $vetorAuxiliar[$matric] =$vetorInterno[1];
  }


  //agora, vamos ordernar o vetor auxiliar 
  arsort($vetorAuxiliar);

  //criamos o cabeçalho da  tabela na página web
  echo "<table>
          <caption> Dados dos alunos ordenados decrescentemente pela média individual em PRE </caption>
          <tr>
            <th> Média do aluno </th>
            <th> Matrícula </th>
            <th> Aluno </th>          
          </tr>";

  //com o laço foreach, percorremos o vetor auxilar já ordernado

  foreach($vetorAuxiliar as $matric => $media)
  {
    $nome = $alunos[$matric][0];

    $MediaFormatada = number_format($media, 1,",",".");

    echo "<tr>
            <td>$MediaFormatada</td>
            <td>$matric</td>
            <td>$nome</td>
            </tr>";
  }
  echo "</table>";
}
?>
</body> 
</html> 