<?php
// Inicio del contenido del cuerpo
?>

<div class="profile-container">
    <img src="fportada.jpg" alt="Foto de portada" class="cover-photo">

    <div class="profile-header">
        <img src="fperfil.png" class="profile-photo">
    </div>

    <div class="profile-info">
        <h1 id="profile-name">Mar</h1>
        <button id="edit-button" class="btn" onclick="openEditForm()">Editar Perfil</button> 
        <button id="follow-button" class="btn" onclick="toggleFollow()">Seguir</button> 
    </div>      
    <p id="profile-description">Holaa soy Mar 😁 ,me apasiona la tecnología y siempre estoy buscando nuevas formas de aplicar mis conocimientos en proyectos.</p>

    <div id="edit-form" class="edit-form" style="display: none;">
        <h3>Editar Perfil</h3>
        <form id="profile-form">
            <label for="edit-name">Nombre:</label>
            <input type="text" id="edit-name" value="Mar">
            <label for="edit-description">Descripción:</label>
            <textarea id="edit-description">Holaa soy Mar 😁 ,me apasiona la tecnología y siempre estoy buscando nuevas formas de aplicar mis conocimientos en proyectos.</textarea>
            <button type="button" class="btn" onclick="saveProfileChanges()">Guardar</button>
            <button type="button" class="btn btn-secondary" onclick="closeEditForm()">Cancelar</button>
        </form>
    </div>

    <div class="followers-info">
        <div><strong id="followers-count">120</strong> Seguidores</div>
        <div><strong>180</strong> Seguidos</div>
    </div>

    <div class="skills-section">
        <h2 class="section-title">Habilidades</h2>
        <div class="skills-row" id="skills-row">
            <div class="skill-card">
                <i class="fas fa-code"></i>
                <h3>Java</h3>
                <p>Creación de aplicaciones robustas y eficientes.</p>
            </div>
            <div class="skill-card">
                <i class="fas fa-laptop-code"></i>
                <h3>Web</h3>
                <p>HTML, CSS, JS para interfaces funcionales.</p>
            </div>
            <div class="skill-card">
                <i class="fas fa-database"></i>
                <h3>Bases de Datos</h3>
                <p>SQL y MariaDB optimizados.</p>
            </div>
        </div>
        <button class="btn" onclick="openEditSkills()">Editar Habilidades</button>
    </div>

    <div class="modal" id="edit-skills-modal" style="display: none;">
        <div class="modal-content">
            <h3>Editar Habilidades</h3>
            <div id="skills-form-container">
                <div class="skill-form">
                    <label for="skill-title-1">Título:</label>
                    <input type="text" id="skill-title-1" value="Java">
                    <label for="skill-description-1">Descripción:</label>
                    <textarea id="skill-description-1">Creación de aplicaciones robustas y eficientes.</textarea>
                </div>
                <div class="skill-form">
                    <label for="skill-title-2">Título:</label>
                    <input type="text" id="skill-title-2" value="Web">
                    <label for="skill-description-2">Descripción:</label>
                    <textarea id="skill-description-2">HTML, CSS, JS para interfaces funcionales.</textarea>
                </div>
                <div class="skill-form">
                    <label for="skill-title-3">Título:</label>
                    <input type="text" id="skill-title-3" value="Bases de Datos">
                    <label for="skill-description-3">Descripción:</label>
                    <textarea id="skill-description-3">SQL y MariaDB optimizados.</textarea>
                </div>
            </div>
            <button class="btn" onclick="saveSkills()">Guardar Cambios</button>
            <button class="btn btn-secondary" onclick="closeEditSkills()">Cancelar</button>
        </div>
    </div>

    <div class="contact">
        <h2 class="section-title">Contacto</h2>
        <p>📍 Ciudad de México, México</p>
        <p>✉️ m7r@email.com</p>
        <p>📱 +52 123 456 7890</p>
    </div>  

    <div class="social-buttons">
        <a href="https://www.facebook.com" class="btn social-btn" target="_blank">
            <i class="fab fa-facebook-f"></i> Facebook
        </a>
        <a href="https://www.instagram.com" class="btn social-btn" target="_blank">
            <i class="fab fa-instagram"></i> Instagram
        </a>
    </div> 
</div>

<?php
// Fin del contenido del cuerpo
?>
