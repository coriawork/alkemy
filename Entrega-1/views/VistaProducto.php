<?php 
namespace App\Views;

class VistaProducto{
    //hice esta funcion estatica para no tener que instanciarla 
    static public function mostrarProductos($productos){
        foreach ($productos as $producto) {
            $categoriaNombre = $producto['categoria']['nombre'] ?? 'Sin categoria';
            echo "<div class='producto'>";
            echo "<h2>" . $producto['nombre'] . "</h2>";
            echo "<p>Categoria: " . $categoriaNombre . "</p>";
            echo "<p>Precio: $" . $producto['precio'] . "</p>";
            echo "</div>";
        }
    }
}