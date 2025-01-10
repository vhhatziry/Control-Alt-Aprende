//alert("hola mundo"); /* forma facil de corroborar que el archivo este vinculado correctamente*/
console.warn = function() {};

document.getElementById("btn-registro").addEventListener("click", register);
document.getElementById("btn-inises").addEventListener("click", IniciarSesion);
window.addEventListener("resize", anchoPag);

//Declarar variables
var forms = document.querySelector(".contenedor-formularios");
var form_login = document.querySelector(".form-login");
var form_reg = document.querySelector(".form-registro");
var caja_fondo_li = document.querySelector(".caja-f-li");
var caja_fondo_reg = document.querySelector(".caja-f-reg");

//Vista
function anchoPag(){
    if(window.innerWidth > 850){
        caja_fondo_li.style.display = "block";
        caja_fondo_reg.style.display = "block";
    }
    else{
        caja_fondo_reg.style.display = "block";
        caja_fondo_reg.style.opacity = "1";
        caja_fondo_li.style.display = "none";
        form_login.style.display = "block";
        form_reg.style.display = "none";
        forms.style.left = "0px";
    }
}

anchoPag();

function IniciarSesion(){
    if(window.innerWidth > 850){
        form_reg.style.display = "none";
        forms.style.left = "10px";
        form_login.style.display = "block";
        caja_fondo_reg.style.opacity = "1";
        caja_fondo_li.style.opacity = "0";
    }
    else{
        form_reg.style.display = "none";
        forms.style.left = "0px";
        form_login.style.display = "block";
        caja_fondo_reg.style.display = "block";
        caja_fondo_li.style.display = "none";
    }

}

function register(){
    if(window.innerWidth > 850){
        form_reg.style.display = "block";
        forms.style.left = "410px";
        form_login.style.display = "none";
        caja_fondo_reg.style.opacity = "0";
        caja_fondo_li.style.opacity = "1";
    }
    else{
        form_reg.style.display = "block";
        forms.style.left = "0px";
        form_login.style.display = "none";
        caja_fondo_reg.style.display = "none";
        caja_fondo_li.style.display = "block";
        caja_fondo_li.style.opacity = "1";
    }
}

//sanitización de datos
const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
    boleta : /^\d{10}$/, //Letras, numeros, guión y guión_bajo
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, //Letras, espacios, acentos
    correo: /^[a-zA-Z0-9_.+-]+@alumno+\.ipn+\.mx$/,
    password: /^.{8,12}$/, //8 a 12 digitos
    carrera: /^.$/ //7 a 14 numeros
}

const campos = {
    boleta : false,
    nombre : false,
    carrera: false,
    email_li : false,
    contra_li : false,
    email_r : false,
    contra_r : false
}

const validarForm = (e) => {
    switch(e.target.name){
        case "email-li":
            validarCampo(expresiones.correo, e.target, 'email_li');
        break;
        case "contra-li":
            validarCampo(expresiones.password, e.target, 'contra_li');
        break;
        case "boleta":
            validarCampo(expresiones.boleta, e.target, 'boleta');
        break;
        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');
        break;
        case "email-r":
            validarCampo(expresiones.correo, e.target, 'email_r');
        break;
        case "contra-r":
            validarCampo(expresiones.password, e.target, 'contra_r');
        break;
    }
}

const validarCampo = (exp, input, campo) =>{
    if(exp.test(input.value)){
        document.getElementById(`grupo-${campo}`).classList.remove('grupo-input-incorrecto');
        document.getElementById(`grupo-${campo}`).classList.add('grupo-input-correcto');
        document.querySelector(`#grupo-${campo} i`).classList.add('fa-circle-check');
        document.querySelector(`#grupo-${campo} i`).classList.remove('fa-circle-xmark');
        document.querySelector(`#grupo-${campo} .form-input-error`).classList.remove('form-input-error-activo')
        campos[campo] = true;
    }

    else{                
        document.getElementById(`grupo-${campo}`).classList.add('grupo-input-incorrecto');
        document.getElementById(`grupo-${campo}`).classList.remove('grupo-input-correcto');
        document.querySelector(`#grupo-${campo} i`).classList.remove('fa-circle-check');
        document.querySelector(`#grupo-${campo} i`).classList.add('fa-circle-xmark');
        document.querySelector(`#grupo-${campo} .form-input-error`).classList.add('form-input-error-activo')
        campos[campo] = false;
    }
}

inputs.forEach((input) =>{
    input.addEventListener('keyup', validarForm);
    input.addEventListener('blur', validarForm);
})

formulario.addEventListener('submit', (e)=>{
    e.preventDefault();

    if((campos.nombre && campos.ape && campos.email_r && campos.contra_r) || (campos.email_li && campos.contra_li)){
        //Limpiar el formulario
        formulario.reset();
        document.querySelectorAll('.grupo-input-correcto').forEach((icono) =>{
            icono.classList.remove('grupo-input-correcto');
        });
        
        //Enviar los datos a la base de datos <- - - - - - - FALTA IMPLEMENTAR 
    }

    else{
        document.getElementById('form-error').classList.add('form-error-active');
    }
})
