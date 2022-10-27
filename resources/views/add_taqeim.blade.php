@extends('layouts.app')

@section('content')
    <section class="mt-5 md:mt-28 pb-20 relative bg-blueGray-100">



        <div class="container mx-auto px-4 pb-6">
            <div class="items-center flex flex-wrap">
                <div class="w-full md:w-12/12 ml-auto px-12 md:px-4">
                    <div class="md:pr-12">
                        <div
                            class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                            <i class="fas fa-file-alt text-xl"></i>
                        </div>



                        <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
                            <div class="w-full max-w-md space-y-8">
                                <div>
                                    <img class="mx-auto h-12 w-auto"
                                        src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                                        alt="Your Company">
                                    <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">تسجيل
                                        التقييم</h2>

                                </div>
                                <form class="mt-8 space-y-6" method="POST">


                                    <div class="mb-16 mt-16">
                                        <div class="mb-10">
                                            <input type="hidden" name="remember" value="true">
                                            <p class="mb-5">مستوى النظافة ؟</p>
                                            <div class="-space-y-px rounded-md shadow-sm flex items-center justify-between">

                                                <input type="radio" id="html" name="fav_language" value="HTML">
                                                <label for="html">ممتاز</label><br>
                                                <input type="radio" id="css" name="fav_language" value="CSS">
                                                <label for="css">جيد</label><br>
                                                <input type="radio" id="javascript" name="fav_language"
                                                    value="JavaScript">
                                                <label for="javascript">يحتاج تحسين</label>
                                                <input type="radio" id="javascript" name="fav_language"
                                                    value="JavaScript">
                                                <label for="javascript">ضعيف</label>
                                                <input type="radio" id="javascript" name="fav_language"
                                                    value="JavaScript">
                                                <label for="javascript">اخرى</label>


                                            </div>
                                        </div>
                                        <div class="mb-10">
                                            <input type="hidden" name="remember" value="true">
                                            <p class="mb-5">مستوى التكييف ؟</p>
                                            <div class="-space-y-px rounded-md shadow-sm flex items-center justify-between">

                                                <input type="radio" id="html" name="fav_language" value="HTML">
                                                <label for="html">ممتاز</label><br>
                                                <input type="radio" id="css" name="fav_language" value="CSS">
                                                <label for="css">جيد</label><br>
                                                <input type="radio" id="javascript" name="fav_language"
                                                    value="JavaScript">
                                                <label for="javascript">ضعيف</label>

                                                <input type="radio" id="javascript" name="fav_language"
                                                    value="JavaScript">
                                                <label for="javascript">اخرى</label>

                                            </div>
                                        </div>
                                        <div class="mb-10">
                                            <input type="hidden" name="remember" value="true">
                                            <p class="mb-5">مستوى الانارة ؟</p>
                                            <div class="-space-y-px rounded-md shadow-sm flex items-center justify-between">

                                                <input type="radio" id="html" name="fav_language" value="HTML">
                                                <label for="html">ممتاز</label><br>
                                                <input type="radio" id="css" name="fav_language" value="CSS">
                                                <label for="css">جيد</label><br>
                                                <input type="radio" id="javascript" name="fav_language"
                                                    value="JavaScript">
                                                <label for="javascript">يحتاج تحسين</label>
                                                <input type="radio" id="javascript" name="fav_language"
                                                    value="JavaScript">
                                                <label for="javascript">ضعيف</label>
                                                <input type="radio" id="javascript" name="fav_language"
                                                    value="JavaScript">
                                                <label for="javascript">اخرى</label>

                                            </div>
                                        </div>
                                        {{-- <div class="mb-10">
                                            <input type="hidden" name="remember" value="true">
                                            <p class="mb-5">مستوى النظافة ؟</p>
                                            <div
                                                class="-space-y-px rounded-md shadow-sm flex items-center justify-between">

                                                <input type="radio" id="html" name="fav_language" value="HTML">
                                                <label for="html">HTML</label><br>
                                                <input type="radio" id="css" name="fav_language" value="CSS">
                                                <label for="css">CSS</label><br>
                                                <input type="radio" id="javascript" name="fav_language"
                                                    value="JavaScript">
                                                <label for="javascript">JavaScript</label>
                                                <input type="radio" id="javascript" name="fav_language"
                                                    value="JavaScript">
                                                <label for="javascript">JavaScript</label>
                                                <input type="radio" id="javascript" name="fav_language"
                                                    value="JavaScript">
                                                <label for="javascript">JavaScript</label>

                                            </div>
                                        </div> --}}
                                        {{-- <div class="mb-10">
                                            <input type="hidden" name="remember" value="true">
                                            <p class="mb-5">مستوى النظافة ؟</p>
                                            <div
                                                class="-space-y-px rounded-md shadow-sm flex items-center justify-between">

                                                <input type="radio" id="html" name="fav_language" value="HTML">
                                                <label for="html">HTML</label><br>
                                                <input type="radio" id="css" name="fav_language" value="CSS">
                                                <label for="css">CSS</label><br>
                                                <input type="radio" id="javascript" name="fav_language"
                                                    value="JavaScript">
                                                <label for="javascript">JavaScript</label>
                                                <input type="radio" id="javascript" name="fav_language"
                                                    value="JavaScript">
                                                <label for="javascript">JavaScript</label>
                                                <input type="radio" id="javascript" name="fav_language"
                                                    value="JavaScript">
                                                <label for="javascript">JavaScript</label>

                                            </div>
                                        </div> --}}
                                        {{-- <div class="mb-10">
                                            <input type="hidden" name="remember" value="true">
                                            <p class="mb-5">مستوى النظافة ؟</p>
                                            <div
                                                class="-space-y-px rounded-md shadow-sm flex items-center justify-between">

                                                <input type="radio" id="html" name="fav_language" value="HTML">
                                                <label for="html">HTML</label><br>
                                                <input type="radio" id="css" name="fav_language" value="CSS">
                                                <label for="css">CSS</label><br>
                                                <input type="radio" id="javascript" name="fav_language"
                                                    value="JavaScript">
                                                <label for="javascript">JavaScript</label>
                                                <input type="radio" id="javascript" name="fav_language"
                                                    value="JavaScript">
                                                <label for="javascript">JavaScript</label>
                                                <input type="radio" id="javascript" name="fav_language"
                                                    value="JavaScript">
                                                <label for="javascript">JavaScript</label>

                                            </div>
                                        </div> --}}
                                        {{-- <div class="mb-10">
                                            <input type="hidden" name="remember" value="true">
                                            <p class="mb-5">مستوى النظافة ؟</p>
                                            <div
                                                class="-space-y-px rounded-md shadow-sm flex items-center justify-between">

                                                <input type="radio" id="html" name="fav_language" value="HTML">
                                                <label for="html">HTML</label><br>
                                                <input type="radio" id="css" name="fav_language" value="CSS">
                                                <label for="css">CSS</label><br>
                                                <input type="radio" id="javascript" name="fav_language"
                                                    value="JavaScript">
                                                <label for="javascript">JavaScript</label>
                                                <input type="radio" id="javascript" name="fav_language"
                                                    value="JavaScript">
                                                <label for="javascript">JavaScript</label>
                                                <input type="radio" id="javascript" name="fav_language"
                                                    value="JavaScript">
                                                <label for="javascript">JavaScript</label>

                                            </div>
                                        </div> --}}

                                    </div>









                                    <div>
                                        <button type="submit"
                                            class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                            </span>
                                            حفظ التقييم
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="justify-center text-center flex flex-wrap mt-24">
            <div class="w-full md:w-6/12 px-12 md:px-4">
                <h2 class="font-semibold text-4xl">شركة الأتقان الدائم</h2>
                <p class="text-lg leading-relaxed mt-4 mb-3 text-blueGray-500">شركة ذات مسؤولية محدودة </p>
                <p class="text-lg leading-relaxed mt-4 mb-3 text-blueGray-500"> مقر الشركة في مدينة خميس مشيط </p>
                <p class="text-lg leading-relaxed mt-4 mb-3 text-blueGray-500"> البريد الالكتروني للشركة info@test.com</p>
            </div>
        </div>
    </section>
@endsection
