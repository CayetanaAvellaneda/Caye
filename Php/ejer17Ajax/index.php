<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['clave'])) {
    $clave = $_POST['clave'];

    // Encriptaciones
    $md5_clave = md5($clave);
    $sha1_clave = sha1($clave);

    // Respuesta en JSON
    echo json_encode([
        'clave' => $clave,
        'md5' => $md5_clave,
        'sha1' => $sha1_clave
    ]);
} else {
    // Si no se recibe el parámetro clave
    echo json_encode([
        'error' => 'No se ha proporcionado una clave válida'
    ]);
}
