document.addEventListener("DOMContentLoaded", function () {
    // =======================
    // Código de navegación
    // =======================
    const navigation = document.querySelector(".navigation");
    const activeItem = navigation.querySelector(".active a");
    const indicator = document.createElement("div");
    indicator.classList.add("indicator");
    navigation.appendChild(indicator);
    
    // Cierra el modal al hacer clic fuera de él
    window.onclick = function (event) {
        const modals = document.querySelectorAll(".modal");
        modals.forEach((modal) => {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    };

    if (activeItem) {
        const itemRect = activeItem.getBoundingClientRect();
        indicator.style.width = `${itemRect.width}px`;
        indicator.style.transform = `translateX(${itemRect.left}px)`;
    }

    navigation.addEventListener("click", (e) => {
        if (e.target.closest("a")) {
            const targetItem = e.target.closest("a");
            const itemRect = targetItem.getBoundingClientRect();
            indicator.style.width = `${itemRect.width}px`;
            indicator.style.transform = `translateX(${itemRect.left}px)`;
        }
    });

    // =======================
    // Código de Comentarios
    // =======================
    const comentariosDiv = document.getElementById("comentarios");

    if (comentariosDiv) {
        const comentarios = [
            { nombre: "María Gómez", mensaje: "¡Excelente servicio, muy recomendado!" },
            { nombre: "Carlos Rivera", mensaje: "Me encantó el resultado, volveré sin duda." },
            { nombre: "Ana Torres", mensaje: "El personal fue muy amable y profesional." },
            { nombre: "Luis Fernández", mensaje: "Estoy muy feliz con mi cirugía, gracias!" },
            { nombre: "Sofía López", mensaje: "Resultados sorprendentes, superaron mis expectativas." },
            { nombre: "Fernando Herrera", mensaje: "La clínica tiene un trato increíble, muy satisfecho." },
            { nombre: "Andrea Castillo", mensaje: "Desde la consulta hasta la cirugía, todo fue perfecto." },
            { nombre: "Ricardo Martínez", mensaje: "Atención de primera, el doctor es un verdadero experto." },
            { nombre: "Paola Núñez", mensaje: "No pensé que los resultados fueran tan buenos, muy feliz." },
            { nombre: "Gabriela Flores", mensaje: "El seguimiento postoperatorio es excelente, muy atentos." },
            { nombre: "Esteban Rojas", mensaje: "Totalmente recomendable, servicio profesional y confiable." },
            { nombre: "Mónica Sánchez", mensaje: "Me trataron con mucha paciencia y dedicación, increíble." },
            { nombre: "Daniela Vázquez", mensaje: "La mejor decisión que tomé, me siento renovada." },
            { nombre: "José Ramírez", mensaje: "Atención de lujo, instalaciones impecables." },
            { nombre: "Verónica Morales", mensaje: "Me hicieron sentir segura en todo momento, ¡gracias!" }
        ];

    function agregarComentario() {
        if (comentarios.length === 0) return;

        const comentario = comentarios.shift();
        const nuevoComentario = document.createElement("div");
        nuevoComentario.classList.add("comentario");
        nuevoComentario.innerHTML = `<strong>${comentario.nombre}</strong><p>${comentario.mensaje}</p>`;

        comentariosDiv.appendChild(nuevoComentario);

        // Elimina el comentario después de 10 segundos
        setTimeout(() => {
            nuevoComentario.remove();
        }, 10000);

        // Vuelve a agregarlo al final del array para hacerlo cíclico
        comentarios.push(comentario);
    }

    // Agrega un nuevo comentario cada 5 segundos
    setInterval(agregarComentario, 5000);

    // Agregar los primeros comentarios al cargar la página
    agregarComentario();
    setTimeout(agregarComentario, 3000);
    } else {
        console.warn("El elemento con ID 'comentarios' no existe en esta página.");
    }
    // =======================
});

// Función para abrir un modal
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = "block";
    } else {
        console.error("Modal no encontrado:", modalId);
    }
}

// Función para cerrar un modal
function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = "none";
    } else {
        console.error("Modal no encontrado:", modalId);
    }
}

// Cierra el modal al hacer clic fuera de él
window.onclick = function (event) {
    const modals = document.querySelectorAll(".modal");
    modals.forEach((modal) => {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
};

document.addEventListener("DOMContentLoaded", function () {
    // Código adicional que no afecta a los modales
    console.log("Archivo scripts.js cargado correctamente");
});
