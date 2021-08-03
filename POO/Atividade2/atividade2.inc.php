<?php
 class Curso 
  {
  public $nome;
  public $duracao;
  
  //definir o método construtor personalizado da classe - a função de um método construtor é receber valores de atributos e inicializar o objeto com esses valores no momento em que ele é criado.
  function __construct($nomeInicial, $duracaoInicial)
  {
    $this->nome = $nomeInicial;
    $this->duracao = $duracaoInicial;
  }
  
  //definir um método que irá receber o número de semestres de duração de um curso e fazer sua classificação
  function classificarCurso()
  {
    if($this->duracao <=1)
    {
        $mensagem = 'curso de curta duração';
    }
    elseif($this->duracao <=3)
    {
        $mensagem = 'curso de média duração';
    }
    else
    {
        $mensagem = 'curso de longa duração';
    }
    return $mensagem;
  }

  function mostrarNome()
  {
      return $this ->nome;
  }
  function mostrarDuracao()
  {
      return $this ->duracao;
  }

  





  }
 
