<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ur' ? 'rtl' : 'ltr' }}">

<x-layouts.header :title="__('kjaslkdfjasldkj;l')" />

<body class="">
    <div class="dropdown">
        <a href="{{ route('language.switch', 'en') }}">English</a> |
        <a href="{{ route('language.switch', 'ur') }}" style="font-family: 'Noto Nastaliq Urdu', serif;">اردو</a>
    </div>
    {{ app()->getLocale() }}
    <x-web.navbar />
    {{ $slot }}
</body>

</html>
