@props(['product'])

@php
    $p = $product;
    $discount = round((1 - $p['discount_price'] / $p['price']) * 100);
    // Formato italiano: 1.250,00 €
    $money = fn ($n) => number_format($n, 2, ',', '.') . "\u{00A0}€";
@endphp

<li class="card" data-name="{{ $p['name'] }}" data-category="{{ $p['category'] }}">
    <div class="card__media">
        <img class="card__img" src="{{ $p['image'] }}" alt="Immagine di {{ $p['name'] }}"
             width="640" height="400" loading="lazy">

        {{-- Placeholder si la imagen falla --}}
        <div class="card__placeholder" role="img" aria-label="Immagine di {{ $p['name'] }}" hidden>
            <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8l-5-5Z"/>
                <path d="M14 3v5h5M9 13h6M9 17h6"/>
            </svg>
        </div>

        <span class="badge badge--{{ Str::slug($p['format']) }}">{{ $p['format'] }}</span>
    </div>

    <div class="card__body">
        <h3 class="card__title">{{ $p['name'] }}</h3>
        <p class="card__author">{{ $p['author'] }}</p>

        <p class="card__meta">
            @if ($p['kind'] === 'test')
                Età: {{ $p['age_range'] }}
            @else
                Inizio:
                <time datetime="{{ $p['start_date'] }}">
                    {{ \Carbon\Carbon::parse($p['start_date'])->locale('it')->translatedFormat('j F Y') }}
                </time>
            @endif
        </p>

        <div class="card__prices">
            <span class="card__price">{{ $money($p['discount_price']) }}</span>
            <s class="card__old">{{ $money($p['price']) }}</s>
            <span class="card__off">-{{ $discount }}%</span>
        </div>

        <button type="button" class="btn btn--block card__cta">
            {{ $p['kind'] === 'test' ? 'Aggiungi al carrello' : 'Scopri di più' }}
        </button>
    </div>
</li>