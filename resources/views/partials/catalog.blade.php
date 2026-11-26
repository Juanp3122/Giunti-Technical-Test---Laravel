<section id="test" class="catalog">
    <div class="container">
        <h2 class="catalog__title">I nostri prodotti</h2>

        @php $options = array_merge(['Tutti'], $categories); @endphp

        <div class="filter" role="group" aria-label="Filtra per categoria">
            @foreach ($options as $option)
                <button type="button"
                        class="filter__btn {{ $loop->first ? 'is-active' : '' }}"
                        data-category="{{ $option }}"
                        aria-pressed="{{ $loop->first ? 'true' : 'false' }}">
                    {{ $option }}
                    <span class="filter__count">
                        {{ $loop->first ? count($products) : collect($products)->where('category', $option)->count() }}
                    </span>
                </button>
            @endforeach
        </div>

        <ul class="grid">
            @foreach ($products as $product)
                <x-product-card :product="$product" />
            @endforeach
        </ul>

        <p id="catalog-empty" class="empty" hidden>Nessun prodotto trovato.</p>
    </div>
</section>