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

    {{-- @client --}}




	@vite('resources/js/some-script.js')
     @vite('resources/resources/js/app.js')
    @vite('resources/css/app.css')
    <!-- Stuff -->
    {{-- {{ vite_assets() }} --}}
    <!-- More Stuff -->

    @yeild('js')

</head>

<body>

    <nav
        class="top-0 rtl:fixed rtl:z-50 rtl:w-full rtl:flex rtl:flex-wrap rtl:items-center rtl:justify-between rtl:px-2 rtl:py-3 rtl:navbar-expand-lg bg-white shadow">
        <div class="container px-4 mx-auto flex flex-wrap items-center rtl:justify-between">

            <div class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden rtl:justify-between"
                id="example-navbar-warning">

                <li class="flex items-center"><a
                        class="bg-blue-500 text-white active:bg-blueGray-600 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
                        href="/login"><i class="fas fa-arrow-alt-circle-down"></i> تسجيل الدخول</a></li>

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


    <main class="py-4">
        <div class=" text-blueGray-700 antialiased bg-blueGray-800 mt-16" cz-shortcut-listen="true">


            <nav
                class="md:left-0 md:block md:fixed md:top-20 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
                <div
                    class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
                    <button
                        class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                        type="button"><i class="fas fa-bars"></i></button><a href="#pablo"
                        class="md:block text-center md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0">لوحة
                        التحكم الرئيسية
                    </a>

                    <div
                        class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden">
                        <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200">
                            <div class="flex flex-wrap">
                                <div class="w-6/12"><a href="#pablo"
                                        class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0">Notus
                                        NextJS</a></div>
                                <div class="w-6/12 flex justify-end"><button type="button"
                                        class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"><i
                                            class="fas fa-times"></i></button></div>
                            </div>
                        </div>
                        <form class="mt-6 mb-4 md:hidden">
                            <div class="mb-3 pt-0"><label for="html">HTML</label><br> <input type="text" placeholder="Search"
                                    class="border-0 px-3 py-2 h-12 border border-solid  border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal">
                            </div>
                        </form>
                        <hr class="my-4 md:min-w-full">
                        <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                            لوحة تحكم الادمن</h6>
                        <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                            <li class="items-center"><a href="{{ url('admin') }}"
                                    class="text-xs uppercase py-3 font-bold block text-lightBlue-500 hover:text-lightBlue-600"><i
                                        class="fas fa-tv mr-2 text-sm opacity-75"></i> الرئيسية</a></li>
                            <li class="items-center"><a href= "{{ url('admin/supervisor') }}"
                                    class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"
                                    id="show_mashrefen"><i class="fas fa-tools mr-2 text-sm text-blueGray-300"></i> المشرفين</a>
                            </li>
                            <li class="items-center"><a href="{{ url('admin/technicians') }}"
                                    class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"><i
                                        class="fas fa-table mr-2 text-sm text-blueGray-300"></i> الفنيين</a></li>
                            <li class="items-center"><a href="{{ url('admin/technicians') }}"
                                    class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"><i
                                        class="fas fa-map-marked mr-2 text-sm text-blueGray-300"></i> العمال التابعين للشركة</a>
                            </li>
                        </ul>
                        <hr class="my-4 md:min-w-full">
                        <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                            اسماء المستخدمين</h6>
                        <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                            <li class="items-center"><a href="#pablo"
                                    class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"><i
                                        class="fas fa-fingerprint text-blueGray-400 mr-2 text-sm"></i> اونلاين</a></li>
                            <li class="items-center"><a href="#pablo"
                                    class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"><i
                                        class="fas fa-clipboard-list text-blueGray-300 mr-2 text-sm"></i> الصلاحيات</a></li>
                        </ul>
                        <hr class="my-4 md:min-w-full">
                        <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                            No Layout Pages</h6>
                        <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                            <li class="items-center"><a href="#pablo"
                                    class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"><i
                                        class="fas fa-newspaper text-blueGray-400 mr-2 text-sm"></i> الاعدادت العامة</a></li>
                            <li class="items-center"><a href="#pablo"
                                    class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"><i
                                        class="fas fa-user-circle text-blueGray-400 mr-2 text-sm"></i> اعدادت الموقع</a>
                            </li>
                        </ul>
                        <hr class="my-4 md:min-w-full">

                    </div>
                </div>
            </nav>
        @yield('content')
        </div>
    </main>

    <footer class="relative bg-blueGray-200 pt-8 pb-6">


        <hr class="my-6 border-blueGray-300">
        <div class="flex flex-wrap items-center md:justify-between justify-center rtl:text-left">
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-sm text-blueGray-500 font-semibold py-1 text-right">Copyright © 2022 ALTQAN ALDAIM by
                    <a href="https://www.creative-tim.com?ref=nnjs-footer"
                        class="text-blueGray-500 hover:text-blueGray-800 rtl:text-right">ENG.BANDAR</a></div>
            </div>
        </div>
        </div>
    </footer>
    </div>
</body>

</html>
