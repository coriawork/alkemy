<?php


namespace App\Core;

//Esta clase simula la conexion con la base de datos, devolviendo las tablas pedidas 
class Db{

    //Aca defino un array con los datos de ejemplos de la db
    //Uso un arreglo asociativo donde las claves son los nombres de las tablas y dentro de cada "tabla" hay otro arreglo donde la clave es el id del registro y el valor es otro arreglo con los campos de ese registro
    private static $tables = [
        "usuarios" => [
            1 => [
                'usuario' => 'Juan',
                'password' => '123',
                'carrito_id' => '1',
            ]
        ],
        "carritos" => [
            1 => [
                'productos' => [1,2],
            ]
        ],
        "productos" => [
            1 => [
                'nombre' => 'Zapatos',
                'precio' => 100,
            ],

            2 => [
                'nombre' => 'Buzos',
                'precio' => 200,
            ]
        ]
    ];

    static function getTable($tableName){
        return self::$tables[$tableName];
    }
}