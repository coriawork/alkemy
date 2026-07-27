<?php

require __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/../core/Db.php';
require_once __DIR__ . '/../src/models/Modelo.php';
require_once __DIR__ . '/../src/models/Usuario.php';
require_once __DIR__ . '/../src/models/Carrito.php';

$usuarioModel = new App\Models\Usuario();
$usuario = $usuarioModel->get(1);
$carrito = $usuarioModel->carrito($usuario);

var_dump($usuario);
var_dump($carrito);