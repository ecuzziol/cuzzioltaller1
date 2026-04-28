<x-layout active-page="consulta-exito">
    <x-slot:title>
        RetroStore - Consultas
    </x-slot>
    <section class="container">
        <h3 class="mb-4  mt-4 text-center">Consulta enviada</h3>

        <p class="lead"> Hola <strong>{{ $nombre }}</strong>, qué bueno recibir tu mensaje. 
            Un miembro del equipo se pondrá en contacto con vos al correo que nos brindaste: <strong>{{ $email }}</strong> 
            ¡Muchas gracias! </p>
    </section>
</x-layout>
    
   
