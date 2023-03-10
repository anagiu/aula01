<?php

require('pdo.inc.php');

$user = $_POST['user'];
$pass = $_POST['pass'];


// cria a consulta e aguarda os dados
$sql = $pdo->prepare('SELECT * FROM usuarios WHERE username = :usr');

// adiciona os dados na consulta
$sql->bindParam(':usr', $user);


//roda a consulta
$sql->execute();

if($sql->rowCount()) {
    $user = $sql ->fetch(PDO::FETCH_OBJ);

    if (!password_verify($pass, $user-> senha)) {
        //falha no login
        header('location:boasvindas.php?erro=1');
        die;
    }

    session_start();
    $_SESSION['user'] = $user->nome;

    header('location:boasvindas.php');
    die;
}else{

    header('location:boasvindas.php?erro=1');
    die;
}

   





echo $sql->rowCount();
die;


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