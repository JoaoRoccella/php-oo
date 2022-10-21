<?php

class Usuario
{

  private static self $instance;

  private string $nome;

  public function __construct()
  {}

  public static function getInstance(): self
  {
    if (! isset(self::$instance)) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  /**
   *
   * @return mixed
   */
  public function getNome(): string
  {
    return $this->nome;
  }

  /**
   *
   * @param mixed $nome
   */
  public function setNome($nome): void
  {
    $this->nome = $nome;
  }
}

