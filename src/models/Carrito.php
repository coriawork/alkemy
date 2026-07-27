<?php

namespace App\Models;

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

}