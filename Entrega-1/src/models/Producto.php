<?php

namespace App\Models;   
use App\Models\Categoria;

class Producto extends Modelo{
    private $campos = [
        'id',
        'nombre',
        'precio',
        'categoria_id'
    ];
    private $tablaName = 'productos';

    function __construct(){
        parent::__construct($this->tablaName, $this->campos);
    }
    function categoria($producto){
        if (!is_array($producto) || !isset($producto['categoria_id'])) {
            return null;
        }
        $categoria = new Categoria();
        return $categoria->get($producto['categoria_id']);

    }
}
