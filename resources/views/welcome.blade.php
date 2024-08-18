<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        }
        body {
            margin: 0;
            font-family: 'Nunito', sans-serif;
            line-height: 1.5;
            background-color: #f7fafc;
            color: #4a5568;
        }
        a {
            background-color: transparent;
            color: inherit;
            text-decoration: inherit;
        }
        [hidden] {
            display: none;
        }
        *, *::before, *::after {
            box-sizing: border-box;
            border: 0 solid #e2e8f0;
        }
        svg, video {
            display: block;
            vertical-align: middle;
        }
        video {
            max-width: 100%;
            height: auto;
        }
        .bg-white { background-color: #fff; }
        .bg-gray-100 { background-color: #f7fafc; }
        .border-gray-200 { border-color: #edf2f7; }
        .border-t { border-top-width: 1px; }
        .flex { display: flex; }
        .grid { display: grid; }
        .hidden { display: none; }
        .items-center { align-items: center; }
        .justify-center { justify-content: center; }
        .font-semibold { font-weight: 600; }
        .h-5 { height: 1.25rem; }
        .h-8 { height: 2rem; }
        .h-16 { height: 4rem; }
        .text-sm { font-size: .875rem; }
        .text-lg { font-size: 1.125rem; }
        .leading-7 { line-height: 1.75rem; }
        .mx-auto { margin-left: auto; margin-right: auto; }
        .ml-1 { margin-left: .25rem; }
        .mt-2 { margin-top: .5rem; }
        .mr-2 { margin-right: .5rem; }
        .ml-2 { margin-left: .5rem; }
        .mt-4 { margin-top: 1rem; }
        .ml-4 { margin-left: 1rem; }
        .mt-8 { margin-top: 2rem; }
        .ml-12 { margin-left: 3rem; }
        .-mt-px { margin-top: -1px; }
        .max-w-6xl { max-width: 72rem; }
        .min-h-screen { min-height: 100vh; }
        .overflow-hidden { overflow: hidden; }
        .p-6 { padding: 1.5rem; }
        .py-4 { padding-top: 1rem; padding-bottom: 1rem; }
        .px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
        .pt-8 { padding-top: 2rem; }
        .fixed { position: fixed; }
        .relative { position: relative; }
        .top-0 { top: 0; }
        .right-0 { right: 0; }
        .shadow { box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06); }
        .text-center { text-align: center; }
        .text-gray-200 { color: #edf2f7; }
        .text-gray-300 { color: #e2e8f0; }
        .text-gray-400 { color: #cbd5e0; }
        .text-gray-500 { color: #a0aec0; }
        .text-gray-600 { color: #718096; }
        .text-gray-700 { color: #4a5568; }
        .text-gray-900 { color: #1a202c; }
        .underline { text-decoration: underline; }
        .antialiased { -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
        .w-5 { width: 1.25rem; }
        .w-8 { width: 2rem; }
        .w-auto { width: auto; }
        .grid-cols-1 { grid-template-columns: repeat(1, minmax(0, 1fr)); }
        @media (min-width: 640px) {
            .sm\:rounded-lg { border-radius: .5rem; }
            .sm\:block { display: block; }
            .sm\:items-center { align-items: center; }
            .sm\:justify-start { justify-content: flex-start; }
            .sm\:justify-between { justify-content: space-between; }
            .sm\:h-20 { height: 5rem; }
            .sm\:ml-0 { margin-left: 0; }
            .sm\:px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
            .sm\:pt-0 { padding-top: 0; }
            .sm\:text-left { text-align: left; }
            .sm\:text-right { text-align: right; }
        }
        @media (min-width: 768px) {
            .md\:border-t-0 { border-top-width: 0; }
            .md\:border-l { border-left-width: 1px; }
            .md\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }
        @media (min-width: 1024px) {
            .lg\:px-8 { padding-left: 2rem; padding-right: 2rem; }
        }
        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 { background-color: #2d3748; }
            .dark\:bg-gray-900 { background-color: #1a202c; }
            .dark\:border-gray-700 { border-color: #4a5568; }
            .dark\:text-white { color: #fff; }
            .dark\:text-gray-400 { color: #cbd5e0; }
        }
        .highlighted-heading {
            font-size: 4rem;
            font-weight: 700;
            background: linear-gradient(90deg, #ff7e5f, #feb47b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            padding: 1rem;
            border-radius: 0.5rem;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin: 0 auto;
            max-width: 80%;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }
        .highlighted-heading:hover {
            transform: scale(1.05);
            background-color: #feb47b;
        }
        .message {
            font-size: 1.125rem;
            font-weight: 500;
            color: #2d3748;
            background: #fff;
            padding: 1rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 2rem;
            line-height: 1.6;
        }
        .message a {
            color: #3182ce;
            text-decoration: underline;
            font-weight: 600;
        }
        .message a:hover {
            color: #2b6cb0;
        }
    </style>
</head>
<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <div class="message">
                    <h1 class="highlighted-heading">
                        <a href="{{ url('/products') }}">This is Products list page</a>
                    </h1>
                    <br/>
                    <br/>
                    This product information is crawled from the site: 
                    <a href="https://www.lazada.vn/locklock-flagship-store/?q=All-Products&from=wangpu&langFlag=vi&pageTypeId=2" target="_blank">
                        https://www.lazada.vn/locklock-flagship-store/?q=All-Products&from=wangpu&langFlag=vi&pageTypeId=2
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
