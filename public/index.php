<?php
// Detectar la sección a mostrar basada en un parámetro GET
$section = isset($_GET['section']) ? $_GET['section'] : 'home';

// Incluir el encabezado
include 'sections/header.php';

// Incluir la sección correspondiente
switch ($section) {
    case 'forum':
        include 'sections/forum.php';
        break;
    case 'signin':
        include 'sections/signin.php';
        break;
    case 'admin':
        include 'sections/admin.php';
        break;
    default:
        include 'sections/home.php';
        break;
}

// Incluir el pie de página
include 'sections/footer.php';
?>
