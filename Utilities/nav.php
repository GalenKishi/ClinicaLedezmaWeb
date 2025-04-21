<?php $current_page = isset($_GET['page']) ? $_GET['page'] : 'sobre-nosotros'; ?>
<div class="navigation">
    <div class="logo">
        <a href="index.php?page=sobre-nosotros">
            <img src="Imagenes/Logo.jpg" alt="Logo de la empresa">
        </a>
    </div>
    <div class = "navigation-container">
        <ul>
            <li class="<?php echo ($current_page == 'sobre-nosotros') ? 'active' : ''; ?>" aria-current="<?php echo ($current_page == 'sobre-nosotros') ? 'page' : 'false'; ?>">
                <a href="index.php?page=sobre-nosotros">
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class="text">Sobre Nosotros</span>
                </a>
            </li>
            <li class="<?php echo ($current_page == 'servicios') ? 'active' : ''; ?>" aria-current="<?php echo ($current_page == 'servicios') ? 'page' : 'false'; ?>">
                <a href="index.php?page=servicios">
                    <span class="icon"><i class="fas fa-briefcase-medical"></i></span>
                    <span class="text">Servicios</span>
                </a>
            </li>
            <li class="<?php echo ($current_page == 'cirujanos') ? 'active' : ''; ?>" aria-current="<?php echo ($current_page == 'cirujanos') ? 'page' : 'false'; ?>">
                <a href="index.php?page=cirujanos">
                    <span class="icon"><i class="fas fa-user-md"></i></span>
                    <span class="text">Staff</span>
                </a>
            </li>
            <li class="<?php echo ($current_page == 'contacto') ? 'active' : ''; ?>" aria-current="<?php echo ($current_page == 'contacto') ? 'page' : 'false'; ?>">
                <a href="index.php?page=contacto">
                    <span class="icon"><i class="fas fa-envelope"></i></span>
                    <span class="text">Contáctanos</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Menú de navegación -->
    
</div>