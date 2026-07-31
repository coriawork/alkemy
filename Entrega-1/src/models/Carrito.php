<?php

namespace App\Models;

class Carrito extends Modelo {
    private $campos = [
        'id',
        'usuario_id',
        'productos'
    ];

    private $tablaName = 'carritos';
    private $productoModel;

    function __construct(){
        parent::__construct($this->tablaName, $this->campos);
        $this->productoModel = new Producto();
    }

    function productos($carrito){
        if (!is_array($carrito) || !isset($carrito['productos'])) {
            return [];
        }

        $productos = [];

        foreach ($carrito['productos'] as $productoId) {
            $producto = $this->productoModel->get($productoId);

            if ($producto !== null) {
                $productos[] = $producto;
            }
        }

        return $productos;
    }
}