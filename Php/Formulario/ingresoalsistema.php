<?php
session_start();

// Verificar si se enviaron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['email'];
    $password = $_POST['password'];

    // Aquí podrías agregar una validación real con una base de datos
    if ($user == "admin" && $password == "1234") { // Usuario y contraseña de prueba
        $_SESSION['user'] = $user;
        $_SESSION['session_id'] = session_id();
        $_SESSION['counter'] = isset($_SESSION['counter']) ? $_SESSION['counter'] + 1 : 1;
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos'); window.location.href='index.html';</script>";
        exit();
    }
} else {
    if (!isset($_SESSION['user'])) {
        echo "<script>alert('Acceso denegado'); window.location.href='index.html';</script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Sesión</title>
</head>
<body>
    <h2>Información de Sesión</h2>
    <p><strong>Identificativo de sesión:</strong> <?php echo $_SESSION['session_id']; ?></p>
    <p><strong>Login de usuario:</strong> <?php echo $_SESSION['user']; ?></p>
    <p><strong>Contador de sesión:</strong> <?php echo $_SESSION['counter']; ?></p>
    <form action="cerrarsesion.php" method="post">
        <button type="submit">Terminar sesión</button>
    </form>
</body>
</html>
