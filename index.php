<?php
session_start();
if(isset($_SESSION['user'])){
    $email = $_SESSION['user'];
    $codigo = $_SESSION['codigo'];

}else{
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>
<body>
    <h1>Área interna do sistema</h1>
    <p><strong>Email: <?= $email; ?></strong></p>
    <p><strong>Link de envio: </strong> http://localhost/registro_convite/cadastrar.php?code=<?= $codigo; ?></p>
    <a href="logout.php">Sair</a>
    
</body>
</html>