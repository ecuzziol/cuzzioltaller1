<x-layout active-page="inicio">
    <x-slot:title>
        RetroStore
    </x-slot>
    <section class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{ asset('img/imagen_envios.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{ asset('img/imagen_cuotas.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{ asset('img/imagen_redes.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        <section class="mt-8">
            <div>
                <label>Productos Destacados</label>
            </div>
            <div class="mt-8 lg:flex justify-between">
                
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