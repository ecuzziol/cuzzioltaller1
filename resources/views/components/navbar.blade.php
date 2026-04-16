<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
        <div class="container"> 
            <a class="navbar-brand" href="#">RetroStore</a> 
            <div class="navbar-nav"> 
                <a class="nav-link @if($active == 'inicio') active @endif" href="/">Inicio</a> 
                <a class="nav-link @if($active == 'quienessomos') active @endif" href="/quienes-somos">Quienes Somos</a> 
                <a class="nav-link @if($active == 'comercializacion') active @endif" href="/comercializacion">Comercialización</a> 
                <a class="nav-link @if($active == 'contacto') active @endif" href="/contacto">Contacto</a> 
                <a class="nav-link @if($active == 'terminos') active @endif" href="/terminos">Terminos y Usos</a> 
                <a class="nav-link @if($active == 'catalogo') active @endif" href="/catalogo">Productos</a> 
                <a class="nav-link @if($active == 'consultas') active @endif" href="/consultas">Consultas</a> 
            </div> 
        </div> 
</nav>