<?php
session_start();

$conexion = new mysqli("localhost", "root", "", "jordandb");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$usuario = $_POST['txtusuario'] ?? '';
$password = $_POST['txtpassword'] ?? '';

if (isset($_POST['login'])) {
    $stmt = $conexion->prepare("SELECT password FROM usuarios WHERE usuario = ?");
    if (!$stmt) {
        die("Error al preparar la consulta de login: " . $conexion->error);
    }

    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hash);
        $stmt->fetch();
        if (password_verify($password, $hash)) {
            $_SESSION['usuario'] = $usuario;
            echo "<script>window.location.href = 'index.php';</script>";
        } else {
            echo "<script>alert('Contraseña incorrecta.'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('El usuario no existe.'); window.history.back();</script>";
    }
    $stmt->close();

} elseif (isset($_POST['register'])) {
    $stmt = $conexion->prepare("SELECT usuario FROM usuarios WHERE usuario = ?");
    if (!$stmt) {
        die("Error al preparar la verificación de usuario: " . $conexion->error);
    }

    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<script>alert('El usuario ya existe.'); window.history.back();</script>";
    } else {
        $stmt->close();
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conexion->prepare("INSERT INTO usuarios (usuario, password) VALUES (?, ?)");
        if (!$stmt) {
            die("Error al preparar el registro: " . $conexion->error);
        }

        $stmt->bind_param("ss", $usuario, $hash);
        if ($stmt->execute()) {
            echo "<script>alert('Usuario registrado exitosamente.'); window.location.href = 'login.html';</script>";
        } else {
            echo "<script>alert('Error al registrar usuario.'); window.history.back();</script>";
        }
    }
    $stmt->close();
}

$conexion->close();
?>
