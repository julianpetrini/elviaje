const phoneContainer = document.getElementById('phone');

phoneContainer.addEventListener('mouseenter', () => {
   phoneContainer.classList.add('scrollable');
});

phoneContainer.addEventListener('mouseleave', () => {
   phoneContainer.classList.remove('scrollable');
});
