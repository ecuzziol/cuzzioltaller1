<x-layout active-page="quienessomos">
    <x-slot:title>
        RetroStore - Quiénes Somos
    </x-slot>

    <div class="container mt-5">
        <h2 class="page-title">¿Quiénes somos?</h2>

        <div class="row g-4">

            <div class="col-12 col-lg-6">
                <div class="contacto-card h-100">
                    <h4 class="contacto-card__title">Nuestra historia</h4>
                    <p class="page-text">En <strong>RetroStore</strong> somos una tienda online especializada en la venta de videojuegos,
                        consolas y accesorios, pensada para quienes disfrutan tanto de los clásicos como de las últimas
                        novedades del mundo gamer. Nuestro objetivo es ofrecer una experiencia de compra simple, confiable y
                        accesible, acercando productos de calidad a toda la comunidad.</p>
                    <p class="page-text">Nos posicionamos como una alternativa moderna dentro del mercado digital, combinando precios
                        competitivos, atención personalizada y una cuidada selección de productos. Apostamos a un modelo ágil,
                        enfocado en el cliente, donde la transparencia y la confianza son pilares fundamentales.</p>
                    <p class="page-text">A lo largo de nuestro crecimiento, hemos logrado consolidarnos como una opción en expansión dentro del
                        sector, con un fuerte potencial basado en la digitalización del consumo, la creciente comunidad gamer y
                        nuestra capacidad de adaptarnos rápidamente a las nuevas tendencias.</p>
                    <p class="page-text">Nuestra historia comienza con una pasión: los videojuegos. Lo que empezó como un proyecto pequeño,
                        impulsado por el interés en el mundo retro y la cultura gamer, fue evolucionando hasta convertirse en
                        una tienda online en constante desarrollo. Con esfuerzo y dedicación, fuimos ampliando nuestro catálogo,
                        mejorando nuestros servicios y construyendo una identidad propia.</p>
                    <p class="page-text mt-3">Hoy seguimos creciendo, con la misma esencia que nos vio nacer: acercar la mejor
                        experiencia gamer a cada cliente, combinando nostalgia, innovación y compromiso.</p>
                    <p class="page-text mt-3">Atte. el equipo de <strong>RetroStore</strong></p>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="contacto-card h-100">
                    <h4 class="contacto-card__title">¿Qué nos motivó a crear RetroStore?</h4>
                    <p class="page-text">Todo comenzó con una pregunta simple: <strong>¿por qué es tan difícil encontrar videojuegos y consolas clásicas en un solo lugar, con precios justos y atención real?</strong> Esa inquietud fue la chispa que encendió RetroStore.</p>
                    <p class="page-text">El fundador creció rodeado de consolas, cartuchos y partidas interminables. Esa pasión por el mundo gamer nunca desapareció, y con el tiempo se transformó en algo más: la convicción de que existía un espacio vacío en el mercado para una tienda que combinara nostalgia con modernidad, que tratara a cada cliente como un gamer más, no como un número.</p>
                    <p class="page-text">La motivación no fue solo comercial. Fue cultural. Preservar el acceso a consolas retro, acercar los últimos lanzamientos y ofrecer repuestos para alargar la vida útil de los equipos son decisiones que nacen de un genuino amor por la cultura del videojuego.</p>
                    <p class="page-text mt-3">Hoy, cada producto en nuestro catálogo lleva ese espíritu: <strong>el de alguien que ama lo que hace y quiere compartirlo con otros.</strong></p>
                </div>
            </div>

        </div>

        <div class="row g-4 mt-1">
            <div id="team-section" class="col-12">
                <div class="contacto-card">
                    <h4 class="contacto-card__title text-center">Nuestro equipo</h4>
                    <p class="page-text text-center">Detrás de RetroStore hay un equipo reducido pero comprometido, formado por personas que trabajan
                        día a día para brindar el mejor servicio:</p>

                    <ul class="contacto-info-list contacto-info-list--centered mt-3">
                        <li>
                            <img src="{{ asset('img/team-1.jpg') }}" class="team-avatar" alt="Dueño y fundador">
                            <span class="contacto-info-list__label">Dueño y fundador</span>
                            <span>Impulsa la visión del negocio y define la estrategia general.</span>
                        </li>
                        <li>
                            <img src="{{ asset('img/team-2.jpg') }}" class="team-avatar" alt="Atención en local físico">
                            <span class="contacto-info-list__label">Atención en local físico</span>
                            <span>Encargado de la atención directa al cliente y la gestión del stock.</span>
                        </li>
                        <li>
                            <img src="{{ asset('img/team-3.jpg') }}" class="team-avatar" alt="Ventas online">
                            <span class="contacto-info-list__label">Ventas online</span>
                            <span>Administra la tienda digital, responde consultas y gestiona los pedidos.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</x-layout>
