<x-layout active-page="catalogo">
    <x-slot:title>
        RetroStore - Productos
    </x-slot>

    @php
        $categorias     = $productos->groupBy(fn($p) => $p->Categoria->value);
        $categoriaCases = \App\Models\EnumCategoria::cases();
        $term           = $searchTerm ?? null;
    @endphp

    <div class="container mt-4">
        @if ($term)
            <div class="search-banner mb-4">
                <span class="search-banner__label">Resultados para:</span>
                <span class="search-banner__term">"{{ $term }}"</span>
                <span class="search-banner__count">{{ $productos->count() }} producto(s)</span>
                <a href="/catalogo" class="search-banner__clear">&#10005; Limpiar</a>
            </div>
        @else
            <h2 class="page-title">Productos</h2>
        @endif

        <div class="d-lg-none mb-3">
            <button class="btn btn-retro w-100" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#filtrosOffcanvas" aria-controls="filtrosOffcanvas">
                &#9776; Filtrar por Categoría
            </button>
        </div>

        <div class="row align-items-start">

            <aside class="col-lg-3 d-none d-lg-block" style="align-self: flex-start; position: sticky; top: 5rem;">
                <div class="catalogo-sidebar">
                    <h6 class="catalogo-sidebar__title">Categorías</h6>

                    <ul class="catalogo-sidebar__list">
                        <li>
                            <a href="/catalogo"
                               class="catalogo-filter-btn {{ is_null($categoriaActiva) ? 'active' : '' }}">
                                <span class="catalogo-filter-btn__icon">&#9733;</span> Todas
                            </a>
                        </li>
                        @foreach ($categoriaCases as $case)
                            <li>
                                <a href="/catalogo?Categoria={{ $case->value }}"
                                   class="catalogo-filter-btn {{ $categoriaActiva === $case->value ? 'active' : '' }}">
                                    <span class="catalogo-filter-btn__icon">&#8250;</span> {{ $case->value }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    <hr class="catalogo-sidebar__divider">

                    <p class="catalogo-sidebar__count">
                        Mostrando {{ $productos->count() }} productos
                    </p>
                </div>
            </aside>

            <main class="col-lg-9">
                @forelse ($categorias as $categoria => $items)
                    <section class="mt-3">
                        <h5 class="main-section-subtitle mb-3">{{ $categoria }}</h5>
                        <div class="row">
                            @foreach ($items as $producto)
                                <x-product-item
                                    :price="$producto->Precio"
                                    :product-title="$producto->Nombre"
                                    :product-console="$producto->SubCategoria->value"
                                    :image-source="asset('img/' . $producto->Imagen)"
                                    class="col-12 col-sm-6 col-md-4 my-4">
                                </x-product-item>
                            @endforeach
                        </div>
                    </section>
                @empty
                    <p class="text-secondary mt-5 text-center">No se encontraron productos para esta categoría.</p>
                @endforelse
            </main>

        </div>
    </div>

    <div class="offcanvas offcanvas-start catalogo-offcanvas" tabindex="-1"
         id="filtrosOffcanvas" aria-labelledby="filtrosOffcanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="filtrosOffcanvasLabel">Categorías</h5>
            <button type="button" class="btn-close btn-close-white"
                    data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="catalogo-sidebar__list">
                <li>
                    <a href="/catalogo"
                       class="catalogo-filter-btn {{ is_null($categoriaActiva) ? 'active' : '' }}">
                        <span class="catalogo-filter-btn__icon">&#9733;</span> Todas
                    </a>
                </li>
                @foreach ($categoriaCases as $case)
                    <li>
                        <a href="/catalogo?Categoria={{ $case->value }}"
                           class="catalogo-filter-btn {{ $categoriaActiva === $case->value ? 'active' : '' }}">
                            <span class="catalogo-filter-btn__icon">&#8250;</span> {{ $case->value }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-layout>
