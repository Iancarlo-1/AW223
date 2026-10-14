/* document.addEventListener("DOMContentLoaded", () => {
    // Cambiar mensaje
    const btnMensaje = document.getElementById("btn-cambiar-mensaje");
    const mensajeBienvenida = document.getElementById("mensaje-bienvenida");

    if (btnMensaje && mensajeBienvenida) {
        btnMensaje.addEventListener("click", () => {
            mensajeBienvenida.textContent = "¡Hola! Bienvenido a mi Portafolio ahora con JS";
        });
    }

    // Cambiar color y tipografía de habilidades
    const btnColor = document.getElementById("btn-cambiar-color");
    const btnFuente = document.getElementById("btn-cambiar-fuente");
    const cajasHabilidades = document.querySelectorAll(".lista-habilidades li");

    if (btnColor) {
        btnColor.addEventListener("click", () => {
            cajasHabilidades.forEach(box => {
                box.style.backgroundColor = "#4CAF50"; 
                box.style.color = "white";
            });
        });
    }

    if (btnFuente) {
        btnFuente.addEventListener("click", () => {
            cajasHabilidades.forEach(box => {
                box.style.fontFamily = "'Courier New', Courier, monospace";
            });
        });
    }

    // Validación Formulario
    const formulario = document.getElementById("formulario-contacto");

    if (formulario) {
        formulario.addEventListener("submit", (e) => {
            e.preventDefault(); 

            const nombreInput = document.getElementById("nombre").value.trim();
            const emailInput = document.getElementById("email").value.trim();

            if (nombreInput === "") {
                alert("Por favor, escribe tu nombre");
                return;
            }

            if (emailInput === "") {
                alert("El correo es obligatorio");
                return;
            }

            alert("Formulario enviado correctamente");
            formulario.reset(); 
        });
    }
}); */