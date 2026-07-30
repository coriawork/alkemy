<?php 
namespace App\Controllers;
use App\Models\Producto;
use App\Views\VistaProducto;

class ProductoController{
    private $producto;

    public function __construct(){
        $this->producto = new Producto();
    }   

    public function index(){
        $productos = $this->producto->index();

        foreach ($productos as &$producto) {
            $producto['categoria'] = $this->producto->categoria($producto);
        }

        return VistaProducto::mostrarProductos($productos);
    }
}