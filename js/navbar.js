window.addEventListener('scroll', function () {
    const nav = document.querySelector('.nav');
    if (window.scrollY > 50) {
      nav.style.backgroundColor = 'rgba(0, 0, 0, 0.8)'; /* Aumenta la opacidad al hacer scroll */
    } else {
      nav.style.backgroundColor = 'rgba(0, 0, 0, 0.6)';
    }
  });
  