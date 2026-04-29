<div class="header-section">
    <div class="header-logo-section">
        <img class="header-logo" src="{{ asset('img/logo_x.png') }}" />
    </div>
    <div class="header-search-section flex flex-col">
        <input type="text" class="form-control" id="searchInput"
               placeholder="Busque su producto aquí"
               autocomplete="off">
    </div>

    <script>
        document.getElementById('searchInput').addEventListener('keydown', function (e) {
            if (e.key === 'Enter' && this.value.trim() !== '') {
                window.location.href = '/catalogo/buscar?q=' + encodeURIComponent(this.value.trim());
            }
        });
    </script>
    <div class="header-user-section flex flex-col">
        <div>
            <i class="bi bi-cart cart-icon"></i>
        </div>
    </div>
</div>