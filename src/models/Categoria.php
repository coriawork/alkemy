<?php

namespace App\Models;
//todavia no se bien como funciona el dominio de la categoria, si un producto pueden ser muchos o no
class Categoria extends Modelo{
    private $campos = ['id', 'nombre', 'descripcion'];
    public $tablaName = 'categorias';
    public function __construct(){
        parent::__construct($this->tablaName, $this->campos);
    }
}
