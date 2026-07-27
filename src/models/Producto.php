<?php

namespace App\Models;
class Producto extends Modelo{
    private $campos = [
        'id',
        'nombre',
        'precio',
        'categorias'
    ];
    private $tablaName = 'productos';

    function __construct(){
        parent::__construct($this->tablaName, $this->campos);
    }
}
