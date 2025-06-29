<?php require BASE_PATH . 'app/views/partials/head.php'?>
    <main class="container">
    <h2>Contáctanos</h2>
    <p>
        ¿Tienes alguna pregunta, sugerencia o simplemente quieres charlar sobre
        mate? Completa el formulario y nos pondremos en contacto contigo.
    </p>

    <form action="/contacto" method="POST" class="contact-form">
        <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required />
        </div>
        <div>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required />
        </div>
        <div>
        <label for="email">Mail:</label>
        <input type="email" id="email" name="email" required />
        </div>
        <div>
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" />
        </div>
        <div>
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="6" required></textarea>
        </div>
        <div>
        <button type="submit">Enviar Mensaje</button>
        </div>
    </form>
    </main>

<?php require BASE_PATH . 'app/views/partials/footer.php'?>
