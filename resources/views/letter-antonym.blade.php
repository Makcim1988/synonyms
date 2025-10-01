<x-layout>
    <x-slot name='title'>
		Антонимы на букву {{ mb_strtoupper($letter) }} — онлайн словарь русского языка
	</x-slot>

    <x-slot name="description">
        Антонимы на букву {{ mb_strtoupper($letter) }} — находите противоположные слова по смыслу в русском языке. Онлайн подбор антонимов бесплатно, быстро и без регистрации.
    </x-slot>

    <div class="header">
        <div class="breadcrumbs">
            <a href="{{ route('main') }}">Главная</a> > <span>Антонимы на букву "{{ mb_strtoupper($letter) }}"</span>
        </div>

        <div class="letter-info">
            <div class="letter-title"></div>
            <div class="word-count">Всего слов: {{ $count }}</div>
        </div>

        <div class="search-box">
            <form method="GET" action="{{ route('search.antonyms') }}">
                    <input type="text" name="search" class="search-input" placeholder="Введите слово для поиска...">
                    <button class="search-btn" type="submit">Найти антонимы</button>
            </form>
        </div>
    </div>

    <div class="words-section">
        <div class="words-list">
            @foreach ($words as $word)
                <a href="{{ route('show.antonyms.word', ['slug' => $word->slug]) }}?letter={{ $letter }}" class="word-link">{{ $word->word }}</a>
            @endforeach
        </div>

            <div class="pagination">
                {{ $words->appends(['letter' => $letter])->links() }}
            </div>
</x-layout>
