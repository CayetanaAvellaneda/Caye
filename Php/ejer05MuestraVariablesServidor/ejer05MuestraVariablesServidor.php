<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio03VariablesServidor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            margin: 25px;
            border: 2px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid black;
        }
        tbody {
            background-color: rgb(93, 224, 139);
        }
    </style>
</head>
<body>
<?php
echo "<h1>Variables de Servidor</h1>";
echo "<table>";
echo "<tr><th>Variable</th><th>Valor</th></tr>";

echo "<tr><td>SERVER_SOFTWARE</td><td>".$_SERVER['SERVER_SOFTWARE']."</td></tr>";
echo "<tr><td>SERVER_PROTOCOL</td><td>".$_SERVER['SERVER_PROTOCOL']."</td></tr>";
echo "<tr><td>GATEWAY_INTERFACE</td><td>".$_SERVER['GATEWAY_INTERFACE']."</td></tr>";
echo "<tr><td>HTTP_HOST</td><td>".$_SERVER['HTTP_HOST']."</td></tr>";

echo "</table>";

echo "<h1>Variables de Cliente</h1>";
echo "<table>";
echo "<tr><th>Variable</th><th>Valor</th></tr>";

echo "<tr><td>HTTP_USER_AGENT</td><td>".$_SERVER['HTTP_USER_AGENT']."</td></tr>";
echo "<tr><td>HTTP_ACCEPT_LANGUAGE</td><td>".$_SERVER['HTTP_ACCEPT_LANGUAGE']."</td></tr>";

echo "</table>";

echo "<h1>Variables de Requerimiento</h1>";
echo "<table>";
echo "<tr><th>Variable</th><th>Valor</th></tr>";

echo "<tr><td>QUERY_STRING</td><td>".$_SERVER['QUERY_STRING']."</td></tr>";
echo "<tr><td>HTTP_REFERER</td><td>".$_SERVER['HTTP_REFERER']."</td></tr>";

echo "</table>";

echo "<h1>Todas las Variables de \$_SERVER</h1>";
echo "<table>";
echo "<tr><th>Variable</th><th>Valor</th></tr>";

foreach ($_SERVER as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}

echo "</table>";
?>
</body>
</html>
