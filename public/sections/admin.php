<?php
// Aquí comienza el cuerpo del contenido
?>

<div class="main-container"> 
    <nav class="nav_header">
        <img src="logo.jpg" width="95px" alt="Logo de Ctrl + Alt + Aprende"> 
        <h1>Ctrl + Alt + ADMIN</h1>
        <label><a href="index.html"><i class="nav_header_label fas fa-home"></i> Inicio</a></label >
        <label><a href="foro.html"><i class="nav_header_label fas fa-user-check"></i> Admin</a></label>
        <label class="last_label"><a href="index.html"><i class="nav_header_label fas fa-power-off"></i> Cerrar Sesión</a></label >
    </nav>

    <main class="main-content"> 
        <h1 class="main-header">
            <i class="admin-header fas fa-chalkboard-user"></i>
            BIENVENIDX ADMINISTRADORX
        </h1>
        <h2 id="admin-content-title" class="admin-content-h2">GESTIÓN DE CONTENIDO</h2>
        <section class="admin-content scrollbar-black"> 
            <!-- Aquí irían los artículos generados -->
        </section>
        <div class="navigation-arrows">
            <button id="prev-section"><i class="fas fa-arrow-left"></i></button>
            <button id="next-section"><i class="fas fa-arrow-right"></i></button>
        </div>
    </main>
</div>

<?php
// Fin del cuerpo del contenido
?>
