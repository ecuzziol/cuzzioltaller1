<div class="header-section">

    <div class="header-logo-section">
        <a href="/">
            <img class="header-logo" src="{{ asset('img/logo_x.png') }}" alt="RetroStore" />
        </a>
    </div>

    <div class="header-search-section">
        <div class="header-search-wrapper">
            <i class="bi bi-search header-search-icon"></i>
            <input type="text"
                   class="header-search-input"
                   id="searchInput"
                   placeholder="Buscar productos, consolas, marcas..."
                   autocomplete="off">
        </div>
    </div>

    <div class="header-user-section">
        <a href="#" class="header-cart-btn">
            <i class="bi bi-cart3 header-cart-btn__icon"></i>
            <span class="header-cart-btn__label">Carrito</span>
        </a>
    </div>

</div>

<script>
    document.getElementById('searchInput').addEventListener('keydown', function (e) {
        if (e.key === 'Enter' && this.value.trim() !== '') {
            window.location.href = '/catalogo/buscar?q=' + encodeURIComponent(this.value.trim());
        }
    });
</script>
