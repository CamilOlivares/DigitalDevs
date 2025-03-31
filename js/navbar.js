let lastScroll = 0;

window.addEventListener('scroll', function() {
  const nav = document.querySelector('.nav');
  const currentScroll = window.pageYOffset;
  
  // Cambio de opacidad (tu función original)
  if (currentScroll > 50) {
    nav.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
  } else {
    nav.style.backgroundColor = 'rgba(0, 0, 0, 0.6)';
  }
  
  // Comportamiento para ocultar/mostrar
  if (currentScroll > lastScroll && currentScroll > 100) {
    // Scroll hacia abajo - ocultar
    nav.classList.add('nav-hidden');
  } else if (currentScroll < lastScroll) {
    // Scroll hacia arriba - mostrar
    nav.classList.remove('nav-hidden');
  }
  
  lastScroll = currentScroll;
});