$(function () {

  // ─── Año dinámico en el footer ──────────────────────────────────────────────
  $('#year').text(new Date().getFullYear());

  // ─── Tema claro / oscuro ────────────────────────────────────────────────────
  if (localStorage.getItem('theme') === 'light') {
    $('body').addClass('light-mode');
  }
  $('#themeToggle').on('click', function () {
    $('body').toggleClass('light-mode');
    localStorage.setItem('theme', $('body').hasClass('light-mode') ? 'light' : 'dark');
  });

  // ─── Menú móvil (burger) ────────────────────────────────────────────────────
  $('#burger').on('click', function () {
    const isOpen = $('#mainNav').toggleClass('open').hasClass('open');
    $(this).attr('aria-expanded', isOpen ? 'true' : 'false');
  });

  // Cerrar el menú al hacer clic fuera
  $(document).on('click', function (e) {
    if (!$(e.target).closest('#mainNav, #burger').length) {
      $('#mainNav').removeClass('open');
      $('#burger').attr('aria-expanded', 'false');
    }
  });

  // ─── Scroll suave a anclas internas ─────────────────────────────────────────
  $('a[href^="#"]').on('click', function (e) {
    const href = $(this).attr('href');
    if (href.startsWith('#')) {
      const $target = $(href);
      if ($target.length) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: $target.offset().top - 70 }, 450);
      }
    }
  });

  // ─── Slideshow / testimonios (.ts-item) ─────────────────────────────────────
  const $items = $('.ts-item');
  let idx = 0;

  function showSlide(i) {
    $items.removeClass('is-active').eq(i).addClass('is-active');
  }
  if ($items.length) {
    showSlide(0);
    setInterval(function () {
      idx = (idx + 1) % $items.length;
      showSlide(idx);
    }, 5000);
  }

  // ─── Scroll Reveal ──────────────────────────────────────────────────────────
  // Agrega .reveal a cualquier elemento que quieras animar al entrar en viewport.
  // Aquí lo aplicamos automáticamente a algunas clases comunes
  const autoReveal = '.card, .shot, .price-card, .section-head, .glass-card, .contact-glass, .field';
  $(autoReveal).addClass('reveal');

  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry, i) {
        if (entry.isIntersecting) {
          // Retraso escalonado: cada elemento espera 60ms más que el anterior visible
          const delay = (i % 4) * 60;
          setTimeout(function () {
            $(entry.target).addClass('visible');
          }, delay);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });

    $('.reveal').each(function () { observer.observe(this); });
  } else {
    // Fallback: sin IntersectionObserver, muestra todo
    $('.reveal').addClass('visible');
  }

  // ─── Tilt 3D en elementos .glass y .glass-card ─────────────────────────────
  function applyTilt(selector, intensity) {
    $(selector).each(function () {
      const el = this;
      $(el).css('will-change', 'transform');

      $(el).on('mousemove', function (e) {
        const rect = el.getBoundingClientRect();
        const x = (e.clientX - rect.left) / rect.width - 0.5;
        const y = (e.clientY - rect.top) / rect.height - 0.5;
        const tiltX = -(y * intensity);
        const tiltY = (x * intensity);
        el.style.transform = `perspective(600px) rotateX(${tiltX}deg) rotateY(${tiltY}deg) translateZ(6px)`;
      });

      $(el).on('mouseleave', function () {
        el.style.transform = 'perspective(600px) rotateX(0deg) rotateY(0deg) translateZ(0)';
      });
    });
  }
  applyTilt('.contact-glass', 5);
  applyTilt('.glass-card', 8);
  applyTilt('.glass', 6);

  // ─── Orbe de cursor en .card (posición del radial-gradient en ::after) ──────
  $(document).on('mousemove', '.card', function (e) {
    const rect = this.getBoundingClientRect();
    const mx = ((e.clientX - rect.left) / rect.width * 100).toFixed(1) + '%';
    const my = ((e.clientY - rect.top) / rect.height * 100).toFixed(1) + '%';
    this.style.setProperty('--mx', mx);
    this.style.setProperty('--my', my);
  });

  // ─── Animar número de stats (contador) ──────────────────────────────────────
  function animateCounter($el) {
    // Texto original que asumiremos es el estado final deseado (ej: 99,982%)
    const originalText = $el.text().trim();

    // Extraemos solo la parte numérica (acepta puntos y comas)
    const rawNumberMatch = originalText.match(/[\d.,]+/);
    if (!rawNumberMatch) return;

    // El string del número final y el sufijo (ej: % o +)
    const finalNumberStr = rawNumberMatch[0];
    const finalNumberVal = parseFloat(finalNumberStr.replace(',', '.'));
    const suffix = originalText.replace(finalNumberStr, '').trim();

    // Comprobamos si tiene decimales reales por la coma/punto
    const hasDecimals = finalNumberStr.includes(',') || finalNumberStr.includes('.');

    // Arrancamos desde 0
    $el.text('0' + suffix);

    $({ n: 0 }).animate({ n: finalNumberVal }, {
      duration: 1500,
      easing: 'swing',
      step: function () {
        // En cada paso formateamos (si era con coma original, usamos coma)
        let stepText = hasDecimals ? this.n.toFixed(3) : Math.floor(this.n);
        if (finalNumberStr.includes(',')) stepText = stepText.toString().replace('.', ',');
        $el.text(stepText + suffix);
      },
      complete: function () {
        // Al terminar aseguramos el texto original exacto
        $el.text(originalText);
      }
    });
  }

  // Dispara el contador cuando la glass-card entra en pantalla
  if ('IntersectionObserver' in window) {
    const counterObs = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          $(entry.target).find('strong').each(function () { animateCounter($(this)); });
          counterObs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    $('.glass-card').each(function () { counterObs.observe(this); });
  }

});