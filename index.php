<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JordanMP - Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="img/logoA.png" type="image/x-icon">
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión / Registro</h2>
        <form method="post" action="login.php">
            <label for="username">Usuario:</label>
            <input type="text" name="txtusuario" required>

            <label for="password">Contraseña:</label>
            <input type="password" name="txtpassword" required>

            <div class="buttons">
                <input type="submit" name="login" value="Entrar">
                <input type="submit" name="register" value="Registrarse">
            </div>
        </form>
    </div>
</body>
</html>
