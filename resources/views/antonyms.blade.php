<x-layout>
    <x-slot name='title'>
		Антонимы слова "{{ $word->word }}" — подбор противоположных по смыслу слов онлайн.
	</x-slot>

    <x-slot name="description">
        Антонимы слова '{{ $word->word }}' — находите подходящие противоположные по смыслу слова в русском языке. Онлайн словарь антонимов бесплатно и без регистрации.
    </x-slot>

    <div class="header">
        <div class="breadcrumbs">
            <a href="{{ route('main') }}">Главная</a> >
            <a href="{{ route('show.antonyms.words') }}?letter={{ $letter }}">Антонимы на букву "{{ mb_strtoupper($letter) }}"</a> >
            <span>{{ $word->word }}</span>
        </div>

        <h1>Словарь синонимов</h1>
    </div>

    <div class="word-card">
        <div class="word-title">{{ $word->word }}</div>
    </div>

    <div class="synonyms-section">
        <h2 class="section-title">Синонимы</h2>
        <div class="synonyms-grid">
            @foreach($word->antonyms as $antonym)
            <div class="synonym-card">
                <div class="synonym-word">{{ $antonym->antonym }}</div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="navigation">
        <a href="{{ route('show.antonyms.words') }}?letter={{ $letter }}" class="nav-btn">Все слова на "{{ mb_strtoupper($letter) }}" →</a>
    </div>
</x-layout>


