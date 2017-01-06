<?php

require_once "vendor/autoload.php";

$loader = new Twig_Loader_Array(array(
  "index" => "Hello {{ name }}!",
));
$twig = new Twig_Environment($loader);

$name = "liyickywashere";


include __DIR__."/templates/home.php";



?>
