<?php

namespace App\Http\Controllers;

use App\Models\EnumCategoria;
use App\Models\EnumSubcategoria;
use App\Models\Producto;
use DateTime;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    private static function productos(): array
    {
        return [
            new Producto('Nintendo Switch OLED', 'Consola portatil con pantalla OLED de 7 pulgadas', 'Nintendo', 489986, EnumCategoria::Consolas, EnumSubcategoria::Switch, 'consolas/switch-oled.jpg', 4.8, new DateTime('2024-03-10')),
            new Producto('Nintendo Switch 2', 'Nueva generacion de la consola hibrida de Nintendo', 'Nintendo', 629986, EnumCategoria::Consolas, EnumSubcategoria::Switch2, 'consolas/switch-2.jpg', 4.9, new DateTime('2025-01-15')),
            new Producto('PlayStation 5', 'Consola de nueva generacion con SSD ultrarapido', 'Sony', 699986, EnumCategoria::Consolas, EnumSubcategoria::Playstation5, 'consolas/ps5.jpg', 4.9, new DateTime('2023-11-20')),
            new Producto('PlayStation 4 Pro', 'Consola con soporte para resolucion 4K', 'Sony', 419986, EnumCategoria::Consolas, EnumSubcategoria::Playstation4, 'consolas/ps4-pro.jpg', 4.6, new DateTime('2023-05-08')),
            new Producto('PlayStation 3 Slim', 'Consola clasica con lector Blu-ray', 'Sony', 209986, EnumCategoria::Consolas, EnumSubcategoria::Playstation3, 'consolas/ps3-slim.jpg', 4.3, new DateTime('2023-02-14')),
            new Producto('NES Classic Edition', 'Replica miniatura de la consola original con 30 juegos', 'Nintendo', 83986, EnumCategoria::Consolas, EnumSubcategoria::NES, 'consolas/nes-classic.jpg', 4.5, new DateTime('2024-06-01')),
            new Producto('SNES Classic Edition', 'Replica miniatura de la Super Nintendo con 21 juegos', 'Nintendo', 111986, EnumCategoria::Consolas, EnumSubcategoria::SNES, 'consolas/snes-classic.jpg', 4.6, new DateTime('2024-06-01')),
            new Producto('Sega Genesis Mini', 'Replica de la consola Sega Genesis con 42 juegos', 'Sega', 97986, EnumCategoria::Consolas, EnumSubcategoria::Genesis, 'consolas/genesis-mini.jpg', 4.4, new DateTime('2024-04-22')),

            new Producto('The Legend of Zelda: Tears of the Kingdom', 'Aventura de mundo abierto en Hyrule', 'Nintendo', 83986, EnumCategoria::Videojuegos, EnumSubcategoria::Switch, 'videojuegos/zelda-totk.jpg', 4.9, new DateTime('2024-05-12')),
            new Producto('Mario Kart 8 Deluxe', 'Carreras multijugador con personajes de Nintendo', 'Nintendo', 69986, EnumCategoria::Videojuegos, EnumSubcategoria::Switch, 'videojuegos/mario-kart-8.jpg', 4.8, new DateTime('2023-09-30')),
            new Producto('Donkey Kong Bananza', 'Nueva aventura de Donkey Kong exclusiva de Switch 2', 'Nintendo', 97986, EnumCategoria::Videojuegos, EnumSubcategoria::Switch2, 'videojuegos/dk-bananza.jpg', 4.7, new DateTime('2025-02-20')),
            new Producto('Spider-Man 2', 'Accion y aventura en Nueva York con dos Spider-Man', 'Sony', 97986, EnumCategoria::Videojuegos, EnumSubcategoria::Playstation5, 'videojuegos/spiderman-2.jpg', 4.8, new DateTime('2024-01-18')),
            new Producto('God of War Ragnarok', 'Continuacion epica de la saga nordica de Kratos', 'Sony', 83986, EnumCategoria::Videojuegos, EnumSubcategoria::Playstation5, 'videojuegos/gow-ragnarok.jpg', 4.9, new DateTime('2023-12-05')),
            new Producto('The Last of Us Part I', 'Remake del aclamado juego de supervivencia', 'Naughty Dog', 69986, EnumCategoria::Videojuegos, EnumSubcategoria::Playstation4, 'videojuegos/tlou-part1.jpg', 4.8, new DateTime('2023-08-17')),
            new Producto('Red Dead Redemption 2', 'Juego de mundo abierto en el lejano oeste', 'Rockstar', 55986, EnumCategoria::Videojuegos, EnumSubcategoria::Playstation4, 'videojuegos/rdr2.jpg', 4.9, new DateTime('2023-07-03')),
            new Producto('The Last of Us', 'Juego original de supervivencia postapocaliptica', 'Naughty Dog', 27986, EnumCategoria::Videojuegos, EnumSubcategoria::Playstation3, 'videojuegos/tlou.jpg', 4.7, new DateTime('2023-03-11')),
            new Producto('Super Mario Bros.', 'El juego original que inicio la saga de Mario', 'Nintendo', 20986, EnumCategoria::Videojuegos, EnumSubcategoria::NES, 'videojuegos/super-mario-bros.jpg', 4.9, new DateTime('2024-07-04')),
            new Producto('Super Metroid', 'Clasico de exploracion y accion en el espacio', 'Nintendo', 20986, EnumCategoria::Videojuegos, EnumSubcategoria::SNES, 'videojuegos/super-metroid.jpg', 4.8, new DateTime('2024-07-04')),
            new Producto('Sonic the Hedgehog 2', 'Plataformas de velocidad con Sonic y Tails', 'Sega', 18186, EnumCategoria::Videojuegos, EnumSubcategoria::Genesis, 'videojuegos/sonic-2.jpg', 4.5, new DateTime('2024-05-28')),

            new Producto('Joy-Con Neon', 'Par de controles inalambricos con correas', 'Nintendo', 111986, EnumCategoria::Accesorios, EnumSubcategoria::Switch, 'accesorios/joycon-neon.jpg', 4.4, new DateTime('2024-02-09')),
            new Producto('Pro Controller Switch 2', 'Control profesional para Nintendo Switch 2', 'Nintendo', 125986, EnumCategoria::Accesorios, EnumSubcategoria::Switch2, 'accesorios/pro-controller-switch2.jpg', 4.7, new DateTime('2025-01-30')),
            new Producto('DualSense PS5', 'Control con retroalimentacion haptica y gatillos adaptativos', 'Sony', 97986, EnumCategoria::Accesorios, EnumSubcategoria::Playstation5, 'accesorios/dualsense.jpg', 4.8, new DateTime('2024-03-25')),
            new Producto('DualShock 4', 'Control oficial para PlayStation 4', 'Sony', 69986, EnumCategoria::Accesorios, EnumSubcategoria::Playstation4, 'accesorios/dualshock-4.jpg', 4.5, new DateTime('2023-10-14')),
            new Producto('Headset PlayStation 3D', 'Auriculares inalambricos con audio espacial 3D', 'Sony', 139986, EnumCategoria::Accesorios, EnumSubcategoria::Playstation5, 'accesorios/headset-ps-3d.jpg', 4.6, new DateTime('2024-04-07')),
            new Producto('Arcade Stick NES', 'Joystick retro compatible con NES Classic', 'Retro-Bit', 41986, EnumCategoria::Accesorios, EnumSubcategoria::NES, 'accesorios/arcade-stick-nes.jpg', 4.2, new DateTime('2024-08-19')),
            new Producto('Super Nintendo Controller', 'Control original SNES reacondicionado', 'Nintendo', 34986, EnumCategoria::Accesorios, EnumSubcategoria::SNES, 'accesorios/snes-controller.jpg', 4.3, new DateTime('2024-08-19')),

            new Producto('Bateria Joy-Con derecho', 'Bateria de repuesto para Joy-Con derecho Switch', 'Nintendo', 27986, EnumCategoria::Repuestos, EnumSubcategoria::Switch, 'repuestos/bateria-joycon.jpg', 4.1, new DateTime('2024-09-02')),
            new Producto('Joystick DualSense', 'Modulo de joystick para reparacion del DualSense PS5', 'Sony', 20986, EnumCategoria::Repuestos, EnumSubcategoria::Playstation5, 'repuestos/joystick-dualsense.jpg', 4.0, new DateTime('2024-09-15')),
            new Producto('Conector HDMI PS4', 'Puerto HDMI de repuesto para PlayStation 4', 'Sony', 13986, EnumCategoria::Repuestos, EnumSubcategoria::Playstation4, 'repuestos/hdmi-ps4.jpg', 3.9, new DateTime('2024-10-01')),
            new Producto('Lente laser PS3', 'Lente de repuesto para lector Blu-ray de PS3', 'Sony', 34986, EnumCategoria::Repuestos, EnumSubcategoria::Playstation3, 'repuestos/lente-laser-ps3.jpg', 4.0, new DateTime('2024-10-10')),
        ];
    }

    public function ObtenerPrincipal()
    {
        $videojuegos = collect(self::productos())
            ->filter(fn($p) => $p->Categoria === EnumCategoria::Videojuegos);

        $destacados = $videojuegos
            ->sortByDesc(fn($p) => $p->Rating)
            ->take(4)
            ->values();

        $ultimosIngresos = $videojuegos
            ->sortByDesc(fn($p) => $p->FechaIngreso->getTimestamp())
            ->take(4)
            ->values();

        return view('principal', compact('destacados', 'ultimosIngresos'));
    }

    public function BuscarVista(Request $request)
    {
        $term      = trim($request->query('q', ''));
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
            'productos'          => $productos->values(),
            'categoriaActiva'    => $categoria,
            'subcategoriaActiva' => $subcategoria,
        ]);
    }
}
