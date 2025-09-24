<x-layout>
    <x-slot name='title'>
		Синонимы слова "{{ $word->word }}" — подбор аналогов и похожих слов онлайн.
	</x-slot>

    <x-slot name="description">
        Синонимы слова '{{ $word->word }}' — находите подходящие аналоги, заменители и похожие слова в русском языке. Онлайн словарь синонимов бесплатно и без регистрации.
    </x-slot>

    <div class="header">
        <div class="breadcrumbs">
            <a href="{{ route('main') }}">Главная</a> > 
            <a href="{{ route('show.words') }}?letter={{ $letter }}">Слова на букву {{ $letter }}</a> > 
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
            @foreach($word->synonyms as $synonym)
            <div class="synonym-card">
                <div class="synonym-word">{{ $synonym->synonym }}</div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="navigation">
        <a href="{{ route('show.words') }}?letter={{ $letter }}" class="nav-btn">Все слова на {{ $letter }} →</a>
    </div>
</x-layout>

    
