@php
    $socials = [
        ['label' => 'LinkedIn', 'path' => 'M6.94 8.5H3.56V20h3.38V8.5ZM5.25 3a1.97 1.97 0 1 0 0 3.94 1.97 1.97 0 0 0 0-3.94ZM20.44 13.2c0-3.1-1.65-4.9-4.3-4.9-1.4 0-2.5.6-3.1 1.5V8.5H9.7V20h3.38v-6.1c0-1.6.6-2.7 2-2.7 1.3 0 1.9.9 1.9 2.7V20h3.46v-6.8Z'],
        ['label' => 'Facebook', 'path' => 'M13.5 21v-8h2.7l.4-3.2h-3.1V7.8c0-.9.3-1.5 1.6-1.5h1.7V3.4c-.3 0-1.3-.1-2.4-.1-2.4 0-4 1.5-4 4.1v2.4H7.7V13h2.7v8h3.1Z'],
        ['label' => 'Instagram', 'path' => 'M7.5 3h9A4.5 4.5 0 0 1 21 7.5v9a4.5 4.5 0 0 1-4.5 4.5h-9A4.5 4.5 0 0 1 3 16.5v-9A4.5 4.5 0 0 1 7.5 3Zm0 1.8a2.7 2.7 0 0 0-2.7 2.7v9a2.7 2.7 0 0 0 2.7 2.7h9a2.7 2.7 0 0 0 2.7-2.7v-9a2.7 2.7 0 0 0-2.7-2.7h-9ZM12 7.6a4.4 4.4 0 1 1 0 8.8 4.4 4.4 0 0 1 0-8.8Zm0 1.8a2.6 2.6 0 1 0 0 5.2 2.6 2.6 0 0 0 0-5.2Zm4.7-2.5a1 1 0 1 1 0 2 1 1 0 0 1 0-2Z'],
        ['label' => 'YouTube', 'path' => 'M21.6 7.2a2.5 2.5 0 0 0-1.8-1.8C18.2 5 12 5 12 5s-6.2 0-7.8.4A2.5 2.5 0 0 0 2.4 7.2C2 8.8 2 12 2 12s0 3.2.4 4.8a2.5 2.5 0 0 0 1.8 1.8C5.8 19 12 19 12 19s6.2 0 7.8-.4a2.5 2.5 0 0 0 1.8-1.8c.4-1.6.4-4.8.4-4.8s0-3.2-.4-4.8ZM10 15V9l5.2 3L10 15Z'],
    ];
@endphp

<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__brand">
                <a href="{{ url('/') }}" aria-label="Giunti Psychometrics - Home">
                    <img src="{{ asset('logo.png') }}" alt="Giunti Psychometrics" width="180" height="40">
                </a>
                <p>Test, scale e formazione per la valutazione psicologica e il lavoro dei professionisti.</p>
            </div>

            <nav aria-label="Footer">
                <h2 class="footer__heading">Naviga</h2>
                <ul class="footer__links">
                    @foreach (config('catalog.nav') as $item)
                        <li><a href="{{ $item['href'] }}">{{ $item['label'] }}</a></li>
                    @endforeach
                </ul>
            </nav>

            <div>
                <h2 class="footer__heading">Seguici</h2>
                <ul class="footer__social">
                    @foreach ($socials as $s)
                        <li>
                            <a href="#" aria-label="{{ $s['label'] }}">
                                <svg aria-hidden="true" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="{{ $s['path'] }}"/>
                                </svg>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="footer__copy">
            © {{ date('Y') }} Giunti Psychometrics. Tutti i diritti riservati.
        </div>
    </div>
</footer>