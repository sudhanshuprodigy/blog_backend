<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>


<body>
    <div class="flex flex-wrap py-2">
        <div class="w-full px-4">
            <nav class="relative flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg bg-indigo-500 rounded">
                <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
                    <div class="w-full relative flex justify-between lg:w-auto px-4 lg:static lg:block lg:justify-start">
                        <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-white" href="{{url('/')}}">
                            Laravel Blog
                        </a>
                        <button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button">
                            <span class="block relative w-6 h-px rounded-sm bg-white"></span>
                            <span class="block relative w-6 h-px rounded-sm bg-white mt-1"></span>
                            <span class="block relative w-6 h-px rounded-sm bg-white mt-1"></span>
                        </button>
                    </div>
                    @if (Route::has('login'))
                    <div class="flex lg:flex-grow items-center" id="example-navbar-info">
                        <ul class="flex flex-col lg:flex-row list-none ml-auto">
                            <li class="nav-item">
                                @auth
                                <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="{{ url('/dashboard') }}">
                                    Dashboard
                                </a>
                                @else
                                <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="{{ route('login') }}">
                                    Login
                                </a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="{{ route('register') }}">
                                    Register
                                </a>
                            </li>
                            @endif
                            @endauth
                        </ul>
                    </div>
                    @endif
                </div>
            </nav>
        </div>
    </div>

    @yield('content')
</body>

</html>