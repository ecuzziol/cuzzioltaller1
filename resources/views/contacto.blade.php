<x-layout active-page="contacto">
    <x-slot:title>
        RetroStore - Contacto
        </x-slot>
        <!-- Información de contacto -->
        <section class="container mx-auto w-50">

            <h3 class="mb-4 text-center">Contacto</h3>
            <p><strong>Empresa:</strong> RetroStore</p>
            <p><strong>Titular:</strong> Eric Cuzziol</p>
            <p><strong>Dirección:</strong> San Martin 1313</p>
            <p><strong>Teléfono:</strong> <a href="https://wa.me/543794632222">+54 379 4632222</a> </p>
           
 <hr>
        </section>
         

        <section class="container mx-auto w-50">
           
            <h3 class="mb-4  mt-4 text-center">Envíanos tu consulta</h3>
            
            <p class=""> Podés comunicarte con nosotros por teléfono o enviarnos tu consulta a través del
                formulario. </p>
            <form>
                <div class="mb-3"> <label for="nombre" class="form-label">Nombre</label> 
                    <input type="text"
                        class="form-control" id="nombre" placeholder="Tu nombre" required> </div>
                <div class="mb-3"> <label for="email" class="form-label">Correo electrónico</label> 
                    <input type="email"
                        class="form-control" id="email" placeholder="nombre@email.com" required>
                </div>
                <div class="mb-3"> <label for="mensaje" class="form-label">Mensaje</label> 
                    <textarea
                        class="form-control" id="mensaje" rows="4" placeholder="Escribí tu consulta..."
                        required></textarea> </div> 
                        <button type="submit" class="btn btn-primary w-100"> Enviar consulta </button>
            </form>
        </section>
        <!-- <div class="col-12 col-md-7">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h3 class="card-title mb-4">Envíanos tu consulta</h3>
                    <form>
                        <div class="mb-3"> <label for="nombre" class="form-label">Nombre</label> <input type="text"
                                class="form-control" id="nombre" placeholder="Tu nombre" required> </div>
                        <div class="mb-3"> <label for="email" class="form-label">Correo electrónico</label> <input
                                type="email" class="form-control" id="email" placeholder="nombre@email.com" required>
                        </div>
                        <div class="mb-3"> <label for="mensaje" class="form-label">Mensaje</label> <textarea
                                class="form-control" id="mensaje" rows="4" placeholder="Escribí tu consulta..."
                                required></textarea> </div> <button type="submit" class="btn btn-primary w-100"> Enviar
                            consulta </button>
                    </form>
                </div>
            </div>
        </div> -->
</x-layout>