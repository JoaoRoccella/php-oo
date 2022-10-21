<?php
require 'src/Model/Autoloader.php';

Usuario::getInstance()->setNome("Joao");

echo Usuario::getInstance()->getNome();