import $ from 'jquery';

// Ignora mayúsculas y acentos: "personalita" encuentra "Personalità"
const normalize = (s) =>
  s.normalize('NFD').replace(/[\u0300-\u036f]/g, '').toLowerCase().trim();

$(function () {
  const $cards = $('.card');
  const $buttons = $('.filter__btn');
  const $input = $('#search-input');
  const $empty = $('#catalog-empty');

  let category = 'Tutti';
  let query = '';

  function render() {
    const q = normalize(query);
    const counts = { Tutti: 0 };
    let visible = 0;

    $cards.each(function () {
      const $card = $(this);
      const cat = $card.attr('data-category');
      const matchesSearch = normalize($card.attr('data-name')).includes(q);

      if (matchesSearch) {
        counts.Tutti += 1;
        counts[cat] = (counts[cat] || 0) + 1;
      }

      const show = matchesSearch && (category === 'Tutti' || cat === category);
      $card.prop('hidden', !show);
      if (show) visible += 1;
    });

    $buttons.each(function () {
      const key = $(this).attr('data-category');
      $(this).find('.filter__count').text(counts[key] || 0);
    });

    $empty.prop('hidden', visible > 0);
  }

  $buttons.on('click', function () {
    category = $(this).attr('data-category');
    $buttons.removeClass('is-active').attr('aria-pressed', 'false');
    $(this).addClass('is-active').attr('aria-pressed', 'true');
    render();
  });

  $input.on('input', function () {
    query = this.value;
    render();
  });

  render();
});