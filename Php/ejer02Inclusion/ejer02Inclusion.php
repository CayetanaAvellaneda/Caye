<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio02Inclusion</title>
   <style>
    .resaltado
{
    color: blue;
}

table
{
    border-collapse: collapse;
    margin: 25px;
    border: 2px solid black;
}

tbody
{
    background-color: skyblue;
}

td
{
    border: 1px solid black;
}

   </style>
</head>
<body>

<?php 

include ("./include.php");

echo "<h3>Valor de una variable incluida desde otro archivo: ". $numeroEjemplo . "</h3>";
echo "<table border='1'>";
echo "<tr>";
$contarProfesores = count($profesores);
for ($i = 0; $i < $contarProfesores; $i++) {
    echo "<tr>";
    foreach ($profesores[$i] as $valor) {
        echo "<td>";
        echo $valor;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<h4>La longitud del arreglo es de:  ". $contarProfesores . "</h4>"; 
?>
</body>
</html>