import $ from 'jquery';

$(function () {
  const $toggle = $('#menu-toggle');
  const $menu = $('#mobile-menu');

  function setOpen(open) {
    $toggle
      .attr('aria-expanded', String(open))
      .attr('aria-label', open ? 'Chiudi il menu' : 'Apri il menu');
    $menu.prop('hidden', !open);
  }

  $toggle.on('click', function () {
    setOpen($(this).attr('aria-expanded') !== 'true');
  });

  // Cierra al pulsar un enlace, con Escape o al pasar a desktop
  $menu.on('click', 'a', () => setOpen(false));

  $(document).on('keydown', (e) => {
    if (e.key === 'Escape') setOpen(false);
  });

  window
    .matchMedia('(min-width: 768px)')
    .addEventListener('change', (e) => e.matches && setOpen(false));
});