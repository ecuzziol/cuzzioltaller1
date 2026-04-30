<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand d-lg-none" href="/">RetroStore</a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Abrir menú">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="mainNav">
            <ul class="navbar-nav gap-1">
                <li class="nav-item">
                    <a class="nav-link nav-link-retro @if($active == 'inicio') active @endif" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-retro @if($active == 'quienessomos') active @endif" href="/quienes-somos">Quiénes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-retro @if($active == 'catalogo') active @endif" href="/catalogo">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-retro @if($active == 'comercializacion') active @endif" href="/comercializacion">Comercialización</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-retro @if($active == 'terminos') active @endif" href="/terminos">Términos y Usos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-retro @if($active == 'consultas') active @endif" href="/consultas">Consultas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-retro @if($active == 'contacto') active @endif" href="/contacto">Contacto</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
