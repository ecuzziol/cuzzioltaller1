<x-layout active-page="inicio">
    <x-slot:title>
        RetroStore
    </x-slot>

    <div class="container mt-5">

        {{-- ── Hero carousel ───────────────────────────────────────── --}}
        <div class="home-carousel-wrapper mb-5">
            <div id="carouselPrincipal" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/imagen_envios.png') }}" class="d-block w-100" alt="Envíos">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/imagen_cuotas.png') }}" class="d-block w-100" alt="Cuotas">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/imagen_redes.png') }}" class="d-block w-100" alt="Redes">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button"
                        data-bs-target="#carouselPrincipal" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button"
                        data-bs-target="#carouselPrincipal" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>

        {{-- ── Feature highlights ──────────────────────────────────── --}}

        <div class="row g-3 mb-5">
            <div class="col-6 col-md-3">
                <div class="home-feature-card">
                    <span class="home-feature-card__icon">&#128666;</span>
                    <h6 class="home-feature-card__title">Envíos a todo el país</h6>
                    <p class="home-feature-card__text">Correo argentino y retiro en local</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="home-feature-card">
                    <span class="home-feature-card__icon">&#128179;</span>
                    <h6 class="home-feature-card__title">Cuotas sin interés</h6>
                    <p class="home-feature-card__text">En productos seleccionados</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="home-feature-card">
                    <span class="home-feature-card__icon">&#127918;</span>
                    <h6 class="home-feature-card__title">Garantía oficial</h6>
                    <p class="home-feature-card__text">En todos nuestros productos</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="home-feature-card">
                    <span class="home-feature-card__icon">&#128172;</span>
                    <h6 class="home-feature-card__title">Atención personalizada</h6>
                    <p class="home-feature-card__text">Por WhatsApp y formulario</p>
                </div>
            </div>
        </div>

        {{-- ── Categorías ───────────────────────────────────────────── --}}
        <section class="mt-5 mb-2">
            <h5 class="main-section-subtitle mb-4">Explorar por Categoría</h5>
            <div class="row g-3">
                @foreach (\App\Models\EnumCategoria::cases() as $cat)
                    <div class="col-6 col-md-3">
                        <a href="/catalogo?Categoria={{ $cat->value }}" class="home-cat-card">
                            <span class="home-cat-card__name">{{ $cat->value }}</span>
                            <span class="home-cat-card__arrow">&#8250;</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- ── Productos Destacados ─────────────────────────────────── --}}
        <section class="mt-5">
            <h5 class="main-section-subtitle mb-3">Productos Destacados</h5>
            <div class="row">
                @foreach ($destacados as $producto)
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

        {{-- ── Últimos Ingresos ────────────────────────────────────── --}}
        <section class="mt-5">
            <h5 class="main-section-subtitle mb-3">Últimos Ingresos</h5>
            <div class="row">
                @foreach ($ultimosIngresos as $producto)
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

        {{-- ── CTA banner ───────────────────────────────────────────── --}}
        <div class="home-cta mt-5">
            <div>
                <h4 class="home-cta__title">¿Buscás algo en particular?</h4>
                <p class="home-cta__text">Explorá nuestro catálogo completo de consolas, videojuegos y accesorios.</p>
            </div>
            <a href="/catalogo" class="btn btn-retro home-cta__btn">Ver catálogo completo</a>
        </div>

    </div>
</x-layout>
