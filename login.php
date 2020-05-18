<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Página de login</h1>
    <form action="processalogin.php" method="post">
        <p><input type="email" name="email" placeholder="Email:" autofocus></p>
        <p><input type="password" name="senha" placeholder="senha"></p>
        <p><input type="submit" name="btn"> ou <a href="cadastrar.php">cadastrar-se</a></p>
    </form>
</body>
</html>