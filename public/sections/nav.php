<?php
function renderNav() {
    echo '<nav class="nav_header">';
    echo '    <img src="logo.jpg" width="95px" alt="Logo de Ctrl + Alt + Aprende">';
    echo '    <h1>Ctrl + Alt + Aprende</h1>';
    echo '    <label><a href="index.html"><i class="nav_header_label fas fa-home"></i> Inicio</a></label>';
    echo '    <label><a href="foro.html"><i class="nav_header_label fas fa-comments"></i> Foro de Discusión</a></label>';
    echo '    <label class="last_label"><a href="foro.html"><i class="nav_header_label fas fa-sign-in-alt"></i> Iniciar sesión</a></label>';
    echo '</nav>';
}
?>
