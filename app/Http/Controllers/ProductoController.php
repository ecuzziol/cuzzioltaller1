<?php

namespace App\Http\Controllers;

use App\Models\EnumCategoria;
use App\Models\EnumSubcategoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    private static function productos(): array
    {
        return [
            new Producto('Nintendo Switch OLED', 'Consola portatil con pantalla OLED de 7 pulgadas', 'Nintendo', 349.99, EnumCategoria::Consolas, EnumSubcategoria::Switch, 'switch-oled.jpg'),
            new Producto('Nintendo Switch 2', 'Nueva generacion de la consola hibrida de Nintendo', 'Nintendo', 449.99, EnumCategoria::Consolas, EnumSubcategoria::Switch2, 'switch-2.jpg'),
            new Producto('PlayStation 5', 'Consola de nueva generacion con SSD ultrarapido', 'Sony', 499.99, EnumCategoria::Consolas, EnumSubcategoria::Playstation5, 'ps5.jpg'),
            new Producto('PlayStation 4 Pro', 'Consola con soporte para resolucion 4K', 'Sony', 299.99, EnumCategoria::Consolas, EnumSubcategoria::Playstation4, 'ps4-pro.jpg'),
            new Producto('PlayStation 3 Slim', 'Consola clasica con lector Blu-ray', 'Sony', 149.99, EnumCategoria::Consolas, EnumSubcategoria::Playstation3, 'ps3-slim.jpg'),
            new Producto('NES Classic Edition', 'Replica miniatura de la consola original con 30 juegos', 'Nintendo', 59.99, EnumCategoria::Consolas, EnumSubcategoria::NES, 'nes-classic.jpg'),
            new Producto('SNES Classic Edition', 'Replica miniatura de la Super Nintendo con 21 juegos', 'Nintendo', 79.99, EnumCategoria::Consolas, EnumSubcategoria::SNES, 'snes-classic.jpg'),
            new Producto('Sega Genesis Mini', 'Replica de la consola Sega Genesis con 42 juegos', 'Sega', 69.99, EnumCategoria::Consolas, EnumSubcategoria::Genesis, 'genesis-mini.jpg'),

            new Producto('The Legend of Zelda: Tears of the Kingdom', 'Aventura de mundo abierto en Hyrule', 'Nintendo', 59.99, EnumCategoria::Videojuegos, EnumSubcategoria::Switch, 'zelda-totk.jpg'),
            new Producto('Mario Kart 8 Deluxe', 'Carreras multijugador con personajes de Nintendo', 'Nintendo', 49.99, EnumCategoria::Videojuegos, EnumSubcategoria::Switch, 'mario-kart-8.jpg'),
            new Producto('Donkey Kong Bananza', 'Nueva aventura de Donkey Kong exclusiva de Switch 2', 'Nintendo', 69.99, EnumCategoria::Videojuegos, EnumSubcategoria::Switch2, 'dk-bananza.jpg'),
            new Producto('Spider-Man 2', 'Accion y aventura en Nueva York con dos Spider-Man', 'Sony', 69.99, EnumCategoria::Videojuegos, EnumSubcategoria::Playstation5, 'spiderman-2.jpg'),
            new Producto('God of War Ragnarok', 'Continuacion epica de la saga nordica de Kratos', 'Sony', 59.99, EnumCategoria::Videojuegos, EnumSubcategoria::Playstation5, 'gow-ragnarok.jpg'),
            new Producto('The Last of Us Part I', 'Remake del aclamado juego de supervivencia', 'Naughty Dog', 49.99, EnumCategoria::Videojuegos, EnumSubcategoria::Playstation4, 'tlou-part1.jpg'),
            new Producto('Red Dead Redemption 2', 'Juego de mundo abierto en el lejano oeste', 'Rockstar', 39.99, EnumCategoria::Videojuegos, EnumSubcategoria::Playstation4, 'rdr2.jpg'),
            new Producto('The Last of Us', 'Juego original de supervivencia postapocaliptica', 'Naughty Dog', 19.99, EnumCategoria::Videojuegos, EnumSubcategoria::Playstation3, 'tlou.jpg'),
            new Producto('Super Mario Bros.', 'El juego original que inicio la saga de Mario', 'Nintendo', 14.99, EnumCategoria::Videojuegos, EnumSubcategoria::NES, 'super-mario-bros.jpg'),
            new Producto('Super Metroid', 'Clasico de exploracion y accion en el espacio', 'Nintendo', 14.99, EnumCategoria::Videojuegos, EnumSubcategoria::SNES, 'super-metroid.jpg'),
            new Producto('Sonic the Hedgehog 2', 'Plataformas de velocidad con Sonic y Tails', 'Sega', 12.99, EnumCategoria::Videojuegos, EnumSubcategoria::Genesis, 'sonic-2.jpg'),

            new Producto('Joy-Con Neon', 'Par de controles inalambricos con correas', 'Nintendo', 79.99, EnumCategoria::Accesorios, EnumSubcategoria::Switch, 'joycon-neon.jpg'),
            new Producto('Pro Controller Switch 2', 'Control profesional para Nintendo Switch 2', 'Nintendo', 89.99, EnumCategoria::Accesorios, EnumSubcategoria::Switch2, 'pro-controller-switch2.jpg'),
            new Producto('DualSense PS5', 'Control con retroalimentacion haptica y gatillos adaptativos', 'Sony', 69.99, EnumCategoria::Accesorios, EnumSubcategoria::Playstation5, 'dualsense.jpg'),
            new Producto('DualShock 4', 'Control oficial para PlayStation 4', 'Sony', 49.99, EnumCategoria::Accesorios, EnumSubcategoria::Playstation4, 'dualshock-4.jpg'),
            new Producto('Headset PlayStation 3D', 'Auriculares inalambricos con audio espacial 3D', 'Sony', 99.99, EnumCategoria::Accesorios, EnumSubcategoria::Playstation5, 'headset-ps-3d.jpg'),
            new Producto('Arcade Stick NES', 'Joystick retro compatible con NES Classic', 'Retro-Bit', 29.99, EnumCategoria::Accesorios, EnumSubcategoria::NES, 'arcade-stick-nes.jpg'),
            new Producto('Super Nintendo Controller', 'Control original SNES reacondicionado', 'Nintendo', 24.99, EnumCategoria::Accesorios, EnumSubcategoria::SNES, 'snes-controller.jpg'),

            new Producto('Bateria Joy-Con derecho', 'Bateria de repuesto para Joy-Con derecho Switch', 'Nintendo', 19.99, EnumCategoria::Repuestos, EnumSubcategoria::Switch, 'bateria-joycon.jpg'),
            new Producto('Joystick DualSense', 'Modulo de joystick para reparacion del DualSense PS5', 'Sony', 14.99, EnumCategoria::Repuestos, EnumSubcategoria::Playstation5, 'joystick-dualsense.jpg'),
            new Producto('Conector HDMI PS4', 'Puerto HDMI de repuesto para PlayStation 4', 'Sony', 9.99, EnumCategoria::Repuestos, EnumSubcategoria::Playstation4, 'hdmi-ps4.jpg'),
            new Producto('Lente laser PS3', 'Lente de repuesto para lector Blu-ray de PS3', 'Sony', 24.99, EnumCategoria::Repuestos, EnumSubcategoria::Playstation3, 'lente-laser-ps3.jpg'),
        ];
    }

    public function ObtenerTodos(Request $request)
    {
        $categoria    = $request->query('Categoria');
        $subcategoria = $request->query('Subcategoria');

        $productos = collect(self::productos());

        if ($categoria) {
            $productos = $productos->filter(
                fn($p) => $p->Categoria === EnumCategoria::from($categoria)
            );
        }

        if ($subcategoria) {
            $productos = $productos->filter(
                fn($p) => $p->SubCategoria === EnumSubcategoria::from($subcategoria)
            );
        }

        return view('catalogo', [
            'productos'        => $productos->values(),
            'categoriaActiva'  => $categoria,
            'subcategoriaActiva' => $subcategoria,
        ]);
    }

    public function BuscarVista(Request $request)
    {
        $term     = trim($request->query('q', ''));
        $productos = $term ? $this->Buscar($term) : collect(self::productos());

        return view('catalogo', [
            'productos'          => $productos,
            'categoriaActiva'    => null,
            'subcategoriaActiva' => null,
            'searchTerm'         => $term,
        ]);
    }

    public function Buscar(string $search_term)
    {
        $term = mb_strtolower($search_term);

        return collect(self::productos())
            ->filter(fn($p) =>
                str_contains(mb_strtolower($p->Nombre), $term) ||
                str_contains(mb_strtolower($p->Marca), $term) ||
                str_contains(mb_strtolower($p->Categoria->value), $term) ||
                str_contains(mb_strtolower($p->SubCategoria->value), $term)
            )
            ->values();
    }

    public function Filtrar(?string $categoria = null, ?string $subcategoria = null)
    {
        $productos = collect(self::productos());

        if ($categoria !== null) {
            $productos = $productos->filter(
                fn($p) => $p->Categoria === EnumCategoria::from($categoria)
            );
        }

        if ($subcategoria !== null) {
            $productos = $productos->filter(
                fn($p) => $p->SubCategoria === EnumSubcategoria::from($subcategoria)
            );
        }

        return $productos->values();
    }
}
