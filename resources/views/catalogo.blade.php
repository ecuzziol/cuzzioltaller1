<x-layout active-page="catalogo">
    <x-slot:title>
        RetroStore - Productos
    </x-slot>

    <section class="container">
        <h2 class="mb-4 text-center">Productos</h2>

        @php
            $categorias = $productos->groupBy(fn($p) => $p->Categoria->value);
        @endphp

        @foreach ($categorias as $categoria => $items)
            <section class="mt-5">
                <h5 class="main-section-subtitle mb-3">{{ $categoria }}</h5>
                <div class="row">
                    @foreach ($items as $producto)
                        <x-product-item
                            :price="$producto->Precio"
                            :product-title="$producto->Nombre"
                            :product-console="$producto->SubCategoria->value"
                            :image-source="asset('img/' . $producto->Imagen)"
                            class="col-12 col-sm-6 col-md-4 col-lg-3 my-4">
                        </x-product-item>
                    @endforeach
                </div>
            </section>
        @endforeach
    </section>
</x-layout>
