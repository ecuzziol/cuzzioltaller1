<x-layout active-page="consultas">
    <x-slot:title>
        RetroStore - Consulta enviada
    </x-slot>

    <div class="container mt-5">
        <h2 class="page-title">¡Consulta enviada!</h2>

        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="contacto-card text-center">
                    <p class="page-text">Hola <strong>{{ $nombre }}</strong>, qué bueno recibir tu mensaje.</p>
                    <p class="page-text">Un miembro del equipo se pondrá en contacto con vos al correo que nos brindaste: <strong>{{ $email }}</strong></p>
                    <p class="page-text">¡Muchas gracias!</p>
                    <a href="/" class="btn btn-retro mt-3">Volver al inicio</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
