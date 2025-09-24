<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $description }}">

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title }} @php if(isset($_GET['page'])) echo 'Cтраница ' . $_GET['page']; @endphp</title>
    <style>
        :root {
            --primary: #4CAF50;
            --primary-dark: #388E3C;
            --secondary: #2196F3;
            --text: #333;
            --light-bg: #f5f5f5;
            --border: #ddd;
        }

        body {
            font-family: 'Arial', sans-serif;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: var(--light-bg);
            line-height: 1.6;
        }

        .header {
            margin-bottom: 40px;
        }

        h1 {
            color: var(--primary-dark);
            text-align: center;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
        }

        .intro-text {
            background: white;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 30px;
            line-height: 1.7;
            color: #555;
        }

        .intro-text h2 {
            color: var(--primary-dark);
            margin-bottom: 15px;
            font-size: 1.3em;
        }

        .intro-text ul {
            margin: 15px 0;
            padding-left: 20px;
        }

        .intro-text li {
            margin-bottom: 8px;
        }

        .search-box {
            display: flex;
            gap: 10px;
            margin: 25px 0;
            max-width: 500px;
        }

        .search-input {
            flex: 1;
            padding: 12px;
            border: 2px solid var(--border);
            border-radius: 5px;
            font-size: 16px;
        }

        .search-btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .search-btn:hover {
            background: var(--primary-dark);
        }

        .alphabet-nav {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: center;
            margin: 30px 0;
            padding: 20px;
            background: white;
            border-radius: 10px;
        }

        .letter-btn {
            padding: 10px 15px;
            border: 2px solid var(--border);
            background: white;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s;
            text-decoration: none;
            color: var(--text);
            min-width: 45px;
            text-align: center;
        }

        .letter-btn:hover {
            background: var(--light-bg);
            transform: translateY(-2px);
        }

        .letter-btn.active {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .letter-section {
            margin-bottom: 40px;
        }

        .letter-header {
            color: var(--primary-dark);
            font-size: 1.8em;
            font-weight: bold;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--border);
        }

        .words-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 5px;
            margin-bottom: 10px;
        }

        .word-link {
            color: var(--secondary);
            text-decoration: none;
            padding: 5px;
            transition: all 0.3s;
            display: inline-block;
        }

        .word-link:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        .empty-message {
            color: #666;
            font-style: italic;
            padding: 20px;
            text-align: center;
        }

        .search-results {
            margin-bottom: 30px;
        }

        .search-header {
            color: var(--primary-dark);
            font-size: 1.4em;
            margin-bottom: 15px;
        }

        .footer {
            text-align: center;
            margin-top: 50px;
            padding: 20px;
            color: #666;
            font-size: 0.9em;
            border-top: 1px solid var(--border);
        }

        @media (max-width: 768px) {
            .words-list {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            }
        }

        .russian-letters {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: center;
        }

        :root {
            --primary: #4CAF50;
            --primary-dark: #388E3C;
            --secondary: #2196F3;
            --text: #333;
            --light-bg: #f5f5f5;
            --border: #ddd;
        }

        body {
            font-family: 'Arial', sans-serif;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: var(--light-bg);
            line-height: 1.6;
        }

        .header {
            margin-bottom: 30px;
        }

        h1 {
            color: var(--primary-dark);
            text-align: center;
            margin-bottom: 10px;
        }

        .breadcrumbs {
            text-align: center;
            margin-bottom: 20px;
            color: #666;
        }

        .breadcrumbs a {
            color: var(--secondary);
            text-decoration: none;
        }

        .breadcrumbs a:hover {
            text-decoration: underline;
        }

        .letter-info {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-align: center;
        }

        .letter-title {
            font-size: 3em;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .word-count {
            color: #666;
            font-size: 1.1em;
        }

        .search-box {
            display: flex;
            gap: 10px;
            margin: 20px 0;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .search-input {
            flex: 1;
            padding: 12px;
            border: 2px solid var(--border);
            border-radius: 5px;
            font-size: 16px;
        }

        .search-btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .search-btn:hover {
            background: var(--primary-dark);
        }

        .words-section {
            background: white;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .words-list {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .word-link {
            color: var(--secondary);
            text-decoration: none;
            padding: 8px 15px;
            border: 1px solid var(--border);
            border-radius: 5px;
            transition: all 0.3s;
            display: inline-block;
        }

        .word-link:hover {
            background: var(--light-bg);
            color: var(--primary-dark);
            transform: translateY(-2px);
        }

        .alphabet-nav {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: center;
            margin: 30px 0;
            padding: 20px;
            background: white;
            border-radius: 10px;
        }

        .letter-btn {
            padding: 8px 12px;
            border: 2px solid var(--border);
            background: white;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s;
            text-decoration: none;
            color: var(--text);
            min-width: 40px;
            text-align: center;
        }

        .letter-btn:hover {
            background: var(--light-bg);
        }

        .letter-btn.current {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .footer {
            text-align: center;
            margin-top: 50px;
            padding: 20px;
            color: #666;
            font-size: 0.9em;
            border-top: 1px solid var(--border);
        }

        /* Мобильная версия */
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }
            
            .letter-title {
                font-size: 2.5em;
            }
            
            .search-box {
                flex-direction: column;
            }
            
            .words-list {
                gap: 8px;
            }
            
            .word-link {
                padding: 6px 12px;
                font-size: 14px;
            }
            
            .alphabet-nav {
                gap: 5px;
                padding: 15px;
            }
            
            .letter-btn {
                padding: 6px 10px;
                min-width: 35px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .letter-title {
                font-size: 2em;
            }
            
            .words-list {
                gap: 6px;
            }
            
            .word-link {
                padding: 5px 10px;
                font-size: 12px;
            }
            
            .alphabet-nav {
                gap: 3px;
            }
            
            .letter-btn {
                padding: 5px 8px;
                min-width: 30px;
                font-size: 12px;
            }
        }

        .russian-letters {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: center;
        }

        .pagination nav {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    margin: 30px 0;
    flex-wrap: wrap;
}

.pagination nav .relative {
    padding: 8px 12px;
    border: 1px solid var(--border);
    background: white;
    border-radius: 5px;
    color: var(--text);
    text-decoration: none;
    transition: all 0.3s;
    min-width: 40px;
    text-align: center;
}

.pagination nav .relative:hover:not(.disabled) {
    background: var(--light-bg);
}

.pagination nav .bg-blue-100 {
    background: var(--primary);
    color: white;
    border-color: var(--primary);
}

.pagination .page-info {
    margin: 0 15px;
    color: #666;
    font-size: 14px;
}

/* Мобильная версия */
@media (max-width: 768px) {
    .pagination nav {
        gap: 5px;
    }
    
    .pagination nav .relative {
        padding: 6px 10px;
        font-size: 14px;
        min-width: 35px;
    }
}

:root {
            --primary: #4CAF50;
            --primary-dark: #388E3C;
            --secondary: #2196F3;
            --text: #333;
            --light-bg: #f5f5f5;
            --border: #ddd;
        }

        body {
            font-family: 'Arial', sans-serif;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: var(--light-bg);
            line-height: 1.6;
        }

        .header {
            margin-bottom: 30px;
        }

        .breadcrumbs {
            margin-bottom: 20px;
            color: #666;
        }

        .breadcrumbs a {
            color: var(--secondary);
            text-decoration: none;
        }

        .breadcrumbs a:hover {
            text-decoration: underline;
        }

        h1 {
            color: var(--primary-dark);
            text-align: center;
            margin-bottom: 30px;
        }

        .word-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-align: center;
        }

        .word-title {
            font-size: 2.5em;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .word-meta {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .part-of-speech {
            background: var(--secondary);
            color: white;
            padding: 5px 15px;
            border-radius: 15px;
            font-size: 0.9em;
        }

        .definition {
            color: #666;
            font-size: 1.1em;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto;
        }

        .synonyms-section {
            background: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .section-title {
            color: var(--primary-dark);
            font-size: 1.5em;
            margin-bottom: 20px;
            text-align: center;
        }

        .synonyms-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
        }

        .synonym-card {
            background: var(--light-bg);
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid var(--primary);
            transition: all 0.3s;
        }

        .synonym-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .synonym-word {
            font-size: 1.3em;
            font-weight: bold;
            color: var(--primary-dark);
            margin-bottom: 8px;
        }

        .synonym-definition {
            color: #666;
            font-size: 0.9em;
            line-height: 1.4;
        }

        .examples-section {
            background: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .example-item {
            margin-bottom: 15px;
            padding: 15px;
            background: var(--light-bg);
            border-radius: 5px;
            border-left: 3px solid var(--secondary);
        }

        .example-text {
            margin-bottom: 5px;
        }

        .example-with-synonym {
            color: var(--primary);
            font-style: italic;
        }

        .navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }

        .nav-btn {
            padding: 12px 24px;
            border: 2px solid var(--primary);
            background: white;
            color: var(--primary);
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s;
        }

        .nav-btn:hover {
            background: var(--primary);
            color: white;
        }

        .footer {
            text-align: center;
            margin-top: 50px;
            padding: 20px;
            color: #666;
            font-size: 0.9em;
            border-top: 1px solid var(--border);
        }

        /* Мобильная версия */
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }
            
            .word-card {
                padding: 20px;
            }
            
            .word-title {
                font-size: 2em;
            }
            
            .word-meta {
                gap: 10px;
            }
            
            .synonyms-grid {
                grid-template-columns: 1fr;
            }
            
            .synonyms-section, .examples-section {
                padding: 20px;
            }
            
            .navigation {
                flex-direction: column;
                gap: 10px;
            }
            
            .nav-btn {
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .word-title {
                font-size: 1.7em;
            }
            
            .synonym-card {
                padding: 15px;
            }
            
            .synonym-word {
                font-size: 1.1em;
            }
        }

        :root {
            --primary: #4CAF50;
            --primary-dark: #388E3C;
            --secondary: #2196F3;
            --text: #333;
            --light-bg: #f5f5f5;
            --border: #ddd;
        }

        body {
            font-family: 'Arial', sans-serif;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: var(--light-bg);
            line-height: 1.6;
        }

        .header {
            margin-bottom: 30px;
        }

        .breadcrumbs {
            margin-bottom: 20px;
            color: #666;
        }

        .breadcrumbs a {
            color: var(--secondary);
            text-decoration: none;
        }

        .breadcrumbs a:hover {
            text-decoration: underline;
        }

        h1 {
            color: var(--primary-dark);
            margin-bottom: 10px;
        }

        .search-info {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .query {
            color: var(--primary);
            font-weight: bold;
        }

        .results-count {
            color: #666;
            margin-top: 10px;
        }

        .search-box {
            display: flex;
            gap: 10px;
            margin: 20px 0;
        }

        .search-input {
            flex: 1;
            padding: 12px;
            border: 2px solid var(--border);
            border-radius: 5px;
            font-size: 16px;
        }

        .search-btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .search-btn:hover {
            background: var(--primary-dark);
        }

        .results-section {
            background: white;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .results-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .result-item {
            padding: 20px;
            border: 1px solid var(--border);
            border-radius: 8px;
            transition: all 0.3s;
        }

        .result-item:hover {
            border-color: var(--primary);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .result-word {
            font-size: 1.3em;
            font-weight: bold;
            color: var(--primary-dark);
            margin-bottom: 8px;
        }

        .result-meta {
            display: flex;
            gap: 15px;
            margin-bottom: 10px;
            flex-wrap: wrap;
        }

        .part-of-speech {
            background: var(--secondary);
            color: white;
            padding: 3px 10px;
            border-radius: 12px;
            font-size: 0.8em;
        }

        .result-definition {
            color: #666;
            margin-bottom: 10px;
            line-height: 1.5;
        }

        .synonyms-preview {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 10px;
        }

        .synonym-tag {
            background: var(--light-bg);
            padding: 4px 10px;
            border-radius: 15px;
            font-size: 0.9em;
            color: #666;
            border: 1px solid var(--border);
        }

        .no-results {
            text-align: center;
            padding: 40px;
            color: #666;
        }

        .suggestions {
            margin-top: 20px;
        }

        .suggestions-title {
            color: var(--primary-dark);
            margin-bottom: 10px;
        }

        .suggestions-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .suggestion {
            color: var(--secondary);
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid var(--border);
            border-radius: 5px;
            transition: all 0.3s;
        }

        .suggestion:hover {
            background: var(--light-bg);
            color: var(--primary-dark);
        }

        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin: 30px 0;
            flex-wrap: wrap;
        }

        .page-btn {
            padding: 8px 12px;
            border: 1px solid var(--border);
            background: white;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            color: var(--text);
        }

        .page-btn:hover:not(.disabled) {
            background: var(--light-bg);
        }

        .page-btn.active {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .page-btn.disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .page-info {
            margin: 0 15px;
            color: #666;
        }

        .footer {
            text-align: center;
            margin-top: 50px;
            padding: 20px;
            color: #666;
            font-size: 0.9em;
            border-top: 1px solid var(--border);
        }

        /* Мобильная версия */
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }
            
            .search-box {
                flex-direction: column;
            }
            
            .result-item {
                padding: 15px;
            }
            
            .result-meta {
                gap: 10px;
            }
            
            .result-word {
                font-size: 1.1em;
            }
            
            .pagination {
                gap: 5px;
            }
            
            .page-btn {
                padding: 6px 10px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .result-meta {
                flex-direction: column;
                gap: 5px;
            }
            
            .synonyms-preview {
                gap: 5px;
            }
            
            .synonym-tag {
                font-size: 0.8em;
                padding: 3px 8px;
            }
            
            .page-info {
                margin: 0 10px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    {{ $slot }}
    <div class="footer">
        <p>Словарь синонимов русского языка © @php echo date('Y'); @endphp</p>
    </div>
</body>
</html>