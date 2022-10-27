@extends('layouts.app')
@section('content')
    <section class="mt-48 md:mt-40 pb-20 relative bg-blueGray-100">



        <div class="container mx-auto px-4 pb-6 pt-20">
            <div class="items-center flex flex-wrap">
                <div class="w-full md:w-5/12 ml-auto px-12 md:px-4">
                    <div class="md:pr-12">
                        <div
                            class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                            <i class="fas fa-file-alt text-xl"></i></div>
                        <h3 class="text-3xl font-semibold">شركة الاتقان الدائم</h3>
                        <p class="mt-4 text-lg leading-relaxed text-blueGray-500 ">برنامج متابعة أعمال الصيانة في عقود الصيانة والنظافة بمحاكم منطقة مكة المكرمة</p>
                        <ul class="list-none mt-6">
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div><span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-blueGray-50 mr-3"><i
                                                class="fas fa-fingerprint"></i></span></div>
                                    <div>
                                        <h4 class="text-blueGray-500">تنظيم العمل</h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div><span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-blueGray-50 mr-3"><i
                                                class="fab fa-html5"></i></span></div>
                                    <div>
                                        <h4 class="text-blueGray-500">متابعة تقييمات المحاكم وكابتات العدل</h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div><span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blueGray-500 bg-blueGray-50 mr-3"><i
                                                class="far fa-paper-plane"></i></span></div>
                                    <div>
                                        <h4 class="text-blueGray-500">برنامج طلبات الصيانة</h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full md:w-6/12 mr-auto px-4 pt-24 md:pt-0"><img alt="..."
                        class="max-w-full rounded-lg shadow-2xl"
                        src="/img/1.jpeg"
                        style="transform: scale(1) perspective(1040px) rotateY(-11deg) rotateX(2deg) rotate(0deg);"></div>
            </div>
        </div>
        <div class="justify-center text-center flex flex-wrap mt-24">
            <div class="w-full md:w-6/12 px-12 md:px-4">
                <h2 class="font-semibold text-4xl">شركة الأتقان الدائم</h2>
                <p class="text-lg leading-relaxed mt-4 mb-3 text-blueGray-500">شركة ذات مسؤولية محدودة  </p>
                <p class="text-lg leading-relaxed mt-4 mb-3 text-blueGray-500"> مقر الشركة في مدينة خميس مشيط </p>
                <p class="text-lg leading-relaxed mt-4 mb-3 text-blueGray-500"> البريد الالكتروني للشركة  info@test.com</p>
            </div>
        </div>
    </section>

    {{-- <div class="container">

   <div
            class="relative flex items-top justify-center min-h-screen bg-gray-300 dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

                <div class=" bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs"
                                        class="underline text-gray-900 dark:text-white">موقع تحت الانشاء </a></div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    خاص بمتابعة عقود الصيانة والنظافة بجميع العقود التابعة للشركة
                                </div>
                            </div>
                        </div>
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com"
                                        class="underline text-gray-900 dark:text-white">تصميم</a></div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    تصميم وبرمجه المهندس/ بندر السهلي
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="postforms"
                                        class="underline text-gray-900 dark:text-white">استمارة التقييم من قبل الإدارات</a>
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    خاص بمتابعة عقود الصيانة والنظافة بجميع العقود التابعة للشركة
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
