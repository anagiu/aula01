<?php
#produtos.php
require('vendor/autoload.php');
$loader = new \Twig\Loader\Filesystemloader('./templates');
$twig = new \Twig\Environment ($loader);
$template = $twig ->load('produtos.html');
echo $template->render([
    'titulo' => 'Produtos',
]);