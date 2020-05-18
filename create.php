<?php

session_start();
require_once "./dbconfig.php";

if(isset($_POST['btn'])){
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
    
    
    if($email && $senha){
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $codigo = rand(1000, 9999);
        $sql = "INSERT INTO usuarios(email, senha, codigo) VALUES(?,?,?)";    
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $senhaHash);
        $stmt->bindValue(3, $codigo);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $dados = $stmt->fetchAll();
            header("location: login.php");
        }else{
        }
    }else{
        header("location: cadastrar.php");
    }

}else{
    header("location: cadastrar.php");
}