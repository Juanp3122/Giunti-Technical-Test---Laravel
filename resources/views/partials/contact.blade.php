<section id="contatti" class="contact">
    <div class="container">
        <div class="contact__inner">
            <h2 class="contact__title">Contattaci</h2>
            <p class="contact__lead">
                Hai domande su un test o su un corso? Scrivici e ti risponderemo il prima possibile.
            </p>

            <div class="contact__card">
                <form id="contact-form" novalidate>
                    <div class="field">
                        <label for="name">Nome <span>*</span></label>
                        <input id="name" name="name" type="text" autocomplete="name"
                               placeholder="Il tuo nome" aria-describedby="name-error">
                        <p id="name-error" class="field__error" hidden></p>
                    </div>

                    <div class="field">
                        <label for="email">Email <span>*</span></label>
                        <input id="email" name="email" type="email" autocomplete="email"
                               placeholder="nome@esempio.it" aria-describedby="email-error">
                        <p id="email-error" class="field__error" hidden></p>
                    </div>

                    <div class="field">
                        <label for="message">Messaggio <span>*</span></label>
                        <textarea id="message" name="message" rows="5"
                                  placeholder="Scrivi qui il tuo messaggio..."
                                  aria-describedby="message-error"></textarea>
                        <p id="message-error" class="field__error" hidden></p>
                    </div>

                    <button type="submit" class="btn btn--block btn--lg">Invia messaggio</button>
                </form>

                <div id="contact-success" class="success" role="status" hidden>
                    <span class="success__icon">
                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m5 13 4 4L19 7"/>
                        </svg>
                    </span>
                    <h3 class="success__title">Messaggio inviato!</h3>
                    <p class="success__text">
                        Grazie, <span id="success-name"></span>. Ti risponderemo all'indirizzo
                        <strong id="success-email"></strong>.
                    </p>
                    <button type="button" id="contact-reset" class="btn btn--outline">
                        Invia un altro messaggio
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>