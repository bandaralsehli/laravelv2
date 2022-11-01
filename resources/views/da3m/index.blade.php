@section('js')

<script>
    $(document).ready(function () {
        $("#show_mashrefen").click(function () {
            $("#masherfen").hide(3000);
        });
        $("#hide_menu").click(function () {
            $("#masherfen").show(3000);
        });
    });
</script>
@endsection





@extends('layouts.appadmin')
@section('content')






    <div class="relative md:ml-64 bg-blueGray-100 mb-12" id="home">
        <nav
            class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
            <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
                <div class="w-64"></div>
                <div>البحث عن طلب بالرقم</div>
                <form class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3">
                    <div class="relative flex w-full flex-wrap items-stretch"><span
                            class="mr-2 z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"><i
                                class="fas fa-search"></i></span>
                        <input type="text" placeholder="            Search here..."
                            class="border-0 px-8 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:ring w-full pl-10">
                    </div>
                </form>
                <ul class="flex-col md:flex-row list-none items-center hidden md:flex"><a
                        class="text-blueGray-500 block" href="#pablo">
                        <div class="items-center flex"><span
                                class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"><img
                                    alt="..." class="w-full rounded-full align-middle border-none shadow-lg"
                                    src="https://demos.creative-tim.com/notus-nextjs/img/team-1-800x800.jpg"></span>
                        </div>
                    </a>
                    <div
                        class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48">
                        <a href="#pablo"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a
                            href="#pablo"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another
                            action</a><a href="#pablo"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something
                            else here</a>
                        <div class="h-0 my-2 border border-solid border-blueGray-100"></div><a href="#pablo"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated
                            link</a>
                    </div>
                </ul>
            </div>
        </nav>
        <div class="relative bg-blueGray-800 md:pt-32 pb-32 pt-12">
            <div class="px-4 md:px-10 mx-auto w-full">
                <div>
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="flex-auto p-4 bg-blue-100">
                                    <div class="flex flex-wrap">
                                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                            <h5 class="text-blueGray-400 uppercase font-bold text-xs">عدد طلبات داعم
                                            </h5>
                                            <span class="font-semibold text-xl text-blueGray-700">60</span>
                                        </div>
                                        <div class="relative w-auto pl-4 flex-initial">
                                            <div
                                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                                                <i class="far fa-chart-bar"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-sm text-blueGray-400 mt-4"><span class="text-emerald-500 mr-2"><i
                                                class="fas fa-chart-pie"></i>
                                        </span><span class="whitespace-nowrap">طلبات هذا الشهر</span><span
                                            class="whitespace-nowrap">'7 طلبات'</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="flex-auto p-4 bg-blue-100">
                                    <div class="flex flex-wrap">
                                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                            <h5 class="text-blueGray-400 uppercase font-bold text-xs">الطلبات المغلقة
                                            </h5><span class="font-semibold text-xl text-blueGray-700">50</span>
                                        </div>
                                        <div class="relative w-auto pl-4 flex-initial">
                                            <div
                                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500">
                                                <i class="fas fa-chart-pie"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-sm text-blueGray-400 mt-4"><span class="text-red-500 mr-2"><i
                                                class="fas fa-chart-pie"></i></span><span
                                            class="whitespace-nowrap">طلبات مغلقة هذا الشهر</span><span
                                            class="whitespace-nowrap">'7 طلبات'</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="flex-auto p-4 bg-blue-100">
                                    <div class="flex flex-wrap">
                                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                            <h5 class="text-blueGray-400 uppercase font-bold text-xs">طلبات تحت الصيانة
                                            </h5>
                                            <span class="font-semibold text-xl text-blueGray-700">5</span>
                                        </div>
                                        <div class="relative w-auto pl-4 flex-initial">
                                            <div
                                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500">
                                                <i class="fas fa-users"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-sm text-blueGray-400 mt-4"><span class="text-orange-500 mr-2"><i
                                                class="fas fa-chart-pie"></i>
                                        </span><span class="whitespace-nowrap">الطلبات الجديدة تحت الاجراء</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                <div class="flex-auto p-4 bg-blue-100">
                                    <div class="flex flex-wrap">
                                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                            <h5 class="text-blueGray-400 uppercase font-bold text-xs">الطلبات الجديدة
                                            </h5><span class="font-semibold text-xl text-blueGray-700">5</span>
                                        </div>
                                        <div class="relative w-auto pl-4 flex-initial">
                                            <div
                                                class="bg-yellow-400 text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-lightBlue-500">
                                                <i class="fas fa-percent"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-sm text-blueGray-400 mt-4"><span class="text-emerald-500 mr-2"><i
                                                class="fas fa-chart-pie"></i>
                                        </span><span class="whitespace-nowrap">طلبات لتكليف الفني</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-4 md:px-10 mx-auto w-full -m-24">

            <div class="flex flex-wrap mt-4">
                <div class="w-full xl:w-12/12 mb-12 xl:mb-0 px-4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                        <div class="rounded-t mb-0 px-4 py-3 border-0">
                            <div class="flex flex-wrap items-center">
                                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                    <h3 class="font-semibold text-base text-blueGray-700">الطلبات</h3>
                                </div>
                                <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right"><button
                                        class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                        type="button">مشاهدة كل المعلومات</button></div>
                            </div>
                        </div>








                        <div class="rtl:block w-full overflow-x-auto text-center">
                            <table class="items-center w-full bg-transparent border-collapse">
                                <thead>
                                    <tr>
                                        <th
                                            class="w-24 px-6 bg-blue-300 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                            رقم الطلب</th>
                                        <th
                                            class="w-24 px-6 bg-blue-300 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold">
                                            الحالة</th>
                                        <th
                                            class="w-32 px-6 bg-blue-300 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold">
                                            الجهة</th>
                                        <th
                                            class="w-24 px-6 bg-blue-300 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold">
                                            نوع الطلب</th>
                                        <th
                                            class="w-24 px-6 bg-blue-300 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold">
                                            االفني </th>
                                        <th
                                            class="w-24 px-6 bg-blue-300 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold">
                                            تاريخ التكليف </th>
                                        <th
                                            class=" px-6 bg-blue-300 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold">
                                            وصف المشكلة</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            PTM-105487</th>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            تحت الصيانة</td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            فرع وزارة العدل بمنطقة مكة المكرمة</td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class=" text-emerald-500 mr-4"></i>تكييف
                                        </td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class=" text-emerald-500 mr-4"></i>وسيم
                                        </td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class=" text-emerald-500 mr-4"></i>2022/11/01
                                        </td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class=" text-emerald-500 mr-4"></i> تلبيلتمنتل سيبتلم تبيسنتل سبتل سلتل
                                            سبلبيتل اتنابلتن اسبينلاسبنيتل ابيسنتابنيتسلا نتسلاسنبتلانتلا
                                        </td>
                                    </tr>

                                    <tr>
                                        <th
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            PTM-105487</th>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            تحت الصيانة</td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            المحكمة العامة بمكة المكرمة </td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class=" text-emerald-500 mr-4"></i>تكييف
                                        </td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class=" text-emerald-500 mr-4"></i>أحمد الباكستاني
                                        </td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class=" text-emerald-500 mr-4"></i>2022/11/01
                                        </td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class=" text-emerald-500 mr-4"></i> تلبيلتمنتل سيبتلم تبيسنتل سبتل سلتل
                                            سبلبيتل اتنابلتن اسبينلاسبنيتل ابيسنتابنيتسلا نتسلاسنبتلانتلا
                                        </td>
                                    </tr>

                                    <tr>
                                        <th
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            PTM-105487</th>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            تحت الصيانة</td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            كتابة عدل الأولى بمكة</td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class=" text-emerald-500 mr-4"></i>نجارة
                                        </td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class=" text-emerald-500 mr-4"></i> فيروز
                                        </td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class=" text-emerald-500 mr-4"></i>2022/11/03
                                        </td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class=" text-emerald-500 mr-4"></i> تلبيلتمنتل سيبتلم تبيسنتل سبتل سلتل
                                            سبلبيتل اتنابلتن اسبينلاسبنيتل ابيسنتابنيتسلا نتسلاسنبتلانتلا
                                        </td>
                                    </tr>

                                    <tr>
                                        <th
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            PTM-105487</th>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            تحت الصيانة</td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            محكمة الأحوال بالطائف</td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class=" text-emerald-500 mr-4"></i>تكييف
                                        </td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class=" text-emerald-500 mr-4"></i>أبو الكلام
                                        </td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class=" text-emerald-500 mr-4"></i>2022/10/01
                                        </td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class=" text-emerald-500 mr-4"></i> تلبيلتمنتل سيبتلم تبيسنتل سبتل سلتل
                                            سبلبيتل اتنابلتن اسبينلاسبنيتل ابيسنتابنيتسلا نتسلاسنبتلانتلا
                                        </td>
                                    </tr>




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>









@endsection