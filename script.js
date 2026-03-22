// script.js
// Seleccionar el botón por su ID
const botonDesplazamiento = document.getElementById('botonDesplazamiento');

// Agregar un evento de clic al botón
botonDesplazamiento.addEventListener('click', function() {
    // Alternar la clase 'active' para aplicar la animación
    this.classList.toggle('active');
});
// Seleccionar el botón por su ID
const boton = document.getElementById("boton");

// Agregar un evento de clic al botón
boton.addEventListener("click", function() {
    // Seleccionar el título por su ID
    const titulo = document.getElementById("titulo");

    // Cambiar el contenido del título
    titulo.textContent = "Título actualizado dinámicamente";
});
<script>
    document.querySelectorAll('.agregar-carrito').forEach(boton ={
        boton.addEventListener('click', () => {
        const contenedor = boton.closest('.experiencia');
        const nombre = contenedor.querySelector('.nombre').textContent;
        const imagen = contenedor.querySelector('.miniatura').src;
        const fecha = contenedor.querySelector('.fecha-reserva').value;

        if (!fecha) {
            alert("Selecciona una fecha para reservar");
            return;
        }

        const experiencia = { nombre, imagen, fecha };

        // Guardar en localStorage
        let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        carrito.push(experiencia);
        localStorage.setItem('carrito', JSON.stringify(carrito));

        // Ir a la página del carrito
        window.location.href = 'carrito.html';
        })
    });
</script>;

    const contenedor = document.getElementById('carrito-contenedor');
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

    function renderCarrito() {
    contenedor.innerHTML = '';

    if (carrito.length === 0) {
        contenedor.innerHTML = '<p>Tu carrito está vacío.</p>';
        return;
    }

    carrito.forEach((item, index) => {
        const div = document.createElement('div');
        div.classList.add('item-carrito');

        div.innerHTML = `
        <img src="${item.imagen || 'assets/img/default.jpg'}" alt="Miniatura de ${item.nombre}">
        <div class="item-info">
            <h4>${item.nombre}</h4>
            <label>
            Fecha de reserva:
            <input type="date" value="${item.fecha}" data-index="${index}" class="fecha-cambiable" />
            </label>
        </div>
        <button class="btn-eliminar" data-index="${index}">Eliminar</button>
        `;

        contenedor.appendChild(div);
    });

    // Agregar listeners para inputs de fecha
    document.querySelectorAll('.fecha-cambiable').forEach(input => {
        input.addEventListener('change', (e) => {
        const idx = e.target.getAttribute('data-index');
        carrito[idx].fecha = e.target.value;
        localStorage.setItem('carrito', JSON.stringify(carrito));
        });
    });

    // Agregar listeners para eliminar
    document.querySelectorAll('.btn-eliminar').forEach(btn => {
        btn.addEventListener('click', (e) => {
        const idx = e.target.getAttribute('data-index');
        carrito.splice(idx, 1);
        localStorage.setItem('carrito', JSON.stringify(carrito));
        renderCarrito();
        });
    });
}

renderCarrito();

