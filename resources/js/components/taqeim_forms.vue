<template>

    <div class="flex items-center justify-center py-12">
        <div class="w-full max-h-max-md space-y-8 mx-32">


            <form action="/taqeim" method="POST">
                <input type="hidden" name="_token" value="yG1wBrgLejmf4Fp9Fi8c3YtxzHWrt2FVZx0gKfIr">
                <center>
                    <div class="mb-6">
                    <label for="base-input"
                        class="block mb-8 text-lg font-medium text-gray-900 dark:text-gray-300">مستوى
                        النظافة ؟</label>
                    <div class="inline-flex rounded-md shadow-sm" role="group">
                        <button type="button" id="qone" name="q11" @click="option_1('ممتاز')"
                            class="py-2 px-8 w-24 text-base font-medium text-gray-900 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                            ممتاز
                        </button>
                        <button type="button" id="qone"  name="q12" @click="option_1('جيد')"
                            class="py-2 px-8 w-24 text-base font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                            جيد
                        </button>
                        <button type="button" id="qone" name="q13" @click="option_1('تحتاج تحسين')"
                            class="py-2 px-8 w-24 text-base font-medium text-gray-900 bg-white rounded-r-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                            تحتاج تحسين
                        </button>
                        <button type="button" id="qone" name="q13" @click="option_1('سيئة')"
                            class="py-2 px-8 w-24 text-base font-medium text-gray-900 bg-white rounded-r-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                             سيئة
                        </button>
                        <button type="button" id="qone" name="q13" @click="option_1('آخرى')"
                            class="py-2 px-8 w-24 text-base font-medium text-gray-900 bg-white rounded-r-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                             آخرى
                        </button>
                    </div>

                    <input id="q1" name="q1" v-model="q1"
                        class="bg-sky-600 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 hidden" />

                </div>
                </center>

                <center><button type="submit"
                    class="text-white w-44  hover:  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 bg-sky-600 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">حفظ التقييم</button>
          </center>
                  </form>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            q1: '',
            q2: '',
            q3: '',
            q4: '',
            q5: '',
        }
    },
    methods: {
        option_1(message) {
            this.q1 = message
        },
        option_2(message) {
            this.q2 = message
        },
        option_3(message) {
            this.q3 = message
        },
        option_4(message) {
            this.q4 = message
        },
        option_5(message) {
            this.q5 = message
        },
        // addUser() {
        //     if (this.edit === false) {
        //         //Add
        //         fetch('api/addUser', {
        //             method: 'post',
        //             body: JSON.stringify(this.user),
        //             headers: {
        //                 'content-type': 'application/json'
        //             }
        //         })
        //             .then(res => res.json())
        //             .then(data => {
        //                 if (data.message) {
        //                     alert(data.message);
        //                 } else {
        //                     this.user.name = '';
        //                     this.user.email = '';
        //                     alert('User Added Successfully');
        //                 }
        //                 this.fetchUsers();
        //             })
        //     } else {
        //         //Update
        //         fetch('api/editUser', {
        //             method: 'put',
        //             body: JSON.stringify(this.user),
        //             headers: {
        //                 'content-type': 'application/json'
        //             }
        //         })
        //             .then(res => res.json())
        //             .then(data => {
        //                 if (data.message) {
        //                     alert(data.message);
        //                 } else {
        //                     this.user.name = '';
        //                     this.user.email = '';
        //                     alert('User Updated Successfully');
        //                 }
        //                 this.fetchUsers();
        //             })
        //     }
        // },
    }
}
</script>
