import $ from 'jquery';

function showPlaceholder($img) {
  $img.prop('hidden', true).siblings('.card__placeholder').prop('hidden', false);
}

$(function () {
  $('.card__img')
    .on('error', function () {
      showPlaceholder($(this));
    })
    .each(function () {
      // Imágenes que ya fallaron antes de que cargara el JS
      if (this.complete && this.naturalWidth === 0) showPlaceholder($(this));
    });
});