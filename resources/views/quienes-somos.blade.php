<x-layout active-page="quienessomos">
    <x-slot:title>
        RetroStore - Quiénes Somos
    </x-slot>

    <div class="container mt-5">
        <h2 class="page-title">¿Quiénes somos?</h2>

        <div class="row g-4">

            {{-- About text --}}
            <div class="col-12 col-lg-8">
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

            {{-- Team --}}
            <div class="col-12 col-lg-4">
                <div class="contacto-card h-100">
                    <h4 class="contacto-card__title">Nuestro equipo</h4>
                    <p class="page-text">Detrás de RetroStore hay un equipo reducido pero comprometido, formado por personas que trabajan
                        día a día para brindar el mejor servicio:</p>

                    <ul class="contacto-info-list mt-3">
                        <li>
                            <span class="contacto-info-list__label">Dueño y fundador</span>
                            <span>Impulsa la visión del negocio y define la estrategia general.</span>
                        </li>
                        <li>
                            <span class="contacto-info-list__label">Atención en local físico</span>
                            <span>Encargado de la atención directa al cliente y la gestión del stock.</span>
                        </li>
                        <li>
                            <span class="contacto-info-list__label">Ventas online</span>
                            <span>Administra la tienda digital, responde consultas y gestiona los pedidos.</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</x-layout>
