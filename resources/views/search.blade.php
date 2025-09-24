<x-layout>
    <x-slot name='title'>
		Результаты поиска синонимов по запросу "{{ $search }}" — онлайн словарь русского языка.
	</x-slot>

    <x-slot name="description">
        Синонимы по запросу '{{ $search }}' — найдите подходящие слова по смыслу, аналоги и заменители. Онлайн словарь синонимов русского языка бесплатно и без регистрации.
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
                <form method="GET" action="{{ route('search') }}">
                    <input type="text" name="search" class="search-input" placeholder="Введите слово для поиска...">
                    <button class="search-btn" type="submit">Найти синонимы</button>
                </form>
            </div>
        </div>
    </div>

    <div class="results-section">
        <div class="results-list">
            @foreach($result as $word)
            <a href="{{ route('show.word', ['slug' => $word->slug]) }}"><div class="result-item">
                <div class="result-word">{{ $word->word }}</div>
                
                <div class="synonyms-preview">
                    @foreach($word->synonyms as $synonym)
                    <span class="synonym-tag">{{ $synonym->synonym }}</span>
                    @endforeach
                </div>
            </div></a>
            @endforeach
        </div>
    </div>

    <div class="pagination">
        <div class="page-numbers" id="pageNumbers">
            <div class="pagination">
                {{ $result->appends(['search' => $search])->links() }}
            </div>
        </div>
    </div>

</x-layout>

    
