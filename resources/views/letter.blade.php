<x-layout>
    <x-slot name='title'>
		Синонимы на букву {{ $letter }} — онлайн словарь русского языка 
	</x-slot>

    <x-slot name="description">
        Синонимы на букву {{ $letter }} — находите подходящие слова по смыслу в русском языке. Онлайн подбор синонимов бесплатно, быстро и без регистрации.
    </x-slot>

    <div class="header">
        <div class="breadcrumbs">
            <a href="{{ route('main') }}">Главная</a> > <span>Слова на букву {{ $letter }}</span>
        </div>
        
        <div class="letter-info">
            <div class="letter-title"></div>
            <div class="word-count">Всего слов: {{ $count }}</div>
        </div>

        <div class="search-box">
            <form method="GET" action="{{ route('search') }}">
                    <input type="text" name="search" class="search-input" placeholder="Введите слово для поиска...">
                    <button class="search-btn" type="submit">Найти синонимы</button>
            </form>
        </div>
    </div>

    <div class="words-section">
        <div class="words-list">
            @foreach ($words as $word)
                <a href="{{ route('show.word', ['slug' => $word->slug]) }}?letter={{ $letter }}" class="word-link">{{ $word->word }}</a>
            @endforeach
        </div>

    <div class="pagination">
        <div class="page-numbers" id="pageNumbers">
            <div class="pagination">
                {{ $words->appends(['letter' => $letter])->links() }}
            </div>
        </div>
    </div>
</x-layout>