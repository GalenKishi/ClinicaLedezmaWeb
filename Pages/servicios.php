<section class="animate-fade-in">
    <!-- Secciones de servicios -->
    <section class="servicio" onclick="openModal('rinoplastia-modal')">
        <img src="imagenes/Nariz.jpg" alt="Rinoplastia">
        <div class="servicio-info">
            <h3>Rinoplastia</h3>
            <p>Corrige y mejora la estética de tu nariz con resultados naturales.</p>
        </div>
    </section>

    <section class="servicio" onclick="openModal('aumento-senos-modal')">
        <img src="imagenes/senos.jpeg" alt="Aumento de Senos">
        <div class="servicio-info">
            <h3>Aumento de Senos</h3>
            <p>Mejora el volumen y la forma de tus senos con técnicas avanzadas.</p>
        </div>
    </section>

    <section class="servicio" onclick="openModal('lifting-facial-modal')">
        <img src="imagenes/lifting-facial.jpg" alt="Lifting Facial">
        <div class="servicio-info">
            <h3>Lifting Facial</h3>
            <p>Rejuvenece tu rostro con un estiramiento facial natural y duradero.</p>
        </div>
    </section>

    <section class="servicio" onclick="openModal('reduccion-grasa-modal')">
        <img src="imagenes/reduccion-grasa.jpg" alt="Reducción de Grasa">
        <div class="servicio-info">
            <h3>Liposucción</h3>
            <p>Elimina grasa localizada para una figura más estilizada y tonificada.</p>
        </div>
    </section>
</section>

<!-- Modales -->
<div id="rinoplastia-modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('rinoplastia-modal')">&times;</span>
        <h3>Rinoplastia</h3>
        <p>Información detallada sobre la Rinoplastia.</p>
        <button onclick="closeModal('rinoplastia-modal')">Regresar</button>
    </div>
</div>

<div id="aumento-senos-modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('aumento-senos-modal')">&times;</span>
        <h3>Aumento de Senos</h3>
        <p>Información detallada sobre el Aumento de Senos.</p>
        <button onclick="closeModal('aumento-senos-modal')">Regresar</button>
    </div>
</div>

<div id="lifting-facial-modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('lifting-facial-modal')">&times;</span>
        <h3>Lifting Facial</h3>
        <p>Información detallada sobre el Lifting Facial.</p>
        <button onclick="closeModal('lifting-facial-modal')">Regresar</button>
    </div>
</div>

<div id="reduccion-grasa-modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('reduccion-grasa-modal')">&times;</span>
        <h3>Liposucción</h3>
        <p>Información detallada sobre la Liposucción.</p>
        <button onclick="closeModal('reduccion-grasa-modal')">Regresar</button>
    </div>
</div>