<x-layout active-page="consultas">
    <x-slot:title>
        RetroStore - Consultas
    </x-slot>

    <div class="container mt-5">
        <h2 class="page-title">Comunicate con nosotros</h2>

        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="contacto-card">
                    <h4 class="contacto-card__title">Envianos tu consulta</h4>
                    <p class="contacto-card__subtitle">Podés comunicarte con nosotros por teléfono o WhatsApp
                        (<a href="https://wa.me/543794632222" class="contacto-link">+54 379 4632222</a>)
                        o enviarnos tu consulta a través del formulario.</p>

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
                                      id="mensaje" name="mensaje" rows="5"
                                      placeholder="Escribí tu consulta..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-retro w-100">Enviar consulta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
