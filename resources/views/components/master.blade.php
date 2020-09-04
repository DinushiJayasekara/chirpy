<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <nav class="flex items-center justify-between flex-wrap bg-white-100 px-6 py-2">
        <div class="flex items-center flex-shrink-0 mr-6">
            <img src="/images/logo1.png" width="140px" alt="Chirpy">
        </div>
        <div class="block lg:hidden">
            <button
                class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
            </div>

            <div>

                @guest
                    <a class="inline-block text-sm px-4 py-2 leading-none border rounded text-teal-900 border-teal hover:border-transparent hover:text-teal-700 hover:bg-white mt-4 lg:mt-0"
                        href="{{ route('login') }}">{{ __('Login') }}</a>

                    @if (Route::has('register'))
                        <a class="inline-block text-sm px-4 py-2 leading-none border rounded text-teal-900 border-teal hover:border-transparent hover:text-teal-700 hover:bg-white mt-4 lg:mt-0"
                            href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif

                @else

                    <a class="inline-block text-sm px-4 py-2 leading-none border rounded text-teal-900 border-teal hover:border-transparent hover:text-teal-700 hover:bg-white mt-4 lg:mt-0"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                @endguest
            </div>
        </div>
    </nav>
</head>

<body>
    <div id="app" class="mt-10">

        {{ $slot }}

    </div>
</body>

</html>
