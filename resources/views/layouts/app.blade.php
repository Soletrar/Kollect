<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="icon" type="image/x-icon" href="{{asset('favicon.png')}}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @livewireStyles

    @stack('head')
</head>
<body class="font-sans antialiased flex flex-col h-screen">
<div class="flex-grow bg-gray-100">
    @include('layouts.navigation')

    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>

@include('layouts.footer')

@livewireScripts
@livewire('livewire-ui-modal')
<script src="{{asset('js/app.js')}}"></script>
@stack('scripts')

</body>
</html>
