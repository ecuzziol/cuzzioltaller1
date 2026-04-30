<x-layout active-page="comercializacion">
    <x-slot:title>
        RetroStore - Comercialización
    </x-slot>

    <div class="container mt-5">
        <h2 class="page-title">¿Cómo Comprar?</h2>

        <div class="row g-4">

            <div class="col-12 col-md-6">
                <div class="contacto-card h-100">
                    <h4 class="contacto-card__title">Medios de pago</h4>
                    <p class="page-text">Contamos con múltiples opciones para que puedas elegir la que más te convenga:</p>
                    <ul class="page-list">
                        <li id="tarjetas">
                            Tarjetas de crédito y débito
                            <div class="payment-logos">
                                @foreach (['visa', 'mastercard', 'amex', 'cabal', 'banelco', 'link', 'nativa', 'cencosud', 'provincianet', 'tarjetanaranja'] as $logo)
                                    <img src="{{ asset('img/comercializacion/mediospagos/' . $logo . '.png') }}"
                                         alt="{{ $logo }}"
                                         class="payment-logo">
                                @endforeach
                            </div>
                        </li>
                        <li>Transferencia bancaria</li>
                        <li>Pago en efectivo (solo en local físico)</li>
                        <li id="mercadopago">
                            Mercado Pago
                            <div class="payment-logos">
                                <img src="{{ asset('img/comercializacion/mediospagos/mercadopago.png') }}"
                                     alt="Mercado Pago"
                                     class="payment-logo">
                            </div>
                        </li>
                    </ul>
                    <p class="page-text mt-3">También ofrecemos promociones y financiación en cuotas sin interés en productos seleccionados,
                        sujetas a disponibilidad y condiciones vigentes.</p>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="contacto-card h-100">
                    <h4 class="contacto-card__title">Formas de entrega</h4>
                    <p class="page-text">Realizamos envíos a todo el país y contamos con diferentes modalidades de entrega:</p>
                    <ul class="page-list">
                        <li><strong>Envíos a domicilio:</strong> a través de servicios de correo argentino.
                            <div class="payment-logos">
                                <img src="{{ asset('img/comercializacion/medioenvio/correoargentino.png') }}"
                                        alt="{{ $logo }}"
                                        class="payment-logo">
                            </div>
                        </li>
                        
                        <li><strong>Retiro en local:</strong> podés retirar tu compra personalmente sin costo adicional
                            acercándote a nuestro local ubicado en San Martín 1313 (Corrientes, Capital).</li>
                    </ul>

                    <h4 class="contacto-card__title mt-4">Tiempos de entrega</h4>
                    <ul class="page-list">
                        <li>Envíos locales: entre 24 y 72 horas hábiles.</li>
                        <li>Envíos al interior: entre 3 y 7 días hábiles.</li>
                    </ul>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="contacto-card h-100">
                    <h4 class="contacto-card__title">Proceso de compra</h4>
                    <p class="page-text">Comprar en RetroStore es muy sencillo:</p>
                    <ol class="page-list">
                        <li>Seleccioná el producto que deseás.</li>
                        <li>Agregalo al carrito.</li>
                        <li>Elegí el método de pago.</li>
                        <li>Seleccioná la forma de entrega.</li>
                        <li>Confirmá tu compra.</li>
                        <li>Vas a recibir un correo electrónico con el detalle y la confirmación de tu compra.</li>
                    </ol>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="contacto-card h-100">
                    <h4 class="contacto-card__title">Información adicional</h4>
                    <ul class="page-list">
                        <li>Todos los productos están sujetos a disponibilidad de stock.</li>
                        <li>Los precios pueden modificarse sin previo aviso.</li>
                        <li>Una vez confirmado el pago, recibirás la confirmación de tu pedido.</li>
                        <li>Para cualquier consulta, podés contactarnos a través de nuestros canales de atención.</li>
                    </ul>
                    <p class="page-text mt-3">Nuestro compromiso es brindarte un servicio confiable y acompañarte en cada paso de tu compra.</p>
                </div>
            </div>

        </div>
    </div>
</x-layout>
