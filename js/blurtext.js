document.addEventListener('DOMContentLoaded', () => {
    const blurTexts = document.querySelectorAll('.blur-text-minimal');
    
    blurTexts.forEach(textElement => {
      const content = textElement.getAttribute('data-text');
      textElement.innerHTML = content.split(' ').map(word => 
        `<span class="word">${word}</span>`
      ).join(' ');
  
      // Animación con delay progresivo
      Array.from(textElement.querySelectorAll('.word')).forEach((word, index) => {
        word.style.animationDelay = `${index * 150}ms`;
      });
    });
  });