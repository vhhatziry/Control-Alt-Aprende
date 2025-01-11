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