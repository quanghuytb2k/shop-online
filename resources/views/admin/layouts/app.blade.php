<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <link href="{{asset('css/font-awesome/css/font-awesome.css')}}" rel="stylesheet"/>
    <link href="{{url('/css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <script src="{{url('/js/jquery-3.5.0.min.js')}}" type="text/javascript"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    <div class="flex w-screen h-screen text-gray-700">
        @include('admin.layouts.header')
        <div class="flex flex-col flex-grow">
            <div class="flex items-center flex-shrink-0 h-16 px-8 border-b border-gray-300">
                <h1 class="text-lg font-medium">Page Title</h1>
                <button
                    class="flex items-center justify-center h-10 px-4 ml-auto text-sm font-medium rounded hover:bg-gray-300">
                    Action 1
                </button>
                <button
                    class="flex items-center justify-center h-10 px-4 ml-2 text-sm font-medium bg-gray-200 rounded hover:bg-gray-300">
                    Action 2
                </button>
                <button class="relative ml-2 text-sm focus:outline-none group">
                    <div class="flex items-center justify-between w-10 h-10 rounded hover:bg-gray-300">
                        <svg class="w-5 h-5 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                        </svg>
                    </div>
                    <div
                        class="absolute right-0 flex-col items-start hidden w-40 pb-1 bg-white border border-gray-300 shadow-lg group-focus:flex">
                        <a class="w-full px-4 py-2 text-left hover:bg-gray-300" href="#">Menu Item 1</a>
                        <a class="w-full px-4 py-2 text-left hover:bg-gray-300" href="#">Menu Item 1</a>
                        <a class="w-full px-4 py-2 text-left hover:bg-gray-300" href="#">Menu Item 1</a>
                    </div>
                </button>
            </div>
            @yield('content')
        </div>
    </div>
</div>
<div class="footer">
    @include('admin.layouts.footer')
</div>

<script src="{{ asset('/js/jquery-3.5.0.min.js') }}"></script>
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/js/main.js') }}"></script>
</body>
</html>
