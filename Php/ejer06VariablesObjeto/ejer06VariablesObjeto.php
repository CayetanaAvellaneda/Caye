<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automóviles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        h1 {
            color: #4CAF50;
        }
        h3 {
            color: #555;
        }
        h4 {
            color: #333;
            background-color: #dff0d8;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            margin: 10px 0;
        }
        span {
            color: #FF5722;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        td {
            background-color: #f2f2f2;
        }
        .json-output {
            background-color: #e1f5fe;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
    </style>
</head>
<body>

<?php

$objRenglonAutomoviles = new stdclass;
$objRenglonAutomoviles->codAuto = "aut1";
$objRenglonAutomoviles->Descripcion = "Audi A4 2018";
$objRenglonAutomoviles->PrecioAuto = 400000;
$objRenglonAutomoviles->Cantidad = 4;

$objRenglonAutomoviles2 = new stdclass;
$objRenglonAutomoviles2->codAuto = "aut2";
$objRenglonAutomoviles2->Descripcion = "Bmw X6 2024";
$objRenglonAutomoviles2->PrecioAuto = 600000;
$objRenglonAutomoviles2->Cantidad = 3;

echo "<h1>Variables Objeto </h1>";
echo "<h1 style='color:blue'>\$objRenglonAutomoviles </h1>";
echo "<h3>codAuto: " . $objRenglonAutomoviles->codAuto . "<br>";
echo "Descripción: " . $objRenglonAutomoviles->Descripcion . "<br>";
echo "PrecioAuto: $" . number_format($objRenglonAutomoviles->PrecioAuto, 0, ',', '.') . "<br>";
echo "Cantidad: " . $objRenglonAutomoviles->Cantidad . "<br></h3>";

echo "<h1>Tipo de <span style='color:blue'> \$objRenglonAutomoviles : </span>" . gettype($objRenglonAutomoviles) . "</h1>";

echo "<h1>Arreglo de Objetos </h1>";

$RenglonesAutomoviles = [];
array_push($RenglonesAutomoviles, $objRenglonAutomoviles, $objRenglonAutomoviles2);

echo "<h1 style='color:blue'>\$RenglonesAutomoviles :</h1>";

foreach ($RenglonesAutomoviles as $objRenglonAutomoviles) {
    echo "<h4>Cod Auto: " . $objRenglonAutomoviles->codAuto . " | " .
         "Descripción: " . $objRenglonAutomoviles->Descripcion . " | " .
         "Precio: $" . number_format($objRenglonAutomoviles->PrecioAuto, 0, ',', '.') . " | " .
         "Cantidad: " . $objRenglonAutomoviles->Cantidad . "</h4>";
};

echo "<h3>Cantidad de renglones en el arreglo: " . count($RenglonesAutomoviles) . "</h3>";

$objRenglonesAutomoviles = new stdClass();
$objRenglonesAutomoviles->RenglonesAutomoviles = $RenglonesAutomoviles;
$objRenglonesAutomoviles->cantidadRenglones = count($RenglonesAutomoviles);

echo "<h3>Cantidad de renglones en el objRenglonesAutomoviles: " . $objRenglonesAutomoviles->cantidadRenglones . "</h3>";

echo "<h2>Producción de un JSON jsonRenglones: </h2>";

$jsonRenglonesAutomoviles = json_encode($objRenglonesAutomoviles, JSON_PRETTY_PRINT);
echo "<div class='json-output'><h3>" . nl2br($jsonRenglonesAutomoviles) . "</h3></div>";

?>
</body>
</html>
