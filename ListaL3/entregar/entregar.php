<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Programação Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Dados do medicamento </h1>
 <form action="entregar.php" method="post">
  <fieldset>
    <legend> Dados cadatrais do aluno 1 </legend>

      <label class="alinha"> Nome do medicamento : </label>
      <input type="text" name="nome1" autofocus placeholder="Nome do medicamento"> <br>

      <label class="alinha"> Codigo do medicamento : </label>
      <input type="number" name="codigo1" min="0"> <br>

      <label class="alinha"> Preço : </label>
      <input type="number" name="preco1" min="0"> <br>
  </fieldset>

  <fieldset>
    <legend> Dados do medicamento  </legend>

      <label class="alinha"> Nome do medicamento : </label>
      <input type="text" name="nome2" autofocus placeholder="Nome do medicamento"> <br>

      <label class="alinha"> Codigo do medicamento : </label>
      <input type="text" name="codigo2" min="0"> <br>

      <label class="alinha"> Preço : </label>
      <input type="number" name="preco2" min="0"> <br>
  </fieldset>

  <fieldset>
    <legend> Dados do medicamento  </legend>

      <label class="alinha"> Nome do medicamento : </label>
      <input type="text" name="nome3" autofocus placeholder="Nome do medicamento"> <br>

      <label class="alinha"> Codigo do medicamento : </label>
      <input type="text" name="codigo3" min="0"> <br>

      <label class="alinha"> Preço : </label>
      <input type="number" name="preco3" min="0"> <br>
  </fieldset>
  
  <fieldset>
    <legend> Código do medicamento </legend>
    <label class='alinha'> Código do medicamento </label>
    <input type='text' name='pesquisa-medicamento'>
  </fieldset>

      <button name="enviar-dados"> Cadastrar e ordernar os dados dos alunos pela média individual</button>
  
 </form>    
 <?php
if (isset($_POST['enviar-dados']))
{
    $medicamento1 = $_POST['nome1'];
    $medicamento2 = $_POST['nome2'];
    $medicamento3 = $_POST['nome3'];

    $codigo1 = $_POST['codigo1'];
    $codigo2 = $_POST['codigo2'];
    $codigo3 = $_POST['codigo3'];

    $preco1 = $_POST['preco1'];
    $preco2 = $_POST['preco2'];
    $preco3 = $_POST['preco3'];

    //item a> cadastro dos dados na matriz, usando a matrícula como índice mais externo (I)
    $matriz[$codigo1] = [$medicamento1, $preco1];
    $matriz[$codigo2] = [$medicamento2, $preco2];
    $matriz[$codigo3] = [$medicamento3, $preco3];

    //echo "<pre>";
    //print_r($matriz);
    //echo "</pre>";
    $medicamentoPesquisado = $_POST['pesquisa-medicamento'];

    //item b> para facilitar a ordenção dos dados de cada medicamento, tomando-se como base seu codigo, criamos um vetor auxiliar só com os preços, usando o código com índice. A seguir, ordenamos os dados deste vetor auxiliar e finalmente, vamos até a matriz buscar o dado faltante
    foreach ($matriz as $codigo => $vetorInterno)
    {
        $vetorAuxiliar[$codigo] = $vetorInterno[1];
    }
    
    //descobrindo o menor preço
    $menorMedicamento = min($vetorAuxiliar);

    $codigoComMenorPreco = array_search($menorMedicamento,$vetorAuxiliar);

    //descobrindo o nome do medicamento de menor preço
    $NomeMenorMedicamento = $matriz[$codigoComMenorPreco][0];

    $PrecoMedicamento = false;
    $NomeMedicamento = false;
    //descobrindo as informações do remédio pesquisado
    if(array_key_exists($medicamentoPesquisado, $matriz))
    {
      $PrecoMedicamento = $matriz[$medicamentoPesquisado][1];
      $NomeMedicamento = $matriz[$medicamentoPesquisado][0];
    }
    //descobrindo o nome do remedio que está a associado ao menor média
    $nomeMedBarato = $PrecoMedicamento;
    echo "<p>Nosso medicamento mais barato é <span> $NomeMenorMedicamento</span> custando<span> R$$menorMedicamento </span> </p>";

    if ($PrecoMedicamento == false)
    {
        echo "<p> O medicamento de código <span> $medicamentoPesquisado </span> não foi encontrado em nosso sistema. Tente novamente! </p>";
    }
    else
    {
        echo "<p>Achei o remédio o código em nosso sistema <br> Código do médicamento pesquisado <span> $medicamentoPesquisado </span> <br> Preço do medicamento <span>R$$PrecoMedicamento </span> <BR>  Nome do medicamento <span> $NomeMedicamento</span>.  </p>";
    }

    //criamos o cabeçalho da  tabela na página web
    echo "<table>
          <caption> Dados dos medicamento ordenados decrescentemente pelo preco individual </caption>
          <tr> <br>
            <th> Preço </th>
            <th> Código </th>
            <th> Medicamento </th>        
          </tr>";

    //com o laço foreach, percorremos o vetor auxilar já ordernado
    foreach ($vetorAuxiliar as $codigo => $preco)
    {
        $nome = $matriz[$codigo][0];

        $MediaFormatada = number_format($preco, 1, ",", ".");

        echo "<tr>
            <td>$MediaFormatada</td>
            <td>$codigo</td>
            <td>$nome</td>
            </tr>";
    }
    echo "</table>";

    /*echo "<pre>";
    print_r($vetorAuxiliar);
    echo "</pre>";*/

    foreach ($matriz as $codigo => $vetorInterno)
    {
        $vetorAuxiliarNome[$codigo] = $vetorInterno[0];
    }
    asort($vetorAuxiliarNome);
     
    echo "<table>
          <caption> Dados dos medicamento ordenados crescente de ordem alfábetica </caption>
          <tr> <br>
            <th> Preço </th>
            <th> Código </th>
            <th> Medicamento </th>        
          </tr>";
 
    
    //com o laço foreach, percorremos o vetor auxilar já ordernado
    foreach ($vetorAuxiliarNome as $codigo => $nome)
    {
      $preco = $matriz[$codigo][1];
      $MediaFormatada = number_format($preco, 1, ",", ".");

      echo "<tr>
          <td>$MediaFormatada</td>
          <td>$codigo</td>
          <td>$nome</td>
          </tr>";
    }

}
?>
</body> 
</html>
