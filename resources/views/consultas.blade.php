<x-layout active-page="consultas">
    <x-slot:title>
        RetroStore - Consultas
    </x-slot>
    <section class="mx-auto w-10/12 md:w-6/12 lg:w-6/12 ">

        <h3 class="mb-4  mt-4 text-center">Comunicate con nosotros</h3>
            
        <p class=""> Podés comunicarte con nosotros por teléfono o whatsapp (+543794632222) o enviarnos tu consulta a través del
            formulario. </p>
        <form method="POST" action="/contacto">
                @csrf
                <div class="mb-3"> <label for="nombre" class="form-label">Nombre</label> 
                    <input type="text"
                        class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" required> </div>
                <div class="mb-3"> <label for="email" class="form-label">Correo electrónico</label> 
                    <input type="email"
                        class="form-control" id="email" name="email" placeholder="nombre@email.com" required>
                </div>
                <div class="mb-3"> <label for="mensaje" class="form-label">Mensaje</label> 
                    <textarea
                        class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Escribí tu consulta..."
                        required></textarea> 
                </div> 
                <button type="submit" class="btn btn-primary w-100"> Enviar consulta </button>
        </form>
    </section>
</x-layout>