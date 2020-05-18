<?php

session_start();
require_once "./dbconfig.php";

if(isset($_POST['btn'])){
    $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST,'senha', FILTER_SANITIZE_SPECIAL_CHARS);
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $email);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        $user = $stmt->fetch();
        $senhaDb = $user['senha'];
        if(password_verify($senha, $senhaDb)){
            $_SESSION['user'] = $user['email'];
            $_SESSION['codigo'] = $user['codigo'];
            header("location: index.php");
        }else{
            $_SESSION['msg'] = "email ou senha inválidos";
            header("location: login.php");
        }
    }
}else{
    header("location: index.php");
}