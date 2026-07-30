## Requisitos

- PHP 8.2 o superior
- Composer
- XAMPP
- MySQL (incluido en XAMPP)

## Instalacion
| Al ser un proyecto creado en xampp por el momento se necesita este repositorio sea clonado dentro de la carpeta C:\xampp\htdocs\

### Instalar dependencias

Abrir una terminal dentro del proyecto y ejecutar:

```bash
composer install
```

## Como funciona el patron implementado

El proyecto sigue una estructura basada en MVC:

- Modelos: representan los datos y la logica de negocio.
- Controladores: reciben la peticion, consultan al modelo y preparan la informacion.
- Vistas: solo renderizan la salida HTML.

Flujo general:

1. El archivo `public/index.php` actua como punto de entrada.
2. El controlador `ProductoController` pide los productos al modelo `Producto`.
3. El modelo consulta la capa de datos simulada en `core/Db.php`.
4. El controlador agrega datos derivados, como la categoria del producto.
5. La vista `VistaProducto` recibe los datos ya preparados y los muestra.

Esto respeta MVC porque la vista no consulta datos directamente ni contiene logica de negocio.

## Estructura de carpetas

```text
Alkemy/
├── composer.json
├── readme.md
├── core/
│   └── Db.php
├── public/
│   └── index.php
├── src/
│   ├── controllers/
│   │   ├── ProductoController.php
│   │   └── UsuarioController.php
│   └── models/
│       ├── Carrito.php
│       ├── Categoria.php
│       ├── Modelo.php
│       ├── Producto.php
│       └── Usuario.php
├── views/
│   └── VistaProducto.php
└── vendor/
	└── autoload.php
```

Cada carpeta cumple este rol:

- `public/`: punto de entrada publico de la aplicacion.
- `core/`: clases base del sistema, como la conexion simulada a datos.
- `src/controllers/`: controladores de la aplicacion.
- `src/models/`: modelos y logica de acceso a datos.
- `views/`: plantillas de presentacion.
- `vendor/`: dependencias instaladas por Composer y el autoload generado.

## Ejemplo de salida

Al abrir la aplicacion se listan los productos con su categoria y precio.