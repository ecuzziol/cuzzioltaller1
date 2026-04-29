<x-layout active-page="catalogo">
    <x-slot:title>
        RetroStore - Productos
    </x-slot>

    @php
        $categorias      = $productos->groupBy(fn($p) => $p->Categoria->value);
        $categoriaCases  = \App\Models\EnumCategoria::cases();
    @endphp

    <div class="container mt-4">
        <h2 class="mb-4 text-center">Productos</h2>

        {{-- Mobile: open offcanvas button --}}
        <div class="d-lg-none mb-3">
            <button class="btn btn-retro w-100" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#filtrosOffcanvas" aria-controls="filtrosOffcanvas">
                &#9776; Filtrar por Categoría
            </button>
        </div>

        <div class="row align-items-start">

            {{-- ── Sidebar (desktop) ─────────────────────────────── --}}
            <aside class="col-lg-3 d-none d-lg-block">
                <div class="catalogo-sidebar">
                    <h6 class="catalogo-sidebar__title">Categorías</h6>

                    <ul class="catalogo-sidebar__list">
                        <li>
                            <button class="catalogo-filter-btn active" data-categoria="todas">
                                <span class="catalogo-filter-btn__icon">&#9733;</span> Todas
                            </button>
                        </li>
                        @foreach ($categoriaCases as $case)
                            <li>
                                <button class="catalogo-filter-btn" data-categoria="{{ $case->value }}">
                                    <span class="catalogo-filter-btn__icon">&#8250;</span> {{ $case->value }}
                                </button>
                            </li>
                        @endforeach
                    </ul>

                    <hr class="catalogo-sidebar__divider">

                    <p class="catalogo-sidebar__count">
                        Mostrando <span id="product-count">{{ $productos->count() }}</span> productos
                    </p>
                </div>
            </aside>

            {{-- ── Product grid ──────────────────────────────────── --}}
            <main class="col-lg-9">
                @foreach ($categorias as $categoria => $items)
                    <section class="mt-3 catalogo-section" data-categoria="{{ $categoria }}">
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
                @endforeach
            </main>

        </div>
    </div>

    {{-- ── Offcanvas (mobile) ────────────────────────────────────── --}}
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
                    <button class="catalogo-filter-btn active" data-categoria="todas">
                        <span class="catalogo-filter-btn__icon">&#9733;</span> Todas
                    </button>
                </li>
                @foreach ($categoriaCases as $case)
                    <li>
                        <button class="catalogo-filter-btn" data-categoria="{{ $case->value }}">
                            <span class="catalogo-filter-btn__icon">&#8250;</span> {{ $case->value }}
                        </button>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <script>
        (function () {
            const sections   = document.querySelectorAll('.catalogo-section');
            const filterBtns = document.querySelectorAll('.catalogo-filter-btn');
            const countEl    = document.getElementById('product-count');

            function applyFilter(categoria) {
                let total = 0;

                sections.forEach(function (section) {
                    const match = categoria === 'todas' || section.dataset.categoria === categoria;
                    section.style.display = match ? '' : 'none';
                    if (match) total += section.querySelectorAll('.product-carousel-item, article').length;
                });

                if (countEl) countEl.textContent = total;
            }

            filterBtns.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    const categoria = this.dataset.categoria;

                    filterBtns.forEach(b => b.classList.remove('active'));
                    document.querySelectorAll('[data-categoria="' + categoria + '"].catalogo-filter-btn')
                             .forEach(b => b.classList.add('active'));

                    applyFilter(categoria);

                    // close offcanvas if open
                    const offcanvas = document.getElementById('filtrosOffcanvas');
                    if (offcanvas && offcanvas.classList.contains('show')) {
                        bootstrap.Offcanvas.getInstance(offcanvas)?.hide();
                    }
                });
            });
        })();
    </script>
</x-layout>
