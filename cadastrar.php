<?php
require_once "./dbconfig.php";

if(!isset($_GET['code'])){
    header("location: index.php");
}else{
    $code = $_GET['code'];
    $sql = "SELECT * FROM usuarios WHERE codigo = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $code);
    $stmt->execute();
    if($stmt->rowCount() <=0){
        header("location: index.php");
    }
}

?>
<!DOCTYPE html>
<html lang="pt-bre">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="create.php" method="POST">
        <p><input type="email" name="email" placeholder="Seu email" autofocus></p>
        <p><input type="password" name="senha" placeholder="Sua senha"></p>
        <p><input type="submit" name="btn"></p>
    </form>
</body>
</html>