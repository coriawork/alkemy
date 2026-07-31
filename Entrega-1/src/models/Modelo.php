<?php
namespace App\Models;
use App\Core\Db;

abstract class Modelo {
    private $campos = [];
    private $tablaName = '';

    function __construct($tablaName, $campos){
        $this->tablaName = $tablaName;
        $this->campos = $campos;
    }
    
    function index(){
        return Db::getTable($this->tablaName);
    }

    function get($id){
        $tabla = $this->index();
        return $tabla[$id];
    }
     
    
}