// Estado inicial de seguimiento
let isFollowing = false;
let followersCount = 120; // Número inicial de seguidores

// Función para cambiar el estado de seguimiento
function toggleFollow() {
    const followButton = document.getElementById("follow-button");
    const followersCountElement = document.getElementById("followers-count");

    if (isFollowing) {
        // Si ya está siguiendo, se deja de seguir
        isFollowing = false;
        followersCount--;
        followButton.textContent = "Seguir";
        followButton.style.backgroundColor = "#567C8D"; // Color original del botón
    } else {
        // Si no está siguiendo, se comienza a seguir
        isFollowing = true;
        followersCount++;
        followButton.textContent = "Siguiendo";
        followButton.style.backgroundColor = "#2F4156"; // Cambia el color del botón
    }

    // Actualizar el contador de seguidores
    followersCountElement.textContent = followersCount;
}


//portada2
            // Abrir el formulario de edición
            function openEditForm() {
                document.getElementById('edit-form').style.display = 'block';
            }
        
            // Cerrar el formulario de edición
            function closeEditForm() {
                document.getElementById('edit-form').style.display = 'none';
            }
        
            // Guardar los cambios en el perfil
            function saveProfileChanges() {
                const newName = document.getElementById('edit-name').value.trim();
                const newDescription = document.getElementById('edit-description').value.trim();
        
                if (newName === "" || newDescription === "") {
                    alert("El nombre y la descripción no pueden estar vacíos.");
                    return;
                }
        
                // Actualizar el contenido del perfil
                document.getElementById('profile-name').textContent = newName;
                document.getElementById('profile-description').textContent = newDescription;
        
                // Cerrar el formulario
                closeEditForm();
            }
    
            // Función para cambiar el estado de seguimiento
            function toggleFollow() {
                const followButton = document.getElementById("follow-button");
                const followersCountElement = document.getElementById("followers-count");
        
                if (isFollowing) {
                    // Si ya está siguiendo, se deja de seguir
                    isFollowing = false;
                    followersCount--;
                    followButton.textContent = "Seguir";
                    followButton.style.backgroundColor = "#567C8D"; // Color original del botón
                } else {
                    // Si no está siguiendo, se comienza a seguir
                    isFollowing = true;
                    followersCount++;
                    followButton.textContent = "Siguiendo";
                    followButton.style.backgroundColor = "#2F4156"; // Cambia el color del botón
                }
        
                // Actualizar el contador de seguidores
                followersCountElement.textContent = followersCount;
            }


// Abrir el formulario de edición
            function openEditForm() {
                document.getElementById('edit-form').style.display = 'block';
            }
        
            // Cerrar el formulario de edición
            function closeEditForm() {
                document.getElementById('edit-form').style.display = 'none';
            }
        
            // Guardar los cambios en el perfil
            function saveProfileChanges() {
                const newName = document.getElementById('edit-name').value.trim();
                const newDescription = document.getElementById('edit-description').value.trim();
        
                if (newName === "" || newDescription === "") {
                    alert("El nombre y la descripción no pueden estar vacíos.");
                    return;
                }
        
                // Actualizar el contenido del perfil
                document.getElementById('profile-name').textContent = newName;
                document.getElementById('profile-description').textContent = newDescription;
        
                // Cerrar el formulario
                closeEditForm();
            }