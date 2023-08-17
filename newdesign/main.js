// Selecciona el contenedor de la simulación del teléfono
const phoneContainer = document.querySelector('.phone-container');

// Agrega el evento al contenedor de la simulación del teléfono
phoneContainer.addEventListener('mouseenter', () => {
   phoneContainer.classList.add('scrollable');
});

phoneContainer.addEventListener('mouseleave', () => {
   phoneContainer.classList.remove('scrollable');
});
