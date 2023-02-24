<?php
require('vendor/autoload.php');
$loader = new \Twig\Loader\Filesystemloader('./templates');
$twig = new \Twig\Environment ($loader);
$templates = $twig -> load ('teste.html');
echo $templates -> render([
     'nome' => 'Ana',
     'idade' => 17,
    'titulo' => "anaa"
]);

