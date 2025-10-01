<x-layout>
    <x-slot name='title'>
		Словарь антонимов онлайн — подбор антонимов русского языка бесплатно
	</x-slot>

    <x-slot name="description">
        Онлайн словарь антонимов русского языка — находите точные и выразительные слова по смыслу. Бесплатный подбор антонимов для текста, речи и SEO без регистрации.
    </x-slot>

    <div class="header">
        <h1>Словарь антонимов русского языка</h1>

        <div class="intro-text">
            <h2>Добро пожаловать в словарь антонимов русского языка!</h2>

            <p>Сервис помогает быстро находить слова с противоположным значением. Подходит для любых тем — от художественных текстов до технических описаний. База большая, поиск простой.</p>

            <h2>Как пользоваться:</h2>

            <ul>
                <li><strong>Найти нужное слово</strong> - используйте поиск или выберите букву алфавита</li>
                <li><strong>Изучить антонимы</strong> - нажмите на любое слово чтобы увидеть его антонимы</li>
            </ul>

            <p>Словарь постоянно пополняется новыми словами и антонимами.</p>

            <div class="search-box">
                <form method="GET" action="{{ route('search.antonyms') }}">
                    <input type="text" name="search" class="search-input" placeholder="Введите слово для поиска...">
                    <button class="search-btn" type="submit">Найти антонимы</button>
                </form>
            </div>
        </div>
    </div>

    <div class="alphabet-nav">
        <div class="russian-letters">
    @foreach(['а','б','в','г','д','е','ж','з','и','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','э','ю','я'] as $letter)
        <a href="{{ route('show.antonyms.words') }}?letter={{ $letter }}" class="letter-btn">{{ mb_strtoupper($letter) }}</a>
    @endforeach
</div>

    </div>
</x-layout>