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
    <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-100">
    <header class="bg-white shadow">
    <div class="container mx-auto">
        <div class="flex items-center justify-between">
        <div>
            <a class="text-gray-800 font-bold text-xl tracking-tight" href="/">Our Website</a>
        </div>
        <div class="flex items-center">
            <a class="text-gray-600 hover:text-gray-800 px-3 py-2 rounded-md text-sm font-medium" href="/">Home</a>
            <a class="text-gray-600 hover:text-gray-800 px-3 py-2 rounded-md text-sm font-medium" href="/about-us">About</a>
            <a class="text-gray-600 hover:text-gray-800 px-3 py-2 rounded-md text-sm font-medium" href="/contact">Contact</a>

            @if(auth()->check() && auth()->user()->role == 'admin')
            <a class="text-gray-600 hover:text-gray-800 px-3 py-2 rounded-md text-sm font-medium" href="/admin/dashboard">Dashboard</a>
            @endif

            @if (auth()->check())
            <div class="flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ Auth::user()->name }}
            </div>

            <div class="flex items-center justify-center px-4 py-2 mx-8 my-8 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                </form>
            </div>
            @else
            <a href="/login">
                <button class="flex items-center justify-center px-4 py-2 mx-8 my-8 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Log in
                </button>
            </a>
            <a href="/register">
                <button class="flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Sign up
                </button>
            </a>
            @endif
        </div>
        </div>
    </div>
    </header>


    <main class="py-4">
            @yield('content')
        </main>

    <footer class="bg-gray-900 py-20 mt-20">
            <div class="sm:grid grid-cols-3 w-4/5 pb-10 m-auto border-b-2 border-gray-700">
                <div>
                    <h3 class="text-l sm:font-bold text-gray-100">
                        Pages
                    </h3>

                   




                    <ul class="py-4 sm:text-s pt-4 text-gray-400">
                        <li class="pb-1">
                            <a href="/" class="hover:text-gray-200">Home</a>
                        </li>
                        <li class="pb-1">
                            <a href="/" class="hover:text-gray-200">About Us</a>
                        </li>
                        <li class="pb-1">
                            <a href="/" class="hover:text-gray-200">Contact Us</a>
                        </li>

                     


                    </ul>


                    </ul>
                </div>

                <div>
                    <h3 class="text-l sm:font-bold text-gray-100">
                        Find Us
                    </h3>

                    <ul class="py-4 sm:text-s pt-4 text-gray-400">
                        <li class="pb-1">
                            <a href="/" class="hover:text-gray-200">What We Do</a>
                        </li>
                        <li class="pb-1">
                            <a href="/" class="hover:text-gray-200">FAQs</a>
                        </li>
                        <li class="pb-1">
                            <a href="/" class="hover:text-gray-200">Our Partners</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-l sm:font-bold text-gray-100">
                        Latest Posts
                    </h3>

                    <ul class="py-4 sm:text-s pt-4 text-gray-400">
                        <li class="pb-1">
                            <a href="/" class="hover:text-gray-200">Why We Love Tech</a>
                        </li>
                        <li class="pb-1">
                            <a href="/" class="hover:text-gray-200">Why Encryption is Important</a>
                        </li>
                        <li class="pb-1">
                            <a href="/" class="hover:text-gray-200">The Future of Artificial Intelligence</a>
                        </li>
                    </ul>
                </div>
            </div>

            <p class="w-25 w-4/5 pb-3 m-auto text-xl text-gray-100 pt-6 text-center">
                &copy; MyWebsite 2023 | All Rights Reserved.
            </p>
        </footer>
    </body>
       
    </div>
</html>
