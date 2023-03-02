<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

if ($user == 'ana' && $pass == '55555') {
    //Login feito com sucesso
    header('location:boasvindas.php');
    die;
} else {
    //Falha no login
    header('location:login.php?erro=1');
    die;
}