<article {{ $attributes }}>
    <div class="card card-retro h-100">

        <img src="{{ $imageSource }}"
             class="card-img-top"
             alt="{{ $productTitle }}">

        <div class="card-body d-flex flex-column text-center">
            <h5 class="card-title">{{ $productTitle }}</h5>
            <h5 class="card-title">{{ $productConsole }}</h5>
            <p class="price">$ {{ number_format($price, 0, ',', '.') }}</p>

            <div class="mt-auto">
                <button class="btn btn-retro w-100">Comprar</button>
            </div>
        </div>

    </div>
</article>
