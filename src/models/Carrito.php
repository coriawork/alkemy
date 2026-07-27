<?php

namespace App\Models;

use App\Core\Db;

class Carrito extends Modelo {
    private $campos = [
        'id',
        'usuario_id',   
        'productos'
    ];

    private $tablaName = 'carritos';

    function __construct(){
        parent::__construct($this->tablaName, $this->campos);
    }

    function productos($carrito){
        //chekeo que el carrito recibido sea un array y que tenga la clave 'productos'
        if (!is_array($carrito) || !isset($carrito['productos'])) {
            return [];
        }

        //obtengo la tabla productos
        $tablaProductos = Db::getTable('productos');
        $productos = [];

        //recorro todos los ids de productos del carrito y busco en la tabla de productos para quedarme con los productos que correspondan a esos ids
        foreach ($carrito['productos'] as $productoId) {
            if (isset($tablaProductos[$productoId])) {
                $productos[] = $tablaProductos[$productoId];
            }
        }

        return $productos;
    }
}