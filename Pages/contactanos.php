<section id="contacto">
    <div class="contacto-container">
        <!-- Formulario de Contacto -->
        <div class="formulario-contacto">
            <h2>Contáctanos</h2>
            <form id="formulario">
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                <input type="email" id="correo" name="correo" placeholder="Correo Electrónico" required>
                <textarea id="mensaje" name="mensaje" placeholder="Mensaje" required></textarea>
                <button type="submit">Enviar</button>
            </form>
            <!-- Información del Local -->
            <div class="info-local">
                <p><strong>📍 Dirección:</strong> C. Emeterio Robles Gil 170
                C. Emeterio Robles Gil 170, Col Americana, Americana, 44160 Guadalajara, Ja</p>
                <p><strong>📞 Teléfono:</strong> +52 333 825 7877</p>
                <p><strong>📱 Consulta:</strong> +52 133 2313 0896</p>
                <p><strong>✉️ Email:</strong> cirugiaplastica.dres.ledezma@gmail.com</p>
            </div>
        </div>

        <!-- Comentarios Dinámicos -->
        <div id="comentarios"></div>
    </div>
</section>

<?php include 'Utilities/footer.php';?>

