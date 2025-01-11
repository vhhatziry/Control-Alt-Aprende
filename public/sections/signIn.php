<?php
// Inicio del contenido del cuerpo
?>

<main>
    <div class="contenedor-general">
        <div class="caja-fondo">
            <div class="caja-f-li">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar en la página</p>
                <button id="btn-inises">Iniciar Sesión</button>
            </div>
            <div class="caja-f-reg">
                <h3>¿Aún no tienes una cuenta?</h3>
                <p>Regístrate para poder iniciar sesión</p>
                <button id="btn-registro">Regístrate</button>
            </div>
        </div>

        <div class="contenedor-formularios">
            <!-- Formulario de Inicio de Sesión -->
            <form action="" class="form-login" id="formulario">
                <h2>Iniciar Sesión</h2>
                <div class="grupo-input" id="grupo-email_li">
                    <input class="form-input" autocomplete="off" type="text" name="email-li" id="email_li" placeholder="Correo Electrónico">
                    <i class="form-val-edo fa-solid fa-circle-xmark"></i>
                    <p class="form-input-error">El correo electrónico ingresado no tiene la estructura correcta.</p>
                </div>
                <div class="grupo-input" id="grupo-contra_li">
                    <input class="form-input" autocomplete="off" type="password" name="contra-li" id="contra_li" placeholder="Contraseña">
                    <i class="form-val-edo fa-solid fa-circle-xmark"></i>
                    <p class="form-input-error">La contraseña debe tener 8 caracteres: letras, símbolos y números.</p>
                </div>

                <div class="form-error" id="form-error">
                    <p> 
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <b>Error:</b> Por favor rellene el formulario correctamente
                    </p>
                </div>

                <button type="submit">Entrar</button>
            </form>

            <!-- Formulario de Registro -->
            <form action="" class="form-registro" id="formulario">
                <h2>Regístrate</h2>
                <div class="grupo-input" id="grupo-boleta">
                    <input class="form-input" autocomplete="off" type="text" name="boleta" id="boleta" placeholder="Número de boleta">
                    <i class="form-val-edo fa-solid fa-circle-xmark"></i>
                    <p class="form-input-error">El número de boleta es incorrecto.</p>
                </div>
                <div class="grupo-input" id="grupo-nombre">
                    <input class="form-input" autocomplete="off" type="text" name="nombre" id="nombre" placeholder="Nombre Completo">
                    <i class="form-val-edo fa-solid fa-circle-xmark"></i>
                    <p class="form-input-error">El nombre no puede contener caracteres especiales.</p>
                </div>
                <div class="grupo-input" id="grupo-email_r">
                    <input class="form-input" autocomplete="off" type="text" name="email-r" id="email" placeholder="Correo Institucional">
                    <i class="form-val-edo fa-solid fa-circle-xmark"></i>
                    <p class="form-input-error">El correo electrónico ingresado no tiene la estructura correcta.</p>
                </div>
                <div class="grupo-input" id="grupo-contra_r">
                    <input class="form-input" autocomplete="off" type="password" name="contra-r" id="contra" placeholder="Contraseña">
                    <i class="form-val-edo fa-solid fa-circle-xmark"></i>
                    <p class="form-input-error">La contraseña debe tener 8 caracteres: letras, símbolos y números.</p>
                </div>
                <div class="grupo-input" id="grupo-carrera">
                    <input class="form-input" autocomplete="off" type="text" name="carrera" id="carrera" placeholder="Carrera">
                    <i class="form-val-edo fa-solid fa-circle-xmark"></i>
                    <p class="form-input-error">La carrera es obligatoria.</p>
                </div>
                <div class="grupo-input" id="grupo-semestre">
                    <input class="form-input" autocomplete="off" type="text" name="semestre" id="semestre" placeholder="Semestre">
                    <i class="form-val-edo fa-solid fa-circle-xmark"></i>
                    <p class="form-input-error">El semestre es obligatorio.</p>
                </div>

                <div class="form-error" id="form-error">
                    <p> 
                        <br>
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <b>Error:</b> Por favor rellene el formulario correctamente
                    </p>
                </div>

                <button type="submit">Registrarse</button>
            </form>
        </div>
    </div>
</main>

<script src="./signin.js"></script>
<script src="https://kit.fontawesome.com/850a86fe2b.js" crossorigin="anonymous"></script>

<?php
// Fin del contenido del cuerpo
?>
