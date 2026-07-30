<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\ProductoController;

$controller = new ProductoController();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Productos</title>
    <style>
        .producto {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
        }
        .producto h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
  <?php $controller->index()?>

</body>
</html>
