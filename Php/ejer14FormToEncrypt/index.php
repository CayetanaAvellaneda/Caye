<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $clave = $_POST['clave'];

    // Encriptar la clave usando MD5 y SHA1
    $clave_md5 = md5($clave);
    $clave_sha1 = sha1($clave);

    // Devolver las claves encriptadas como respuesta en formato JSON
    $respuesta = json_encode(array(
        'clave_original' => $clave,
        'clave_md5' => $clave_md5,
        'clave_sha1' => $clave_sha1
    ));

    echo $respuesta;
}
?>
