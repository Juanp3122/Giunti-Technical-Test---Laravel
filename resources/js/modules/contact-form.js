import $ from 'jquery';

const EMAIL_RE = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

// Cada regla devuelve un mensaje de error, o undefined si el valor es válido
const rules = {
  name(v) {
    if (!v) return 'Il nome è obbligatorio.';
    if (v.length < 2) return 'Il nome deve contenere almeno 2 caratteri.';
  },
  email(v) {
    if (!v) return "L'email è obbligatoria.";
    if (!EMAIL_RE.test(v)) return 'Inserisci un indirizzo email valido.';
  },
  message(v) {
    if (!v) return 'Il messaggio è obbligatorio.';
    if (v.length < 10) return 'Il messaggio deve contenere almeno 10 caratteri.';
  },
};

$(function () {
  const $form = $('#contact-form');
  if (!$form.length) return;

  const touched = {};

  function validateField(name, show = true) {
    const $input = $form.find(`[name="${name}"]`);
    const $field = $input.closest('.field');
    const error = rules[name]($input.val().trim());
    const visible = show && Boolean(error);

    $field.toggleClass('has-error', visible);
    $input.attr('aria-invalid', String(visible));
    $field.find('.field__error').text(visible ? error : '').prop('hidden', !visible);

    return !error;
  }

  // Los errores aparecen al salir del campo y se corrigen en vivo
  $form.on('focusout', 'input, textarea', function () {
    touched[this.name] = true;
    validateField(this.name);
  });

  $form.on('input', 'input, textarea', function () {
    if (touched[this.name]) validateField(this.name);
  });

  $form.on('submit', function (e) {
    e.preventDefault();

    let valid = true;
    Object.keys(rules).forEach((name) => {
      touched[name] = true;
      if (!validateField(name)) valid = false;
    });

    if (!valid) {
      $form.find('.has-error input, .has-error textarea').first().trigger('focus');
      return;
    }

    const $submit = $form.find('[type="submit"]');
    $submit.prop('disabled', true).text('Invio in corso...');

    // Simula el envío (sin backend)
    setTimeout(() => {
      $('#success-name').text($form.find('[name="name"]').val().trim());
      $('#success-email').text($form.find('[name="email"]').val().trim());
      $form.prop('hidden', true);
      $('#contact-success').prop('hidden', false);
    }, 900);
  });

  $('#contact-reset').on('click', function () {
    $form[0].reset();
    Object.keys(touched).forEach((k) => delete touched[k]);
    Object.keys(rules).forEach((name) => validateField(name, false));
    $form.find('[type="submit"]').prop('disabled', false).text('Invia messaggio');
    $('#contact-success').prop('hidden', true);
    $form.prop('hidden', false);
  });
});