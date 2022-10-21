<?php

class Autoloader
{

  public function __construct()
  {}

  public static function register()
  {
    spl_autoload_register(function ($class_name) {
      require $class_name . '.php';
    });
  }
}
Autoloader::register();
