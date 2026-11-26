<header class="header">
    <div class="container header__inner">
        <a href="{{ url('/') }}" class="header__logo" aria-label="Giunti Psychometrics - Home">
            <img src="{{ asset('logo.png') }}" alt="Giunti Psychometrics" width="180" height="40">
        </a>

        
        <button type="button" id="menu-toggle" class="header__toggle"
                aria-expanded="false" aria-controls="mobile-menu" aria-label="Apri il menu">
            <svg class="icon-open" aria-hidden="true" viewBox="0 0 24 24" width="24" height="24"
                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                <path d="M4 7h16M4 12h16M4 17h16"/>
            </svg>
            <svg class="icon-close" aria-hidden="true" viewBox="0 0 24 24" width="24" height="24"
                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                <path d="M6 6l12 12M18 6 6 18"/>
            </svg>
        </button>

        
        <nav class="header__nav" aria-label="Principale">
            <ul>
                @foreach (config('catalog.nav') as $item)
                    <li><a href="{{ $item['href'] }}">{{ $item['label'] }}</a></li>
                @endforeach
            </ul>
        </nav>

        
        <nav id="mobile-menu" class="header__mobile" aria-label="Principale" hidden>
            <ul>
                @foreach (config('catalog.nav') as $item)
                    <li><a href="{{ $item['href'] }}">{{ $item['label'] }}</a></li>
                @endforeach
            </ul>
        </nav>

        
        <div class="header__tools">
            <div class="search">
                <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round">
                    <circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/>
                </svg>
                <input type="search" id="search-input" placeholder="Cerca un prodotto..."
                       aria-label="Cerca un prodotto" autocomplete="off">
            </div>
            <button type="button" class="btn">Accedi</button>
        </div>
    </div>
</header>