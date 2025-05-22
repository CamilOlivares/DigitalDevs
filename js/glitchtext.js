document.addEventListener('DOMContentLoaded', () => {
  const glitchElements = document.querySelectorAll('.glitch-text');
  
  // Configuración inicial
  glitchElements.forEach(el => {
      // Asegura que el data-text coincida con el contenido
      el.setAttribute('data-text', el.textContent.trim());
      
      // Efecto hover dinámico
      el.addEventListener('mouseenter', () => {
          el.style.animationDuration = '0.8s';
      });
      
      el.addEventListener('mouseleave', () => {
          el.style.animationDuration = '2s';
      });
  });
});