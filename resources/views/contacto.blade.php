<x-layout active-page="contacto">
    <x-slot:title>
        RetroStore - Contacto
    </x-slot>

    <div class="container mt-5">
        <h2 class="page-title">Contacto</h2>

        {{-- ── 2-column row ───────────────────────────────────────── --}}
        <div class="row g-4">

            {{-- Información de contacto --}}
            <div class="col-12 col-md-6">
                <div class="contacto-card h-100">
                    <h4 class="contacto-card__title">Información</h4>

                    <ul class="contacto-info-list">
                        <li>
                            <span class="contacto-info-list__label">Empresa</span>
                            <span>RetroStore</span>
                        </li>
                        <li>
                            <span class="contacto-info-list__label">Titular</span>
                            <span>Eric Cuzziol</span>
                        </li>
                        <li>
                            <span class="contacto-info-list__label">Dirección</span>
                            <span>San Martín 1313, Corrientes</span>
                        </li>
                        <li>
                            <span class="contacto-info-list__label">Teléfono</span>
                            <a href="https://wa.me/543794632222" class="contacto-link">+54 379 4632222</a>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Formulario de contacto --}}
            <div class="col-12 col-md-6">
                <div class="contacto-card h-100">
                    <h4 class="contacto-card__title">Envíanos tu consulta</h4>
                    <p class="contacto-card__subtitle">Podés comunicarte con nosotros por teléfono o enviarnos tu consulta a través del formulario.</p>

                    <form method="POST" action="/contacto">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control contacto-input"
                                   id="nombre" name="nombre" placeholder="Tu nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control contacto-input"
                                   id="email" name="email" placeholder="nombre@email.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea class="form-control contacto-input"
                                      id="mensaje" name="mensaje" rows="4"
                                      placeholder="Escribí tu consulta..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-retro w-100">Enviar consulta</button>
                    </form>
                </div>
            </div>

        </div>

        {{-- ── Google Maps ─────────────────────────────────────────── --}}
        <div class="row mt-5">
            <div class="col-12">
                <div class="contacto-card">
                    <h4 class="contacto-card__title mb-3">Cómo llegar</h4>
                    <div class="contacto-map">
                        <iframe
                            src="https://www.google.com/maps?q=San+Martin+1313,+Corrientes,+Corrientes,+Argentina&output=embed"
                            width="100%"
                            height="380"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Ubicación RetroStore">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-layout>
