<?php
namespace App\Controllers;
use App\Models\Usuario;

class UsuarioController {
    
    private $usuario ;

    public function __construct() {
        $usuario = new Usuario();
    }

    public function index(){
        $usuario = new Usuario();

        return json_encode($usuario->index());
    }
    //esto seria mas para cuando haya que devolver json
  /*   public function get($id){
        return json_encode($this->usuario->get($id));
    }

    public function carrito($id){
        $carrito = $this->usuario->carrito($id);
    } */
}