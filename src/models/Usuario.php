<?php

namespace App\Models;
use App\Core\Db;

class Usuario extends Modelo{

    //Defino los campos que tendra el usuario
    private $campos = [
        'id',
        'usuario',
        'password',
        'carrito_id'
    ];
    private $tablaName = 'usuarios';
    private $carrito;

    function __construct(){
        parent::__construct($this->tablaName, $this->campos);
        $this->carrito = new Carrito();
    }

    function carrito($usuario){
        if (!is_array($usuario) || !isset($usuario['carrito_id'])) {
            return null;
        }

        return $this->carrito->get($usuario['carrito_id']);
    }

}
