document.addEventListener("DOMContentLoaded", () => {
	//Manejo de los radio button para ocultar y aparecer el formulario de los datos del infractor
	const infractorSi = document.getElementById("infractor-si");
	const infractorNo = document.getElementById("infractor-no");
	const infractorDetalles = document.getElementById("infractor-detalles");
	
	const laboratorioSelect = document.getElementById("laboratorio");
    const materiasContainer = document.querySelector(".materias");
	
	
	 // Ocultar los botones de materias al cargar la página
    materiasContainer.style.display = "none";

    // Materias por laboratorio
    const materiasPorLaboratorio = {
        Lab1: ["BDD", "Administracion de BDD"],
        Lab2: ["Ofimantica"]
    };
	
	// Evento para cambiar materias según el laboratorio seleccionado
    laboratorioSelect.addEventListener("change", () => {
        const laboratorioSeleccionado = laboratorioSelect.value;

        // Limpiar botones de materias
        materiasContainer.innerHTML = "";

        if (laboratorioSeleccionado && materiasPorLaboratorio[laboratorioSeleccionado]) {
            // Mostrar los botones de materias correspondientes
            materiasContainer.style.display = "block";
            materiasPorLaboratorio[laboratorioSeleccionado].forEach(materia => {
                const button = document.createElement("button");
                button.type = "button";
                button.textContent = materia;
                materiasContainer.appendChild(button);
            });
        } else {
            // Ocultar el contenedor si no hay laboratorio seleccionado
            materiasContainer.style.display = "none";
        }
    });
	
	
	
	//selecciona la opcion es "si"
infractorSi.addEventListener("change", () => {
    if (infractorSi.checked) {
        infractorDetalles.style.display = "block";
    }
});
	//selecciona la opcion es "no"
infractorNo.addEventListener("change", () => {
    if (infractorNo.checked) {
        infractorDetalles.style.display = "none";
    }
});
	
	

	//tabla que contiene los botones con la imagen de las computadoras
	const tabla = document.querySelector('.tabla');
    const numeroPuestos = 10; // Total de botones

    for (let i = 1; i <= numeroPuestos; i++) {
        // Crear botón
        const boton = document.createElement('button');
        boton.className = 'boton';
        boton.style.backgroundImage = 'url("./img/computer_ok.png")'; // Imagen de fondo
        boton.innerHTML = `<span>${i}</span>`; // Número superpuesto

        // Evento al hacer clic
        boton.addEventListener('click', () => {
            boton.style.backgroundImage = 'url("./img/computer_bad.png")';
        });

        // Añadir el botón a la tabla
        tabla.appendChild(boton);
    }
});
