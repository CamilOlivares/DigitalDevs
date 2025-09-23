$(function(){
  $('#year').text(new Date().getFullYear());
  const savedTheme = localStorage.getItem('theme'); if(savedTheme === 'light'){ $('body').addClass('light-mode'); }
  $('#themeToggle').on('click', function(){ $('body').toggleClass('light-mode'); localStorage.setItem('theme', $('body').hasClass('light-mode') ? 'light' : 'dark'); });
  $('#burger').on('click', function(){ const open = $('#mainNav').toggleClass('open').hasClass('open'); $(this).attr('aria-expanded', open ? 'true' : 'false'); });
  $('a[href^="#"]').on('click', function(e){ const href=$(this).attr('href'); if(href.startsWith('#')){ const $t=$(href); if($t.length){ e.preventDefault(); $('html,body').animate({scrollTop:$t.offset().top-70},450); } } });
  const $items=$('.ts-item'); let idx=0; function show(i){ $items.removeClass('is-active').eq(i).addClass('is-active'); } if($items.length){ show(0); setInterval(function(){ idx=(idx+1)%$items.length; show(idx); },5000); }
  const $form=$('#contact-form'); if($form.length){ $form.on('submit', function(e){ e.preventDefault(); const $s=$('#form-status'); if($('#website').val().trim()!==''){ $s.text('Error: detección de spam.'); return; } $s.text('Enviando…'); $.ajax({url:$form.attr('action'),method:'POST',data:$form.serialize(),dataType:'json'}).done(function(res){ if(res.success){ $s.text('¡Gracias! Te contactaremos pronto.'); $form[0].reset(); } else { $s.text(res.message||'No se pudo enviar.'); } }).fail(function(){ $s.text('Error de conexión.'); }); }); }
});