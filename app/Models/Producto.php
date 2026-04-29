<?php

namespace App\Models;

class Producto
{
    public string $Nombre;
    public string $Descripcion;
    public string $Marca;
    public float $Precio;
    public EnumCategoria $Categoria;
    public EnumSubcategoria $SubCategoria;
    public string $Imagen;

    public function __construct(
        string $Nombre,
        string $Descripcion,
        string $Marca,
        float $Precio,
        EnumCategoria $Categoria,
        EnumSubcategoria $SubCategoria,
        string $Imagen
    ) {
        $this->Nombre = $Nombre;
        $this->Descripcion = $Descripcion;
        $this->Marca = $Marca;
        $this->Precio = $Precio;
        $this->Categoria = $Categoria;
        $this->SubCategoria = $SubCategoria;
        $this->Imagen = $Imagen;
    }
}
