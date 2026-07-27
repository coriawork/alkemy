<?php

require __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/../core/Db.php';
require_once __DIR__ . '/../src/models/Modelo.php';
require_once __DIR__ . '/../src/models/Modelo.php';
require_once __DIR__ . '/../src/models/Usuario.php';
require_once __DIR__ . '/../src/models/Carrito.php';
require_once __DIR__ . '/../src/models/Producto.php';

$usuarioModel = new App\Models\Usuario();
$carritoModel = new App\Models\Carrito();

$usuario = $usuarioModel->get(1);
$carrito = $usuarioModel->carrito($usuario);
$productos = $carritoModel->productos($carrito);

echo '<h3>Usuario</h3>';
var_dump($usuario);

echo '<h3>Carrito</h3>';
var_dump($carrito);

echo '<h3>Productos del carrito</h3>';
var_dump($productos);