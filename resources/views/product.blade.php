@include('header')
<section id="judul" class="static z-10 flex w-full pt-24 dark:bg-slate-900 bg-primary">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-full ">
                    <h1 data-aos="zoom-in-up" data-aos-delay="200"
                        class="mx-auto mb-3 text-xl font-bold text-center text-white lg:text-3xl">
                        Membantu Menemukan Properti Yang Diinginkan
                    </h1>
                </div>
                <div class="relative flex items-center justify-start w-full ">
                    <div class="flex items-center justify-center w-full px-10 mb-2 ">
                        <div class="flex w-full shadow-lg">
                            <input type="text"
                                class="px-10 py-2 lg:py-4 w-full text-sm rounded-tl-[5px] rounded-bl-[5px]"
                                placeholder="Cari Berdasarkan Area, Nama Properti, Penyedia... ">
                            <button
                                class="px-10 text-white bg-primary rounded-tr-[5px] rounded-br-[5px] hover:shadow-lg hover:bg-primary2 shadow-lg">
                                Cari
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HASIL PENCARIAN DAN MODAL-->
    <section id="hasilPencarian" class="pt-4 pb-0 bg-white dark:bg-slate-800">
        <div class="container">
            <div class="grid grid-cols-3 gap-4 lg:grid-cols-6 md:gap-2">
                <div class="h-15 ">
                    <h1
                        class="text-xl font-bold text-left dark:text-white text-text1 lg:text-md md:text-md lg:text-left">
                        Hasil Pencarian
                    </h1>
                    <p class="mb-2 text-sm font-medium text-left dark:text-white text-text2 ">
                        20 Properti Ditemukan
                    </p>
                </div>
                <div class="col-start-2 h-15 lg:col-start-5 ">

                    <button type="button" data-modal-toggle="top-left-modal"
                        class=" relative text-right flex ml-auto px-16 py-3  text-white bg-primary rounded-[5px] hover:shadow-lg hover:bg-primary2 shadow-lg">

                        Filter

                    </button>
                    <div id="top-left-modal" data-modal-placement="top-center" tabindex="-1"
                        class="fixed top-0 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full ">
                        <div class="relative w-full h-full max-w-3xl p-4 md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-center p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class=" text-xl font-bold text-gray-900 dark:text-white px-60">
                                        Filter
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="top-left-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form class="flex justify-between">
                                    <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                        <div class="">
                                            <div class="flex justify-start  px-4 py-2 gap-2 ">
                                                <span class=" w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                    <button
                                                        class="inline-flex justify-center w-full px-12 py-2 text-base font-medium leading-6 text-gray-400 transition duration-150 ease-in-out border rounded-md shadow-sm dark:text-white border-primary hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                                                        DIJUAL
                                                    </button>
                                                </span>
                                                <span class=" w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                    <button
                                                        class="inline-flex justify-center w-full px-12 py-2 text-base font-medium leading-6 text-gray-400 transition duration-150 ease-in-out border rounded-md shadow-sm dark:text-white border-primary hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                                                        DISEWA
                                                    </button>
                                                </span>
                                            </div>

                                            <div class="mb-4 ">
                                                <label for="formTampilkan_properti"
                                                    class="block mb-2 text-sm font-bold text-black">Tampilkan
                                                    Properti</label>
                                                <div class="flex justify-between px-4 py-2 gap-2">
                                                    <span
                                                        class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                        <button
                                                            class="inline-flex justify-center px-8 py-2 text-base font-medium leading-6 text-gray-400 transition duration-150 ease-in-out border rounded-md shadow-sm dark:text-white border-primary hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                                                            Semua
                                                        </button>
                                                    </span>
                                                    <span
                                                        class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                        <button
                                                            class="inline-flex justify-center px-8 py-2 text-base font-medium leading-6 text-gray-400 transition duration-150 ease-in-out border rounded-md shadow-sm dark:text-white border-primary hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                                                            Seken
                                                        </button>
                                                    </span>
                                                    <span
                                                        class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                        <button
                                                            class="inline-flex justify-center px-8 py-2 text-base font-medium leading-6 text-gray-400 transition duration-150 ease-in-out border rounded-md shadow-sm dark:text-white border-primary hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                                                            Baru
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <label for="formProvinsi"
                                                    class="block mb-2 text-sm font-bold text-black">Filter
                                                    Provinsi</label>
                                                <input
                                                    class="inline-flex justify-center px-4 py-2 text-base font-medium leading-6 text-gray-400 transition duration-150 ease-in-out border rounded-md shadow-sm dark:text-white border-primary hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5"
                                                    id="ContactForm10_contact-form-provinsi" name="Pilih Provinsi"
                                                    placeholder="Pilih Provinsi" size="30" type="text" value="">
                                            </div>

                                            <div class="mx-auto max-w-md">
                                                <h2 class="font-bold">Tipe Properti</h2>
                                                <ul class="">
                                                    <li
                                                        class="py-3 relative flex w-80 items-center justify-center gap-2.5 border-b-2 bg-white px-3  hover:border-gray-400">
                                                        <input type="checkbox" id="checkbox1"
                                                            class="peer relative h-5 w-5 shrink-0 appearance-none rounded-sm border after:absolute after:left-0 after:top-0 after:h-full after:w-full after:bg-[url('data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9JzMwMHB4JyB3aWR0aD0nMzAwcHgnICBmaWxsPSIjZmZmZmZmIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCIgdmVyc2lvbj0iMS4xIiB4PSIwcHgiIHk9IjBweCI+PHRpdGxlPmljb25fYnlfUG9zaGx5YWtvdjEwPC90aXRsZT48ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz48ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyBmaWxsPSIjZmZmZmZmIj48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNi4wMDAwMDAsIDI2LjAwMDAwMCkiPjxwYXRoIGQ9Ik0xNy45OTk5ODc4LDMyLjQgTDEwLjk5OTk4NzgsMjUuNCBDMTAuMjI2Nzg5MSwyNC42MjY4MDE0IDguOTczMTg2NDQsMjQuNjI2ODAxNCA4LjE5OTk4Nzc5LDI1LjQgTDguMTk5OTg3NzksMjUuNCBDNy40MjY3ODkxNCwyNi4xNzMxOTg2IDcuNDI2Nzg5MTQsMjcuNDI2ODAxNCA4LjE5OTk4Nzc5LDI4LjIgTDE2LjU4NTc3NDIsMzYuNTg1Nzg2NCBDMTcuMzY2ODIyOCwzNy4zNjY4MzUgMTguNjMzMTUyOCwzNy4zNjY4MzUgMTkuNDE0MjAxNCwzNi41ODU3ODY0IEw0MC41OTk5ODc4LDE1LjQgQzQxLjM3MzE4NjQsMTQuNjI2ODAxNCA0MS4zNzMxODY0LDEzLjM3MzE5ODYgNDAuNTk5OTg3OCwxMi42IEw0MC41OTk5ODc4LDEyLjYgQzM5LjgyNjc4OTEsMTEuODI2ODAxNCAzOC41NzMxODY0LDExLjgyNjgwMTQgMzcuNzk5OTg3OCwxMi42IEwxNy45OTk5ODc4LDMyLjQgWiI+PC9wYXRoPjwvZz48L2c+PC9nPjwvc3ZnPg==')] after:bg-[length:40px] after:bg-center after:bg-no-repeat after:content-[''] checked:bg-gray-500 hover:ring hover:ring-gray-300 focus:outline-none" />
                                                        <label for="checkbox1"
                                                            class="w-full cursor-pointer font-medium text-gray-600 peer-checked:text-gray-400 peer-checked:line-through">
                                                            Rumah </label>
                                                    </li>
                                                    <li
                                                        class="py-3 flex w-80 items-center gap-2.5 border-b-2 bg-white px-3  hover:border-gray-400">
                                                        <input type="checkbox" id="checkbox2"
                                                            class="peer relative left-0 h-5 w-5 shrink-0 appearance-none rounded-sm border outline-none after:absolute after:left-0 after:top-0 after:h-full after:w-full after:bg-[url('data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9JzMwMHB4JyB3aWR0aD0nMzAwcHgnICBmaWxsPSIjZmZmZmZmIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCIgdmVyc2lvbj0iMS4xIiB4PSIwcHgiIHk9IjBweCI+PHRpdGxlPmljb25fYnlfUG9zaGx5YWtvdjEwPC90aXRsZT48ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz48ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyBmaWxsPSIjZmZmZmZmIj48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNi4wMDAwMDAsIDI2LjAwMDAwMCkiPjxwYXRoIGQ9Ik0xNy45OTk5ODc4LDMyLjQgTDEwLjk5OTk4NzgsMjUuNCBDMTAuMjI2Nzg5MSwyNC42MjY4MDE0IDguOTczMTg2NDQsMjQuNjI2ODAxNCA4LjE5OTk4Nzc5LDI1LjQgTDguMTk5OTg3NzksMjUuNCBDNy40MjY3ODkxNCwyNi4xNzMxOTg2IDcuNDI2Nzg5MTQsMjcuNDI2ODAxNCA4LjE5OTk4Nzc5LDI4LjIgTDE2LjU4NTc3NDIsMzYuNTg1Nzg2NCBDMTcuMzY2ODIyOCwzNy4zNjY4MzUgMTguNjMzMTUyOCwzNy4zNjY4MzUgMTkuNDE0MjAxNCwzNi41ODU3ODY0IEw0MC41OTk5ODc4LDE1LjQgQzQxLjM3MzE4NjQsMTQuNjI2ODAxNCA0MS4zNzMxODY0LDEzLjM3MzE5ODYgNDAuNTk5OTg3OCwxMi42IEw0MC41OTk5ODc4LDEyLjYgQzM5LjgyNjc4OTEsMTEuODI2ODAxNCAzOC41NzMxODY0LDExLjgyNjgwMTQgMzcuNzk5OTg3OCwxMi42IEwxNy45OTk5ODc4LDMyLjQgWiI+PC9wYXRoPjwvZz48L2c+PC9nPjwvc3ZnPg==')] after:bg-[length:40px] after:bg-center after:bg-no-repeat after:content-[''] checked:bg-gray-500 hover:ring hover:ring-gray-300" />
                                                        <label for="checkbox2"
                                                            class="inline-block w-full cursor-pointer font-medium text-gray-600 peer-checked:text-gray-400 peer-checked:line-through">
                                                            Apartment </label>
                                                    </li>
                                                    <li
                                                        class="py-3 flex w-80 items-center gap-2.5 border-b-2 bg-white px-3  hover:border-gray-400">
                                                        <input type="checkbox" id="checkbox3"
                                                            class="peer relative left-0 h-5 w-5 shrink-0 appearance-none rounded-sm border outline-none after:absolute after:left-0 after:top-0 after:h-full after:w-full after:bg-[url('data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9JzMwMHB4JyB3aWR0aD0nMzAwcHgnICBmaWxsPSIjZmZmZmZmIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCIgdmVyc2lvbj0iMS4xIiB4PSIwcHgiIHk9IjBweCI+PHRpdGxlPmljb25fYnlfUG9zaGx5YWtvdjEwPC90aXRsZT48ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz48ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyBmaWxsPSIjZmZmZmZmIj48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNi4wMDAwMDAsIDI2LjAwMDAwMCkiPjxwYXRoIGQ9Ik0xNy45OTk5ODc4LDMyLjQgTDEwLjk5OTk4NzgsMjUuNCBDMTAuMjI2Nzg5MSwyNC42MjY4MDE0IDguOTczMTg2NDQsMjQuNjI2ODAxNCA4LjE5OTk4Nzc5LDI1LjQgTDguMTk5OTg3NzksMjUuNCBDNy40MjY3ODkxNCwyNi4xNzMxOTg2IDcuNDI2Nzg5MTQsMjcuNDI2ODAxNCA4LjE5OTk4Nzc5LDI4LjIgTDE2LjU4NTc3NDIsMzYuNTg1Nzg2NCBDMTcuMzY2ODIyOCwzNy4zNjY4MzUgMTguNjMzMTUyOCwzNy4zNjY4MzUgMTkuNDE0MjAxNCwzNi41ODU3ODY0IEw0MC41OTk5ODc4LDE1LjQgQzQxLjM3MzE4NjQsMTQuNjI2ODAxNCA0MS4zNzMxODY0LDEzLjM3MzE5ODYgNDAuNTk5OTg3OCwxMi42IEw0MC41OTk5ODc4LDEyLjYgQzM5LjgyNjc4OTEsMTEuODI2ODAxNCAzOC41NzMxODY0LDExLjgyNjgwMTQgMzcuNzk5OTg3OCwxMi42IEwxNy45OTk5ODc4LDMyLjQgWiI+PC9wYXRoPjwvZz48L2c+PC9nPjwvc3ZnPg==')] after:bg-[length:40px] after:bg-center after:bg-no-repeat after:content-[''] checked:bg-gray-500 hover:ring hover:ring-gray-300" />
                                                        <label for="checkbox3"
                                                            class="inline-block w-full cursor-pointer font-medium text-gray-600 peer-checked:text-gray-400 peer-checked:line-through">
                                                            Kost </label>
                                                    </li>
                                                    <li
                                                        class="py-3 flex w-80 items-center gap-2.5 border-b-2 bg-white px-3  hover:border-gray-400">
                                                        <input type="checkbox" id="checkbox4"
                                                            class="peer relative left-0 h-5 w-5 shrink-0 appearance-none rounded-sm border outline-none after:absolute after:left-0 after:top-0 after:h-full after:w-full after:bg-[url('data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9JzMwMHB4JyB3aWR0aD0nMzAwcHgnICBmaWxsPSIjZmZmZmZmIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCIgdmVyc2lvbj0iMS4xIiB4PSIwcHgiIHk9IjBweCI+PHRpdGxlPmljb25fYnlfUG9zaGx5YWtvdjEwPC90aXRsZT48ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz48ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyBmaWxsPSIjZmZmZmZmIj48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNi4wMDAwMDAsIDI2LjAwMDAwMCkiPjxwYXRoIGQ9Ik0xNy45OTk5ODc4LDMyLjQgTDEwLjk5OTk4NzgsMjUuNCBDMTAuMjI2Nzg5MSwyNC42MjY4MDE0IDguOTczMTg2NDQsMjQuNjI2ODAxNCA4LjE5OTk4Nzc5LDI1LjQgTDguMTk5OTg3NzksMjUuNCBDNy40MjY3ODkxNCwyNi4xNzMxOTg2IDcuNDI2Nzg5MTQsMjcuNDI2ODAxNCA4LjE5OTk4Nzc5LDI4LjIgTDE2LjU4NTc3NDIsMzYuNTg1Nzg2NCBDMTcuMzY2ODIyOCwzNy4zNjY4MzUgMTguNjMzMTUyOCwzNy4zNjY4MzUgMTkuNDE0MjAxNCwzNi41ODU3ODY0IEw0MC41OTk5ODc4LDE1LjQgQzQxLjM3MzE4NjQsMTQuNjI2ODAxNCA0MS4zNzMxODY0LDEzLjM3MzE5ODYgNDAuNTk5OTg3OCwxMi42IEw0MC41OTk5ODc4LDEyLjYgQzM5LjgyNjc4OTEsMTEuODI2ODAxNCAzOC41NzMxODY0LDExLjgyNjgwMTQgMzcuNzk5OTg3OCwxMi42IEwxNy45OTk5ODc4LDMyLjQgWiI+PC9wYXRoPjwvZz48L2c+PC9nPjwvc3ZnPg==')] after:bg-[length:40px] after:bg-center after:bg-no-repeat after:content-[''] checked:bg-gray-500 hover:ring hover:ring-gray-300" />
                                                        <label for="checkbox4"
                                                            class="inline-block w-full cursor-pointer font-medium text-gray-600 peer-checked:text-gray-400 peer-checked:line-through">
                                                            Tanah </label>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>


                                    <div>
                                        <div class="px-5 py-2">
                                            <div class="flex justify-between">
                                                <div class="mb-4">
                                                    <label for="formHarga"
                                                        class="block mb-2 text-sm font-bold text-black">Harga
                                                        (Rp)</label>

                                                    <form>

                                                        <div class="grid md:grid-cols-2 md:gap-6">
                                                            <div class="relative z-0 w-full mb-6 group">
                                                                <input type="text" name="floating_first_name"
                                                                    id="floating_first_name"
                                                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                                    placeholder=" " required />
                                                                <label for="floating_first_name"
                                                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Min</label>
                                                            </div>
                                                            <div class="relative z-0 w-full mb-6 group">
                                                                <input type="text" name="floating_last_name"
                                                                    id="floating_last_name"
                                                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                                    placeholder=" " required />
                                                                <label for="floating_last_name"
                                                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Max</label>
                                                            </div>
                                                        </div>

                                                    </form>


                                                </div>
                                            </div>
                                            <div class="flex justify-between">
                                                <div class="mb-4">
                                                    <label for="formTanah"
                                                        class="block mb-2 text-sm font-bold text-black">Luas Tanah
                                                        (m2)</label>

                                                    <form>

                                                        <div class="grid md:grid-cols-2 md:gap-6">
                                                            <div class="relative z-0 w-full mb-6 group">
                                                                <input type="text" name="floating_first_name"
                                                                    id="floating_first_name"
                                                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                                    placeholder=" " required />
                                                                <label for="floating_first_name"
                                                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Min</label>
                                                            </div>
                                                            <div class="relative z-0 w-full mb-6 group">
                                                                <input type="text" name="floating_last_name"
                                                                    id="floating_last_name"
                                                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                                    placeholder=" " required />
                                                                <label for="floating_last_name"
                                                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Max</label>
                                                            </div>
                                                        </div>

                                                    </form>


                                                </div>

                                            </div>
                                            <div class="flex justify-between">
                                                <div class="mb-4">
                                                    <label for="formLuas"
                                                        class="block mb-2 text-sm font-bold text-black">Luas
                                                        Bangunan (m2)</label>

                                                    <form>

                                                        <div class="grid md:grid-cols-2 md:gap-6">
                                                            <div class="relative z-0 w-full mb-6 group">
                                                                <input type="text" name="floating_first_name"
                                                                    id="floating_first_name"
                                                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                                    placeholder=" " required />
                                                                <label for="floating_first_name"
                                                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Min</label>
                                                            </div>
                                                            <div class="relative z-0 w-full mb-6 group">
                                                                <input type="text" name="floating_last_name"
                                                                    id="floating_last_name"
                                                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                                    placeholder=" " required />
                                                                <label for="floating_last_name"
                                                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Max</label>
                                                            </div>
                                                        </div>

                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4 ">
                                            <label for="formTampilkan_properti"
                                                class="block mb-2 text-sm font-bold text-black">Kamar
                                                Tidur</label>
                                            <div class="flex justify-start px-4 py-2 gap-1">
                                                <span class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                    <button
                                                        class="inline-flex justify-center px-2 py-2 text-base font-medium leading-6 text-gray-400 transition duration-150 ease-in-out border rounded-md shadow-sm dark:text-white border-primary hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                                                        Semua
                                                    </button>
                                                </span>
                                                <span class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                    <button
                                                        class="inline-flex justify-center px-3 py-2 text-base font-medium leading-6 text-gray-400 transition duration-150 ease-in-out border rounded-md shadow-sm dark:text-white border-primary hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                                                        1
                                                    </button>
                                                </span>
                                                <span class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                    <button
                                                        class="inline-flex justify-center px-3 py-2 text-base font-medium leading-6 text-gray-400 transition duration-150 ease-in-out border rounded-md shadow-sm dark:text-white border-primary hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                                                        2
                                                    </button>
                                                </span>
                                                <span class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                    <button
                                                        class="inline-flex justify-center px-3 py-2 text-base font-medium leading-6 text-gray-400 transition duration-150 ease-in-out border rounded-md shadow-sm dark:text-white border-primary hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                                                        3
                                                    </button>
                                                </span>
                                                <span class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                    <button
                                                        class="inline-flex justify-center px-2 py-2 text-base font-medium leading-6 text-gray-400 transition duration-150 ease-in-out border rounded-md shadow-sm dark:text-white border-primary hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                                                        4+
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="mb-4 ">
                                            <label for="formTampilkan_properti"
                                                class="block mb-2 text-sm font-bold text-black">Kamar
                                                Mandi</label>
                                            <div class="flex justify-start px-4 py-2 gap-1">
                                                <span class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                    <button
                                                        class="inline-flex justify-center px-2 py-2 text-base font-medium leading-6 text-gray-400 transition duration-150 ease-in-out border rounded-md shadow-sm dark:text-white border-primary hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                                                        Semua
                                                    </button>
                                                </span>
                                                <span class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                    <button
                                                        class="inline-flex justify-center px-3 py-2 text-base font-medium leading-6 text-gray-400 transition duration-150 ease-in-out border rounded-md shadow-sm dark:text-white border-primary hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                                                        1
                                                    </button>
                                                </span>
                                                <span class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                    <button
                                                        class="inline-flex justify-center px-3 py-2 text-base font-medium leading-6 text-gray-400 transition duration-150 ease-in-out border rounded-md shadow-sm dark:text-white border-primary hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                                                        2
                                                    </button>
                                                </span>
                                                <span class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                    <button
                                                        class="inline-flex justify-center px-3 py-2 text-base font-medium leading-6 text-gray-400 transition duration-150 ease-in-out border rounded-md shadow-sm dark:text-white border-primary hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                                                        3
                                                    </button>
                                                </span>
                                                <span class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                    <button
                                                        class="inline-flex justify-center px-2 py-2 text-base font-medium leading-6 text-gray-400 transition duration-150 ease-in-out border rounded-md shadow-sm dark:text-white border-primary hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                                                        4+
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- Modal footer -->
                                <div
                                    class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-toggle="top-left-modal" type="button"
                                        class="text-primary  bg-white hover:bg-primary focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-primary text-sm font-medium px-5 py-2.5 hover:text-primary focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-primary dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">RESET</button>
                                    <button data-modal-toggle="top-left-modal" type="button"
                                        class="text-primary hover:text-white border border-primary bg-white hover:bg-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary dark:hover:bg-primary dark:focus:ring-primary">Tampilkan
                                        Properti</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--Dropdown Urutkan Berdasarkan-->
                <div class="col-start-3 h-15 lg:col-start-6 ">

                    <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                        class="px-15 py-3 text-base flex ml-auto  text-white bg-primary rounded-[5px]  hover:shadow-lg hover:bg-primary2 shadow-lg">

                        Urutkan Berdasarkan<spanwidth="30" class="absolute" src="dist/images/filter.svg"></span>
                    </button>
                    <div id="dropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700">
                        <ul class="py-1 text-sm text-black dark:text-gray-200" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="#"
                                    class="block px-8 py-3 text-black bg-white border-2 hover:bg-primary hover:text-white dark:hover:text-white">Tampilan
                                    Default</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-8 py-3 text-black bg-white border-2 hover:bg-primary hover:text-white dark:hover:text-white">Lama</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-8 py-3 text-black bg-white border-2 hover:bg-primary hover:text-white dark:hover:text-white">Harga
                                    Tertinggi</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-8 py-3 text-black bg-white border-2 hover:bg-primary hover:text-white dark:hover:text-white">Harga
                                    Terendah</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- HASIL PENCARIAN -->


    <!-- PRODUK -->
    <section id="layanan" class="pt-0 dark:bg-slate-800 bg-slate-100 pb-36">


        <!-- PRODUK 1-->
        <div class="container py-4">
            <div class="relative flex w-full bg-white rounded-lg shadow-lg dark:bg-slate-600 drop-shadow-lg">
                <div
                    class="relative  w-full grid grid-rows-3 rounded-[5px] py-2 md:grid-rows-2 grid-cols-2 md:grid-cols-3   grid-flow-col gap-4">
                    <a href="/detail" class="col-span-1 row-span-1 mx-auto h-15 md:row-span-2">
                        <img width="395" height="290" src="http://source.unsplash.com/395x290?house" alt="" srcset="">
                    </a>
                    <div class="col-start-2 pt-4 h-15 aspect-auto">
                        <div><a href="#">
                                <h1 class="text-xl font-bold text-text1 dark:text-white">Villa Strategis Lokasi Tumbak
                                    Bayuh
                                    Canggu
                                    Bali
                                </h1>
                                <div></div>
                            </a>
                            <p class="text-gray-400 dark:text-primary ">Canggu Badung | Rumah</p>
                        </div>
                    </div>
                    <div class="col-start-2 row-start-1 pt-4 pr-4 h-15 aspect-auto md:col-start-3">
                        <button
                            class="flex ml-auto  drop-shadow-lg rounded-[5px] border-2 text-md lg:text-xl border-primary bg-white  py-3 px-4 font-bold dark:text-black">
                            Rp
                            28.000.000.000<a href="#"></a>
                        </button>
                    </div>

                    <div class="col-span-2 h-15 md:row-start-2">
                        <div class="grid grid-cols-2 gap-2 lg:grid-cols-4 md:gap-4">
                            <div class=" h-15">

                                <img width="50" height="50" class="px-3 mx-auto" src="{{asset('images/luastanah.svg')}}" alt=""
                                    sizes="" srcset="">

                                <h2 class="py-5 font-normal text-center dark:text-white"><span
                                        class="text-xl font-medium text-primary"> 105 </span>m² Luas
                                    Tanah
                                </h2>
                            </div>

                            <div class=" h-15 aspect-auto">
                                <img width="50" height="50" class="px-3 mx-auto " src="{{asset('images/kamar.svg')}}" alt=""
                                    sizes="" srcset="">

                                <h2 class="py-5 font-normal text-center dark:text-white"><span
                                        class="text-xl font-medium text-primary"> 2 </span>Kamar</h2>
                            </div>

                            <div class=" h-15 aspect-auto">
                                <img width="50" height="50" class="px-3 mx-auto " src="{{asset('images/luasbangunan.svg')}}"
                                    alt="" sizes="" srcset="">

                                <h2 class="py-5 font-normal text-center dark:text-white"><span
                                        class="text-xl font-medium text-primary"> 90</span>
                                    m² Luas Bangunan</h2>
                            </div>

                            <div class=" h-15 aspect-auto">
                                <img width="50" height="50" class="px-3 mx-auto " src="{{asset('images/kamarmandi.svg')}}"
                                    alt="" sizes="" srcset="">

                                <h2 class="py-5 font-normal text-center dark:text-white"><span
                                        class="text-xl font-medium text-primary"> 3 </span>Kamar Mandi
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- PRODUK 2-->
        <div class="container py-4">
            <div class="relative flex w-full bg-white rounded-lg shadow-lg dark:bg-slate-600 drop-shadow-lg">
                <div
                    class="relative  w-full grid grid-rows-3 rounded-[5px] py-2 md:grid-rows-2 grid-cols-2 md:grid-cols-3   grid-flow-col gap-4">
                    <a href="/detail" class="row-span-1 mx-auto h-15 md:row-span-2">
                        <img width="395" height="290" src="http://source.unsplash.com/395x290?house" alt="" srcset="">
                    </a>
                    <div class="col-start-2 pt-4 h-15 aspect-auto">
                        <div><a href="#">
                                <h1 class="text-xl font-bold text-text1 dark:text-white">Villa Strategis Lokasi Tumbak
                                    Bayuh
                                    Canggu
                                    Bali
                                </h1>
                                <div></div>
                            </a>
                            <p class="text-gray-400 dark:text-primary ">Canggu Badung | Rumah</p>
                        </div>
                    </div>
                    <div class="col-start-2 pt-4 pr-4 h-15 aspect-auto md:col-start-3">
                        <button
                            class="flex ml-auto  drop-shadow-lg rounded-[5px] border-2 text-md lg:text-xl border-primary bg-white  py-3 px-4 font-bold dark:text-black">
                            Rp
                            28.000.000.000<a href="#"></a>
                        </button>
                    </div>

                    <div class="col-span-2 h-15 md:row-start-2">
                        <div class="grid grid-cols-2 gap-2 lg:grid-cols-4 md:gap-4">
                            <div class=" h-15">

                                <img width="50" height="50" class="px-3 mx-auto" src="{{asset('images/luastanah.svg')}}" alt=""
                                    sizes="" srcset="">

                                <h2 class="py-5 font-normal text-center dark:text-white"><span
                                        class="text-xl font-medium text-primary"> 105 </span>m² Luas
                                    Tanah
                                </h2>
                            </div>

                            <div class=" h-15 aspect-auto">
                                <img width="50" height="50" class="px-3 mx-auto " src="{{asset('images/kamar.svg')}}" alt=""
                                    sizes="" srcset="">

                                <h2 class="py-5 font-normal text-center dark:text-white"><span
                                        class="text-xl font-medium text-primary"> 2 </span>Kamar</h2>
                            </div>

                            <div class=" h-15 aspect-auto">
                                <img width="50" height="50" class="px-3 mx-auto " src="{{asset('images/luasbangunan.svg')}}"
                                    alt="" sizes="" srcset="">

                                <h2 class="py-5 font-normal text-center dark:text-white"><span
                                        class="text-xl font-medium text-primary"> 90</span>
                                    m² Luas Bangunan</h2>
                            </div>

                            <div class=" h-15 aspect-auto">
                                <img width="50" height="50" class="px-3 mx-auto " src="{{asset('images/kamarmandi.svg')}}"
                                    alt="" sizes="" srcset="">

                                <h2 class="py-5 font-normal text-center dark:text-white"><span
                                        class="text-xl font-medium text-primary"> 3 </span>Kamar Mandi
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
  
@include('footer')