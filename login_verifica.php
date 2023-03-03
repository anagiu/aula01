<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

if ($user == 'ana' && $pass == '55555') {
    //Login feito com sucesso

    //Cria uma sessão para armazenar o usuário
    session_start();
    $_SESSION['user'] = 'ana';
    header('location:boasvindas.php');
    die;
} else {
    //Falha no login
    header('location:login.php?erro=1');
    die;
}