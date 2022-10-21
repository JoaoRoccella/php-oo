<?php
namespace PHPOO\src;

class Usuario
{

  public string $nome;
  
  public function __construct()
  {}
/**
 * @return mixed
 */
public function getNome()
  {
    return $this->nome;
}

/**
 * @param mixed $nome
 */
public function setNome($nome)
  {
    $this->nome = $nome;
}

  
  
}

