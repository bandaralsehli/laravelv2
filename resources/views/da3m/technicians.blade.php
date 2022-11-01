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



<div class="w-screen-2xl text-4xl font-thin  text-left ml-64 text-center md:pt-16">
    <div class="">الفنيين</div>










    <div class="bg-blueGray-100" id="masherfen">

        <div class="relative bg-blueGray-800  pb-32  ">

        </div>
        <div class="px-4 md:px-10 mx-auto w-full -m-24 ">

            <div class="flex flex-wrap mt-4">
                <div class="w-full xl:w-12/12 mb-12 xl:mb-0 px-4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">

                        <div class="rtl:block w-full overflow-x-auto text-center">
                            <table class="items-center w-full bg-transparent border-collapse">
                                <thead>
                                    <tr>
                                        <th
                                            class="w-12 px-6 bg-blue-300 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                            العدد</th>
                                        <th
                                            class="w-24 px-6 bg-blue-300 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold">
                                            الأسم</th>
                                        <th
                                            class="w-32 px-6 bg-blue-300 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold">
                                            المهنة</th>
                                        <th
                                            class="w-24 px-6 bg-blue-300 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold">
                                            نطاق العمل</th>



                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            1</th>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            أحمد الباكستاني </td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            تكييف</td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class=" text-emerald-500 mr-4"></i>مكة وضواحيها
                                        </td>

                                    </tr>

                                    <tr>
                                        <th
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            2</th>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            أحمد السوادني </td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            سباكة </td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class=" text-emerald-500 mr-4"></i>جدة وضواحيها
                                        </td>

                                    </tr>

                                    <tr>
                                        <th
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            3</th>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            عبدالله المصري </td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            كهربائي</td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class=" text-emerald-500 mr-4"></i>الطائف وضواحيها
                                        </td>

                                    </tr>

                                    <tr>
                                        <th
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            4</th>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            أنس السوداني </td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            كهربائي</td>
                                        <td
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <i class=" text-emerald-500 mr-4"></i>القنفذة وضواحيها
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

  </div>











@endsection