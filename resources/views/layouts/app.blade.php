<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Scripts -->
    {{-- @viteReactRefresh --}}
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    {{-- @client

	@vite('resources/js/some-script.js') --}}

    {{-- @vite('resources/css/app.css') --}}
    <!-- Stuff -->
    {{ vite_assets() }}
    <!-- More Stuff -->



</head>

<body>

    <nav
        class="top-0 rtl:fixed rtl:z-50 rtl:w-full rtl:flex rtl:flex-wrap rtl:items-center rtl:justify-between rtl:px-2 rtl:py-3 rtl:navbar-expand-lg bg-white shadow">
        <div class="container px-4 mx-auto flex flex-wrap items-center rtl:justify-between">

            <div class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden rtl:justify-between"
                id="example-navbar-warning">

                <li class="flex items-center"><a
                        class="bg-blue-500 text-white active:bg-blueGray-600 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
                        href="/login"><i
                            class="fas fa-arrow-alt-circle-down"></i> تسجيل الدخول</a></li>

                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    <li class="flex items-center"><a
                            class="hover:text-blueGray-500 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-base uppercase font-bold"
                            href="/">الرئيسية</a>

                    </li>
                    <li class="flex items-center"><a
                            class="hover:text-blueGray-500 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-base uppercase font-bold"
                            href="/taqeim">تسجيل تقييم عمال</a></li>
                    <li class="flex items-center"><a
                            class="hover:text-blueGray-500 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-base uppercase font-bold"
                            href="/da3m">طلبات داعم</a></li>
                    <li class="flex items-center"><a
                            class="hover:text-blueGray-500 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-base uppercase font-bold"
                            href="/monthly">الصيانة الشهرية</a></li>



                </ul>
            </div>
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"><a
                    class="text-blueGray-700 text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase"
                    href="#pablo">Aljorypro</a><button
                    class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                    type="button"><i class="fas fa-bars"></i></button></div>
        </div>
    </nav>





    {{-- href="{{ url('/') }}"
      {{ config('app.name', 'Laravel') }} --}}

    {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}


    <!-- Left Side Of Navbar -->


    {{-- <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul> --}}


    <main class="py-4">
        @yield('content')
    </main>

    <footer class="relative bg-blueGray-200 pt-8 pb-6">


            <hr class="my-6 border-blueGray-300">
            <div class="flex flex-wrap items-center md:justify-between justify-center rtl:text-left">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-blueGray-500 font-semibold py-1 text-right">Copyright © 2022 ALTQAN ALDAIM by <a
                            href="https://www.creative-tim.com?ref=nnjs-footer"
                            class="text-blueGray-500 hover:text-blueGray-800 rtl:text-right">ENG.BANDAR</a></div>
                </div>
            </div>
        </div>
    </footer>
    </div>
</body>

</html>
