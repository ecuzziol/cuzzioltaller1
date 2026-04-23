<div {{ $attributes }} >
    <div class="row g-4 justify-content-center">

      <!-- Card Producto -->
      <div class="">
        <div class="card card-retro h-100">

          <!-- Imagen -->
          <img src="{{$imageSource}}" 
               class="card-img-top" 
               alt="Producto Retro">

          <!-- Contenido -->
          <div class="card-body d-flex flex-column text-center">
            <h5 class="card-title">{{ $productTitle }}</h5>
            <h5 class="card-title">{{ $productConsole}}</h5>
            <p class="price">${{ $price }}</p>

            <div class="mt-auto">
              <button class="btn btn-retro w-100">
                Comprar
              </button>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>