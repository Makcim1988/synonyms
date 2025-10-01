<x-layout>
    <x-slot name='title'>
		Результаты поиска антонимов по запросу "{{ $search }}" — онлайн словарь русского языка.
	</x-slot>

    <x-slot name="description">
        Антонимы по запросу '{{ $search }}' — найдите проотивоположные слова по смыслу. Онлайн словарь антонимов русского языка бесплатно и без регистрации.
    </x-slot>

   <div class="header">
        <div class="breadcrumbs">
            <a href="{{ route('main') }}">Главная</a> > <span>Результаты поиска</span>
        </div>

        <h1>Результаты поиска</h1>

        <div class="search-info">
            <div>По запросу: <span class="query">"{{ $search }}"</span></div>
            <div class="results-count">
                Найдено {{ $count }} слов
            </div>

            <div class="search-box">
                <form method="GET" action="{{ route('search.antonyms') }}">
                    <input type="text" name="search" class="search-input" placeholder="Введите слово для поиска...">
                    <button class="search-btn" type="submit">Найти антонимы</button>
                </form>
            </div>
        </div>
    </div>

    <div class="results-section">
        <div class="results-list">
            @if(isset($result) && $result !== null)
            @foreach($result as $word)
            <a href="{{ route('show.antonyms.word', ['slug' => $word->slug]) }}?letter={{ strtoupper(mb_substr($word->word, 0, 1, 'UTF-8')) }}"><div class="result-item">
                <div class="result-word">{{ $word->word }}</div>

                <div class="synonyms-preview">
                    @foreach($word->antonyms as $antonym)
                    <span class="synonym-tag">{{ $antonym->antonym }}</span>
                    @endforeach
                </div>
            </div></a>
            @endforeach
                @endif
        </div>
    </div>

    <div class="pagination">
        <div class="page-numbers" id="pageNumbers">
            <div class="pagination">
                @if(isset($result) && $result !== null)
                {{ $result->appends(['search' => $search])->links() }}
                    @endif
            </div>
        </div>
    </div>

</x-layout>


