<x-layout active-page="catalogo">
    <x-slot:title>
        RetroStore - Productos
    </x-slot>
    <section class="container">
         <h2 class="mb-4 text-center">Productos</h2>
        <section class="mt-12">
            <div>
                <h5 class="main-section-subtitle">Productos Destacados</h5>
            </div>
            <div class="mt-2 lg:flex justify-between">
                
                <x-product-item price="39.999" 
                product-title="God of War 3" 
                product-console="PS3"
                image-source="{{ asset('img/god_3.webp') }}"
                class="col-12 col-sm-6 col-md-4 col-lg-3 my-4">
                </x-product-item>

                 <x-product-item price="55.555" 
                product-title="Ghost of Tshunima" 
                product-console="PS5"
                image-source="{{ asset('img/ghost_tshunima.webp') }}"
                class="col-12 col-sm-6 col-md-4 col-lg-3 my-4">
                </x-product-item>

                 <x-product-item price="45.000" 
                product-title="Crash It's about time" 
                product-console="Ps4"
                image-source="{{ asset('img/crash.webp') }}"
                class="col-12 col-sm-6 col-md-4 col-lg-3 my-4">
                </x-product-item>
            </div>
        </section>
        <section class="mt-12">
            <div>
                <h5 class="main-section-subtitle">Últimos Ingresos</h5>
            </div>
            <div class="mt-2 lg:flex justify-between">
                
                <x-product-item price="39.999" 
                product-title="God of War 3" 
                product-console="PS3"
                image-source="{{ asset('img/god_3.webp') }}"
                class="col-12 col-sm-6 col-md-4 col-lg-3 my-4">
                </x-product-item>

                 <x-product-item price="55.555" 
                product-title="Ghost of Tshunima" 
                product-console="PS5"
                image-source="{{ asset('img/ghost_tshunima.webp') }}"
                class="col-12 col-sm-6 col-md-4 col-lg-3 my-4">
                </x-product-item>

                 <x-product-item price="45.000" 
                product-title="Crash It's about time" 
                product-console="Ps4"
                image-source="{{ asset('img/crash.webp') }}"
                class="col-12 col-sm-6 col-md-4 col-lg-3 my-4">
                </x-product-item>
            </div>
        </section>
        <section class="mt-12">
            <div>
                <h5 class="main-section-subtitle">Novedades</h5>
            </div>
            <div class="mt-2 lg:flex justify-between">
                
                <x-product-item price="39.999" 
                product-title="God of War 3" 
                product-console="PS3"
                image-source="{{ asset('img/god_3.webp') }}"
                class="col-12 col-sm-6 col-md-4 col-lg-3 my-4">
                </x-product-item>

                 <x-product-item price="55.555" 
                product-title="Ghost of Tshunima" 
                product-console="PS5"
                image-source="{{ asset('img/ghost_tshunima.webp') }}"
                class="col-12 col-sm-6 col-md-4 col-lg-3 my-4">
                </x-product-item>

                 <x-product-item price="45.000" 
                product-title="Crash It's about time" 
                product-console="Ps4"
                image-source="{{ asset('img/crash.webp') }}"
                class="col-12 col-sm-6 col-md-4 col-lg-3 my-4">
                </x-product-item>
            </div>
        </section>


    </section>
</x-layout>