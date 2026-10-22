<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title . ' | ' . __('app.name') }}</title>
    <meta name="description" content="{{ $description ?? __('app.description') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/app-logo.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}" type="image/png">
    <meta property="og:image" content="{{ asset('assets/app-logo.png') }}" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="512" />
    <meta property="og:image:height" content="512" />
    <meta property="og:title" content="{{ __('app.name') }}" />
    <meta property="og:type" content="Food Items Supply Chain">
    <meta property="og:url" content="{{ config('app.url') }}" />
    {{ $slot }}

    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @if (app()->getLocale() == 'ur')
        <style>
            * {
                font-family: "Noto Nastaliq Urdu", serif;
                font-optical-sizing: auto;
                font-weight: 550;
                font-style: normal;
            }
        </style>
    @endif
    @if (app()->getLocale() == 'en')
        <style>
            * {
                font-family: "Roboto", sans-serif;
                font-optical-sizing: auto;
                font-weight: 500;
                font-style: normal;
                font-variation-settings: "wdth" 100;
            }
        </style>
    @endif
    <script>
        function applyTheme() {
            const theme = localStorage.getItem('theme');
            document.documentElement.classList.toggle(
                'dark',
                theme === 'dark' ||
                (!theme && window.matchMedia('(prefers-color-scheme: dark)').matches)
            );
        }
        applyTheme();
        document.addEventListener('livewire:navigated', applyTheme);
    </script>
    @if (file_exists(public_path('assets/css/app.css')))
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    @else
        @vite('resources/css/app.css')
    @endif
    @livewireStyles
</head>
