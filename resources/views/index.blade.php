@include('header')
    <!-- COROSEL -->
    <section id="home" class=" dark:bg-slate-900 bg-primary 
     pt-36 h-screen">
        <!-- <div class="container"> -->
        <div class="flex-wrap flex ">
            <div class="w-full self-center px-5 mx-5 lg:w-full ">
                <h1 data-aos="zoom-in-up" data-aos-delay="200" class=" mb-6 text-2xl font-extrabold text-white
                    md:text-4xl lg:text-4xl lg:w-1/2">
                    Membantu Menemukan Properti Yang Diinginkan
                </h1>
                <h2 data-aos="zoom-in-up" data-aos-delay="500"
                    class="dark:text-primary mb-16 text-sm font-light text-white lg:text-2xl lg:w-1/2"> <span
                        class="font-semibold dark:text-primary text-white">OK Properti</span> hadir untuk membantu
                    menemukan
                    properti yang anda inginkan
                </h2>

                <a href="#searchbar" data-aos="fade-up" data-aos-delay="500"
                    class="my-6 rounded-[5px] dark:bg-primary dark:text-white bg-white py-3 z-20 px-8 text-sm font-semibold text-primary transition duration-300 ease-in-out hover:opacity-80 dark:hover:shadow-lg hover:shadow-lg ">Temukan
                    Properti
                </a>

            </div>

            <!-- KANAN -->
            <!-- <span class="w-full self-start px-4  ">
                    <div class="relative lg:absolute -left-0 mt-5  -bottom-4 lg:mt-9 ">
                        <img height="300" width="300" src="dist/images/corak1.svg" alt="Corak"
                            class="  mx-auto max-w-full " />
                    </div>
                </span>
                <span class="w-full self-start px-4  ">
                    <div class="relative lg:absolute -right-0 mt-5 -top-0  lg:mt-9 ">
                        <img height="150" width="150" src="dist/images/corak2.svg" alt="Corak"
                            class="  mx-auto max-w-full " />
                    </div>
                </span> -->
            <div class="w-full self-end lg:w-1/2">
                <div class="absolute lg:-right-0 mt-5 z-10 -bottom-4 lg:mt-10 ">
                    <img data-aos="fade-up-left" data-aos-delay="300" height="378" width="904"
                        src="{{asset('images/rumah2.svg')}}" alt="DenySurya" class="  mx-auto max-w-full " />
                </div>
            </div>

            <!-- </div> -->
        </div>
    </section>
    <!-- END COROSEL -->

    <!-- LAYANAN KAMI -->
    <section id="layanan" class=" dark:bg-slate-700 bg-slate-100 pt-36 pb-36">
        <div class="container ">
            <div class="flex flex-wrap ">
                <div class="mb-10 w-full px-4 lg:w-full md:w-1/2">
                    <h1 data-aos="fade-left" data-aos-anchor-placement="center-bottom"
                        class="mb-2 text-2xl font-bold uppercase dark:text-white text-text1 text-center lg:text-3xl md:text-2xl lg:text-center">
                        LAYANAN KAMI
                    </h1>
                    <p data-aos="fade-right" data-aos-anchor-placement="center-bottom"
                        class="mb-5 max-w-full text-sm lg:text-center lg:text-2xl font-semibold text-primary text-center ">
                        Ok Properti hadir untuk memenuhi kebutuhan anda
                    </p>

                </div>
            </div>
        </div>
        <!-- Fitur -->
        <div class="flex-wrap flex w-full justify-center   px-4 xl:mx-auto xl:w-10/12 ">
            <!-- fitur 1 -->
            <div data-aos="zoom-in-up" data-aos-anchor-placement="center-bottom" data-aos-delay="300"
                class="mb-12 p-4 md:w-1/3 ">
                <div
                    class=" mx-auto overflow-hidden rounded-md shadow-md transition duration-500 bg-white group hover:bg-primary  hover:shadow-lg ">
                    <img height="75" width="75" class="mx-auto mt-6" src="{{asset('images/newhouse.png')}}"
                        alt="poroperti baru" />

                    <h3 class="mt-5 mb-3 text-xl font-semibold text-primary group-hover:text-white text-center ">
                        Properti Baru
                    </h3>

                    <p class=" text-base font-medium text-text2 text-center mb-10 ml-5 group-hover:text-white mr-5 ">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem
                        veniam nisi, iure facilis odit vel.
                    </p>
                </div>
            </div>
            <!-- fitur 2 -->
            <div data-aos="zoom-in-up" data-aos-anchor-placement="center-bottom" data-aos-delay="300"
                class="mb-12 p-4 md:w-1/3 ">
                <div
                    class=" mx-auto overflow-hidden rounded-md shadow-md transition duration-500 bg-white group hover:bg-primary  hover:shadow-lg ">
                    <img height="75" width="75" class="mx-auto mt-6" src="{{asset('images/salehouse.png')}}"
                        alt="Jual Poroperti" />

                    <h3 class="mt-5 mb-3 text-xl font-semibold text-primary group-hover:text-white text-center ">
                        Jual Properti
                    </h3>

                    <p class=" text-base font-medium text-text2 text-center mb-10 ml-5 group-hover:text-white mr-5 ">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem
                        veniam nisi, iure facilis odit vel.
                    </p>
                </div>
            </div>
            <!-- fitur 3 -->
            <div data-aos="zoom-in-up" data-aos-anchor-placement="center-bottom" data-aos-delay="300"
                class="mb-12 p-4 md:w-1/3 ">
                <div
                    class=" mx-auto overflow-hidden rounded-md shadow-md transition duration-500 bg-white group hover:bg-primary  hover:shadow-lg ">
                    <img height="75" width="75" class="mx-auto mt-6" src="{{asset('images/renthouse.png')}}"
                        alt="Sewa Properti" />

                    <h3 class="mt-5 mb-3 text-xl font-semibold text-primary group-hover:text-white text-center ">
                        Sewa Properti
                    </h3>

                    <p class=" text-base font-medium text-text2 text-center mb-10 ml-5 group-hover:text-white mr-5 ">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem
                        veniam nisi, iure facilis odit vel.
                    </p>
                </div>
            </div>



        </div>

    </section>
    <!-- END LAYANAN KAMI -->
    <!-- SEARCH BAR -->
    <section id="searchbar" class="dark:bg-slate-900 bg-primary lg:pt-36 pt-24 ">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="mb-10 w-full px-4 lg:w-full md:w-1/2">
                    <h1 data-aos="fade-left" data-aos-anchor-placement="center-bottom"
                        class="mb-2 text-2xl font-bold  text-white text-center lg:text-4xl md:text-3xl lg:text-center">
                        Temukan Properti Impianmu
                    </h1>
                    <p data-aos="fade-right" data-aos-anchor-placement="center-bottom"
                        class="dark:text-primary mb-5 max-w-full text-sm lg:text-center lg:text-2xl font-extralight text-white text-center ">
                        Temukan properti yang anda impikan
                    </p>

                </div>
            </div>
            <div class="flex w-full items-center  px-2 md:px-20   ">
                <button
                    class=" px-3 lg:px-6 text-xs lg:text-base py-1.5 text-gray-900 bg-white rounded-tl-[5px] border-l shadow-lg">
                    Dijual
                </button>
                <button
                    class="px-3 lg:px-5 text-xs lg:text-base   -ml-0 py-1.5 text-gray-900 bg-white text-opacity-50 bg-opacity-50 rounded-tr-[5px] border-l shadow-lg">
                    Disewa
                </button>
            </div>
            <!-- search -->
            <div class="flex  justify-start items-center  relative ">

                <div class="flex w-full items-center  px-2 md:px-20 justify-center  ">
                    <div class="flex w-full  shadow-lg">
                        <input type="text" class="px-10 py-2 lg:py-4 w-full text-sm rounded-bl-[5px]"
                            placeholder="Cari Berdasarkan Area, Nama Properti, Penyedia... ">
                        <button
                            class="px-5 lg:px-10 text-white bg-primary rounded-tr-[5px] rounded-br-[5px] hover:shadow-lg hover:bg-primary2 shadow-lg">
                            Cari
                        </button>
                    </div>
                </div>

            </div>


            <div class="w-full self-center -px-20 ">
                <div class="relative  lg:-right-0 mt-5   lg:-bottom-0 lg:mt-9 ">
                    <img data-aos="zoom-in-up" data-aos-anchor-placement="center-bottom" data-aos-delay="300"
                        height="400" width="2500" src="{{asset('images/kota2.png')}}" alt="DenySurya"
                        class="  mx-auto max-w-full " />
                </div>
            </div>

        </div>
        </div>
    </section>
    <!-- END SEARCH BAR -->
    <!-- KESULITAN MENCARI -->
    <section id="kesulitan" class="dark:bg-slate-700 bg-white pt-36 pb-16">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-start px-4 ">
                    <h1 data-aos="fade-right" data-aos-anchor-placement="center-center" data-aos-delay="300"
                        class="mb-2 text-xl font-bold uppercase dark:text-white text-text1 text-left lg:text-3xl md:text-md lg:text-left">
                        KESULITAN MENCARI PROPERTI?
                    </h1>
                    <hr data-aos="fade-right" data-aos-anchor-placement="center-center" data-aos-delay="500"
                        class="my-5 border-primary border-t-4 dark:gray-700 w-64 md-w-1/3">
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3  gap-4 md:gap-6">
                    <!-- icon -->
                    <div data-aos="zoom-in-up" data-aos-anchor-placement="center-bottom" data-aos-delay="300"
                        class="h-15  aspect-video ">
                        <svg class="animated  " id="freepik_stories-questions" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs">
                            <style>
                                svg#freepik_stories-questions:not(.animated) .animable {
                                    opacity: 0;
                                }

                                svg#freepik_stories-questions.animated #freepik--speech-bubble--inject-2 {
                                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown, 1.5s Infinite linear floating;
                                    animation-delay: 0s, 1s;
                                }

                                @keyframes slideDown {
                                    0% {
                                        opacity: 0;
                                        transform: translateY(-30px);
                                    }

                                    100% {
                                        opacity: 1;
                                        transform: translateY(0);
                                    }
                                }

                                @keyframes floating {
                                    0% {
                                        opacity: 1;
                                        transform: translateY(0px);
                                    }

                                    50% {
                                        transform: translateY(-10px);
                                    }

                                    100% {
                                        opacity: 1;
                                        transform: translateY(0px);
                                    }
                                }

                                .animator-hidden {
                                    display: none;
                                }
                            </style>
                            <g id="freepik--background-complete--inject-2" class="animable"
                                style="transform-origin: 256.551px 251.69px;">
                                <path
                                    d="M278.44,462.06c-17.24-8.16-24.11-27.56-26.54-45.63-.41-3-1.27-6.12-.29-9s4-5.23,6.9-4.42c2.41.67,3.82,3.09,5.43,5a17.66,17.66,0,0,0,8.16,5.52c2.08.67,4.55.88,6.26-.48,2.34-1.87,2-5.49,1.52-8.47Q278.41,396.29,277,388a28.24,28.24,0,0,1-.59-9c.44-3,2.05-6,4.75-7.24s6.49-.23,7.58,2.59a28.31,28.31,0,0,1,.72,3.69c.29,1.23,1.1,2.5,2.33,2.65s2.3-.9,3.05-1.93c2.56-3.53,4-7.76,5.3-11.95s2.52-8.46,4.76-12.22,5.66-7,9.89-8,9.23.9,11,4.91.06,8.7-2,12.56A67.69,67.69,0,0,1,312.1,379.6a5.57,5.57,0,0,0-1.9,2.88c-.31,2.1,1.91,3.76,4,4.08,2.34.36,4.72-.28,7.09-.4s5.06.48,6.32,2.53c1.73,2.84-.28,6.47-2.43,9a58,58,0,0,1-15.23,12.6c-2.06,1.17-4.25,2.27-5.76,4.11s-2.12,4.7-.7,6.62,4.29,2.13,6.51,1.31,4.07-2.41,6.12-3.6c3.84-2.24,9.18-2.86,12.41.24a9.56,9.56,0,0,1,2.41,8.18,21.93,21.93,0,0,1-3.27,8.13,58.26,58.26,0,0,1-21.58,21.36c-8.95,4.9-17.61,7.29-27.64,5.43"
                                    style="fill: rgb(245, 245, 245); transform-origin: 291.123px 404.514px;"
                                    id="el3r91h00nx64" class="animable"></path>
                                <path
                                    d="M281.17,450a270.86,270.86,0,0,1,5.74-30.57l1.92-7.93c.63-2.61,1.26-5.19,2-7.67a136,136,0,0,1,5.26-14c1.89-4.38,3.84-8.48,5.69-12.29s3.66-7.33,5.44-10.46a107,107,0,0,1,9.48-14.16c1.25-1.58,2.26-2.77,2.95-3.57.33-.38.6-.68.79-.91s.28-.3.29-.29a3,3,0,0,1-.24.33l-.76.94c-.66.82-1.64,2-2.86,3.63a113.69,113.69,0,0,0-9.31,14.23c-1.75,3.14-3.53,6.66-5.37,10.47s-3.76,7.91-5.63,12.29a134.47,134.47,0,0,0-5.2,14c-.77,2.47-1.39,5-2,7.64l-1.92,7.94a277.08,277.08,0,0,0-5.77,30.5"
                                    style="fill: rgb(224, 224, 224); transform-origin: 300.95px 399.135px;"
                                    id="el008yzyqb9lgnp" class="animable"></path>
                                <path
                                    d="M291,403.79a5.79,5.79,0,0,1-.51-1.23c-.3-.79-.69-2-1.15-3.41-.92-2.9-2.06-6.95-3.3-11.41s-2.43-8.49-3.4-11.36c-.48-1.44-.88-2.61-1.16-3.4a7.35,7.35,0,0,1-.39-1.27,5.84,5.84,0,0,1,.59,1.19c.35.77.8,1.92,1.33,3.34,1.07,2.86,2.32,6.87,3.57,11.35s2.3,8.4,3.14,11.44c.39,1.38.71,2.54,1,3.47A7.53,7.53,0,0,1,291,403.79Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 286.045px 387.75px;"
                                    id="elkuf4mdz2gbs" class="animable"></path>
                                <path
                                    d="M328.15,390.13a7.55,7.55,0,0,1-1.5.45c-1,.25-2.37.61-4.09,1.11-3.45,1-8.16,2.48-13.29,4.38s-9.7,3.83-13,5.31c-1.64.73-2.95,1.36-3.86,1.79a8.72,8.72,0,0,1-1.43.62,7.51,7.51,0,0,1,1.33-.82c.88-.49,2.17-1.17,3.79-2,3.23-1.58,7.79-3.57,12.93-5.48a135,135,0,0,1,13.39-4.23c1.74-.46,3.16-.76,4.15-.95A8.54,8.54,0,0,1,328.15,390.13Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 309.565px 396.96px;"
                                    id="elmgptxmznfs" class="animable"></path>
                                <path
                                    d="M281.52,449.23a2.61,2.61,0,0,1-.34-.43l-.89-1.27c-.77-1.12-1.84-2.75-3.13-4.79-2.6-4.08-6-9.83-9.67-16.23s-7-12.17-9.53-16.29l-3-4.89-.8-1.33a1.91,1.91,0,0,1-.25-.48s.13.13.34.42.54.76.89,1.28c.77,1.11,1.84,2.74,3.14,4.79,2.59,4.08,6,9.82,9.67,16.22s7,12.17,9.52,16.3l3,4.88c.32.53.59,1,.8,1.33A1.85,1.85,0,0,1,281.52,449.23Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 267.715px 426.375px;"
                                    id="elik3sam7vzb" class="animable"></path>
                                <path
                                    d="M329.7,424.18a1.86,1.86,0,0,1-.47.3l-1.39.74-5.16,2.69c-4.36,2.28-10.34,5.49-16.94,9s-12.61,6.72-17,8.9c-2.2,1.09-4,2-5.24,2.53L282,449a2.32,2.32,0,0,1-.52.2,2.15,2.15,0,0,1,.47-.3l1.4-.74,5.16-2.7c4.35-2.27,10.33-5.48,16.93-9s12.62-6.71,17-8.89c2.2-1.09,4-2,5.24-2.53l1.44-.66A2,2,0,0,1,329.7,424.18Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 305.59px 436.69px;"
                                    id="ellyknpd4o9j" class="animable"></path>
                                <path
                                    d="M153.4,247.41s-11.88,1.65-5.21,27.67,12.33,39.44,12.33,39.44.89,5.89-3.86,5.71-14.44-4-17.73,1.09c-3.4,5.32-.42,11.72,7,18.43s23.24,22,24.66,23.39,2.46,4.25-.8,4.64-26.38-2.32-27,8.73,23.21,26.33,25.78,28.05,3,3.06,2.4,4.56-8.26-.15-14.87-.66-14.37.08-14.2,6.48,12.69,22.6,49.19,34.64l17.29,4.47,12.77-12.58c25.7-28.59,28.51-48.86,25.48-54.5s-10-2.29-15.54,1.43-11.34,9-12.58,8-1.56-2.38-.18-5.15,14.47-27.87,8.43-37.15S202,358.64,199,359.91s-3.54-1.75-3-3.63,6.64-23,9.78-32.55,2.54-16.57-3.06-19.49c-5.4-2.81-11.89,5.35-15.93,7.87s-6.18-3-6.18-3-1.76-14.45-8.9-40.35-18.53-21.26-18.53-21.26"
                                    style="fill: rgb(235, 235, 235); transform-origin: 192.571px 350.614px;"
                                    id="eleqw2b71avoq" class="animable"></path>
                                <path
                                    d="M208.37,458.35c-5.17-19-13.8-53-21.35-82.19s-14.41-55.51-19.49-74.57c-2.54-9.52-4.6-17.22-6-22.57-.7-2.65-1.25-4.72-1.63-6.14l-.42-1.6c-.09-.36-.12-.55-.12-.55s.07.17.18.53.26.91.46,1.59c.41,1.42,1,3.47,1.74,6.11,1.5,5.31,3.62,13,6.2,22.52,5.17,19,12.1,45.41,19.65,74.54s16.11,63.16,21.19,82.22"
                                    style="fill: rgb(224, 224, 224); transform-origin: 184.07px 364.54px;"
                                    id="el55k4sss1rag" class="animable"></path>
                                <path
                                    d="M152.27,327.26a6.46,6.46,0,0,1,1.14.61c.71.42,1.73,1.06,3,1.86,2.49,1.61,5.88,3.92,9.57,6.53l9.42,6.72,2.87,2a5.68,5.68,0,0,1,1,.79,6.29,6.29,0,0,1-1.15-.61c-.71-.42-1.73-1.06-3-1.87-2.47-1.63-5.83-4-9.52-6.6l-9.47-6.65-2.88-2A5.87,5.87,0,0,1,152.27,327.26Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 165.77px 336.515px;"
                                    id="eldolzp5fge6" class="animable"></path>
                                <path
                                    d="M180.72,344.94c-.13-.08,4.32-7.27,9.93-16.06s10.28-15.85,10.41-15.77-4.32,7.28-9.94,16.07S180.85,345,180.72,344.94Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 190.89px 329.025px;"
                                    id="elapxqxyo89o" class="animable"></path>
                                <path
                                    d="M190.3,390.22a5.27,5.27,0,0,1,.95-.92l2.69-2.36c2.27-2,5.4-4.76,8.74-7.94s6.28-6.15,8.38-8.32c1-1,1.82-1.89,2.49-2.57a6.91,6.91,0,0,1,1-.91,5.25,5.25,0,0,1-.8,1.05c-.54.65-1.35,1.57-2.37,2.69-2,2.25-4.92,5.28-8.28,8.46s-6.52,5.92-8.86,7.84c-1.18,1-2.14,1.72-2.82,2.23A6.11,6.11,0,0,1,190.3,390.22Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 202.425px 378.71px;"
                                    id="elya0lkk7ugq9" class="animable"></path>
                                <path
                                    d="M161.05,379.89a5,5,0,0,1,1.18.29l3.17,1c2.66.85,6.33,2.06,10.37,3.42s7.69,2.64,10.32,3.59l3.11,1.14a5.4,5.4,0,0,1,1.11.49,4.61,4.61,0,0,1-1.18-.28l-3.17-1c-2.66-.85-6.33-2.06-10.37-3.43s-7.69-2.64-10.32-3.58l-3.11-1.15A4.53,4.53,0,0,1,161.05,379.89Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 175.68px 384.855px;"
                                    id="el5isfan7qanv" class="animable"></path>
                                <path
                                    d="M164.43,420.94a7.94,7.94,0,0,1,1.51.38l4.06,1.24c3.42,1.07,8.13,2.58,13.33,4.29s9.89,3.27,13.28,4.44l4,1.4a10.22,10.22,0,0,1,1.45.59,7.91,7.91,0,0,1-1.52-.38l-4.06-1.24c-3.42-1.07-8.13-2.58-13.33-4.29s-9.89-3.28-13.27-4.44l-4-1.41A8.65,8.65,0,0,1,164.43,420.94Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 183.245px 427.11px;"
                                    id="eln4kma7davb" class="animable"></path>
                                <path
                                    d="M201.24,432.73a8.94,8.94,0,0,1,1.17-1.19l3.31-3.11c2.79-2.63,6.63-6.28,10.76-10.43s7.78-8,10.4-10.8l3.1-3.32a10.62,10.62,0,0,1,1.19-1.18,8.86,8.86,0,0,1-1,1.32c-.68.83-1.7,2-3,3.44-2.55,2.88-6.15,6.78-10.3,10.93s-8,7.77-10.88,10.33c-1.44,1.27-2.61,2.3-3.44,3A9.94,9.94,0,0,1,201.24,432.73Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 216.205px 417.715px;"
                                    id="eleipd13i1tv" class="animable"></path>
                                <path
                                    d="M101.8,92.24l-9.76-3s-2.56,8.2-11.12,5.69a8.29,8.29,0,0,1-6.07-7.43A9.12,9.12,0,0,1,78,79.77c2.51-2.22,6.91-3.57,13.12-.36l6.87-22-9.65-3-4,12.89S69.7,66.57,65.05,81.48c-4.45,14.27,7.31,21.58,12.79,23.29C82,106.07,96.61,109.51,101.8,92.24Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 82.9326px 80.1759px;"
                                    id="el105plv27429h" class="animable"></path>
                                <g id="el04ico10v5979">
                                    <rect x="90.84" y="41.99" width="10.26" height="9.58"
                                        style="fill: rgb(245, 245, 245); transform-origin: 95.97px 46.78px; transform: rotate(-162.67deg);"
                                        class="animable" id="eleu4jecuo5cv"></rect>
                                </g>
                                <path
                                    d="M128.73,67.4l3.91-1a3.43,3.43,0,0,1,2.53-4.23,3.28,3.28,0,0,1,3.6,1.21,3.61,3.61,0,0,1,.55,3.23c-.37,1.27-1.56,2.65-4.32,2.88l2.33,8.81,3.86-1-1.36-5.16a7.79,7.79,0,0,0,3.47-8.8c-1.5-5.72-7-5.69-9.17-5.12C132.45,58.61,126.84,60.52,128.73,67.4Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 135.971px 68.1374px;"
                                    id="elg8yejc5j11k" class="animable"></path>
                                <g id="el7rj3ung9x3x">
                                    <rect x="138.21" y="79.5" width="4.06" height="3.79"
                                        style="fill: rgb(235, 235, 235); transform-origin: 140.24px 81.395px; transform: rotate(-15.0049deg);"
                                        class="animable" id="elakrgt07wnym"></rect>
                                </g>
                                <path
                                    d="M451.54,168.61l3.8,1.37a3.44,3.44,0,0,1,4.5-2,3.26,3.26,0,0,1,2.26,3,3.63,3.63,0,0,1-1.38,3c-1,.83-2.79,1.28-5.19-.1l-3.11,8.57,3.76,1.36,1.82-5a7.81,7.81,0,0,0,7.87-5.26c2-5.56-2.51-8.65-4.64-9.42C459.6,163.49,453.9,161.88,451.54,168.61Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 458.955px 173.65px;"
                                    id="el0lzfdvlhvzda" class="animable"></path>
                                <g id="el8b63ie8qy7x">
                                    <rect x="451.01" y="184.77" width="4.06" height="3.79"
                                        style="fill: rgb(235, 235, 235); transform-origin: 453.04px 186.665px; transform: rotate(19.91deg);"
                                        class="animable" id="elgc9atqks3h"></rect>
                                </g>
                                <path
                                    d="M48.26,212.13l8-3.1s-2.6-6.75,4.37-9.58a7,7,0,0,1,7.9,1.73,7.73,7.73,0,0,1,1.94,6.73c-.5,2.78-2.7,6-8.49,7.11l7,18.13,8-3.06-4.1-10.62s10-7.18,5.31-19.48C73.64,188.23,62,189.57,57.53,191.3,54.08,192.63,42.64,198,48.26,212.13Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 63.087px 211.66px;"
                                    id="elspw8gpzl4g" class="animable"></path>
                                <g id="eledf8n8v63l">
                                    <rect x="71.58" y="235.07" width="8.65" height="8.08"
                                        style="fill: rgb(245, 245, 245); transform-origin: 75.905px 239.11px; transform: rotate(-21.07deg);"
                                        class="animable" id="el9ms077yf2ng"></rect>
                                </g>
                                <path
                                    d="M454.67,242.64l-5.7,2.19s1.84,4.79-3.1,6.79a5,5,0,0,1-5.6-1.22,5.47,5.47,0,0,1-1.37-4.77c.36-2,1.92-4.24,6-5L440,227.74l-5.64,2.17,2.9,7.53a11.79,11.79,0,0,0-3.76,13.8c3.21,8.33,11.43,7.39,14.63,6.16C450.55,256.45,458.65,252.65,454.67,242.64Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 444.193px 242.971px;"
                                    id="elrjyo2a1n7s" class="animable"></path>
                                <g id="elmrlamfz5gg">
                                    <rect x="432.01" y="220.66" width="6.13" height="5.72"
                                        style="fill: rgb(245, 245, 245); transform-origin: 435.075px 223.52px; transform: rotate(158.93deg);"
                                        class="animable" id="elot31y422ah"></rect>
                                </g>
                            </g>
                            <g id="freepik--Floor--inject-2" class="animable animator-hidden"
                                style="transform-origin: 250px 463.77px;">
                                <path
                                    d="M470.77,463.77c0,.15-98.85.26-220.76.26s-220.78-.11-220.78-.26,98.83-.26,220.78-.26S470.77,463.63,470.77,463.77Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 250px 463.77px;" id="elto9y9nrmt2e"
                                    class="animable"></path>
                            </g>
                            <g id="freepik--Plant--inject-2" class="animable"
                                style="transform-origin: 97.9208px 377.043px;">
                                <path
                                    d="M92.64,437.8c1-3.68-1.47-7.37-4.17-10s-5.93-5.05-7.34-8.58c-2.28-5.72.78-13.12-3.1-17.89-2.29-2.8-6.39-3.74-8.42-6.74a15.23,15.23,0,0,1-1.83-5.35,54.32,54.32,0,0,0-13.53-25.32,47.22,47.22,0,0,0,5.31,24.4c1.57,3,3.51,5.92,4,9.27.85,5.43-2.19,11-.85,16.36,1.53,6.1,8.38,10.19,8.7,16.47.28,5.31-4.35,10-4,15.28A14.22,14.22,0,0,0,69.8,452c4.1,6.83,10.14,11.53,19.28,11.38l11.2.39Z"
                                    style="fill: #F3821A; transform-origin: 77.2315px 413.845px;" id="eljoo1vhw3mro"
                                    class="animable"></path>
                                <g id="elj0xgcsjk9ib">
                                    <g style="opacity: 0.3; transform-origin: 77.2315px 413.845px;" class="animable"
                                        id="elcvr07p95o3j">
                                        <path
                                            d="M92.64,437.8c1-3.68-1.47-7.37-4.17-10s-5.93-5.05-7.34-8.58c-2.28-5.72.78-13.12-3.1-17.89-2.29-2.8-6.39-3.74-8.42-6.74a15.23,15.23,0,0,1-1.83-5.35,54.32,54.32,0,0,0-13.53-25.32,47.22,47.22,0,0,0,5.31,24.4c1.57,3,3.51,5.92,4,9.27.85,5.43-2.19,11-.85,16.36,1.53,6.1,8.38,10.19,8.7,16.47.28,5.31-4.35,10-4,15.28A14.22,14.22,0,0,0,69.8,452c4.1,6.83,10.14,11.53,19.28,11.38l11.2.39Z"
                                            id="el4msrndulfcc" class="animable"
                                            style="transform-origin: 77.2315px 413.845px;"></path>
                                    </g>
                                </g>
                                <path
                                    d="M102.54,464a9,9,0,0,0,3.09-.06,19.27,19.27,0,0,0,3.63-.92,15.55,15.55,0,0,0,4.5-2.46,6.22,6.22,0,0,0,1.85-2.47,11.67,11.67,0,0,0,.52-3.34,32.52,32.52,0,0,1,.27-3.62,9.79,9.79,0,0,1,1.36-3.6c1.32-2.32,3.52-4.52,4.22-7.67s.22-6.45-.3-9.81-1-7,.26-10.52,3.66-6.67,4.89-10.61.65-8.28.91-12.51a16.5,16.5,0,0,1,1.46-6.22c.9-2,2.16-3.85,3.14-5.93,2-4.22,2.34-9,2.88-13.69.27-2.36.53-4.75.8-7.15a35.54,35.54,0,0,1,1.25-7.17,64.16,64.16,0,0,1,2.68-6.93,24.09,24.09,0,0,0,1.3-3.61,36.45,36.45,0,0,0,.36-3.86,45.81,45.81,0,0,0-.3-7.75c-.3-2.58-.77-5.14-1.05-7.73,0-.16,0-.31,0-.45l-.06-.51-.45.22a17.3,17.3,0,0,0-6,5.09,27.65,27.65,0,0,0-3.71,6.83c-1.87,4.81-2.54,9.85-3.48,14.66s-2.14,9.54-4.6,13.54c-1.23,2-2.72,3.82-4,5.76a15.78,15.78,0,0,0-2.78,6.38c-.67,4.74,1.94,8.9,1.4,13.1a14.49,14.49,0,0,1-2,5.81c-1,1.79-2.21,3.45-3.35,5.11a32.76,32.76,0,0,0-3,5.17,16.27,16.27,0,0,0-1.38,5.61c-.27,3.78.26,7.36,0,10.74a24.75,24.75,0,0,1-2.77,9.21c-1.35,2.75-2.86,5.24-4.12,7.66-.63,1.2-1.22,2.38-1.7,3.57a17.87,17.87,0,0,0-1,3.54,22.2,22.2,0,0,0-.08,6.39,16.11,16.11,0,0,0,3.2,8.15,8.11,8.11,0,0,0,.91,1,4.55,4.55,0,0,0,.73.62c.42.31.64.45.64.45a13.93,13.93,0,0,1-2.17-2.14,16.15,16.15,0,0,1-3-8.1,22.09,22.09,0,0,1,.14-6.3,17,17,0,0,1,1-3.45,36.53,36.53,0,0,1,1.71-3.52c1.27-2.4,2.79-4.88,4.17-7.65a25,25,0,0,0,2.86-9.37c.3-3.45-.22-7.05.06-10.73a16.06,16.06,0,0,1,1.35-5.43,32.62,32.62,0,0,1,3-5.06c1.14-1.66,2.35-3.32,3.39-5.15a15,15,0,0,0,2.14-6.05c.54-4.47-2.05-8.65-1.38-13.06a15.33,15.33,0,0,1,2.69-6.1c1.27-1.91,2.77-3.73,4-5.78,2.55-4.11,3.78-8.93,4.71-13.76s1.62-9.83,3.46-14.55a26.91,26.91,0,0,1,3.61-6.64,16.59,16.59,0,0,1,5.77-4.88l-.51-.29c0,.15,0,.3.05.46.28,2.62.75,5.18,1,7.74a44.36,44.36,0,0,1,.29,7.63,37.37,37.37,0,0,1-.34,3.74,22.5,22.5,0,0,1-1.26,3.49,66.05,66.05,0,0,0-2.7,7,36.3,36.3,0,0,0-1.26,7.28c-.26,2.41-.53,4.8-.79,7.16-.54,4.71-.89,9.41-2.8,13.48-1,2-2.2,3.91-3.13,5.95a17.11,17.11,0,0,0-1.5,6.45c-.25,4.32.31,8.55-.86,12.37s-3.6,7-4.83,10.61-.78,7.43-.24,10.78,1.08,6.65.36,9.62-2.78,5.19-4.12,7.57a10.19,10.19,0,0,0-1.39,3.75,31.48,31.48,0,0,0-.24,3.66,11.2,11.2,0,0,1-.48,3.26,5.89,5.89,0,0,1-1.73,2.35,15.41,15.41,0,0,1-4.39,2.48,19.39,19.39,0,0,1-3.59,1,13.76,13.76,0,0,1-2.27.22C102.81,464,102.54,464,102.54,464Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 119.323px 394.758px;"
                                    id="elpu8e5savlkk" class="animable"></path>
                                <path
                                    d="M137.92,332.1a1.2,1.2,0,0,0-.11.34l-.24,1c-.22.89-.49,2.22-.91,3.88s-1.45,3.54-2.32,5.85a83.47,83.47,0,0,0-2.66,7.94c-.86,3-1.61,6.3-2.41,9.86a41.47,41.47,0,0,1-3.58,10.93c-.92,1.82-2,3.66-2.77,5.68a26.05,26.05,0,0,0-1.61,6.42,131.08,131.08,0,0,1-2.42,13.55c-2.24,9.17-4.38,17.91-6.33,25.87s-3.79,15.08-5.31,21.1-2.67,10.82-3.51,14.25c-.39,1.64-.7,2.93-.92,3.88-.09.41-.17.74-.23,1a1.85,1.85,0,0,0,0,.35,1.31,1.31,0,0,0,.13-.33c.07-.27.17-.59.29-1,.25-.93.6-2.22,1.05-3.85.9-3.4,2.17-8.23,3.74-14.18s3.4-13.15,5.45-21.06,4.13-16.71,6.39-25.89A124.72,124.72,0,0,0,122,384.1a25.83,25.83,0,0,1,1.56-6.27c.79-2,1.8-3.79,2.72-5.63,2-3.65,2.79-7.57,3.58-11.1s1.49-6.87,2.31-9.85,1.68-5.64,2.54-7.94,1.81-4.2,2.22-5.92.6-3,.78-3.92q.1-.62.18-1C137.92,332.22,137.94,332.1,137.92,332.1Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 120.255px 398.05px;"
                                    id="el6k71ed1iv3q" class="animable"></path>
                                <path
                                    d="M104.52,464.05c7.31-4.35,9.41-17.55,6.36-25.49s-8.39-15.2-9.21-23.67c-.64-6.51,1.5-13.19,0-19.55-2.05-8.59-10.43-15.24-10.33-24.07.05-4.95,2.87-9.61,2.64-14.56-.27-6.06-4.93-10.88-7.81-16.22-4.42-8.19-4.71-17.86-6.22-27s-5-19-13.14-23.51c-1.2,7.79-3.25,13.13-2.61,23.68.24,3.79,4.64,11,5.24,19.35.36,5,.6,9.94.91,14.9s.61,9.76,2.34,14.28c1.33,3.47,3.46,6.62,4.45,10.2,1.85,6.73-.59,14,.91,20.84,1.27,5.78,5.27,10.75,6.09,16.61,1.14,8.23-4.18,16.79-1.46,24.64,1.36,3.9,4.56,7,5.47,11.05.71,3.12-.06,6.43.58,9.56,1,5.06,10.66,9,15.81,8.67"
                                    style="fill: #F3821A; transform-origin: 88.1561px 377.015px;" id="el5gpyavuv4s8"
                                    class="animable"></path>
                                <path
                                    d="M68.81,297.67a2.37,2.37,0,0,0,0,.44c0,.33.1.75.16,1.28.17,1.13.36,2.78.74,4.92s1.52,4.56,2.4,7.48,1.86,6.26,2.68,10,1.54,7.91,2.27,12.38,1.53,9.34,3.75,14c1,2.33,2.18,4.67,3,7.17a32.35,32.35,0,0,1,1.54,7.9,158.1,158.1,0,0,0,2.15,17c2.24,11.54,4.37,22.53,6.31,32.54s3.89,18.94,5.45,26.5,2.84,13.6,3.73,17.86l1,4.85c.12.52.21.93.29,1.25a2.49,2.49,0,0,0,.12.43,1.83,1.83,0,0,0,0-.44c-.06-.33-.13-.74-.22-1.27-.22-1.16-.53-2.8-.92-4.88-.84-4.27-2-10.37-3.51-17.9s-3.3-16.56-5.29-26.53-4-21-6.25-32.53a159.51,159.51,0,0,1-2.16-17,32.82,32.82,0,0,0-1.59-8.06c-.89-2.54-2.06-4.89-3.09-7.21-2.2-4.59-3-9.38-3.76-13.83s-1.49-8.63-2.36-12.39-1.82-7.12-2.8-10-2.07-5.32-2.51-7.41-.65-3.77-.86-4.88c-.1-.52-.18-.94-.24-1.27A3.39,3.39,0,0,0,68.81,297.67Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 86.6065px 380.67px;"
                                    id="elae5qdc21l1w" class="animable"></path>
                            </g>
                            <g id="freepik--speech-bubble--inject-2" class="animable"
                                style="transform-origin: 414.007px 83.4531px;">
                                <path
                                    d="M421.47,88.77h-4A3.39,3.39,0,0,1,414,92.18a3.22,3.22,0,0,1-3.12-2.06,3.56,3.56,0,0,1,.28-3.22c.68-1.12,2.16-2.13,4.84-1.66v-9h-3.93v5.26A7.68,7.68,0,0,0,406.56,89c0,5.82,5.22,7.17,7.46,7.17C415.73,96.21,421.55,95.8,421.47,88.77Z"
                                    style="fill: #F3821A; transform-origin: 414.015px 86.2061px;" id="ellcurunexby"
                                    class="animable"></path>
                                <g id="el1riuf2mp0qdh">
                                    <rect x="412.04" y="70.69" width="3.99" height="3.73"
                                        style="fill: #F3821A; transform-origin: 414.035px 72.555px; transform: rotate(180deg);"
                                        class="animable" id="elnvozw35sn0a"></rect>
                                </g>
                                <path
                                    d="M443.28,83.45a3.26,3.26,0,0,0,0-.51c0-.36,0-.85,0-1.48,0-.32,0-.69-.05-1.09s-.11-.84-.18-1.3-.14-1-.22-1.53l-.42-1.7a27.74,27.74,0,0,0-3.6-8.25,29.09,29.09,0,0,0-21.89-13.38,29.4,29.4,0,0,0-4-.08c-.67,0-1.36,0-2,.13l-2.06.31a29.69,29.69,0,0,0-8.12,2.77,31.68,31.68,0,0,0-7.29,5.31,30.35,30.35,0,0,0-5.49,7.64A27.73,27.73,0,0,0,385,79.6a18.87,18.87,0,0,0-.21,2.49,21,21,0,0,0-.05,2.51,29.51,29.51,0,0,0,4.85,15.05l0-.31c-1.39,3.47-2.76,6.88-4.1,10.2l-.24.61.63-.18,10.9-3-.26-.06A29.18,29.18,0,0,0,409,112.37a26,26,0,0,0,6.38.39,19.47,19.47,0,0,0,3.07-.29l1.49-.23c.49-.09,1-.24,1.44-.35A29.17,29.17,0,0,0,438,100.5a27.83,27.83,0,0,0,3.57-6.77c.19-.53.37-1,.54-1.52s.26-1,.37-1.45.23-.91.33-1.33.13-.83.19-1.22c.09-.77.23-1.45.26-2s0-1.08,0-1.5,0-.68,0-.91,0-.31,0-.31a1.05,1.05,0,0,0,0,.31c0,.23,0,.53-.07.91s-.06.91-.1,1.49-.19,1.26-.31,2a29,29,0,0,1-21.51,23.2c-.47.11-.94.25-1.42.34l-1.47.22a19.93,19.93,0,0,1-3,.27,26.63,26.63,0,0,1-6.26-.41,28.85,28.85,0,0,1-12.19-5.37l-.12-.1-.15,0-10.91,3,.38.43,4.11-10.19.06-.16-.09-.15a28.76,28.76,0,0,1-4.12-9.79,29.3,29.3,0,0,1-.62-4.92,20,20,0,0,1,.05-2.45,16.37,16.37,0,0,1,.2-2.43,27.06,27.06,0,0,1,2.79-9.11,30.11,30.11,0,0,1,5.35-7.48A30.88,30.88,0,0,1,401,57.89a28.79,28.79,0,0,1,7.95-2.75l2-.31c.67-.1,1.34-.09,2-.14a29.9,29.9,0,0,1,3.91.07,28.78,28.78,0,0,1,21.63,13,27.69,27.69,0,0,1,3.66,8.12l.45,1.68c.09.53.17,1,.25,1.5s.14.9.21,1.3.05.76.08,1.08c0,.62.08,1.11.11,1.47A1.69,1.69,0,0,0,443.28,83.45Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 414.007px 83.4531px;"
                                    id="elf0rffoou4y4" class="animable"></path>
                            </g>
                            <g id="freepik--question-mark--inject-2" class="animable"
                                style="transform-origin: 241.25px 278.424px;">
                                <path
                                    d="M145.07,201.38h57.75s0-48.49,50.39-49.35c26.17-.46,39.74,16.69,45.26,29.82,6.4,15.25,4.46,32.63-4.12,46.78-9.79,16.15-30.89,32.38-69.81,25.52l-.37,128.67h57.11V306.54s80.09-20.7,80.09-109c0-84.45-68.29-102.69-105-103.87-20.42-.65-27.82-1.53-53.08,2.06C171.1,100.33,144.39,137.71,145.07,201.38Z"
                                    style="fill: #F3821A; transform-origin: 253.214px 237.949px;" id="elfrn2cqx867g"
                                    class="animable"></path>
                                <rect x="224.01" y="409.64" width="57.96" height="54.13"
                                    style="fill: #F3821A; transform-origin: 252.99px 436.705px;" id="elwihtqsldw7a"
                                    class="animable"></rect>
                                <g id="elmd6d5md3vk">
                                    <rect x="224.01" y="409.64" width="57.96" height="54.13"
                                        style="opacity: 0.1; transform-origin: 252.99px 436.705px;" class="animable"
                                        id="el6uxk3lallb4"></rect>
                                </g>
                                <g id="elq4mkhqfa2c">
                                    <path
                                        d="M145.07,201.38h57.75s0-48.49,50.39-49.35c26.17-.46,39.74,16.69,45.26,29.82,6.4,15.25,4.46,32.63-4.12,46.78-9.79,16.15-30.89,32.38-69.81,25.52l-.37,128.67h57.11V306.54s80.09-20.7,80.09-109c0-84.45-68.29-102.69-105-103.87-20.42-.65-27.82-1.53-53.08,2.06C171.1,100.33,144.39,137.71,145.07,201.38Z"
                                        style="opacity: 0.1; transform-origin: 253.214px 237.949px;" class="animable"
                                        id="eluvh24hx4h6"></path>
                                </g>
                                <path
                                    d="M121.14,201.38H178.9s0-48.49,50.39-49.35c26.17-.46,39.74,16.69,45.25,29.82,6.41,15.25,4.47,32.63-4.11,46.78-9.79,16.15-31.26,30.83-70.18,24V382.82h57.11V306.54s80.09-20.7,80.09-109c0-84.45-75.74-104.06-108.15-104.06C204.51,93.51,120.05,99.5,121.14,201.38Z"
                                    style="fill: #F3821A; transform-origin: 229.29px 238.15px;" id="eljziq2p3rlbn"
                                    class="animable"></path>
                                <g id="elajd2tnl7nrd">
                                    <path
                                        d="M121.14,201.38H178.9s0-48.49,50.39-49.35c26.17-.46,39.74,16.69,45.25,29.82,6.41,15.25,4.47,32.63-4.11,46.78-9.79,16.15-31.26,30.83-70.18,24V382.82h57.11V306.54s80.09-20.7,80.09-109c0-84.45-75.74-104.06-108.15-104.06C204.51,93.51,120.05,99.5,121.14,201.38Z"
                                        style="opacity: 0.3; transform-origin: 229.29px 238.15px;" class="animable"
                                        id="elmaa4t4px1xe"></path>
                                </g>
                                <rect x="200.09" y="409.64" width="57.96" height="54.13"
                                    style="fill: #F3821A; transform-origin: 229.07px 436.705px;" id="ele88h2pucm8"
                                    class="animable"></rect>
                                <g id="el157lo57sy86">
                                    <rect x="200.09" y="409.64" width="57.96" height="54.13"
                                        style="opacity: 0.3; transform-origin: 229.07px 436.705px;" class="animable"
                                        id="elvqwyk6arnii"></rect>
                                </g>
                                <path
                                    d="M235.81,152.29a5,5,0,0,1-.86,0c-.57,0-1.39-.19-2.46-.2a49.89,49.89,0,0,0-9.06.38,64.18,64.18,0,0,0-13.07,3.07,55.92,55.92,0,0,0-7.28,3.14,38.48,38.48,0,0,0-7.13,4.61,35.24,35.24,0,0,0-5.83,6.16,60.36,60.36,0,0,0-4.37,6.62,59.19,59.19,0,0,0-5.17,12.38,50.35,50.35,0,0,0-1.74,8.9c-.12,1.06-.15,1.9-.18,2.46a4.55,4.55,0,0,1-.08.86,4.78,4.78,0,0,1,0-.86c0-.57,0-1.41.09-2.48a46,46,0,0,1,1.59-9,57.6,57.6,0,0,1,5.1-12.52,59.89,59.89,0,0,1,4.39-6.69,35,35,0,0,1,5.9-6.25,38.76,38.76,0,0,1,7.22-4.67A56,56,0,0,1,210.2,155a62.82,62.82,0,0,1,13.19-3,46,46,0,0,1,9.11-.21,21.56,21.56,0,0,1,2.46.3A6.21,6.21,0,0,1,235.81,152.29Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 207.185px 176.163px;"
                                    id="elkrhrfix8gtc" class="animable"></path>
                                <path
                                    d="M322.83,142s-.07-.07-.19-.22-.3-.41-.5-.7l-1.91-2.7c-.41-.58-.85-1.25-1.37-1.94l-1.8-2.19L315,131.72c-.75-.88-1.63-1.73-2.51-2.66s-1.78-1.92-2.8-2.87-2.11-1.92-3.23-2.92c-.56-.5-1.11-1-1.71-1.53l-1.86-1.47c-1.27-1-2.53-2-3.9-3a125.71,125.71,0,0,0-18.93-11.18l-5.27-2.38-5.23-2c-1.71-.71-3.45-1.21-5.13-1.77s-3.32-1.13-5-1.52l-4.78-1.25c-1.55-.41-3.09-.66-4.56-1s-2.89-.64-4.28-.81l-4-.58c-2.53-.43-4.85-.52-6.87-.72-1-.08-2-.19-2.83-.23l-2.38-.06-3.3-.11-.86,0-.29,0a.94.94,0,0,1,.29,0l.86,0h3.3l2.39,0c.87,0,1.82.12,2.84.19,2,.17,4.36.24,6.89.65l4,.54c1.39.16,2.81.52,4.29.79s3,.55,4.59,1l4.8,1.24c1.66.38,3.3,1,5,1.51s3.43,1,5.14,1.76l5.26,2,5.3,2.39a122.56,122.56,0,0,1,19,11.26c1.38,1,2.64,2.07,3.91,3.06L305,121.4c.6.5,1.15,1,1.71,1.54l3.22,3c1,1,1.9,2,2.79,2.91s1.74,1.8,2.49,2.69l2,2.55,1.78,2.22c.51.7.94,1.38,1.34,2,.78,1.17,1.39,2.09,1.82,2.75l.47.73A1.15,1.15,0,0,1,322.83,142Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 274.055px 117.824px;"
                                    id="elpht4tohnx6" class="animable"></path>
                                <path
                                    d="M316.81,266a3.09,3.09,0,0,1-.43.6L315,268.23c-.57.73-1.29,1.6-2.18,2.57s-1.84,2.11-3,3.29-2.4,2.5-3.81,3.83-2.94,2.73-4.57,4.19a124.88,124.88,0,0,1-23.36,16.11c-1.94,1-3.77,2-5.54,2.77s-3.42,1.56-4.94,2.2-2.92,1.17-4.14,1.64-2.29.85-3.17,1.13l-2,.65a3.49,3.49,0,0,1-.72.2,3.57,3.57,0,0,1,.68-.3l2-.74c.87-.31,1.92-.71,3.13-1.21s2.61-1,4.11-1.71,3.16-1.38,4.89-2.25,3.58-1.79,5.51-2.8c3.81-2.1,7.92-4.56,12.07-7.4s7.88-5.83,11.2-8.65c1.63-1.44,3.19-2.79,4.58-4.15s2.69-2.59,3.84-3.77,2.16-2.27,3.06-3.23,1.64-1.8,2.24-2.5l1.4-1.59A4.54,4.54,0,0,1,316.81,266Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 287.19px 286.405px;"
                                    id="el3uxtjfp47hk" class="animable"></path>
                                <path
                                    d="M256.35,378.28c-.15,0-.27-16.06-.27-35.87s.12-35.88.27-35.88.26,16.06.26,35.88S256.49,378.28,256.35,378.28Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 256.345px 342.405px;"
                                    id="elv2sj26acj4" class="animable"></path>
                                <path
                                    d="M258.55,460.1c-.15,0-.26-11.27-.26-25.17s.11-25.18.26-25.18.26,11.27.26,25.18S258.69,460.1,258.55,460.1Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 258.55px 434.925px;"
                                    id="eltwg335w3z4" class="animable"></path>
                            </g>
                            <g id="freepik--Character--inject-2" class="animable"
                                style="transform-origin: 366.375px 267.526px;">
                                <path
                                    d="M315.4,193.71c-1,2,2.73,3.64,4.88,4.29a19.62,19.62,0,0,0,6.71.46c3-.16,6.07-.44,8.66-1.92a13.82,13.82,0,0,0,5.22-5.85,41.15,41.15,0,0,0,2.65-7.49S319.89,184.74,315.4,193.71Z"
                                    style="fill: #F3821A; transform-origin: 329.377px 190.883px;" id="elilxv6iaup6"
                                    class="animable"></path>
                                <g id="ely6it7u8xbwc">
                                    <g style="opacity: 0.4; transform-origin: 329.377px 190.883px;" class="animable"
                                        id="el2r7oph5nyrb">
                                        <path
                                            d="M315.4,193.71c-1,2,2.73,3.64,4.88,4.29a19.62,19.62,0,0,0,6.71.46c3-.16,6.07-.44,8.66-1.92a13.82,13.82,0,0,0,5.22-5.85,41.15,41.15,0,0,0,2.65-7.49S319.89,184.74,315.4,193.71Z"
                                            id="elaghkyz3qqpe" class="animable"
                                            style="transform-origin: 329.377px 190.883px;"></path>
                                    </g>
                                </g>
                                <path
                                    d="M382.14,187.31a22.68,22.68,0,0,0,13.34,4.18,9.43,9.43,0,0,0,6.35-2c.77-.71,1.35-1.61,2.14-2.29.54-.46,1.17-.81,1.68-1.3a2.15,2.15,0,0,0,.73-1.9A3.93,3.93,0,0,0,405,181.8c-2.71-1.54-5.95-1.48-9.07-1.41a31.21,31.21,0,0,0-9.15,1.79c-2.42.82-4.95,2-6.18,4.2"
                                    style="fill: #F3821A; transform-origin: 393.499px 185.933px;" id="el2jn5holym7w"
                                    class="animable"></path>
                                <g id="el3x3w44gnmf4">
                                    <g style="opacity: 0.4; transform-origin: 393.499px 185.94px;" class="animable"
                                        id="elg3vpj1fjbf">
                                        <path
                                            d="M406.38,184a4.15,4.15,0,0,0-1.77-2c-2.71-1.54-5.56-1.68-8.68-1.61a31.21,31.21,0,0,0-9.15,1.79c-2.42.82-4.95,2-6.18,4.2l1.54.93a22.68,22.68,0,0,0,13.34,4.18,9.43,9.43,0,0,0,6.35-2c.77-.71,1.35-1.61,2.14-2.29.54-.46,1.17-.81,1.68-1.3A2.15,2.15,0,0,0,406.38,184Z"
                                            id="el541t9me5ofg" class="animable"
                                            style="transform-origin: 393.499px 185.94px;"></path>
                                    </g>
                                </g>
                                <path
                                    d="M336,223.2l49.85.66a.65.65,0,0,0,.62-.84l-5.85-18.24s.86-9.12,2.05-20.08c1.81-16.65,4.22-37.58,4.25-37.52-3.41-9.56-23.53-11.18-23.53-11.18l-22.93,1.36-.8-1.35-6.6,3.07a30.13,30.13,0,0,0-4.14,2.34c-4.36,2.91-14.86,9.6-16.78,17.05-4.43,17.25,3.07,36.5,3.07,36.5l4.82-3.77a33.84,33.84,0,0,1,3.82-2.55l9.66,25.89a4.57,4.57,0,0,0-2.1,3.32c-.08,2.1,1,4.62,4.59,5.34"
                                    style="fill: #F3821A; transform-origin: 348.83px 179.93px;" id="eljfgod7xf7w"
                                    class="animable"></path>
                                <g id="elaf8w35kfeec">
                                    <g style="opacity: 0.3; transform-origin: 354.579px 180.309px;" class="animable"
                                        id="elezttahiaipa">
                                        <path
                                            d="M357.39,192.68c1.58-8.5.75-17.24-.1-25.84-2.76,7-2.66,15-5.59,21.94a9.4,9.4,0,0,0-.78,2.31,2.59,2.59,0,0,0,.66,2.26c.8.73,2,.33,3.06.21a11.94,11.94,0,0,0,2.75-.88"
                                            id="ellfxjwfk53kd" class="animable"
                                            style="transform-origin: 354.579px 180.309px;"></path>
                                    </g>
                                </g>
                                <g id="el0uhcq14n9vh">
                                    <g style="opacity: 0.4; transform-origin: 359.525px 209.392px;" class="animable"
                                        id="eldxims19hrhg">
                                        <path
                                            d="M339,212.36c4,1.39,8.26-1.2,12.49-1.66,2.8-.3,5.6.34,8.38.79a62.86,62.86,0,0,0,17,.42,6.52,6.52,0,0,0,2.5-.65,3,3,0,0,0,1.31-2.48c-9.42-1-18.83-1.54-28.25-2.51a17.64,17.64,0,0,0-7.06.23c-2.84.88-5,3.11-7,5.32"
                                            id="el5pza89tuogk" class="animable"
                                            style="transform-origin: 359.525px 209.392px;"></path>
                                    </g>
                                </g>
                                <path
                                    d="M404.94,180.72c-4.07-9.17-18.42-34.53-18.42-34.53l-11.11,13.93L378,187.47s5.87-6.55,22.28-6.68a8,8,0,0,1,6.1,3.22Z"
                                    style="fill: #F3821A; transform-origin: 390.895px 166.83px;" id="elm76oj63qnlq"
                                    class="animable"></path>
                                <path
                                    d="M338.23,175.87a37.71,37.71,0,0,1-1.88-6,37.89,37.89,0,0,1-1.36-6.11,39.68,39.68,0,0,1,1.87,6A38.64,38.64,0,0,1,338.23,175.87Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 336.61px 169.815px;"
                                    id="eldgln4ztiun" class="animable"></path>
                                <path
                                    d="M374.57,158.27a6.59,6.59,0,0,1,1,.87,29,29,0,0,1,2.48,2.72,26.41,26.41,0,0,1,5.31,10.86,20.49,20.49,0,0,1,.31,6.7c-.25,2.05-.64,3.85-.9,5.37s-.42,2.76-.5,3.62a6.7,6.7,0,0,1-.14,1.33,6,6,0,0,1-.06-1.35,32.42,32.42,0,0,1,.34-3.66c.21-1.53.56-3.35.79-5.36a20.69,20.69,0,0,0-.35-6.54,27.57,27.57,0,0,0-5.09-10.74C375.93,159.63,374.49,158.35,374.57,158.27Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 379.19px 174.005px;"
                                    id="el83fllcsxui6" class="animable"></path>
                                <path
                                    d="M364.39,221a4.26,4.26,0,0,1-1.09.32,9.73,9.73,0,0,1-1.3.25c-.51.07-1.09.18-1.74.21a25.07,25.07,0,0,1-4.58,0,29.57,29.57,0,0,1-5.5-1.1,30,30,0,0,1-5.16-2.21,26.39,26.39,0,0,1-3.79-2.57c-.52-.4-.94-.82-1.32-1.17a11.52,11.52,0,0,1-.93-.94,3.91,3.91,0,0,1-.71-.88c.07-.07,1.14,1.13,3.19,2.7a28.77,28.77,0,0,0,3.79,2.44,31.79,31.79,0,0,0,5.08,2.13,31.34,31.34,0,0,0,5.4,1.12,29.61,29.61,0,0,0,4.5.14C362.8,221.3,364.37,220.92,364.39,221Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 351.33px 217.396px;"
                                    id="eltoaqpbwd9c9" class="animable"></path>
                                <path
                                    d="M379.78,215.32a3.48,3.48,0,0,1,.39,1.46,9,9,0,0,1-.27,3.64,6.32,6.32,0,0,1-2,3.1c-.73.61-1.29.8-1.32.75s.44-.38,1.07-1a7.08,7.08,0,0,0,1.71-3C380.16,217.63,379.59,215.33,379.78,215.32Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 378.412px 219.799px;"
                                    id="elu5s9yyhgn9i" class="animable"></path>
                                <path
                                    d="M377.07,218.84a5.42,5.42,0,0,1-2.14,5.52c-.11-.11.82-1.1,1.4-2.63S376.92,218.85,377.07,218.84Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 376.054px 221.6px;"
                                    id="elfjnd50ekh69" class="animable"></path>
                                <path
                                    d="M368.15,185.94a21.23,21.23,0,0,1-1.78,2.56,20.49,20.49,0,0,1-1.75,2.58,6.41,6.41,0,0,1,1.32-2.88A6.31,6.31,0,0,1,368.15,185.94Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 366.385px 188.51px;"
                                    id="el7djo2e2bjst" class="animable"></path>
                                <path
                                    d="M333.93,161.72a25.09,25.09,0,0,1-2.21-1.46,28.39,28.39,0,0,0-11.81-4.41,22.28,22.28,0,0,1-2.63-.35,9.76,9.76,0,0,1,2.67,0,23.88,23.88,0,0,1,12,4.47A9.54,9.54,0,0,1,333.93,161.72Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 325.605px 158.564px;"
                                    id="el93wsc4p8nyu" class="animable"></path>
                                <path
                                    d="M386.52,145.86a43.23,43.23,0,0,0-5,4.73,43,43,0,0,0-3.79,5.78,6.1,6.1,0,0,1,.69-1.94,20.17,20.17,0,0,1,2.7-4.18,19.64,19.64,0,0,1,3.66-3.37A5.88,5.88,0,0,1,386.52,145.86Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 382.125px 151.115px;"
                                    id="elziijcj0f8q" class="animable"></path>
                                <path
                                    d="M365.94,137.62a2.19,2.19,0,0,1,.22.46,8.92,8.92,0,0,1,.47,1.4,11.77,11.77,0,0,1,0,5.42,13.34,13.34,0,0,1-4.08,6.89,13.85,13.85,0,0,1-9.2,3.28A15.61,15.61,0,0,1,344,152a17.71,17.71,0,0,1-5.11-6.19,18.75,18.75,0,0,1-1.7-5.15,11.26,11.26,0,0,1-.18-1.46,1.61,1.61,0,0,1,0-.52s.11.7.39,1.94a20.39,20.39,0,0,0,1.83,5,17.72,17.72,0,0,0,5.07,6,15.28,15.28,0,0,0,9,3,13.52,13.52,0,0,0,8.89-3.12,13.2,13.2,0,0,0,4-6.62,12.2,12.2,0,0,0,.18-5.28C366.18,138.28,365.88,137.64,365.94,137.62Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 351.968px 146.346px;"
                                    id="elsub7f18u21" class="animable"></path>
                                <g id="ely5zvh1ma99">
                                    <g style="opacity: 0.3; transform-origin: 367.07px 188.752px;" class="animable"
                                        id="eldtieidq59tj">
                                        <path
                                            d="M369.44,187.71c0-.5-.08-1.09-.52-1.34a1,1,0,0,0-.9,0,2.47,2.47,0,0,0-.73.6,12.27,12.27,0,0,0-2.67,4.27l4.9-.43C369.49,189.8,369.47,188.74,369.44,187.71Z"
                                            id="elbuearef7rk" class="animable"
                                            style="transform-origin: 367.07px 188.752px;"></path>
                                    </g>
                                </g>
                                <g id="elo7s9pzjg58i">
                                    <g style="opacity: 0.3; transform-origin: 383.952px 177.585px;" class="animable"
                                        id="el0a8fd176dgvh">
                                        <path
                                            d="M385.71,177.4a16.07,16.07,0,0,0-3.56-7.6c2.12,6.92,1.41,10.83.22,15.57l.26-.66C384,181.94,386.08,180.2,385.71,177.4Z"
                                            id="elr7ktq0g829" class="animable"
                                            style="transform-origin: 383.952px 177.585px;"></path>
                                    </g>
                                </g>
                                <polygon points="375.92 409.86 372.93 454.71 353.43 454.48 350.36 407.85 375.92 409.86"
                                    style="fill: rgb(255, 190, 157); transform-origin: 363.14px 431.28px;"
                                    id="elq756l6giux" class="animable"></polygon>
                                <path
                                    d="M373.48,448.81v1.3s22,8.84,22.21,13L352,462.87l.68-14.53C359.19,451.39,366,451.77,373.48,448.81Z"
                                    style="fill: #F3821A; transform-origin: 373.845px 455.725px;" id="el5jt7qq0ekn6"
                                    class="animable"></path>
                                <path
                                    d="M357.11,453a1.78,1.78,0,0,0-1.24,2,1.7,1.7,0,0,0,2,1.25,1.87,1.87,0,0,0,1.3-2.15,1.77,1.77,0,0,0-2.22-1.07"
                                    style="fill: rgb(255, 255, 255); transform-origin: 357.525px 454.613px;"
                                    id="elya03v3l8jbb" class="animable"></path>
                                <path d="M352,462.87l.16-3.49L394,460.9s1.94.86,1.71,2.22Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 373.864px 461.25px;"
                                    id="elnhf69klml1g" class="animable"></path>
                                <path
                                    d="M373.64,450.23c0,.21-1.08.3-2.13,1s-1.62,1.57-1.81,1.49.13-1.32,1.42-2.12S373.69,450,373.64,450.23Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 371.645px 451.376px;"
                                    id="el5abfhaqk0hd" class="animable"></path>
                                <path
                                    d="M378.21,452.15c.05.21-.88.56-1.61,1.46s-.94,1.85-1.16,1.84-.34-1.22.59-2.31S378.2,452,378.21,452.15Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 376.748px 453.769px;"
                                    id="elacf8xv3wsx9" class="animable"></path>
                                <path
                                    d="M380.78,457.65c-.2,0-.49-1,.07-2.19s1.55-1.62,1.64-1.45-.53.8-1,1.77S381,457.63,380.78,457.65Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 381.512px 455.812px;"
                                    id="elj58r9j0phw" class="animable"></path>
                                <path
                                    d="M372.36,81.85c1.13-2.8-.24-6.19-2.67-8A11.64,11.64,0,0,0,361,72.16a34.61,34.61,0,0,0-8.54,3,9.63,9.63,0,0,0-16.36,5.34,6.14,6.14,0,0,0-7.27,8.05l13.52,4.75,14.76,26a11.81,11.81,0,0,0,17.38-15.7,10.25,10.25,0,0,0,2.08-2.56,10.34,10.34,0,0,0,4.77-6.4C382.65,88.85,378.17,82.53,372.36,81.85Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 355.015px 97.029px;"
                                    id="el6fdfzmezjhc" class="animable"></path>
                                <path
                                    d="M363.41,136c-.84-4.23-1.42-7.13-1.41-7.1s8-3.1,7.42-14.23c-.28-5.54-2.39-14.27-4.35-21.35-1.76-6.38-7.71-13.41-14-11.38L332,91.24c-1.91.62-2.24,2.42-1.79,4.37l0,1,7.41,30.66,3.13,13.7a11.57,11.57,0,0,0,12.92,8.78h0A11.58,11.58,0,0,0,363.41,136Z"
                                    style="fill: rgb(255, 190, 157); transform-origin: 349.741px 115.727px;"
                                    id="el98wezl01v1p" class="animable"></path>
                                <path
                                    d="M365,100.72a1.42,1.42,0,0,1-1,1.68,1.36,1.36,0,0,1-1.69-1,1.41,1.41,0,0,1,1-1.67A1.35,1.35,0,0,1,365,100.72Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 363.655px 101.063px;"
                                    id="el13l7ybajqb4k" class="animable"></path>
                                <path
                                    d="M364.13,98.59c-.14.22-1.35-.33-2.83,0s-2.42,1.29-2.62,1.14,0-.43.41-.87a3.9,3.9,0,0,1,2.05-1.14,3.67,3.67,0,0,1,2.3.25C364,98.2,364.19,98.5,364.13,98.59Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 361.371px 98.6917px;"
                                    id="el0nig7ygksqan" class="animable"></path>
                                <path
                                    d="M350.48,104a1.41,1.41,0,0,1-1,1.67,1.36,1.36,0,0,1-1.69-.94,1.42,1.42,0,0,1,1-1.68A1.36,1.36,0,0,1,350.48,104Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 349.135px 104.36px;"
                                    id="elbe9s64pgap" class="animable"></path>
                                <path
                                    d="M349.75,102.12c-.13.22-1.35-.34-2.83,0s-2.42,1.28-2.62,1.14,0-.43.41-.88a3.93,3.93,0,0,1,2.05-1.13,3.75,3.75,0,0,1,2.3.24C349.59,101.73,349.82,102,349.75,102.12Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 346.992px 102.221px;"
                                    id="elveq7ixgzdpj" class="animable"></path>
                                <path
                                    d="M357.28,111.52a10.53,10.53,0,0,1,2.32-.94c.37-.12.72-.27.73-.54a2,2,0,0,0-.49-1.07l-1.73-2.66c-2.42-3.79-4.26-6.93-4.11-7s2.24,2.9,4.66,6.69l1.69,2.68a2.29,2.29,0,0,1,.51,1.45,1,1,0,0,1-.51.68,2.52,2.52,0,0,1-.62.23A9.18,9.18,0,0,1,357.28,111.52Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 357.426px 105.414px;"
                                    id="elwqg01nhuadi" class="animable"></path>
                                <path d="M362,128.9a28,28,0,0,1-15.24-.82s5.24,6.84,15.81,3.57Z"
                                    style="fill: rgb(235, 153, 110); transform-origin: 354.665px 130.308px;"
                                    id="el1201duqhwlr" class="animable"></path>
                                <path
                                    d="M350,100c-.1.43-1.63.42-3.37.85s-3.12,1.08-3.4.74c-.12-.16.08-.58.61-1a5.74,5.74,0,0,1,2.44-1.21,5.87,5.87,0,0,1,2.71,0C349.7,99.51,350.07,99.8,350,100Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 346.602px 100.453px;"
                                    id="eloemikauc7cc" class="animable"></path>
                                <path
                                    d="M363.56,93.87c-.24.4-1.52.3-3,.59s-2.65.79-3,.5c-.16-.15,0-.53.43-1a4.78,4.78,0,0,1,2.31-1.06,4.71,4.71,0,0,1,2.51.18C363.42,93.36,363.66,93.67,363.56,93.87Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 360.541px 93.9273px;"
                                    id="eldimcnye5nbv" class="animable"></path>
                                <path
                                    d="M336.71,84.08a7.53,7.53,0,0,0,10.21,5.47c1.58-.64,3.22-1.84,4.82-1.26S354,91.15,355.53,92c2.25,1.26,5-.92,7.51-.7,2,.17,3.51,1.7,5.06,3s3.69,2.28,5.44,1.34a22.1,22.1,0,0,0-1.77-4.82,7.46,7.46,0,0,0-3.66-3.46c-.88-.35-1.83-.47-2.67-.9-1.81-.92-2.62-3-3.93-4.57a8.25,8.25,0,0,0-7-2.8c-2.16.22-4.21,1.31-6.39,1.22-1.61-.07-3.15-.79-4.76-.76-3.13,0-5.48,2.8-7.22,5.41"
                                    style="fill: rgb(38, 50, 56); transform-origin: 354.84px 87.5334px;"
                                    id="elqademry6uk" class="animable"></path>
                                <path
                                    d="M347.25,86.37c-1.44-.11-4.38-.41-5.35-1.43a8.44,8.44,0,0,0-8-2.64,7,7,0,0,0-5,6.66,10,10,0,0,0-7.3,7.17,11.62,11.62,0,0,0,2.5,10.51,20.82,20.82,0,0,1,1.64,2.37,16.94,16.94,0,0,0-1.78,2.7c-2.29,5.06,3.92,7,3.92,7,0,3.4,3.15,3.38,5.16,3.37s3.12,5.36,4.69,5.15l-1.59-16.57a2.06,2.06,0,0,0,.73.14c3.79.07,2.8-7.11,1.58-9a22.2,22.2,0,0,0,2.84-4.58,15.51,15.51,0,0,0,.14-7.66C342.7,89.4,347.87,86.41,347.25,86.37Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 334.27px 104.681px;"
                                    id="el0zbj7856j76l" class="animable"></path>
                                <path
                                    d="M336.64,111.54a3.21,3.21,0,0,0-5.15-1.72c-1,.86-1.53,2.3-.93,4.71,1.62,6.44,7.75,3.49,7.71,3.31S337.34,114.2,336.64,111.54Z"
                                    style="fill: rgb(255, 190, 157); transform-origin: 334.289px 113.882px;"
                                    id="el8e7f1rs7337" class="animable"></path>
                                <path
                                    d="M335.69,115.89s-.09.11-.26.24a1.15,1.15,0,0,1-.83.23c-.74-.08-1.59-1-1.91-2.17a3.88,3.88,0,0,1-.09-1.68,1.35,1.35,0,0,1,.63-1.08.59.59,0,0,1,.74.15c.13.15.12.29.16.3s.11-.15,0-.4a.77.77,0,0,0-.35-.34.88.88,0,0,0-.66,0,1.65,1.65,0,0,0-.93,1.29,4,4,0,0,0,.07,1.9,3,3,0,0,0,2.33,2.37,1.26,1.26,0,0,0,1-.43C335.72,116.05,335.72,115.9,335.69,115.89Z"
                                    style="fill: rgb(235, 153, 110); transform-origin: 333.907px 113.888px;"
                                    id="elj8fxwl40rsd" class="animable"></path>
                                <path
                                    d="M371.17,102.55s.59-.45,1.41-1.45a9.57,9.57,0,0,0,2-5,9.22,9.22,0,0,0-.36-3.7,7.94,7.94,0,0,0-2.29-3.56A9.42,9.42,0,0,0,362.75,87c-.3.1-.58.25-.86.37s-.53.3-.79.45l-.4.22v-.44a3.22,3.22,0,0,0-.81-2.1A5.15,5.15,0,0,0,358,84.22a6.83,6.83,0,0,0-4.29-.32c-2.76.63-5.1,1.89-7.31,2.15a7.06,7.06,0,0,1-5-1,3.89,3.89,0,0,1-1-1c-.16-.27-.24-.42-.22-.43a5.46,5.46,0,0,0,1.31,1.27,7,7,0,0,0,4.83.81,17,17,0,0,0,3.36-1,31.34,31.34,0,0,1,3.9-1.27,8.38,8.38,0,0,1,2.26-.23,6.87,6.87,0,0,1,2.33.54,5.64,5.64,0,0,1,2,1.44,3.81,3.81,0,0,1,.94,2.44l-.4-.22.83-.48c.31-.12.6-.28.92-.39a9.83,9.83,0,0,1,9.69,1.93,8.28,8.28,0,0,1,2.38,3.78,9.73,9.73,0,0,1-1.91,9,6.35,6.35,0,0,1-1.11,1A1.9,1.9,0,0,1,371.17,102.55Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 357.547px 92.8725px;"
                                    id="eleqwqf04ljcr" class="animable"></path>
                                <path
                                    d="M369.87,79.94a7.83,7.83,0,0,0-2.08-.71,5.44,5.44,0,0,0-2.46.23,4.8,4.8,0,0,0-2.53,1.84l-.25.35-.15-.4a7.51,7.51,0,0,0-6.1-4.53,9.7,9.7,0,0,0-5.86,1.7,25.89,25.89,0,0,1-4.65,2.4,7.37,7.37,0,0,1-3.52.42,5.37,5.37,0,0,1-.93-.26c-.2-.09-.31-.14-.3-.16s.45.13,1.26.21a7.68,7.68,0,0,0,3.37-.55A28.83,28.83,0,0,0,350.2,78a15.51,15.51,0,0,1,2.8-1.37,7.68,7.68,0,0,1,3.36-.43,7.89,7.89,0,0,1,6.46,4.89l-.39,0a5.22,5.22,0,0,1,2.79-1.94,5.69,5.69,0,0,1,2.62-.13,4.68,4.68,0,0,1,1.56.6A2,2,0,0,1,369.87,79.94Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 355.455px 78.9077px;"
                                    id="el6w7iz711p3k" class="animable"></path>
                                <path
                                    d="M356.7,114.48A2.16,2.16,0,0,0,355,114a2.57,2.57,0,0,0-1.69,1.23.08.08,0,0,0,0,0s-.05.05-.06.08l0,0a1.28,1.28,0,0,0-.18.76,1.79,1.79,0,0,0,1,1.35,2.3,2.3,0,0,0,2.62-.38A1.87,1.87,0,0,0,356.7,114.48Z"
                                    style="fill: #F3821A; transform-origin: 355.134px 115.823px;" id="ell7l6iqmw1aq"
                                    class="animable"></path>
                                <path
                                    d="M357.2,117.59c-.08,0-.17-.3-.44-.71a3.12,3.12,0,0,0-3.25-1.48c-.49.07-.79.21-.82.14s.2-.31.74-.5a3,3,0,0,1,2.15.12,2.92,2.92,0,0,1,1.51,1.55C357.3,117.23,357.27,117.58,357.2,117.59Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 354.97px 116.243px;"
                                    id="elpolyxxt02xe" class="animable"></path>
                                <path
                                    d="M336.79,118.83s.29.5-.09,1.26a2,2,0,0,1-1.06,1,2,2,0,0,1-1.77-.21,2,2,0,0,1-.95-1.5,2.1,2.1,0,0,1,.41-1.38c.52-.66,1.1-.68,1.1-.62s-.44.23-.79.83a1.76,1.76,0,0,0-.24,1.12,1.6,1.6,0,0,0,.75,1.11,1.65,1.65,0,0,0,1.33.2,1.87,1.87,0,0,0,.91-.7C336.78,119.32,336.71,118.83,336.79,118.83Z"
                                    style="fill: #F3821A; transform-origin: 334.906px 119.282px;" id="elacezgck6pwp"
                                    class="animable"></path>
                                <path
                                    d="M333.42,118.44c.05,0,0,.34-.47.56a1.31,1.31,0,0,1-1.75-1.61,1.27,1.27,0,0,1,.53-.65c.41-.25.72-.15.71-.09s-.24.13-.49.38a1,1,0,0,0,.88,1.62C333.17,118.58,333.35,118.4,333.42,118.44Z"
                                    style="fill: #F3821A; transform-origin: 332.286px 117.84px;" id="elntwohu9kc1"
                                    class="animable"></path>
                                <path
                                    d="M344.41,207.25s24.76,1.44,39.4,1.57c11.33.11,16.39-2.9,18.65-10.19,1.9-6.11-2.18-17.84-2.18-17.84-7.67,0-12.4,1.1-17.33,3.41l1.31,5.36L344.34,193Z"
                                    style="fill: rgb(255, 190, 157); transform-origin: 373.652px 194.806px;"
                                    id="elwlcwc4cns4a" class="animable"></path>
                                <path
                                    d="M392.58,195.28a19.92,19.92,0,0,0-3.73-3.71,19.6,19.6,0,0,0-4.82-2.12,3.49,3.49,0,0,1,1.59.14,10.58,10.58,0,0,1,3.52,1.55,10.45,10.45,0,0,1,2.73,2.72C392.43,194.68,392.64,195.25,392.58,195.28Z"
                                    style="fill: rgb(235, 153, 110); transform-origin: 388.31px 192.347px;"
                                    id="elgvkjjnlljrt" class="animable"></path>
                                <path
                                    d="M335.35,184.16h0s-7.66,1.84-13.29,5.6l6,16.26c2,5.34,8.11,8,13,5.2,7.53-4.31,10.19-16.87,10.19-16.87l8.27-35.88-13.71-8.59-10.41,34.28"
                                    style="fill: rgb(255, 190, 157); transform-origin: 340.79px 181.115px;"
                                    id="ela7g3h51js1s" class="animable"></path>
                                <path
                                    d="M345.76,149.88l.56-11.8-3.07-12c-.17-.66-.25-1.49.29-1.89a1.46,1.46,0,0,1,1.85.06c.83.86,4.83,11.35,4.83,11.35s6.07-3.64,7.15-3.82,2.43,3.09,2.52,3.34a20.32,20.32,0,0,1,0,2.2s3.75.11,4.09.62a13.23,13.23,0,0,1,.43,3.19s1.59.51,1.84,1.71.77,3.18,0,3.62-2.33,1.3-2.33,1.3-.63,6.12-.8,6.68-3.68,4-3.68,4Z"
                                    style="fill: rgb(255, 190, 157); transform-origin: 354.889px 141.164px;"
                                    id="el3y7pww3janx" class="animable"></path>
                                <path
                                    d="M333,211.46s.37.22,1.15.47a7.94,7.94,0,0,0,3.53.28,9.85,9.85,0,0,0,5.12-2.36,23.55,23.55,0,0,0,4.76-6,26.05,26.05,0,0,0,1.85-4.13,43.83,43.83,0,0,0,1.29-4.79c.78-3.37,1.63-7,2.53-10.86,1.8-7.71,3.82-16.33,6-25.62l0-.07.05,0c.69-.68,1.38-1.37,2.07-2.09.34-.36.68-.72,1-1.09.16-.19.33-.38.46-.57a1.44,1.44,0,0,0,.17-.61c.27-2,.48-4.07.7-6.16v-.13l.12-.06,1.91-1.07c.14-.09.36-.19.45-.27a.57.57,0,0,0,.18-.33,3.6,3.6,0,0,0,0-1,15.17,15.17,0,0,0-.45-2.17,2.7,2.7,0,0,0-1.59-1.29l-.17-.06v-.17c0-.58-.06-1.18-.13-1.77a8.1,8.1,0,0,0-.13-.88,1.46,1.46,0,0,0-.12-.37c0-.07,0,0-.06-.06a1,1,0,0,0-.17-.07,17.91,17.91,0,0,0-3.66-.41h-.26v-.26c0-.62,0-1.31,0-2a2.1,2.1,0,0,0-.24-.67c-.1-.24-.22-.47-.34-.71a8.85,8.85,0,0,0-.82-1.32,2.19,2.19,0,0,0-.51-.5.48.48,0,0,0-.53-.06,11.74,11.74,0,0,0-1.41.65c-1.86,1-3.68,2-5.46,3.08l-.26.16-.11-.28c-.94-2.37-1.88-4.71-2.8-7-.46-1.15-.91-2.3-1.37-3.43a1.4,1.4,0,0,0-1.1-1,1.11,1.11,0,0,0-1.3.48,1.16,1.16,0,0,0-.15.71c0,.22.14.56.2.83.16.58.31,1.15.46,1.72.3,1.15.59,2.28.89,3.4q.88,3.38,1.73,6.6v.07q-.3,6.16-.57,11.8V150l-9.11,29.64-2.57,8.25c-.3.93-.53,1.66-.69,2.17s-.26.73-.26.73.05-.26.19-.75l.63-2.19c.58-1.93,1.41-4.72,2.46-8.28,2.16-7.16,5.23-17.38,8.94-29.7v.05q.26-5.62.53-11.8v.07c-.57-2.15-1.16-4.35-1.75-6.59l-.9-3.4c-.15-.57-.3-1.15-.46-1.72a8.81,8.81,0,0,1-.21-.91,1.66,1.66,0,0,1,.21-1,1.6,1.6,0,0,1,.81-.68,2.06,2.06,0,0,1,1.95.44,2,2,0,0,1,.54.86l1.37,3.43c.93,2.3,1.86,4.64,2.81,7l-.37-.13c1.79-1.06,3.59-2.12,5.49-3.11a14.39,14.39,0,0,1,1.48-.67,1,1,0,0,1,.5-.07,1.2,1.2,0,0,1,.48.18,2.86,2.86,0,0,1,.63.62,8.56,8.56,0,0,1,.87,1.4c.13.25.25.49.36.74a2.57,2.57,0,0,1,.28.85c0,.71,0,1.37,0,2l-.25-.27a17.84,17.84,0,0,1,3.82.44,1.74,1.74,0,0,1,.25.11.65.65,0,0,1,.26.26,2.17,2.17,0,0,1,.17.51c.06.32.1.62.14.93.06.61.1,1.21.13,1.81l-.18-.24a3.14,3.14,0,0,1,1.91,1.58,15.45,15.45,0,0,1,.48,2.32,3.54,3.54,0,0,1,0,1.21,1.05,1.05,0,0,1-.36.62,5.09,5.09,0,0,1-.51.3L364.08,148l.13-.19c-.23,2.09-.44,4.14-.72,6.17l-.06.39a.88.88,0,0,1-.19.43,5.15,5.15,0,0,1-.49.62c-.34.38-.68.75-1,1.11-.69.72-1.38,1.41-2.08,2.09l.07-.12c-2.2,9.28-4.24,17.9-6.07,25.61-.91,3.85-1.78,7.48-2.58,10.84a41.26,41.26,0,0,1-1.32,4.82,27.12,27.12,0,0,1-1.9,4.17A23.62,23.62,0,0,1,343,210a10,10,0,0,1-5.25,2.34,7.8,7.8,0,0,1-3.59-.36,6,6,0,0,1-.85-.39Z"
                                    style="fill: rgb(235, 153, 110); transform-origin: 349.951px 168.108px;"
                                    id="eli6t8xatd8v8" class="animable"></path>
                                <path
                                    d="M359.9,137.35c0,.07-.34.11-.87.13a10.05,10.05,0,0,0-2,.24,3.89,3.89,0,0,0-1.7.91c-.36.34-.52.63-.6.6s0-.39.33-.85a3.32,3.32,0,0,1,1.84-1.16,5.53,5.53,0,0,1,2.14-.1C359.58,137.19,359.9,137.28,359.9,137.35Z"
                                    style="fill: rgb(235, 153, 110); transform-origin: 357.301px 138.146px;"
                                    id="elq2cuunhxx9j" class="animable"></path>
                                <path
                                    d="M357,137.46c-.13-.05-.14-.36,0-.69s.34-.56.47-.51.15.36,0,.69S357.1,137.51,357,137.46Z"
                                    style="fill: rgb(235, 153, 110); transform-origin: 357.237px 136.86px;"
                                    id="elup09spttqz" class="animable"></path>
                                <path
                                    d="M364.58,141.09a9.26,9.26,0,0,1-3,.41,2,2,0,0,0-1.66.79c-.26.41-.17.75-.25.77s-.32-.33-.07-.93a1.57,1.57,0,0,1,.71-.79,3,3,0,0,1,1.2-.36A8.23,8.23,0,0,1,364.58,141.09Z"
                                    style="fill: rgb(235, 153, 110); transform-origin: 362.035px 141.973px;"
                                    id="els5cqs5k473d" class="animable"></path>
                                <path
                                    d="M363.92,144.69c.14,0,.22.74.18,1.65s-.19,1.63-.33,1.63-.23-.75-.19-1.66S363.77,144.68,363.92,144.69Z"
                                    style="fill: rgb(235, 153, 110); transform-origin: 363.84px 146.33px;"
                                    id="eleo4c2b3jns5" class="animable"></path>
                                <path
                                    d="M368.07,171.62l.89-3.06a.84.84,0,0,1,1.4-.36l1.17,1.19.72-2.89a.84.84,0,0,1,1.57-.16l1.63,3.42Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 371.76px 168.743px;"
                                    id="elrqfpx7cl4is" class="animable"></path>
                                <path
                                    d="M375.47,171.07a13.5,13.5,0,0,1-3.53,1.14,13.07,13.07,0,0,1-3.66.64,26.68,26.68,0,0,1,7.19-1.78Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 371.875px 171.96px;"
                                    id="el1kikjgr74jz" class="animable"></path>
                                <path
                                    d="M316,154s-.37.38-.89,1.19a10.06,10.06,0,0,0-1.35,3.77,26.74,26.74,0,0,0-.18,6c.11,2.27.29,4.75.57,7.35a128.79,128.79,0,0,0,2.11,13.22c.35,1.68.67,3,.89,4,.1.42.19.77.26,1.07s.08.38.08.38-.05-.12-.12-.36-.18-.66-.29-1.07c-.25-.93-.59-2.27-1-3.95a118.68,118.68,0,0,1-2.17-13.23c-.28-2.6-.45-5.09-.55-7.36a26.81,26.81,0,0,1,.22-6,10,10,0,0,1,1.44-3.8A5.8,5.8,0,0,1,316,154Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 315.387px 172.49px;"
                                    id="elfboaixnvpe8" class="animable"></path>
                                <path
                                    d="M337.05,140.38l-.23.12-.66.32c-.57.27-1.4.67-2.39,1.22a87.84,87.84,0,0,0-7.51,4.7c-2.86,2-5.39,3.82-7.24,5.14l-2.19,1.55-.61.41a1.22,1.22,0,0,1-.22.14.81.81,0,0,1,.2-.17l.58-.44,2.15-1.61c1.83-1.35,4.35-3.23,7.21-5.19a76.06,76.06,0,0,1,7.56-4.66c1-.53,1.84-.91,2.43-1.16l.67-.28C337,140.4,337,140.37,337.05,140.38Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 326.525px 147.179px;"
                                    id="elbiw6aycge0t" class="animable"></path>
                                <path
                                    d="M384.74,146.89a.73.73,0,0,1-.17-.13l-.45-.39a18.68,18.68,0,0,0-1.75-1.31,36.22,36.22,0,0,0-6.43-3.25,64.68,64.68,0,0,0-6.85-2.28c-.9-.25-1.62-.43-2.13-.55l-.57-.15a.8.8,0,0,1-.2-.07l.21,0,.58.11c.51.1,1.24.26,2.14.49a55.55,55.55,0,0,1,6.9,2.23,32.88,32.88,0,0,1,6.43,3.32A12.88,12.88,0,0,1,384.74,146.89Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 375.465px 142.825px;"
                                    id="el9313bsmvy0t" class="animable"></path>
                                <path
                                    d="M337.33,223.22a1.41,1.41,0,0,1-.39-.13,7,7,0,0,1-1-.54,4.78,4.78,0,0,1-2.18-2.94,5.75,5.75,0,0,1,.39-3.66,4.81,4.81,0,0,1,.58-1c.16-.21.27-.31.28-.3a11.33,11.33,0,0,0-.73,1.33,5.93,5.93,0,0,0-.31,3.55,4.85,4.85,0,0,0,2,2.87C336.8,223,337.35,223.18,337.33,223.22Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 335.476px 218.935px;"
                                    id="elkl20bot2d4" class="animable"></path>
                                <path
                                    d="M334.15,212.39a5,5,0,0,1,.47,1.26,4.62,4.62,0,0,1,.28,1.31,4.11,4.11,0,0,1-.48-1.25A4,4,0,0,1,334.15,212.39Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 334.525px 213.675px;"
                                    id="el710476dovj4" class="animable"></path>
                                <path
                                    d="M347.67,436.6l30.5-.15L377.62,331l-.29-107.27L336,223.2l-7.43,14a50.28,50.28,0,0,0-5.71,18.14C322.36,260.2,326,276,327.26,280l11.37,36.06Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 350.492px 329.9px;"
                                    id="elhbui9j3vbn4" class="animable"></path>
                                <path
                                    d="M386.28,223.86l33.52,91.37a42.14,42.14,0,0,1-4.13,35.7l-38.92,76-21.88-27.38,32.56-68L358.73,285l4.83-61,13.52-.22Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 388.44px 325.355px;"
                                    id="elchttjh5h2d" class="animable"></path>
                                <path
                                    d="M374.55,254.47s0,.16,0,.47.05.79.09,1.38c.07,1.23.16,3,.28,5.29.23,4.63.55,11.28,1,19.49s.83,18,1.33,28.9c.24,5.44.5,11.15.76,17.07.19,3,.11,6,.14,9s0,6.16,0,9.3c0,25.13.08,47.88.11,64.37,0,8.22,0,14.88,0,19.51,0,2.29,0,4.07,0,5.31,0,.58,0,1,0,1.38s0,.47,0,.47,0-.16,0-.47l0-1.38c0-1.24,0-3-.06-5.31,0-4.63-.08-11.28-.14-19.5-.07-16.49-.16-39.24-.26-64.37q0-4.71,0-9.3c0-3.06.06-6.08-.13-9-.25-5.91-.5-11.62-.73-17.06-.46-10.88-.88-20.67-1.22-28.91s-.59-14.86-.78-19.49c-.08-2.28-.14-4.06-.18-5.3,0-.59,0-1,0-1.38S374.55,254.47,374.55,254.47Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 376.405px 345.44px;"
                                    id="elqfmzyfg8imf" class="animable"></path>
                                <path
                                    d="M373.78,225.66a3.62,3.62,0,0,1,.21,1c.11.64.23,1.57.37,2.73.26,2.31.54,5.52.7,9.07s.17,6.77.12,9.1c0,1.16-.07,2.11-.12,2.76a3.38,3.38,0,0,1-.12,1,28.56,28.56,0,0,1-.13-3.76c0-2.33-.11-5.53-.27-9.08s-.38-6.74-.55-9A33.71,33.71,0,0,1,373.78,225.66Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 374.493px 238.49px;"
                                    id="elrf50yfli67r" class="animable"></path>
                                <path
                                    d="M367.06,227.72c.05.07-.52.33-.68,1.14a1.31,1.31,0,0,0,.39,1.22,1.41,1.41,0,0,0,1.5.27,1.44,1.44,0,0,0,.78-1.31,1.31,1.31,0,0,0-.67-1.09,2.43,2.43,0,0,0-1.31-.23s.1-.13.36-.21a1.7,1.7,0,0,1,1.12.11,1.63,1.63,0,0,1,1,1.39,1.79,1.79,0,0,1-3.08,1.42,1.64,1.64,0,0,1-.41-1.65,1.69,1.69,0,0,1,.64-.93C366.9,227.71,367.05,227.69,367.06,227.72Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 367.773px 229.226px;"
                                    id="el0o0u1s590wji" class="animable"></path>
                                <path
                                    d="M351.06,225.91a3,3,0,0,1,.27,1,9.46,9.46,0,0,1,.09,2.72,11.11,11.11,0,0,1-1.15,3.87,10.25,10.25,0,0,1-7.82,5.61,10.84,10.84,0,0,1-4-.15,9.44,9.44,0,0,1-2.54-.95,3.17,3.17,0,0,1-.82-.56,18.14,18.14,0,0,0,3.44,1.15,10.51,10.51,0,0,0,12.57-9A17.4,17.4,0,0,0,351.06,225.91Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 343.284px 232.569px;"
                                    id="elg6hq4n58pc" class="animable"></path>
                                <path
                                    d="M390.3,234.67a4.2,4.2,0,0,1-1.93-.23,8.91,8.91,0,0,1-3.93-2.52,8.79,8.79,0,0,1-2.13-4.16,4,4,0,0,1,0-1.93c.09,0,.1.73.4,1.85a9.67,9.67,0,0,0,5.82,6.41C389.57,234.5,390.31,234.57,390.3,234.67Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 386.246px 230.264px;"
                                    id="ele5ziod62ph" class="animable"></path>
                                <path
                                    d="M402.21,333.17a6.38,6.38,0,0,1-1.77,1.41,8.28,8.28,0,0,1-2.27,1,5.46,5.46,0,0,1-3.07-.08,8.94,8.94,0,0,1-4.28-3.4,8.22,8.22,0,0,1-1.17-1.92,11.62,11.62,0,0,1,1.46,1.69,9.48,9.48,0,0,0,4.14,3.13,6.4,6.4,0,0,0,5-.73A19.6,19.6,0,0,1,402.21,333.17Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 395.93px 332.971px;"
                                    id="elczv6cokgjke" class="animable"></path>
                                <path
                                    d="M394.57,339a25.3,25.3,0,0,1-3.15-4,26,26,0,0,1-2.74-4.29,24.45,24.45,0,0,1,3.16,4A23.9,23.9,0,0,1,394.57,339Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 391.625px 334.855px;"
                                    id="el46337pa2gj1" class="animable"></path>
                                <path
                                    d="M343.33,258c-.14.05-.49-.52-.8-1.29s-.44-1.42-.31-1.48.49.52.79,1.29S343.46,258,343.33,258Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 342.773px 256.614px;"
                                    id="el14asrg6a8m1" class="animable"></path>
                                <path
                                    d="M362.69,260.78c-.15,0-.26-.49-.26-1.1s.11-1.11.26-1.11.26.5.26,1.11S362.83,260.78,362.69,260.78Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 362.69px 259.675px;"
                                    id="el7gwfwb1kezw" class="animable"></path>
                                <path
                                    d="M354.73,271.3c-.14,0-.3-.6-.35-1.37s0-1.39.16-1.4.31.6.36,1.37S354.87,271.29,354.73,271.3Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 354.638px 269.915px;"
                                    id="elbtqt7bw7g" class="animable"></path>
                                <path
                                    d="M340.19,279c-.12.09-.53-.28-1.07-.66s-1-.67-1-.81.66-.06,1.27.38S340.31,279,340.19,279Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 339.168px 278.24px;"
                                    id="elrpaqibffy3" class="animable"></path>
                                <path
                                    d="M365.82,288.81c-.12-.08,0-.51.34-1s.65-.77.77-.69,0,.52-.34,1S365.94,288.89,365.82,288.81Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 366.375px 287.965px;"
                                    id="ellat9h7m0m3" class="animable"></path>
                                <path
                                    d="M350,291.58c-.14,0-.26-.83-.26-1.84s.12-1.85.26-1.85.26.83.26,1.85S350.11,291.58,350,291.58Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 350px 289.735px;"
                                    id="elyl3iivvzez" class="animable"></path>
                                <path
                                    d="M344.82,302.8c-.08.11-.6-.12-1.16-.53s-1-.83-.87-.95.61.12,1.17.53S344.91,302.68,344.82,302.8Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 343.8px 302.058px;"
                                    id="elow77ytel1co" class="animable"></path>
                                <path
                                    d="M360.84,306.7c.06.13-.26.4-.72.61s-.88.26-.94.13.27-.4.73-.61S360.79,306.57,360.84,306.7Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 360.01px 307.07px;"
                                    id="el44da585xogk" class="animable"></path>
                                <path
                                    d="M350,325c-.12.06-.64-.71-1.15-1.73s-.82-1.9-.69-2,.65.71,1.15,1.73S350.09,324.89,350,325Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 349.074px 323.132px;"
                                    id="elbrk4bt1ximg" class="animable"></path>
                                <path
                                    d="M367.67,323.3c-.13-.07.1-.74.5-1.51s.85-1.33,1-1.26-.1.74-.51,1.51S367.79,323.37,367.67,323.3Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 368.424px 321.915px;"
                                    id="elrexqxzd0wj" class="animable"></path>
                                <path
                                    d="M359.92,338.79c-.15,0-.13-.81-.29-1.75s-.4-1.69-.26-1.76.62.64.78,1.68S360.06,338.82,359.92,338.79Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 359.765px 337.033px;"
                                    id="ellyx7q2z3s5" class="animable"></path>
                                <path
                                    d="M351.62,347.64c-.1.1-.6-.28-1.11-.84s-.84-1.09-.73-1.19.6.28,1.11.84S351.73,347.54,351.62,347.64Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 350.7px 346.625px;"
                                    id="el5skz6nraq9m" class="animable"></path>
                                <path
                                    d="M371.76,351c-.1-.1.27-.64.83-1.21s1.08-.94,1.19-.84-.27.65-.82,1.21S371.87,351.1,371.76,351Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 372.771px 349.975px;"
                                    id="elwchcf5mjtbs" class="animable"></path>
                                <path
                                    d="M360.18,364.25c-.14,0-.14-.79,0-1.71s.36-1.64.51-1.62.14.78,0,1.7S360.32,364.27,360.18,364.25Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 360.437px 362.585px;"
                                    id="el1wslidx9yvo" class="animable"></path>
                                <path
                                    d="M352.39,370.68c-.13.07-.57-.45-1-1.16s-.65-1.34-.53-1.41.56.44,1,1.15S352.51,370.6,352.39,370.68Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 351.625px 369.395px;"
                                    id="ele76mivgrrnl" class="animable"></path>
                                <path
                                    d="M371.16,378.79c.09.12-.42.63-1.14,1.14s-1.35.83-1.44.71.43-.63,1.14-1.14S371.08,378.68,371.16,378.79Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 369.87px 379.717px;"
                                    id="el1ptznue2157" class="animable"></path>
                                <path
                                    d="M355.52,389.32c-.14-.05,0-.85.13-1.85s.05-1.82.2-1.84.41.82.31,1.89S355.65,389.38,355.52,389.32Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 355.822px 387.476px;"
                                    id="eldsau2d31fq" class="animable"></path>
                                <path
                                    d="M361.77,404.44c-.12.09-.54-.25-.95-.76s-.64-1-.53-1.09.53.25.94.76S361.88,404.35,361.77,404.44Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 361.03px 403.515px;"
                                    id="elchmh9s5jd6a" class="animable"></path>
                                <path
                                    d="M354.94,414.58c-.12.08-.67-.51-1.23-1.33s-.91-1.54-.8-1.62.67.51,1.23,1.33S355.06,414.5,354.94,414.58Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 353.926px 413.105px;"
                                    id="elzwbvsfst02a" class="animable"></path>
                                <path
                                    d="M373.75,401.85c-.13-.05-.12-.42,0-.82s.39-.7.53-.65.12.42,0,.83S373.89,401.91,373.75,401.85Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 374.017px 401.116px;"
                                    id="elrmx7l0q4oo" class="animable"></path>
                                <path
                                    d="M365.45,426c-.13-.07.12-.78.32-1.67s.27-1.64.42-1.65.3.8.09,1.76S365.57,426.08,365.45,426Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 365.899px 424.343px;"
                                    id="elis5baji2gh" class="animable"></path>
                                <path
                                    d="M370.85,271.46c-.13.06-.45-.34-.71-.9s-.37-1.06-.24-1.12.45.34.71.9S371,271.4,370.85,271.46Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 370.379px 270.45px;"
                                    id="elhl7tfs8xht8" class="animable"></path>
                                <path
                                    d="M357,240.32c.08.12-.62.68-1.37,1.48s-1.26,1.54-1.39,1.47.21-1,1-1.82S356.9,240.19,357,240.32Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 355.61px 241.786px;"
                                    id="elqsgj15jwq5f" class="animable"></path>
                                <path
                                    d="M369.33,240c-.15,0-.38-.57-.73-1.25s-.67-1.24-.56-1.34.65.34,1,1.1S369.46,239.92,369.33,240Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 368.704px 238.698px;"
                                    id="elrfyoqgevp3d" class="animable"></path>
                                <path
                                    d="M330.83,250.11c-.13-.06,0-.72.31-1.48s.65-1.35.79-1.29,0,.71-.31,1.48S331,250.16,330.83,250.11Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 331.382px 248.724px;"
                                    id="el5cfl5mnnrup" class="animable"></path>
                                <path
                                    d="M332.08,265.21c-.1.11-.67-.21-1.28-.72s-1-1-.94-1.12.67.21,1.28.72S332.17,265.1,332.08,265.21Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 330.973px 264.288px;"
                                    id="elbrdiehdy1df" class="animable"></path>
                                <path
                                    d="M357.34,228.33c-.13,0-.41-.32-.61-.83s-.26-1-.13-1,.41.32.61.83S357.47,228.28,357.34,228.33Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 356.97px 227.415px;"
                                    id="elx3tc8f3evt" class="animable"></path>
                                <path
                                    d="M381.53,235.71c-.14,0-.13-.63,0-1.34s.39-1.27.53-1.24.13.64,0,1.35S381.67,235.74,381.53,235.71Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 381.795px 234.42px;"
                                    id="elq617edjivec" class="animable"></path>
                                <path
                                    d="M387.21,247.14c-.13-.06.05-.8.41-1.67s.75-1.52.88-1.47,0,.8-.4,1.67S387.35,247.19,387.21,247.14Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 387.858px 245.57px;"
                                    id="el7kuubk1t719" class="animable"></path>
                                <path
                                    d="M383.16,256.36c-.13.06-.61-.63-1.07-1.54s-.72-1.72-.59-1.78.6.63,1.06,1.54S383.29,256.29,383.16,256.36Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 382.33px 254.7px;"
                                    id="el5gbsicnboz5" class="animable"></path>
                                <path
                                    d="M391.82,265.58c-.13-.05,0-.63.22-1.29s.57-1.16.71-1.11,0,.63-.22,1.29S392,265.63,391.82,265.58Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 392.287px 264.38px;"
                                    id="el4an69a3xv62" class="animable"></path>
                                <path
                                    d="M384.08,274.61c-.12.08-.43-.19-.68-.59s-.37-.8-.24-.88.42.19.68.6S384.2,274.54,384.08,274.61Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 383.619px 273.875px;"
                                    id="elzeuyngymt5" class="animable"></path>
                                <path
                                    d="M385.73,293.25c-.1.09-.73-.4-1.39-1.12s-1.11-1.37-1-1.47.73.4,1.39,1.12S385.84,293.15,385.73,293.25Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 384.535px 291.954px;"
                                    id="elcnza2glhj6k" class="animable"></path>
                                <path
                                    d="M395.88,282.54c-.11.09-.66-.41-1.22-1.13s-.92-1.36-.81-1.45.66.42,1.22,1.13S396,282.46,395.88,282.54Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 394.866px 281.25px;"
                                    id="el1zzacpgsm2g" class="animable"></path>
                                <path
                                    d="M401.45,297.31c-.13-.06.1-.81.51-1.67s.84-1.52,1-1.46-.09.82-.5,1.68S401.58,297.38,401.45,297.31Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 402.211px 295.746px;"
                                    id="eltxeckc23eo8" class="animable"></path>
                                <path
                                    d="M389.61,309.47c-.13.07-.59-.48-1.23-1.07s-1.23-1-1.17-1.15.82.12,1.52.77S389.73,309.4,389.61,309.47Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 388.421px 308.343px;"
                                    id="elydgcgholv1i" class="animable"></path>
                                <path
                                    d="M390.35,322c0,.14-.5.26-1.11.26s-1.1-.12-1.1-.26.49-.26,1.1-.26S390.35,321.86,390.35,322Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 389.245px 322px;"
                                    id="el36qqkc5z96e" class="animable"></path>
                                <path
                                    d="M402.52,318.5c-.13-.07.13-.7.32-1.48s.27-1.46.42-1.47.31.72.09,1.59S402.63,318.58,402.52,318.5Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 402.972px 317.029px;"
                                    id="el9c3csw1g285" class="animable"></path>
                                <path
                                    d="M414.61,322.71c-.13.05-.5-.66-.82-1.57s-.47-1.69-.34-1.73.51.65.83,1.56S414.75,322.66,414.61,322.71Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 414.033px 321.06px;"
                                    id="el24rl2zualwg" class="animable"></path>
                                <path
                                    d="M412.68,339.91c-.12-.07.19-.91.69-1.88s1-1.7,1.15-1.63-.18.91-.69,1.87S412.81,340,412.68,339.91Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 413.605px 338.156px;"
                                    id="elmbhcu6dmtse" class="animable"></path>
                                <path
                                    d="M401.65,350c-.13.05-.54-.64-.92-1.55s-.57-1.69-.43-1.75.54.64.91,1.55S401.78,350,401.65,350Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 400.972px 348.349px;"
                                    id="ell1wig9i01n" class="animable"></path>
                                <path
                                    d="M389.43,353.91c0,.14-.42.26-.93.26s-.92-.12-.92-.26.42-.26.92-.26S389.43,353.77,389.43,353.91Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 388.505px 353.91px;"
                                    id="elsjgjtgwzu08" class="animable"></path>
                                <path
                                    d="M396.43,370c-.13,0-.41-.55-.62-1.31s-.25-1.42-.11-1.45.41.55.62,1.31S396.57,369.92,396.43,370Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 396.065px 368.619px;"
                                    id="elx2zs90jch5q" class="animable"></path>
                                <path
                                    d="M387.58,364.6c-.12-.07,0-.54.33-1.05s.66-.86.78-.79,0,.55-.33,1.06S387.71,364.68,387.58,364.6Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 388.135px 363.681px;"
                                    id="el1z2jq1mbp76" class="animable"></path>
                                <path
                                    d="M387.4,382.31c-.14,0-.34-.67-.44-1.54s-.07-1.58.07-1.6.34.67.44,1.54S387.54,382.29,387.4,382.31Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 387.215px 380.74px;"
                                    id="elzmvpfwx0fzj" class="animable"></path>
                            </g>
                            <defs>
                                <filter id="active" height="200%">
                                    <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                    </feMorphology>
                                    <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                                    <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                    <feMerge>
                                        <feMergeNode in="OUTLINE"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                                <filter id="hover" height="200%">
                                    <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                    </feMorphology>
                                    <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                                    <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                    <feMerge>
                                        <feMergeNode in="OUTLINE"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                    <feColorMatrix type="matrix"
                                        values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                                    </feColorMatrix>
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <!-- text -->
                    <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-delay="500"
                        class="h-15 pt-16  lg:col-span-2 aspect-video ">
                        <p class=" dark:text-white  text-sm text-justify font-light text-text2 lg:text-2xl ">

                            hadir untuk membantu menemukan. properti yang anda inginkan Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit.
                            Maiores,
                            consequuntur aliquid? Optio ducimus eum ipsum iure cupiditate et soluta nulla at? Repellat,
                            similique? Distinctio pariatur, unde quo dolorum cupiditate ex!
                        </p>

                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- KESULITAN MENCARI END -->
    <!-- KENAPA OK PROPERTI -->
    <section id="mengapa" class="dark:bg-slate-800 bg-slate-100 pt-36 pb-16">
        <div class="container">
            <div class="w-full  px-4   ">
                <h1 data-aos="fade-left" data-aos-anchor-placement="center-center" data-aos-delay="300"
                    class="mb-2 text-xl dark:text-white font-bold uppercase text-text1 text-right lg:text-3xl md:text-md lg:text-right">
                    KENAPA HARUS MEMILIH OK PROPERTI?
                </h1>

                <hr data-aos="fade-left" data-aos-anchor-placement="center-center" data-aos-delay="500"
                    class="flex ml-auto py-2 border-t-4 border-primary dark:gray-700 w-64 ">

            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3  gap-4 md:gap-6">
                <!-- text -->
                <div data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-delay="500"
                    class="h-15 pt-16 col-span-2 aspect-video">
                    <p class="  dark:text-white text-sm text-justify font-light text-text2 lg:text-2xl ">

                        hadir untuk membantu menemukan.
                        properti yang anda inginkan Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores,
                        consequuntur aliquid? Optio ducimus eum ipsum iure cupiditate et soluta nulla at? Repellat,
                        similique? Distinctio pariatur, unde quo dolorum cupiditate ex!
                    </p>

                </div>
                <!-- icon -->
                <div data-aos="zoom-in-up" data-aos-anchor-placement="center-bottom" data-aos-delay="300"
                    class="h-15   aspect-video">
                    <svg class="animated mt-2" id="freepik_stories-building-safety" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 750 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.com/svgjs">
                        <style>
                            svg#freepik_stories-building-safety:not(.animated) .animable {
                                opacity: 0;
                            }

                            svg#freepik_stories-building-safety.animated #freepik--Shield--inject-23 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown, 1.5s Infinite linear floating;
                                animation-delay: 0s, 1s;
                            }

                            svg#freepik_stories-building-safety.animated #freepik--speech-bubble--inject-23 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown, 1.5s Infinite linear floating;
                                animation-delay: 0s, 1s;
                            }

                            @keyframes slideDown {
                                0% {
                                    opacity: 0;
                                    transform: translateY(-30px);
                                }

                                100% {
                                    opacity: 1;
                                    transform: translateY(0);
                                }
                            }

                            @keyframes floating {
                                0% {
                                    opacity: 1;
                                    transform: translateY(0px);
                                }

                                50% {
                                    transform: translateY(-10px);
                                }

                                100% {
                                    opacity: 1;
                                    transform: translateY(0px);
                                }
                            }

                            .animator-hidden {
                                display: none;
                            }
                        </style>
                        <g id="freepik--background-complete--inject-23" class="animable"
                            style="transform-origin: 357.012px 248.537px;">
                            <g id="eltm7fcnies8n">
                                <rect x="60.37" y="332.99" width="30.2" height="127.69"
                                    style="fill: rgb(235, 235, 235); transform-origin: 75.47px 396.835px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <g id="elbq5e74t6jor">
                                <rect x="75.76" y="341.94" width="9.18" height="17.69"
                                    style="fill: rgb(255, 255, 255); transform-origin: 80.35px 350.785px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M80.09,359.63c.07,0,.12-4,.12-8.84s0-8.85-.12-8.85-.12,4-.12,8.85S80,359.63,80.09,359.63Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 80.09px 350.785px;"
                                id="eltcpcoerodte" class="animable"></path>
                            <path
                                d="M75.76,348.09c0,.06,2,.12,4.59.12s4.59-.06,4.59-.12a41.22,41.22,0,0,0-4.59-.13A41.07,41.07,0,0,0,75.76,348.09Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 80.35px 348.077px;"
                                id="ell7jnih3hw8j" class="animable"></path>
                            <path
                                d="M75.71,354.41a43.5,43.5,0,0,0,4.63.12,43.38,43.38,0,0,0,4.62-.12,43.38,43.38,0,0,0-4.62-.12A43.5,43.5,0,0,0,75.71,354.41Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 80.335px 354.41px;"
                                id="eln6ybuommk3o" class="animable"></path>
                            <g id="eltxpahlfuwi">
                                <rect x="75.76" y="365.04" width="9.18" height="17.69"
                                    style="fill: rgb(255, 255, 255); transform-origin: 80.35px 373.885px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M80.09,382.73c.07,0,.12-4,.12-8.84s0-8.85-.12-8.85-.12,4-.12,8.85S80,382.73,80.09,382.73Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 80.09px 373.885px;" id="els7z7mm9uja"
                                class="animable"></path>
                            <path
                                d="M75.76,371.19a42.72,42.72,0,0,0,4.59.12,42.87,42.87,0,0,0,4.59-.12,41.22,41.22,0,0,0-4.59-.13A41.07,41.07,0,0,0,75.76,371.19Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 80.35px 371.185px;" id="el9wij74xc2w"
                                class="animable"></path>
                            <path
                                d="M75.71,377.51a41.82,41.82,0,0,0,4.63.13,41.7,41.7,0,0,0,4.62-.13,43.38,43.38,0,0,0-4.62-.12A43.5,43.5,0,0,0,75.71,377.51Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 80.335px 377.515px;"
                                id="elmbo3rcbjuz" class="animable"></path>
                            <g id="eljgntfwae3w">
                                <rect x="75.76" y="388.14" width="9.18" height="17.69"
                                    style="fill: rgb(255, 255, 255); transform-origin: 80.35px 396.985px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M80.09,405.83c.07,0,.12-4,.12-8.84s0-8.85-.12-8.85S80,392.1,80,397,80,405.83,80.09,405.83Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 80.1033px 396.985px;"
                                id="elqseb7xw9wc" class="animable"></path>
                            <path
                                d="M75.76,394.29a42.72,42.72,0,0,0,4.59.12,42.87,42.87,0,0,0,4.59-.12,42.87,42.87,0,0,0-4.59-.12A42.72,42.72,0,0,0,75.76,394.29Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 80.35px 394.29px;" id="elq569g99fnqf"
                                class="animable"></path>
                            <path
                                d="M75.71,400.61a41.82,41.82,0,0,0,4.63.13,41.7,41.7,0,0,0,4.62-.13c0-.06-2.07-.12-4.62-.12S75.71,400.55,75.71,400.61Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 80.335px 400.623px;"
                                id="el3mzi38hfk8a" class="animable"></path>
                            <g id="elzj40l3iwkie">
                                <rect x="75.76" y="411.25" width="9.18" height="17.69"
                                    style="fill: rgb(255, 255, 255); transform-origin: 80.35px 420.095px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M80.09,428.93c.07,0,.12-4,.12-8.84s0-8.84-.12-8.84S80,415.2,80,420.09,80,428.93,80.09,428.93Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 80.1033px 420.09px;"
                                id="el38ni3r3d5dn" class="animable"></path>
                            <path
                                d="M75.76,417.39a42.72,42.72,0,0,0,4.59.12,42.87,42.87,0,0,0,4.59-.12,42.87,42.87,0,0,0-4.59-.12A42.72,42.72,0,0,0,75.76,417.39Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 80.35px 417.39px;" id="elku6dusbzvas"
                                class="animable"></path>
                            <path
                                d="M75.71,423.71a41.82,41.82,0,0,0,4.63.13,41.7,41.7,0,0,0,4.62-.13c0-.06-2.07-.12-4.62-.12S75.71,423.65,75.71,423.71Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 80.335px 423.723px;"
                                id="elsf6ivbuoay" class="animable"></path>
                            <g id="el0hp1qm5tz0pt">
                                <rect x="47.53" y="332.99" width="22" height="127.69"
                                    style="fill: rgb(224, 224, 224); transform-origin: 58.53px 396.835px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <g id="el4mfm9hi7hmm">
                                <rect x="53.52" y="341.94" width="9.18" height="17.69"
                                    style="fill: rgb(255, 255, 255); transform-origin: 58.11px 350.785px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M57.85,359.63c.07,0,.12-4,.12-8.84s0-8.85-.12-8.85-.12,4-.12,8.85S57.78,359.63,57.85,359.63Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 57.85px 350.785px;" id="elnts6cqkubz"
                                class="animable"></path>
                            <path
                                d="M53.52,348.09c0,.06,2,.12,4.59.12s4.59-.06,4.59-.12a41.22,41.22,0,0,0-4.59-.13A41.07,41.07,0,0,0,53.52,348.09Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 58.11px 348.077px;"
                                id="el4s1eelsz5kc" class="animable"></path>
                            <path
                                d="M53.47,354.41a43.5,43.5,0,0,0,4.63.12,43.38,43.38,0,0,0,4.62-.12,43.38,43.38,0,0,0-4.62-.12A43.5,43.5,0,0,0,53.47,354.41Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 58.095px 354.41px;" id="elnzwgteas9b"
                                class="animable"></path>
                            <g id="el89gzk864ga8">
                                <rect x="53.52" y="365.23" width="9.18" height="17.69"
                                    style="fill: rgb(255, 255, 255); transform-origin: 58.11px 374.075px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M57.85,382.92c.07,0,.12-4,.12-8.84s0-8.85-.12-8.85-.12,4-.12,8.85S57.78,382.92,57.85,382.92Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 57.85px 374.075px;"
                                id="elz0vy5o01ljj" class="animable"></path>
                            <path
                                d="M53.52,371.38c0,.06,2,.12,4.59.12s4.59-.06,4.59-.12a41.22,41.22,0,0,0-4.59-.13A41.07,41.07,0,0,0,53.52,371.38Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 58.11px 371.367px;"
                                id="eluoqsnmpcaph" class="animable"></path>
                            <path
                                d="M53.47,377.7a43.5,43.5,0,0,0,4.63.12,43.38,43.38,0,0,0,4.62-.12,43.38,43.38,0,0,0-4.62-.12A43.5,43.5,0,0,0,53.47,377.7Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 58.095px 377.7px;" id="ellcz1rs8ap2n"
                                class="animable"></path>
                            <g id="elj112hhc852k">
                                <rect x="53.52" y="388.52" width="9.18" height="17.69"
                                    style="fill: rgb(255, 255, 255); transform-origin: 58.11px 397.365px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M57.85,406.21c.07,0,.12-4,.12-8.84s0-8.85-.12-8.85-.12,4-.12,8.85S57.78,406.21,57.85,406.21Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 57.85px 397.365px;"
                                id="elja7qvgqmhq7" class="animable"></path>
                            <path
                                d="M53.52,394.67a42.72,42.72,0,0,0,4.59.12,42.87,42.87,0,0,0,4.59-.12,42.87,42.87,0,0,0-4.59-.12A42.72,42.72,0,0,0,53.52,394.67Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 58.11px 394.67px;" id="eljq44anszjj"
                                class="animable"></path>
                            <path
                                d="M53.47,401a41.82,41.82,0,0,0,4.63.13,41.7,41.7,0,0,0,4.62-.13,43.38,43.38,0,0,0-4.62-.12A43.5,43.5,0,0,0,53.47,401Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 58.095px 401.005px;"
                                id="elykgh1ozjgdc" class="animable"></path>
                            <g id="elexkge6s9ba">
                                <rect x="53.52" y="411.81" width="9.18" height="17.69"
                                    style="fill: rgb(255, 255, 255); transform-origin: 58.11px 420.655px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M57.85,429.5c.07,0,.12-4,.12-8.84s0-8.85-.12-8.85-.12,4-.12,8.85S57.78,429.5,57.85,429.5Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 57.85px 420.655px;"
                                id="eldr863385edw" class="animable"></path>
                            <path
                                d="M53.52,418a42.72,42.72,0,0,0,4.59.12A42.87,42.87,0,0,0,62.7,418a42.87,42.87,0,0,0-4.59-.12A42.72,42.72,0,0,0,53.52,418Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 58.11px 418px;" id="el0y9hw7jp5ov"
                                class="animable"></path>
                            <path
                                d="M53.47,424.28a41.82,41.82,0,0,0,4.63.13,41.7,41.7,0,0,0,4.62-.13c0-.06-2.07-.12-4.62-.12S53.47,424.22,53.47,424.28Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 58.095px 424.293px;"
                                id="eldg4vpvvonr" class="animable"></path>
                            <g id="elevloqraz5v7">
                                <rect x="75.76" y="434.35" width="9.18" height="17.69"
                                    style="fill: rgb(255, 255, 255); transform-origin: 80.35px 443.195px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path d="M80.09,452c.07,0,.12-4,.12-8.84s0-8.84-.12-8.84-.12,4-.12,8.84S80,452,80.09,452Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 80.09px 443.16px;" id="elr01dnch3gst"
                                class="animable"></path>
                            <path
                                d="M75.76,440.49a42.72,42.72,0,0,0,4.59.12,42.87,42.87,0,0,0,4.59-.12,42.87,42.87,0,0,0-4.59-.12A42.72,42.72,0,0,0,75.76,440.49Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 80.35px 440.49px;" id="elo3breby3lnd"
                                class="animable"></path>
                            <path
                                d="M75.71,446.82c0,.06,2.07.12,4.63.12s4.62-.06,4.62-.12a41.7,41.7,0,0,0-4.62-.13A41.82,41.82,0,0,0,75.71,446.82Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 80.335px 446.807px;"
                                id="eljtl08v6c2gs" class="animable"></path>
                            <g id="elqfj2ste2u8">
                                <rect x="53.52" y="435.1" width="9.18" height="17.69"
                                    style="fill: rgb(255, 255, 255); transform-origin: 58.11px 443.945px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M57.85,452.79c.07,0,.12-4,.12-8.84s0-8.85-.12-8.85-.12,4-.12,8.85S57.78,452.79,57.85,452.79Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 57.85px 443.945px;"
                                id="el2rbk0bkj67d" class="animable"></path>
                            <path
                                d="M53.52,441.25a42.72,42.72,0,0,0,4.59.12,42.87,42.87,0,0,0,4.59-.12,42.87,42.87,0,0,0-4.59-.12A42.72,42.72,0,0,0,53.52,441.25Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 58.11px 441.25px;" id="el9sw9mh863g"
                                class="animable"></path>
                            <path
                                d="M53.47,447.57a41.82,41.82,0,0,0,4.63.13,41.7,41.7,0,0,0,4.62-.13c0-.06-2.07-.12-4.62-.12S53.47,447.51,53.47,447.57Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 58.095px 447.583px;"
                                id="elk35sfmqlej" class="animable"></path>
                            <g id="elkl31c0dyfb">
                                <rect x="382.47" y="220.53" width="35.53" height="150.24"
                                    style="fill: rgb(235, 235, 235); transform-origin: 400.235px 295.65px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <g id="eljeid5cqp8om">
                                <rect x="400.58" y="231.06" width="10.8" height="20.81"
                                    style="fill: rgb(255, 255, 255); transform-origin: 405.98px 241.465px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M405.68,251.87c.08,0,.14-4.66.14-10.4s-.06-10.41-.14-10.41-.15,4.66-.15,10.41S405.6,251.87,405.68,251.87Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 405.675px 241.465px;"
                                id="elg1pjqj8r7ew" class="animable"></path>
                            <path d="M400.58,238.29a97.27,97.27,0,0,0,10.8,0,104.21,104.21,0,0,0-10.8,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 405.98px 238.295px;"
                                id="eloig2ldmr8wa" class="animable"></path>
                            <path d="M400.52,245.73a98.9,98.9,0,0,0,10.89,0,106,106,0,0,0-10.89,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 405.965px 245.735px;"
                                id="elb3zyfqytx8b" class="animable"></path>
                            <g id="elydopkt02m8d">
                                <rect x="400.58" y="258.24" width="10.8" height="20.81"
                                    style="fill: rgb(255, 255, 255); transform-origin: 405.98px 268.645px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M405.68,279.05c.08,0,.14-4.66.14-10.4s-.06-10.41-.14-10.41-.15,4.66-.15,10.41S405.6,279.05,405.68,279.05Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 405.675px 268.645px;"
                                id="ell0wemag30ok" class="animable"></path>
                            <path d="M400.58,265.47a97.27,97.27,0,0,0,10.8,0,104.21,104.21,0,0,0-10.8,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 405.98px 265.475px;"
                                id="elmc0lnisskm9" class="animable"></path>
                            <path d="M400.52,272.91a98.9,98.9,0,0,0,10.89,0,106,106,0,0,0-10.89,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 405.965px 272.915px;"
                                id="elpiduz7kwl7" class="animable"></path>
                            <g id="el6yyd1pxavh4">
                                <rect x="400.58" y="285.42" width="10.8" height="20.81"
                                    style="fill: rgb(255, 255, 255); transform-origin: 405.98px 295.825px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M405.68,306.23c.08,0,.14-4.66.14-10.4s-.06-10.41-.14-10.41-.15,4.66-.15,10.41S405.6,306.23,405.68,306.23Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 405.675px 295.825px;"
                                id="eltrjgdake08a" class="animable"></path>
                            <path d="M400.58,292.65a104.21,104.21,0,0,0,10.8,0,104.21,104.21,0,0,0-10.8,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 405.98px 292.65px;"
                                id="elwe18mnapnrp" class="animable"></path>
                            <path d="M400.52,300.09a98.9,98.9,0,0,0,10.89,0,106,106,0,0,0-10.89,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 405.965px 300.095px;"
                                id="elwvmrirackd" class="animable"></path>
                            <g id="elhof1k4spjk7">
                                <rect x="400.58" y="312.6" width="10.8" height="20.81"
                                    style="fill: rgb(255, 255, 255); transform-origin: 405.98px 323.005px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M405.68,333.41c.08,0,.14-4.66.14-10.41s-.06-10.4-.14-10.4-.15,4.66-.15,10.4S405.6,333.41,405.68,333.41Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 405.675px 323.005px;"
                                id="elb7whyu7zjl" class="animable"></path>
                            <path d="M400.58,319.83a104.21,104.21,0,0,0,10.8,0,104.21,104.21,0,0,0-10.8,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 405.98px 319.83px;"
                                id="elyppi35wg65l" class="animable"></path>
                            <path d="M400.52,327.27a98.9,98.9,0,0,0,10.89,0,106,106,0,0,0-10.89,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 405.965px 327.275px;"
                                id="el7ty4ucnhkkw" class="animable"></path>
                            <g id="el0uq39m4n4rqc">
                                <rect x="367.37" y="220.53" width="25.88" height="150.24"
                                    style="fill: rgb(224, 224, 224); transform-origin: 380.31px 295.65px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <g id="elpro2wl2xqy">
                                <rect x="374.41" y="231.06" width="10.8" height="20.81"
                                    style="fill: rgb(255, 255, 255); transform-origin: 379.81px 241.465px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M379.51,251.87c.08,0,.14-4.66.14-10.4s-.06-10.41-.14-10.41-.14,4.66-.14,10.41S379.43,251.87,379.51,251.87Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 379.51px 241.465px;"
                                id="elos2ws3vf5i" class="animable"></path>
                            <path d="M374.41,238.29a97.27,97.27,0,0,0,10.8,0,104.21,104.21,0,0,0-10.8,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 379.81px 238.295px;" id="eli24celpdj"
                                class="animable"></path>
                            <path d="M374.36,245.73a98.72,98.72,0,0,0,10.88,0,105.76,105.76,0,0,0-10.88,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 379.8px 245.735px;"
                                id="elxfan9jbxysd" class="animable"></path>
                            <g id="elkp23o75xchd">
                                <rect x="374.41" y="258.47" width="10.8" height="20.81"
                                    style="fill: rgb(255, 255, 255); transform-origin: 379.81px 268.875px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M379.51,279.27c.08,0,.14-4.66.14-10.4s-.06-10.4-.14-10.4-.14,4.65-.14,10.4S379.43,279.27,379.51,279.27Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 379.51px 268.87px;" id="elh7bla8ejxp"
                                class="animable"></path>
                            <path d="M374.41,265.69a97.28,97.28,0,0,0,10.8,0,104.21,104.21,0,0,0-10.8,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 379.81px 265.695px;"
                                id="elug9f2q7fm4b" class="animable"></path>
                            <path d="M374.36,273.14a105.76,105.76,0,0,0,10.88,0,98.72,98.72,0,0,0-10.88,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 379.8px 273.135px;"
                                id="el8olzh58ah7v" class="animable"></path>
                            <g id="elgvrmpp8ple">
                                <rect x="374.41" y="285.87" width="10.8" height="20.81"
                                    style="fill: rgb(255, 255, 255); transform-origin: 379.81px 296.275px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M379.51,306.67c.08,0,.14-4.65.14-10.4s-.06-10.4-.14-10.4-.14,4.65-.14,10.4S379.43,306.67,379.51,306.67Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 379.51px 296.27px;" id="eln8a6e6kg5o"
                                class="animable"></path>
                            <path d="M374.41,293.1a104.21,104.21,0,0,0,10.8,0,97.27,97.27,0,0,0-10.8,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 379.81px 293.095px;"
                                id="elgnwe82wnk3b" class="animable"></path>
                            <path d="M374.36,300.54a105.76,105.76,0,0,0,10.88,0,98.72,98.72,0,0,0-10.88,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 379.8px 300.535px;"
                                id="el7b4dzkuzv9y" class="animable"></path>
                            <g id="elst808t8seqe">
                                <rect x="374.41" y="313.27" width="10.8" height="20.81"
                                    style="fill: rgb(255, 255, 255); transform-origin: 379.81px 323.675px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M379.51,334.08c.08,0,.14-4.66.14-10.41s-.06-10.4-.14-10.4-.14,4.66-.14,10.4S379.43,334.08,379.51,334.08Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 379.51px 323.675px;"
                                id="eln9dk35u1glc" class="animable"></path>
                            <path d="M374.41,320.5a104.21,104.21,0,0,0,10.8,0,97.28,97.28,0,0,0-10.8,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 379.81px 320.495px;"
                                id="els0jejoessws" class="animable"></path>
                            <path d="M374.36,327.94a105.76,105.76,0,0,0,10.88,0,105.76,105.76,0,0,0-10.88,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 379.8px 327.94px;" id="el8v1q18eb6om"
                                class="animable"></path>
                            <g id="el9c5ybt5hirs">
                                <rect x="400.58" y="339.78" width="10.8" height="20.81"
                                    style="fill: rgb(255, 255, 255); transform-origin: 405.98px 350.185px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M405.68,360.59c.08,0,.14-4.66.14-10.41s-.06-10.4-.14-10.4-.15,4.66-.15,10.4S405.6,360.59,405.68,360.59Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 405.675px 350.185px;"
                                id="eli5af4n3t60r" class="animable"></path>
                            <path d="M400.58,347a104.21,104.21,0,0,0,10.8,0,97.27,97.27,0,0,0-10.8,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 405.98px 346.995px;"
                                id="elm0q7874dgvr" class="animable"></path>
                            <path d="M400.52,354.45a106,106,0,0,0,10.89,0,106,106,0,0,0-10.89,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 405.965px 354.45px;"
                                id="elrv2secg1ugs" class="animable"></path>
                            <g id="elm6u6fuvatr9">
                                <rect x="374.41" y="340.67" width="10.8" height="20.81"
                                    style="fill: rgb(255, 255, 255); transform-origin: 379.81px 351.075px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M379.51,361.48c.08,0,.14-4.66.14-10.4s-.06-10.41-.14-10.41-.14,4.66-.14,10.41S379.43,361.48,379.51,361.48Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 379.51px 351.075px;"
                                id="el70bap3njri9" class="animable"></path>
                            <path d="M374.41,347.9a97.27,97.27,0,0,0,10.8,0,104.21,104.21,0,0,0-10.8,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 379.81px 347.905px;"
                                id="elsdni9bau3fd" class="animable"></path>
                            <path d="M374.36,355.34a98.72,98.72,0,0,0,10.88,0,105.76,105.76,0,0,0-10.88,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 379.8px 355.345px;"
                                id="el0ai5ckzmw2bn" class="animable"></path>
                            <g id="el034d4d25z4o1">
                                <rect x="383.04" y="310.45" width="35.53" height="150.24"
                                    style="fill: rgb(235, 235, 235); transform-origin: 400.805px 385.57px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <g id="el83vu3nzm72">
                                <rect x="401.15" y="320.98" width="10.8" height="20.81"
                                    style="fill: rgb(255, 255, 255); transform-origin: 406.55px 331.385px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M406.24,341.79c.08,0,.15-4.66.15-10.41s-.07-10.4-.15-10.4-.14,4.66-.14,10.4S406.16,341.79,406.24,341.79Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 406.245px 331.385px;"
                                id="elcluo30hlu8" class="animable"></path>
                            <path d="M401.15,328.21a104.21,104.21,0,0,0,10.8,0,97.27,97.27,0,0,0-10.8,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 406.55px 328.205px;"
                                id="el32kkpu1fo82" class="animable"></path>
                            <path d="M401.09,335.65a98.9,98.9,0,0,0,10.89,0,106,106,0,0,0-10.89,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 406.535px 335.655px;"
                                id="elqfqeda8awjh" class="animable"></path>
                            <g id="elv73lk2rns3l">
                                <rect x="401.15" y="348.16" width="10.8" height="20.81"
                                    style="fill: rgb(255, 255, 255); transform-origin: 406.55px 358.565px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M406.24,369c.08,0,.15-4.66.15-10.41s-.07-10.4-.15-10.4-.14,4.66-.14,10.4S406.16,369,406.24,369Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 406.245px 358.595px;"
                                id="elibzc3bl4jpr" class="animable"></path>
                            <path d="M401.15,355.39a104.21,104.21,0,0,0,10.8,0,97.27,97.27,0,0,0-10.8,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 406.55px 355.385px;"
                                id="el3u6782cvxvf" class="animable"></path>
                            <path d="M401.09,362.83a106,106,0,0,0,10.89,0,106,106,0,0,0-10.89,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 406.535px 362.83px;"
                                id="elhbr1bxb7gn4" class="animable"></path>
                            <g id="el047ktvvjexkd">
                                <rect x="401.15" y="375.34" width="10.8" height="20.81"
                                    style="fill: rgb(255, 255, 255); transform-origin: 406.55px 385.745px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M406.24,396.15c.08,0,.15-4.66.15-10.41s-.07-10.4-.15-10.4-.14,4.66-.14,10.4S406.16,396.15,406.24,396.15Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 406.245px 385.745px;"
                                id="elsf8l8hu42in" class="animable"></path>
                            <path d="M401.15,382.57a104.21,104.21,0,0,0,10.8,0,97.27,97.27,0,0,0-10.8,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 406.55px 382.565px;"
                                id="eleg7abufyobc" class="animable"></path>
                            <path d="M401.09,390A106,106,0,0,0,412,390a98.9,98.9,0,0,0-10.89,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 406.545px 389.995px;"
                                id="elio0qqr67xq" class="animable"></path>
                            <g id="el8rlkw4wyyoj">
                                <rect x="401.15" y="402.52" width="10.8" height="20.81"
                                    style="fill: rgb(255, 255, 255); transform-origin: 406.55px 412.925px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M406.24,423.33c.08,0,.15-4.66.15-10.41s-.07-10.4-.15-10.4-.14,4.66-.14,10.4S406.16,423.33,406.24,423.33Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 406.245px 412.925px;"
                                id="elfgkcbc8fkvh" class="animable"></path>
                            <path d="M401.15,409.75a104.21,104.21,0,0,0,10.8,0,97.27,97.27,0,0,0-10.8,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 406.55px 409.745px;"
                                id="el3gcimd8ptwf" class="animable"></path>
                            <path d="M401.09,417.19a106,106,0,0,0,10.89,0,98.9,98.9,0,0,0-10.89,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 406.535px 417.185px;"
                                id="ela4t9i6xy9uo" class="animable"></path>
                            <g id="elcfdw5vyqvqr">
                                <rect x="367.93" y="310.45" width="25.89" height="150.24"
                                    style="fill: rgb(224, 224, 224); transform-origin: 380.875px 385.57px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <g id="eltc2g8gzbz1k">
                                <rect x="374.98" y="320.98" width="10.8" height="20.81"
                                    style="fill: rgb(255, 255, 255); transform-origin: 380.38px 331.385px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M380.08,341.79c.08,0,.14-4.66.14-10.41s-.06-10.4-.14-10.4-.15,4.66-.15,10.4S380,341.79,380.08,341.79Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 380.075px 331.385px;"
                                id="elaowgz4qyc2i" class="animable"></path>
                            <path d="M375,328.21a104.21,104.21,0,0,0,10.8,0,97.28,97.28,0,0,0-10.8,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 380.4px 328.205px;"
                                id="el6dgkqx474n7" class="animable"></path>
                            <path d="M374.93,335.65a98.72,98.72,0,0,0,10.88,0,105.76,105.76,0,0,0-10.88,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 380.37px 335.655px;"
                                id="elslpbvofux5d" class="animable"></path>
                            <g id="eli6ne78k8tjd">
                                <rect x="374.98" y="348.38" width="10.8" height="20.81"
                                    style="fill: rgb(255, 255, 255); transform-origin: 380.38px 358.785px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M380.08,369.19c.08,0,.14-4.66.14-10.4s-.06-10.41-.14-10.41-.15,4.66-.15,10.41S380,369.19,380.08,369.19Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 380.075px 358.785px;"
                                id="el7sgm98kyzvm" class="animable"></path>
                            <path d="M375,355.61a97.28,97.28,0,0,0,10.8,0,104.21,104.21,0,0,0-10.8,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 380.4px 355.615px;"
                                id="el4hjw2twnxtj" class="animable"></path>
                            <path d="M374.93,363.05a98.72,98.72,0,0,0,10.88,0,105.76,105.76,0,0,0-10.88,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 380.37px 363.055px;"
                                id="elj24uwlnzowh" class="animable"></path>
                            <g id="elpqe8mipz8z8">
                                <rect x="374.98" y="375.78" width="10.8" height="20.81"
                                    style="fill: rgb(255, 255, 255); transform-origin: 380.38px 386.185px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M380.08,396.59c.08,0,.14-4.66.14-10.4s-.06-10.41-.14-10.41-.15,4.66-.15,10.41S380,396.59,380.08,396.59Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 380.075px 386.185px;"
                                id="eli5bci9emxws" class="animable"></path>
                            <path d="M375,383a97.27,97.27,0,0,0,10.8,0,104.21,104.21,0,0,0-10.8,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 380.4px 383.005px;"
                                id="elz8y90tgiuse" class="animable"></path>
                            <path d="M374.93,390.46c0,.07,2.43.14,5.44.14s5.44-.07,5.44-.14a98.72,98.72,0,0,0-10.88,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 380.37px 390.455px;"
                                id="elrbq8w1ggo49" class="animable"></path>
                            <g id="eluuch7b4j6z">
                                <rect x="374.98" y="403.19" width="10.8" height="20.81"
                                    style="fill: rgb(255, 255, 255); transform-origin: 380.38px 413.595px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M380.08,424c.08,0,.14-4.65.14-10.4s-.06-10.4-.14-10.4-.15,4.65-.15,10.4S380,424,380.08,424Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 380.075px 413.6px;"
                                id="eln8xu4j8lb1p" class="animable"></path>
                            <path d="M375,410.42a104.21,104.21,0,0,0,10.8,0,97.27,97.27,0,0,0-10.8,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 380.4px 410.415px;" id="elrhj5z4e1md"
                                class="animable"></path>
                            <path d="M374.93,417.86a105.76,105.76,0,0,0,10.88,0,98.72,98.72,0,0,0-10.88,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 380.37px 417.855px;"
                                id="el3650xg5tyr7" class="animable"></path>
                            <g id="el67qqg25z8zt">
                                <rect x="401.15" y="429.7" width="10.8" height="20.81"
                                    style="fill: rgb(255, 255, 255); transform-origin: 406.55px 440.105px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M406.24,450.5c.08,0,.15-4.65.15-10.4s-.07-10.4-.15-10.4-.14,4.65-.14,10.4S406.16,450.5,406.24,450.5Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 406.245px 440.1px;"
                                id="el1drrlblnz93" class="animable"></path>
                            <path d="M401.15,436.93a104.21,104.21,0,0,0,10.8,0,97.28,97.28,0,0,0-10.8,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 406.55px 436.925px;"
                                id="el02qm172q96sj" class="animable"></path>
                            <path d="M401.09,444.37a106,106,0,0,0,10.89,0,98.9,98.9,0,0,0-10.89,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 406.535px 444.365px;"
                                id="elx48v4865dyp" class="animable"></path>
                            <g id="ely48rz8kxpjs">
                                <rect x="374.98" y="430.59" width="10.8" height="20.81"
                                    style="fill: rgb(255, 255, 255); transform-origin: 380.38px 440.995px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M380.08,451.4c.08,0,.14-4.66.14-10.41s-.06-10.4-.14-10.4-.15,4.66-.15,10.4S380,451.4,380.08,451.4Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 380.075px 440.995px;"
                                id="ely09awy1sja" class="animable"></path>
                            <path d="M375,437.82a104.21,104.21,0,0,0,10.8,0,97.28,97.28,0,0,0-10.8,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 380.4px 437.815px;" id="elwq330x85qr"
                                class="animable"></path>
                            <path d="M374.93,445.26a105.76,105.76,0,0,0,10.88,0,105.76,105.76,0,0,0-10.88,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 380.37px 445.26px;" id="el99bv3u4wux"
                                class="animable"></path>
                            <g id="el3lpry4esuc4">
                                <rect x="104.11" y="222.84" width="53.06" height="237.63"
                                    style="fill: rgb(235, 235, 235); transform-origin: 130.64px 341.655px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <g id="elsub9g4n2pjb">
                                <rect x="131.15" y="238.57" width="16.13" height="31.08"
                                    style="fill: rgb(255, 255, 255); transform-origin: 139.215px 254.11px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M138.76,269.65c.12,0,.22-7,.22-15.54s-.1-15.54-.22-15.54-.21,7-.21,15.54S138.64,269.65,138.76,269.65Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 138.765px 254.11px;"
                                id="el9bsj5lbsrfe" class="animable"></path>
                            <path
                                d="M131.15,249.37a76.34,76.34,0,0,0,8.07.21,76.23,76.23,0,0,0,8.06-.21,74.5,74.5,0,0,0-8.06-.22A74.61,74.61,0,0,0,131.15,249.37Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 139.215px 249.365px;"
                                id="eln9w3lq4fd7d" class="animable"></path>
                            <path
                                d="M131.07,260.48a75.77,75.77,0,0,0,8.13.22,75.77,75.77,0,0,0,8.13-.22,77.53,77.53,0,0,0-8.13-.21A77.53,77.53,0,0,0,131.07,260.48Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 139.2px 260.485px;"
                                id="elaasa4hbtdla" class="animable"></path>
                            <g id="elegx9k2l0v7i">
                                <rect x="131.15" y="279.16" width="16.13" height="31.08"
                                    style="fill: rgb(255, 255, 255); transform-origin: 139.215px 294.7px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M138.76,310.24c.12,0,.22-7,.22-15.54s-.1-15.54-.22-15.54-.21,7-.21,15.54S138.64,310.24,138.76,310.24Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 138.765px 294.7px;"
                                id="el415lm980zaz" class="animable"></path>
                            <path
                                d="M131.15,290a74.61,74.61,0,0,0,8.07.22,74.5,74.5,0,0,0,8.06-.22,76.23,76.23,0,0,0-8.06-.21A76.34,76.34,0,0,0,131.15,290Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 139.215px 290.005px;"
                                id="elzxxd9vh28c" class="animable"></path>
                            <path
                                d="M131.07,301.08a81,81,0,0,0,8.13.21,81,81,0,0,0,8.13-.21,75.77,75.77,0,0,0-8.13-.22A75.77,75.77,0,0,0,131.07,301.08Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 139.2px 301.074px;" id="elkxca9v55l2"
                                class="animable"></path>
                            <g id="elhmqqn00iwir">
                                <rect x="131.15" y="319.76" width="16.13" height="31.08"
                                    style="fill: rgb(255, 255, 255); transform-origin: 139.215px 335.3px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M138.76,350.84c.12,0,.22-7,.22-15.54s-.1-15.54-.22-15.54-.21,6.95-.21,15.54S138.64,350.84,138.76,350.84Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 138.765px 335.3px;"
                                id="elgogm8i1qsrp" class="animable"></path>
                            <path
                                d="M131.15,330.56a79.71,79.71,0,0,0,8.07.21,79.59,79.59,0,0,0,8.06-.21,74.5,74.5,0,0,0-8.06-.22A74.61,74.61,0,0,0,131.15,330.56Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 139.215px 330.554px;"
                                id="elpcbhb8qqju" class="animable"></path>
                            <path
                                d="M131.07,341.67a75.77,75.77,0,0,0,8.13.22,75.77,75.77,0,0,0,8.13-.22,75.77,75.77,0,0,0-8.13-.22A75.77,75.77,0,0,0,131.07,341.67Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 139.2px 341.67px;" id="elx8h85vopecn"
                                class="animable"></path>
                            <g id="el12xedk5vd1z">
                                <rect x="131.15" y="360.35" width="16.13" height="31.08"
                                    style="fill: rgb(255, 255, 255); transform-origin: 139.215px 375.89px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M138.76,391.43c.12,0,.22-7,.22-15.54s-.1-15.54-.22-15.54-.21,7-.21,15.54S138.64,391.43,138.76,391.43Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 138.765px 375.89px;"
                                id="elxyq7x0v19dg" class="animable"></path>
                            <path
                                d="M131.15,371.15a74.61,74.61,0,0,0,8.07.22,74.5,74.5,0,0,0,8.06-.22,74.5,74.5,0,0,0-8.06-.22A74.61,74.61,0,0,0,131.15,371.15Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 139.215px 371.15px;"
                                id="el374v2kujvne" class="animable"></path>
                            <path
                                d="M131.07,382.26a75.77,75.77,0,0,0,8.13.22,75.77,75.77,0,0,0,8.13-.22,81,81,0,0,0-8.13-.21A81,81,0,0,0,131.07,382.26Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 139.2px 382.266px;" id="elt7echo2h8o"
                                class="animable"></path>
                            <g id="elb6yq54kzh8">
                                <rect x="81.54" y="222.84" width="38.66" height="237.63"
                                    style="fill: rgb(224, 224, 224); transform-origin: 100.87px 341.655px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <g id="eljlw8u4bkg8k">
                                <rect x="92.07" y="238.57" width="16.13" height="31.08"
                                    style="fill: rgb(255, 255, 255); transform-origin: 100.135px 254.11px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M99.68,269.65c.12,0,.22-7,.22-15.54s-.1-15.54-.22-15.54-.21,7-.21,15.54S99.56,269.65,99.68,269.65Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 99.685px 254.11px;" id="el52zr2864zc"
                                class="animable"></path>
                            <path
                                d="M92.07,249.37a76.23,76.23,0,0,0,8.06.21,76.34,76.34,0,0,0,8.07-.21,74.61,74.61,0,0,0-8.07-.22A74.5,74.5,0,0,0,92.07,249.37Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 100.135px 249.365px;"
                                id="el63hibz39mej" class="animable"></path>
                            <path
                                d="M92,260.48a75.77,75.77,0,0,0,8.13.22,75.77,75.77,0,0,0,8.13-.22,77.53,77.53,0,0,0-8.13-.21A77.53,77.53,0,0,0,92,260.48Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 100.13px 260.485px;"
                                id="elpk869n7alf" class="animable"></path>
                            <g id="elf3i21kmmupp">
                                <rect x="92.07" y="279.5" width="16.13" height="31.08"
                                    style="fill: rgb(255, 255, 255); transform-origin: 100.135px 295.04px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M99.68,310.58c.12,0,.22-7,.22-15.54s-.1-15.54-.22-15.54-.21,6.95-.21,15.54S99.56,310.58,99.68,310.58Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 99.685px 295.04px;" id="ellza032t3jf"
                                class="animable"></path>
                            <path
                                d="M92.07,290.29a74.5,74.5,0,0,0,8.06.22,74.61,74.61,0,0,0,8.07-.22,79.71,79.71,0,0,0-8.07-.21A79.59,79.59,0,0,0,92.07,290.29Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 100.135px 290.296px;"
                                id="el69sofam93fq" class="animable"></path>
                            <path
                                d="M92,301.41a77.53,77.53,0,0,0,8.13.21,77.53,77.53,0,0,0,8.13-.21,75.77,75.77,0,0,0-8.13-.22A75.77,75.77,0,0,0,92,301.41Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 100.13px 301.405px;"
                                id="elqlpr4pd87d" class="animable"></path>
                            <g id="elnotn1hemtal">
                                <rect x="92.07" y="320.42" width="16.13" height="31.08"
                                    style="fill: rgb(255, 255, 255); transform-origin: 100.135px 335.96px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M99.68,351.5c.12,0,.22-6.95.22-15.54s-.1-15.54-.22-15.54-.21,7-.21,15.54S99.56,351.5,99.68,351.5Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 99.685px 335.96px;"
                                id="elbubwfi3jvik" class="animable"></path>
                            <path
                                d="M92.07,331.22a74.5,74.5,0,0,0,8.06.22,74.61,74.61,0,0,0,8.07-.22,76.34,76.34,0,0,0-8.07-.21A76.23,76.23,0,0,0,92.07,331.22Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 100.135px 331.225px;"
                                id="elrtc2bp49rkj" class="animable"></path>
                            <path
                                d="M92,342.34a77.53,77.53,0,0,0,8.13.21,77.53,77.53,0,0,0,8.13-.21,75.77,75.77,0,0,0-8.13-.22A75.77,75.77,0,0,0,92,342.34Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 100.13px 342.335px;"
                                id="eljl116j0yq5" class="animable"></path>
                            <g id="elqlliqksc8b">
                                <rect x="92.07" y="361.35" width="16.13" height="31.08"
                                    style="fill: rgb(255, 255, 255); transform-origin: 100.135px 376.89px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M99.68,392.43c.12,0,.22-7,.22-15.54s-.1-15.54-.22-15.54-.21,7-.21,15.54S99.56,392.43,99.68,392.43Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 99.685px 376.89px;"
                                id="eligj03ml7jqb" class="animable"></path>
                            <path
                                d="M92.07,372.15a76.23,76.23,0,0,0,8.06.21,76.34,76.34,0,0,0,8.07-.21,74.61,74.61,0,0,0-8.07-.22A74.5,74.5,0,0,0,92.07,372.15Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 100.135px 372.145px;"
                                id="els73psqd9crj" class="animable"></path>
                            <path
                                d="M92,383.26a75.77,75.77,0,0,0,8.13.22,75.77,75.77,0,0,0,8.13-.22,77.53,77.53,0,0,0-8.13-.21A77.53,77.53,0,0,0,92,383.26Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 100.13px 383.265px;"
                                id="elim02bmdxy49" class="animable"></path>
                            <g id="ellpgruwok8u">
                                <rect x="131.15" y="400.95" width="16.13" height="31.08"
                                    style="fill: rgb(255, 255, 255); transform-origin: 139.215px 416.49px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M138.76,432c.12,0,.22-7,.22-15.54s-.1-15.54-.22-15.54-.21,6.95-.21,15.54S138.64,432,138.76,432Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 138.765px 416.46px;"
                                id="elk1fbfvl1ygk" class="animable"></path>
                            <path
                                d="M131.15,411.74a74.61,74.61,0,0,0,8.07.22,74.5,74.5,0,0,0,8.06-.22,79.59,79.59,0,0,0-8.06-.21A79.71,79.71,0,0,0,131.15,411.74Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 139.215px 411.746px;"
                                id="el4cq93q64ow9" class="animable"></path>
                            <path
                                d="M131.07,422.86a77.53,77.53,0,0,0,8.13.21,77.53,77.53,0,0,0,8.13-.21,75.77,75.77,0,0,0-8.13-.22A75.77,75.77,0,0,0,131.07,422.86Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 139.2px 422.855px;" id="elw3jb65t5xg"
                                class="animable"></path>
                            <g id="elin6lsba5ujp">
                                <rect x="92.07" y="402.28" width="16.13" height="31.08"
                                    style="fill: rgb(255, 255, 255); transform-origin: 100.135px 417.82px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M99.68,433.36c.12,0,.22-7,.22-15.54s-.1-15.54-.22-15.54-.21,7-.21,15.54S99.56,433.36,99.68,433.36Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 99.685px 417.82px;"
                                id="ell5l07yeiu5p" class="animable"></path>
                            <path
                                d="M92.07,413.08a76.23,76.23,0,0,0,8.06.21,76.34,76.34,0,0,0,8.07-.21,74.61,74.61,0,0,0-8.07-.22A74.5,74.5,0,0,0,92.07,413.08Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 100.135px 413.075px;"
                                id="elnzyhtdttg0g" class="animable"></path>
                            <path
                                d="M92,424.19a75.77,75.77,0,0,0,8.13.22,75.77,75.77,0,0,0,8.13-.22,77.53,77.53,0,0,0-8.13-.21A77.53,77.53,0,0,0,92,424.19Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 100.13px 424.195px;"
                                id="elci2wknu5n0b" class="animable"></path>
                            <g id="el5eqo82gmxfe">
                                <rect x="603.15" y="247.47" width="50.44" height="213.32"
                                    style="fill: rgb(235, 235, 235); transform-origin: 628.37px 354.13px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <g id="elzhjjq12tci">
                                <rect x="628.86" y="262.42" width="15.33" height="29.55"
                                    style="fill: rgb(255, 255, 255); transform-origin: 636.525px 277.195px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M636.09,292c.11,0,.21-6.61.21-14.77s-.1-14.77-.21-14.77-.2,6.61-.2,14.77S636,292,636.09,292Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 636.095px 277.23px;"
                                id="el4w92mkqsaca" class="animable"></path>
                            <path d="M628.86,272.68a140,140,0,0,0,15.33,0,147,147,0,0,0-15.33,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 636.525px 272.685px;"
                                id="eljcu3uq6d10s" class="animable"></path>
                            <path d="M628.78,283.25a142.19,142.19,0,0,0,15.45,0,149.29,149.29,0,0,0-15.45,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 636.505px 283.255px;"
                                id="elcxukql42b8i" class="animable"></path>
                            <g id="elm9briwe2phf">
                                <rect x="628.86" y="301.01" width="15.33" height="29.55"
                                    style="fill: rgb(255, 255, 255); transform-origin: 636.525px 315.785px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M636.09,330.56c.11,0,.21-6.62.21-14.77s-.1-14.78-.21-14.78-.2,6.62-.2,14.78S636,330.56,636.09,330.56Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 636.095px 315.785px;"
                                id="elchnclef3mzm" class="animable"></path>
                            <path d="M628.86,311.28a147,147,0,0,0,15.33,0,140,140,0,0,0-15.33,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 636.525px 311.275px;"
                                id="elcargpo6iuvq" class="animable"></path>
                            <path d="M628.78,321.84a142.19,142.19,0,0,0,15.45,0,149.29,149.29,0,0,0-15.45,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 636.505px 321.845px;"
                                id="el9m5r919dlrp" class="animable"></path>
                            <g id="elp606uyqoba">
                                <rect x="628.86" y="339.6" width="15.33" height="29.55"
                                    style="fill: rgb(255, 255, 255); transform-origin: 636.525px 354.375px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M636.09,369.15c.11,0,.21-6.61.21-14.77s-.1-14.78-.21-14.78-.2,6.62-.2,14.78S636,369.15,636.09,369.15Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 636.095px 354.375px;"
                                id="elfi5usuvw7bn" class="animable"></path>
                            <path d="M628.86,349.87a147,147,0,0,0,15.33,0,140,140,0,0,0-15.33,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 636.525px 349.865px;"
                                id="el57hyo1bihb7" class="animable"></path>
                            <path d="M628.78,360.44a149.29,149.29,0,0,0,15.45,0,142.19,142.19,0,0,0-15.45,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 636.505px 360.435px;"
                                id="elyhvpn2rsrk" class="animable"></path>
                            <g id="elngj15ws9qo">
                                <rect x="628.86" y="378.2" width="15.33" height="29.55"
                                    style="fill: rgb(255, 255, 255); transform-origin: 636.525px 392.975px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M636.09,407.74c.11,0,.21-6.61.21-14.77s-.1-14.77-.21-14.77-.2,6.61-.2,14.77S636,407.74,636.09,407.74Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 636.095px 392.97px;"
                                id="el7gmrciap5vo" class="animable"></path>
                            <path d="M628.86,388.46a140,140,0,0,0,15.33,0,147,147,0,0,0-15.33,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 636.525px 388.465px;"
                                id="el75p0t0ozyso" class="animable"></path>
                            <path d="M628.78,399a149.29,149.29,0,0,0,15.45,0,142.19,142.19,0,0,0-15.45,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 636.505px 398.995px;"
                                id="elqc0folzsii" class="animable"></path>
                            <g id="elhsdcfwfivdh">
                                <rect x="581.69" y="247.47" width="36.75" height="213.32"
                                    style="fill: rgb(224, 224, 224); transform-origin: 600.065px 354.13px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <g id="el0vvxrgxb2ap">
                                <rect x="591.7" y="262.42" width="15.33" height="29.55"
                                    style="fill: rgb(255, 255, 255); transform-origin: 599.365px 277.195px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M598.94,292c.11,0,.2-6.61.2-14.77s-.09-14.77-.2-14.77-.21,6.61-.21,14.77S598.82,292,598.94,292Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 598.935px 277.23px;"
                                id="elctglyidi28g" class="animable"></path>
                            <path d="M591.7,272.68a140,140,0,0,0,15.33,0,147,147,0,0,0-15.33,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 599.365px 272.685px;"
                                id="elf7lfo9umga8" class="animable"></path>
                            <path d="M591.62,283.25a142.37,142.37,0,0,0,15.46,0,149.48,149.48,0,0,0-15.46,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 599.35px 283.255px;"
                                id="eld2z94k2cvo" class="animable"></path>
                            <g id="elvj25wv6wid">
                                <rect x="591.7" y="301.33" width="15.33" height="29.55"
                                    style="fill: rgb(255, 255, 255); transform-origin: 599.365px 316.105px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M598.94,330.87c.11,0,.2-6.61.2-14.77s-.09-14.77-.2-14.77-.21,6.61-.21,14.77S598.82,330.87,598.94,330.87Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 598.935px 316.1px;" id="elk4sfa8vnd7"
                                class="animable"></path>
                            <path d="M591.7,311.59a140,140,0,0,0,15.33,0,147,147,0,0,0-15.33,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 599.365px 311.595px;"
                                id="elhoiyn6bhe0v" class="animable"></path>
                            <path d="M591.62,322.16a149.48,149.48,0,0,0,15.46,0,142.37,142.37,0,0,0-15.46,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 599.35px 322.155px;"
                                id="elf9n059pkyp6" class="animable"></path>
                            <g id="elaiqvanukibn">
                                <rect x="591.7" y="340.24" width="15.33" height="29.55"
                                    style="fill: rgb(255, 255, 255); transform-origin: 599.365px 355.015px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M598.94,369.78c.11,0,.2-6.61.2-14.77s-.09-14.77-.2-14.77-.21,6.61-.21,14.77S598.82,369.78,598.94,369.78Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 598.935px 355.01px;"
                                id="elh656twztf99" class="animable"></path>
                            <path d="M591.7,350.5a140,140,0,0,0,15.33,0,147,147,0,0,0-15.33,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 599.365px 350.505px;"
                                id="el1g03nr1j5ep" class="animable"></path>
                            <path d="M591.62,361.07a149.48,149.48,0,0,0,15.46,0,142.37,142.37,0,0,0-15.46,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 599.35px 361.065px;"
                                id="elv4vejnxoeo7" class="animable"></path>
                            <g id="el0jsdw3k3ijw">
                                <rect x="591.7" y="379.15" width="15.33" height="29.55"
                                    style="fill: rgb(255, 255, 255); transform-origin: 599.365px 393.925px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M598.94,408.69c.11,0,.2-6.61.2-14.77s-.09-14.77-.2-14.77-.21,6.61-.21,14.77S598.82,408.69,598.94,408.69Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 598.935px 393.92px;"
                                id="elqrcnu13t1he" class="animable"></path>
                            <path d="M591.7,389.41a140,140,0,0,0,15.33,0,147,147,0,0,0-15.33,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 599.365px 389.415px;"
                                id="el9kmnqzma1b" class="animable"></path>
                            <path d="M591.62,400a149.48,149.48,0,0,0,15.46,0,142.37,142.37,0,0,0-15.46,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 599.35px 399.995px;"
                                id="eleqcljileq1s" class="animable"></path>
                            <g id="elquaarffozx">
                                <rect x="628.86" y="416.79" width="15.33" height="29.55"
                                    style="fill: rgb(255, 255, 255); transform-origin: 636.525px 431.565px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M636.09,446.34c.11,0,.21-6.62.21-14.78s-.1-14.77-.21-14.77-.2,6.61-.2,14.77S636,446.34,636.09,446.34Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 636.095px 431.565px;"
                                id="elxhfq9jmrgal" class="animable"></path>
                            <path d="M628.86,427.05a140,140,0,0,0,15.33,0,147,147,0,0,0-15.33,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 636.525px 427.055px;"
                                id="elveb1ba307a" class="animable"></path>
                            <path d="M628.78,437.62a142.19,142.19,0,0,0,15.45,0,149.29,149.29,0,0,0-15.45,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 636.505px 437.625px;"
                                id="elc0l4swpd98j" class="animable"></path>
                            <g id="el3vqmkpgx89j">
                                <rect x="591.7" y="418.06" width="15.33" height="29.55"
                                    style="fill: rgb(255, 255, 255); transform-origin: 599.365px 432.835px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M598.94,447.6c.11,0,.2-6.61.2-14.77s-.09-14.77-.2-14.77-.21,6.61-.21,14.77S598.82,447.6,598.94,447.6Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 598.935px 432.83px;"
                                id="el825jf3x06dn" class="animable"></path>
                            <path d="M591.7,428.32a140,140,0,0,0,15.33,0,147,147,0,0,0-15.33,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 599.365px 428.325px;"
                                id="elu145afsi57e" class="animable"></path>
                            <path d="M591.62,438.89a149.48,149.48,0,0,0,15.46,0,142.37,142.37,0,0,0-15.46,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 599.35px 438.885px;"
                                id="el15zh5eaione" class="animable"></path>
                            <g id="elc25oq6koj5">
                                <rect x="659" y="332.99" width="30.2" height="127.69"
                                    style="fill: rgb(235, 235, 235); transform-origin: 674.1px 396.835px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <g id="elpfnb7kjynt">
                                <rect x="674.39" y="341.94" width="9.18" height="17.69"
                                    style="fill: rgb(255, 255, 255); transform-origin: 678.98px 350.785px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M678.72,359.63c.06,0,.12-4,.12-8.84s-.06-8.85-.12-8.85-.13,4-.13,8.85S678.65,359.63,678.72,359.63Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 678.715px 350.785px;"
                                id="el43a42xsabx1" class="animable"></path>
                            <path d="M674.39,348.09c0,.06,2.05.12,4.58.12s4.59-.06,4.59-.12a80.92,80.92,0,0,0-9.17,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 678.975px 348.085px;"
                                id="el7q2363t9pzt" class="animable"></path>
                            <path d="M674.34,354.41a89.19,89.19,0,0,0,9.25,0,89.19,89.19,0,0,0-9.25,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 678.965px 354.41px;"
                                id="elqytmzuk2dci" class="animable"></path>
                            <g id="elfhk76lo7uye">
                                <rect x="674.39" y="365.04" width="9.18" height="17.69"
                                    style="fill: rgb(255, 255, 255); transform-origin: 678.98px 373.885px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M678.72,382.73c.06,0,.12-4,.12-8.84s-.06-8.85-.12-8.85-.13,4-.13,8.85S678.65,382.73,678.72,382.73Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 678.715px 373.885px;"
                                id="elmvv7ykivpd" class="animable"></path>
                            <path d="M674.39,371.19a87.65,87.65,0,0,0,9.17,0,80.92,80.92,0,0,0-9.17,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 678.975px 371.185px;"
                                id="elmhrmxbkocoq" class="animable"></path>
                            <path d="M674.34,377.51a82.34,82.34,0,0,0,9.25,0,89.19,89.19,0,0,0-9.25,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 678.965px 377.515px;"
                                id="elp9fsv48k39g" class="animable"></path>
                            <g id="elngffmtbwfw8">
                                <rect x="674.39" y="388.14" width="9.18" height="17.69"
                                    style="fill: rgb(255, 255, 255); transform-origin: 678.98px 396.985px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M678.72,405.83c.06,0,.12-4,.12-8.84s-.06-8.85-.12-8.85-.13,4-.13,8.85S678.65,405.83,678.72,405.83Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 678.715px 396.985px;"
                                id="ellap1ehc3bes" class="animable"></path>
                            <path d="M674.39,394.29a87.65,87.65,0,0,0,9.17,0,87.65,87.65,0,0,0-9.17,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 678.975px 394.29px;"
                                id="eldf5oj5k8o5" class="animable"></path>
                            <path
                                d="M674.34,400.61a82.34,82.34,0,0,0,9.25,0c0-.06-2.07-.12-4.63-.12S674.34,400.55,674.34,400.61Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 678.965px 400.615px;"
                                id="elhygoap20k48" class="animable"></path>
                            <g id="elligmzwhvkz">
                                <rect x="674.39" y="411.25" width="9.18" height="17.69"
                                    style="fill: rgb(255, 255, 255); transform-origin: 678.98px 420.095px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M678.72,428.93c.06,0,.12-4,.12-8.84s-.06-8.84-.12-8.84-.13,3.95-.13,8.84S678.65,428.93,678.72,428.93Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 678.715px 420.09px;"
                                id="elcf37gzvg15u" class="animable"></path>
                            <path d="M674.39,417.39a87.65,87.65,0,0,0,9.17,0,87.65,87.65,0,0,0-9.17,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 678.975px 417.39px;"
                                id="eluls2isuru3c" class="animable"></path>
                            <path
                                d="M674.34,423.71a82.34,82.34,0,0,0,9.25,0c0-.06-2.07-.12-4.63-.12S674.34,423.65,674.34,423.71Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 678.965px 423.715px;"
                                id="elflgn3bdqzsr" class="animable"></path>
                            <g id="elbc1bf42ovk">
                                <rect x="646.15" y="332.99" width="22" height="127.69"
                                    style="fill: rgb(224, 224, 224); transform-origin: 657.15px 396.835px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <g id="elstepzzj7isl">
                                <rect x="652.15" y="341.94" width="9.18" height="17.69"
                                    style="fill: rgb(255, 255, 255); transform-origin: 656.74px 350.785px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M656.48,359.63c.06,0,.12-4,.12-8.84s-.06-8.85-.12-8.85-.13,4-.13,8.85S656.41,359.63,656.48,359.63Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 656.475px 350.785px;"
                                id="el93e4qc1efd4" class="animable"></path>
                            <path d="M652.15,348.09c0,.06,2.05.12,4.58.12s4.59-.06,4.59-.12a80.92,80.92,0,0,0-9.17,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 656.735px 348.085px;"
                                id="elbfk9d5xxk39" class="animable"></path>
                            <path d="M652.1,354.41a89.19,89.19,0,0,0,9.25,0,89.19,89.19,0,0,0-9.25,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 656.725px 354.41px;"
                                id="ele8erp1wcqma" class="animable"></path>
                            <g id="elu3ouu63can">
                                <rect x="652.15" y="365.23" width="9.18" height="17.69"
                                    style="fill: rgb(255, 255, 255); transform-origin: 656.74px 374.075px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M656.48,382.92c.06,0,.12-4,.12-8.84s-.06-8.85-.12-8.85-.13,4-.13,8.85S656.41,382.92,656.48,382.92Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 656.475px 374.075px;"
                                id="el1dtqs0uyxzs" class="animable"></path>
                            <path d="M652.15,371.38c0,.06,2.05.12,4.58.12s4.59-.06,4.59-.12a80.92,80.92,0,0,0-9.17,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 656.735px 371.375px;"
                                id="elk15as9kbid7" class="animable"></path>
                            <path d="M652.1,377.7a89.19,89.19,0,0,0,9.25,0,89.19,89.19,0,0,0-9.25,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 656.725px 377.7px;"
                                id="el1ehhwoweztz" class="animable"></path>
                            <g id="eld97pxerl8nu">
                                <rect x="652.15" y="388.52" width="9.18" height="17.69"
                                    style="fill: rgb(255, 255, 255); transform-origin: 656.74px 397.365px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M656.48,406.21c.06,0,.12-4,.12-8.84s-.06-8.85-.12-8.85-.13,4-.13,8.85S656.41,406.21,656.48,406.21Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 656.475px 397.365px;"
                                id="el2rxhialc0xu" class="animable"></path>
                            <path d="M652.15,394.67a87.65,87.65,0,0,0,9.17,0,87.65,87.65,0,0,0-9.17,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 656.735px 394.67px;"
                                id="elplp4n9mvgkh" class="animable"></path>
                            <path d="M652.1,401a82.34,82.34,0,0,0,9.25,0,89.19,89.19,0,0,0-9.25,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 656.725px 401.005px;"
                                id="elgb9xlnt54a" class="animable"></path>
                            <g id="els3e3zgg35q">
                                <rect x="652.15" y="411.81" width="9.18" height="17.69"
                                    style="fill: rgb(255, 255, 255); transform-origin: 656.74px 420.655px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M656.48,429.5c.06,0,.12-4,.12-8.84s-.06-8.85-.12-8.85-.13,4-.13,8.85S656.41,429.5,656.48,429.5Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 656.475px 420.655px;"
                                id="elm58h6f0a7ag" class="animable"></path>
                            <path d="M652.15,418a87.65,87.65,0,0,0,9.17,0,87.65,87.65,0,0,0-9.17,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 656.735px 418px;" id="elveujp4lloo"
                                class="animable"></path>
                            <path
                                d="M652.1,424.28a82.34,82.34,0,0,0,9.25,0c0-.06-2.07-.12-4.63-.12S652.1,424.22,652.1,424.28Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 656.725px 424.285px;"
                                id="elrvod07yhla" class="animable"></path>
                            <g id="elm2g3rqxuyh9">
                                <rect x="674.39" y="434.35" width="9.18" height="17.69"
                                    style="fill: rgb(255, 255, 255); transform-origin: 678.98px 443.195px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M678.72,452c.06,0,.12-4,.12-8.84s-.06-8.84-.12-8.84-.13,4-.13,8.84S678.65,452,678.72,452Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 678.715px 443.16px;"
                                id="elbath2ew95nh" class="animable"></path>
                            <path d="M674.39,440.49a87.65,87.65,0,0,0,9.17,0,87.65,87.65,0,0,0-9.17,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 678.975px 440.49px;"
                                id="elomc6nwhj7he" class="animable"></path>
                            <path d="M674.34,446.82c0,.06,2.07.12,4.62.12s4.63-.06,4.63-.12a82.34,82.34,0,0,0-9.25,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 678.965px 446.815px;"
                                id="elkzt02cojlhn" class="animable"></path>
                            <g id="eljo16ouxrt7j">
                                <rect x="652.15" y="435.1" width="9.18" height="17.69"
                                    style="fill: rgb(255, 255, 255); transform-origin: 656.74px 443.945px; transform: rotate(180deg);"
                                    class="animable"></rect>
                            </g>
                            <path
                                d="M656.48,452.79c.06,0,.12-4,.12-8.84s-.06-8.85-.12-8.85-.13,4-.13,8.85S656.41,452.79,656.48,452.79Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 656.475px 443.945px;"
                                id="elw01brgdnbp" class="animable"></path>
                            <path d="M652.15,441.25a87.65,87.65,0,0,0,9.17,0,87.65,87.65,0,0,0-9.17,0Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 656.735px 441.25px;"
                                id="elddqktaon22u" class="animable"></path>
                            <path
                                d="M652.1,447.57a82.34,82.34,0,0,0,9.25,0c0-.06-2.07-.12-4.63-.12S652.1,447.51,652.1,447.57Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 656.725px 447.575px;"
                                id="eloznnv4t9fu" class="animable"></path>
                            <path
                                d="M432.2,96.75c.47-3.45-4.4-6.29-8.06-6.58-1.74-.14-3.55.12-5.21-.45-3.58-1.25-5-5.88-8.51-7.35-2.61-1.1-5.62-.12-8.15,1.15s-5,2.88-7.87,3.06c-2.46.16-5.13-.75-7.29.45-1.6.9-2.44,2.75-3.92,3.84a9.46,9.46,0,0,1-5.13,1.39,14.44,14.44,0,0,0-5.29.86c-1.64.75-3,2.48-2.65,4.25Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 401.148px 89.6316px;"
                                id="elq4uh4ov9ik" class="animable"></path>
                            <path
                                d="M571.72,51.15c.48-3.45-4.39-6.29-8.05-6.59-1.75-.14-3.56.13-5.22-.45-3.58-1.24-5-5.87-8.5-7.35-2.62-1.1-5.63-.12-8.16,1.16s-5,2.88-7.87,3.06c-2.46.16-5.13-.76-7.28.45-1.61.89-2.45,2.74-3.93,3.83a9.27,9.27,0,0,1-5.13,1.39,14.45,14.45,0,0,0-5.29.87c-1.64.75-3,2.48-2.65,4.24Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 540.669px 44.0217px;"
                                id="elr1jr0pyger" class="animable"></path>
                            <path
                                d="M87,192.52c.48-3.45-4.39-6.29-8-6.58-1.75-.14-3.56.13-5.21-.45-3.59-1.25-5-5.88-8.51-7.35-2.62-1.1-5.62-.12-8.16,1.15s-5,2.88-7.86,3.06c-2.47.16-5.14-.75-7.29.45-1.61.9-2.45,2.75-3.93,3.84A9.44,9.44,0,0,1,32.82,188a14.51,14.51,0,0,0-5.29.86c-1.63.75-3,2.48-2.65,4.25Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 55.9289px 185.387px;"
                                id="ell7il8npvwl" class="animable"></path>
                            <path
                                d="M288.31,58.76c.58-4.19-5.33-7.63-9.77-8-2.11-.17-4.31.15-6.32-.55-4.34-1.51-6.08-7.12-10.32-8.91-3.17-1.34-6.82-.15-9.89,1.4s-6.11,3.49-9.54,3.71c-3,.19-6.23-.92-8.84.54-1.95,1.09-3,3.33-4.76,4.66s-4.05,1.57-6.22,1.68-4.44.14-6.42,1.05-3.62,3-3.21,5.15Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 250.653px 50.1042px;"
                                id="elgk5hu9snjvr" class="animable"></path>
                            <path
                                d="M687.58,212c.58-4.18-5.33-7.63-9.77-8-2.12-.17-4.31.15-6.32-.55-4.34-1.51-6.08-7.13-10.32-8.91-3.17-1.34-6.82-.15-9.89,1.4s-6.11,3.49-9.54,3.71c-3,.19-6.23-.92-8.84.54-1.95,1.09-3,3.33-4.76,4.65s-4,1.57-6.23,1.69-4.43.14-6.41,1.05-3.63,3-3.21,5.15Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 649.922px 203.344px;"
                                id="els368otkvtz" class="animable"></path>
                        </g>
                        <g id="freepik--Table--inject-23" class="animable animator-hidden"
                            style="transform-origin: 361.135px 460.79px;">
                            <path
                                d="M687.09,460.68l-1.68,0-4.94,0-19,.05-69.86.08L361.16,461l-230.51-.08-69.85-.08-19-.05-4.94,0-1.68,0,1.68,0,4.94,0,19-.05,69.85-.08,230.51-.08,230.46.08,69.86.08,19,.05,4.94,0Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 361.135px 460.79px;" id="el6akuire057h"
                                class="animable"></path>
                        </g>
                        <g id="freepik--Building--inject-23" class="animable"
                            style="transform-origin: 264.75px 278.08px;">
                            <rect x="247.75" y="101.8" width="55.68" height="32.68"
                                style="fill: rgb(224, 224, 224); transform-origin: 275.59px 118.14px;" id="ell0e2jb9udr"
                                class="animable"></rect>
                            <rect x="221.38" y="100.71" width="55.68" height="32.68"
                                style="fill: rgb(235, 235, 235); transform-origin: 249.22px 117.05px;"
                                id="elmog4g03hxsr" class="animable"></rect>
                            <rect x="143.81" y="131.95" width="241.63" height="13.17"
                                style="fill: rgb(224, 224, 224); transform-origin: 264.625px 138.535px;"
                                id="elgderlvq7ikp" class="animable"></rect>
                            <rect x="215.65" y="95.47" width="91.32" height="7.09"
                                style="fill: rgb(224, 224, 224); transform-origin: 261.31px 99.015px;"
                                id="elis1sgpgsn7e" class="animable"></rect>
                            <polygon points="326.51 460.69 156.6 460.47 156.31 145.12 326.51 145.12 326.51 460.69"
                                style="fill: rgb(235, 235, 235); transform-origin: 241.41px 302.905px;"
                                id="el6wg1b6frnnj" class="animable"></polygon>
                            <rect x="174.1" y="165.09" width="19.56" height="35.17"
                                style="fill: rgb(69, 90, 100); transform-origin: 183.88px 182.675px;" id="el4uwse0khyd"
                                class="animable"></rect>
                            <rect x="174.1" y="215.96" width="19.56" height="35.17"
                                style="fill: rgb(69, 90, 100); transform-origin: 183.88px 233.545px;" id="elmhx06rr666k"
                                class="animable"></rect>
                            <rect x="174.1" y="266.83" width="19.56" height="35.17"
                                style="fill: rgb(69, 90, 100); transform-origin: 183.88px 284.415px;" id="elbc6dtvyriy8"
                                class="animable"></rect>
                            <rect x="174.1" y="317.7" width="19.56" height="35.17"
                                style="fill: rgb(69, 90, 100); transform-origin: 183.88px 335.285px;" id="el36jj77skz4r"
                                class="animable"></rect>
                            <rect x="174.1" y="364.99" width="19.56" height="35.17"
                                style="fill: rgb(69, 90, 100); transform-origin: 183.88px 382.575px;" id="el9d8rd0uehyp"
                                class="animable"></rect>
                            <rect x="286.62" y="165.09" width="19.56" height="35.17"
                                style="fill: rgb(69, 90, 100); transform-origin: 296.4px 182.675px;" id="elt041q8yc69j"
                                class="animable"></rect>
                            <rect x="232.88" y="110.67" width="17.78" height="22.96"
                                style="fill: rgb(69, 90, 100); transform-origin: 241.77px 122.15px;" id="el0bw33d741s1r"
                                class="animable"></rect>
                            <rect x="286.62" y="215.96" width="19.56" height="35.17"
                                style="fill: rgb(69, 90, 100); transform-origin: 296.4px 233.545px;" id="elwhp2m1qf4ja"
                                class="animable"></rect>
                            <rect x="286.62" y="266.83" width="19.56" height="35.17"
                                style="fill: rgb(69, 90, 100); transform-origin: 296.4px 284.415px;" id="elky7mcailr6"
                                class="animable"></rect>
                            <rect x="286.62" y="317.7" width="19.56" height="35.17"
                                style="fill: rgb(69, 90, 100); transform-origin: 296.4px 335.285px;" id="elh1jkucecke7"
                                class="animable"></rect>
                            <rect x="286.62" y="364.99" width="19.56" height="35.17"
                                style="fill: rgb(69, 90, 100); transform-origin: 296.4px 382.575px;" id="elemt7cxub0do"
                                class="animable"></rect>
                            <rect x="210.55" y="145.12" width="57.67" height="315.56"
                                style="fill: rgb(69, 90, 100); transform-origin: 239.385px 302.9px;" id="elbhmvo8j9pos"
                                class="animable"></rect>
                            <g id="el2bo9xw0k3md">
                                <g style="opacity: 0.3; transform-origin: 239.385px 275.645px;" class="animable">
                                    <polygon
                                        points="268.22 242.84 210.55 290.89 210.55 308.45 268.22 259.61 268.22 242.84"
                                        style="fill: rgb(255, 255, 255); transform-origin: 239.385px 275.645px;"
                                        id="elgdcoiix2p3" class="animable"></polygon>
                                </g>
                            </g>
                            <g id="eldehbwirdvpm">
                                <g style="opacity: 0.3; transform-origin: 239.385px 183.825px;" class="animable">
                                    <polygon
                                        points="268.22 151.02 210.55 199.07 210.55 216.63 268.22 167.79 268.22 151.02"
                                        style="fill: rgb(255, 255, 255); transform-origin: 239.385px 183.825px;"
                                        id="elr0jersegg19" class="animable"></polygon>
                                </g>
                            </g>
                            <g id="elzk6k5my8oq">
                                <g style="opacity: 0.3; transform-origin: 239.385px 323.29px;" class="animable">
                                    <polygon
                                        points="268.22 281.59 210.55 329.64 210.55 364.99 268.22 316.34 268.22 281.59"
                                        style="fill: rgb(255, 255, 255); transform-origin: 239.385px 323.29px;"
                                        id="elp2o3khfxpr" class="animable"></polygon>
                                </g>
                            </g>
                            <rect x="326.52" y="142.2" width="47.59" height="318.22"
                                style="fill: rgb(224, 224, 224); transform-origin: 350.315px 301.31px;"
                                id="elw8666tn9a0i" class="animable"></rect>
                            <path
                                d="M374.9,460.41c-.14,0-.41-64.17-.6-143.32s-.24-143.33-.09-143.33.41,64.16.61,143.33S375.05,460.41,374.9,460.41Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 374.558px 317.085px;" id="eloiton70e8xm"
                                class="animable"></path>
                            <rect x="342.51" y="165.09" width="19.56" height="35.17"
                                style="fill: rgb(38, 50, 56); transform-origin: 352.29px 182.675px;" id="el6esquf7x1hv"
                                class="animable"></rect>
                            <rect x="342.51" y="215.96" width="19.56" height="35.17"
                                style="fill: rgb(38, 50, 56); transform-origin: 352.29px 233.545px;" id="el875zebp7ubw"
                                class="animable"></rect>
                            <rect x="342.51" y="266.83" width="19.56" height="35.17"
                                style="fill: rgb(38, 50, 56); transform-origin: 352.29px 284.415px;" id="elck09z24qr46"
                                class="animable"></rect>
                            <rect x="342.51" y="317.7" width="19.56" height="35.17"
                                style="fill: rgb(38, 50, 56); transform-origin: 352.29px 335.285px;" id="elw934wd2lpi8"
                                class="animable"></rect>
                            <rect x="342.51" y="364.99" width="19.56" height="35.17"
                                style="fill: rgb(38, 50, 56); transform-origin: 352.29px 382.575px;" id="elg12rov0sjao"
                                class="animable"></rect>
                            <rect x="342.51" y="414.53" width="19.56" height="35.17"
                                style="fill: rgb(38, 50, 56); transform-origin: 352.29px 432.115px;" id="eldwb1az3ipub"
                                class="animable"></rect>
                            <rect x="205.81" y="400.91" width="66.25" height="6.62"
                                style="fill: rgb(235, 235, 235); transform-origin: 238.935px 404.22px;"
                                id="ela6v9xmas8a8" class="animable"></rect>
                            <rect x="210.55" y="202.39" width="57.67" height="3.85"
                                style="fill: rgb(38, 50, 56); transform-origin: 239.385px 204.315px;" id="eltsdyqg7xf1"
                                class="animable"></rect>
                            <rect x="210.55" y="258.03" width="57.67" height="3.85"
                                style="fill: rgb(38, 50, 56); transform-origin: 239.385px 259.955px;" id="elswmadbaxvn"
                                class="animable"></rect>
                            <rect x="210.1" y="359.6" width="57.67" height="3.85"
                                style="fill: rgb(38, 50, 56); transform-origin: 238.935px 361.525px;" id="el59nx30zuykx"
                                class="animable"></rect>
                            <rect x="212.74" y="311.1" width="57.67" height="3.85"
                                style="fill: rgb(38, 50, 56); transform-origin: 241.575px 313.025px;" id="ellk2zpm6lxfo"
                                class="animable"></rect>
                            <path
                                d="M256.78,325.32c.09.11-8.52,7.63-19.22,16.8s-19.47,16.51-19.57,16.4,8.52-7.63,19.23-16.8S256.68,325.21,256.78,325.32Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 237.385px 341.92px;" id="elbfybckid3r"
                                class="animable"></path>
                            <path
                                d="M257.27,359.48c.1.11-8.51,7.63-19.22,16.8s-19.47,16.51-19.56,16.4,8.51-7.63,19.22-16.79S257.18,359.37,257.27,359.48Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 237.88px 376.08px;" id="elyfmi1j870y"
                                class="animable"></path>
                            <path
                                d="M256.57,274.9c.09.11-6.22,5.63-14.1,12.33s-14.35,12-14.45,11.93,6.22-5.63,14.11-12.33S256.48,274.79,256.57,274.9Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 242.295px 287.029px;" id="el87ji4k77j3w"
                                class="animable"></path>
                            <path
                                d="M240.8,281.17a59,59,0,0,1-5.47,5.36,57.83,57.83,0,0,1-5.82,5,55.43,55.43,0,0,1,5.47-5.37A54.21,54.21,0,0,1,240.8,281.17Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 235.155px 286.35px;" id="elanegj6rkbwp"
                                class="animable"></path>
                            <path
                                d="M220.76,240.05c-.08-.12,8.59-6.74,19.37-14.78s19.59-14.48,19.67-14.37-8.58,6.74-19.36,14.79S220.85,240.16,220.76,240.05Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 240.28px 225.475px;" id="elxkov3nw6cq"
                                class="animable"></path>
                            <path
                                d="M232.71,235a11.57,11.57,0,0,1,2-1.45l4.92-3.32,4.89-3.38a11.74,11.74,0,0,1,2.08-1.33,11.74,11.74,0,0,1-1.86,1.62c-1.2.95-2.89,2.2-4.81,3.52s-3.71,2.43-5,3.2A10.75,10.75,0,0,1,232.71,235Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 239.655px 230.26px;" id="elzo71ex5avz"
                                class="animable"></path>
                            <path
                                d="M258.46,156.79s-.12.15-.39.38-.69.6-1.17,1l-4.35,3.62-14.39,11.9-14.33,12-4.35,3.63-1.19,1c-.28.22-.43.33-.45.31a2.88,2.88,0,0,1,.38-.39l1.13-1c1.06-.93,2.5-2.2,4.24-3.75,3.61-3.14,8.63-7.43,14.24-12.1s10.74-8.82,14.49-11.79l4.46-3.49,1.23-.92A2.26,2.26,0,0,1,258.46,156.79Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 238.15px 173.711px;" id="eldjfp6t4phwb"
                                class="animable"></path>
                            <path
                                d="M241.32,164a27.34,27.34,0,0,1-4.06,3.52,28.42,28.42,0,0,1-4.38,3.1,27,27,0,0,1,4.06-3.51A28.65,28.65,0,0,1,241.32,164Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 237.1px 167.31px;" id="el5ilk18un5wq"
                                class="animable"></path>
                            <path
                                d="M187.92,230.52a32.71,32.71,0,0,1-4,4.13,32,32,0,0,1-4.41,3.74,34.17,34.17,0,0,1,4.05-4.13A31.57,31.57,0,0,1,187.92,230.52Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 183.715px 234.455px;" id="elq60q0xealzf"
                                class="animable"></path>
                            <path
                                d="M301.67,280.84a40.68,40.68,0,0,1-4.11,4.83,37.63,37.63,0,0,1-4.49,4.49,37.34,37.34,0,0,1,4.11-4.84A38,38,0,0,1,301.67,280.84Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 297.37px 285.5px;" id="elnkuqu8cpujk"
                                class="animable"></path>
                            <path
                                d="M189.55,329.08a44.33,44.33,0,0,1-4.51,5,43.7,43.7,0,0,1-4.89,4.61,44.33,44.33,0,0,1,4.51-5A42.72,42.72,0,0,1,189.55,329.08Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 184.85px 333.885px;" id="el63197nctu7b"
                                class="animable"></path>
                            <path
                                d="M298.2,373.77a33.59,33.59,0,0,1-3.91,4.43,33.23,33.23,0,0,1-4.28,4.06,34.51,34.51,0,0,1,3.91-4.43A34,34,0,0,1,298.2,373.77Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 294.105px 378.015px;" id="elwvw37fuy8q"
                                class="animable"></path>
                            <path
                                d="M297.86,379.52a15.49,15.49,0,0,1-2.58,3.09,15.69,15.69,0,0,1-3,2.73,15.49,15.49,0,0,1,2.58-3.09A16.12,16.12,0,0,1,297.86,379.52Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 295.07px 382.43px;" id="el1v2peolymg3h"
                                class="animable"></path>
                            <rect x="286.62" y="416" width="19.56" height="35.17"
                                style="fill: rgb(69, 90, 100); transform-origin: 296.4px 433.585px;" id="el0wbtfk0zbu5"
                                class="animable"></rect>
                            <rect x="173.96" y="415.42" width="19.56" height="35.17"
                                style="fill: rgb(69, 90, 100); transform-origin: 183.74px 433.005px;" id="elbbu07oqxkko"
                                class="animable"></rect>
                            <g id="el25eb055pwjr">
                                <g style="opacity: 0.3; transform-origin: 239.415px 433.805px;" class="animable">
                                    <polyline
                                        points="216.19 460.49 268.23 417.88 268.22 407.12 260.23 407.34 210.6 451.03 210.71 460.47"
                                        style="fill: rgb(255, 255, 255); transform-origin: 239.415px 433.805px;"
                                        id="elz92s6bi505l" class="animable"></polyline>
                                </g>
                            </g>
                            <g id="els535i9gxim">
                                <g style="opacity: 0.3; transform-origin: 248.115px 442.795px;" class="animable">
                                    <polygon
                                        points="227.98 460.51 232.78 460.58 268.25 429.69 268.21 427.46 268.22 425.01 227.98 460.51"
                                        style="fill: rgb(255, 255, 255); transform-origin: 248.115px 442.795px;"
                                        id="elvdpo4ak4yws" class="animable"></polygon>
                                </g>
                            </g>
                            <path
                                d="M238.93,460.58c-.14,0-.26-11-.26-24.61s.12-24.61.26-24.61.26,11,.26,24.61S239.08,460.58,238.93,460.58Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 238.93px 435.97px;" id="el9f6i999g7m"
                                class="animable"></path>
                            <rect x="232.62" y="433" width="3.46" height="11.94"
                                style="fill: rgb(235, 235, 235); transform-origin: 234.35px 438.97px;" id="elt83wylwuwp"
                                class="animable"></rect>
                            <rect x="241.41" y="433" width="3.46" height="11.94"
                                style="fill: rgb(235, 235, 235); transform-origin: 243.14px 438.97px;" id="elo4tvtnqykr"
                                class="animable"></rect>
                            <path
                                d="M385.75,145.12c0,.14-54.16.26-121,.26s-121-.12-121-.26,54.15-.26,121-.26S385.75,145,385.75,145.12Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 264.75px 145.12px;" id="elw3nx618mage"
                                class="animable"></path>
                            <path
                                d="M385.75,132.21c0,.14-54.16.26-121,.26s-121-.12-121-.26,54.15-.26,121-.26S385.75,132.06,385.75,132.21Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 264.75px 132.21px;" id="elwxnd0y54dn"
                                class="animable"></path>
                            <path
                                d="M307.66,102.56c0,.14-20.53.26-45.85.26S216,102.7,216,102.56s20.52-.26,45.85-.26S307.66,102.41,307.66,102.56Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 261.83px 102.56px;" id="elnup4wxk0h8"
                                class="animable"></path>
                            <path
                                d="M156.6,460.47c-.14,0-.4-70.24-.58-156.87s-.2-156.88-.05-156.88.4,70.22.57,156.88S156.74,460.47,156.6,460.47Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 156.279px 303.595px;" id="elcv1n9le7ero"
                                class="animable"></path>
                        </g>
                        <g id="freepik--Shield--inject-23" class="animable animator-active"
                            style="transform-origin: 125.531px 125.505px;">
                            <path
                                d="M165.15,80.64,125.59,67.37,86.41,80.46C81.41,82.66,77,84,77,88.34V110a77.94,77.94,0,0,0,12.9,43.13,78.77,78.77,0,0,0,36,29.73c16-4.86,28-17.81,35.27-28.89a77.82,77.82,0,0,0,12.91-43.12V91.36C174.15,85.16,170.63,82.13,165.15,80.64Z"
                                style="fill: rgb(243, 130, 26); transform-origin: 125.54px 125.115px;" id="elku5blc3yd1"
                                class="animable"></path>
                            <path
                                d="M125.89,174.33l-.16-.07a68.54,68.54,0,0,1-42.54-63.32V92.24c0-3.66,3.23-5,7-6.63L91.59,85l34-11.37,34.27,11.5c5.47,1.49,8.13,4.68,8.13,9.74v16.81a67.85,67.85,0,0,1-11.22,37.48c-4.87,7.38-15.34,20.46-30.71,25.13Zm-.3-99.65L92,85.92l-1.4.61C87,88,84.19,89.24,84.19,92.24v18.7A67.53,67.53,0,0,0,126,173.27c15-4.62,25.21-17.43,30-24.67A66.87,66.87,0,0,0,167,111.67V94.86c0-4.61-2.36-7.4-7.4-8.78h0Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 125.59px 123.98px;"
                                id="el38qmt6ygvpr" class="animable"></path>
                            <path
                                d="M170.32,75.18A16.9,16.9,0,0,1,173,76a14.17,14.17,0,0,1,3,1.58,10.22,10.22,0,0,1,3.15,3.4,12.23,12.23,0,0,1,1.48,5.64c0,2.15,0,4.47,0,7,0,5,.05,10.76,0,17.16a87.62,87.62,0,0,1-12.06,43.41,97.69,97.69,0,0,1-17,21.45c-7,6.54-15.51,12.31-25.47,15.37l-.09,0-.08,0a102.51,102.51,0,0,1-10.28-5,93,93,0,0,1-9.83-6.47,88.09,88.09,0,0,1-17.18-17.16A89.57,89.57,0,0,1,76,139.47,88.6,88.6,0,0,1,70.66,115c-.31-4.08-.22-8.11-.24-12.06s0-7.85,0-11.68V85.54a19.46,19.46,0,0,1,.12-2.84,5.62,5.62,0,0,1,1.19-2.61,13.2,13.2,0,0,1,4.53-3.17c1.65-.77,3.31-1.44,4.93-2.15h0L125.53,60l.06,0,0,0,32.88,11.11,8.78,3,2.26.79c.51.17.76.28.76.28s-.26-.07-.77-.24l-2.28-.74-8.81-2.9-32.93-11h.11L81.36,75.19h0c-1.63.72-3.28,1.39-4.91,2.16a12.54,12.54,0,0,0-4.37,3A5,5,0,0,0,71,82.78a16.7,16.7,0,0,0-.1,2.76v5.69q0,5.74,0,11.68c0,4-.07,8,.24,12a87.56,87.56,0,0,0,5.31,24.36,89,89,0,0,0,12.59,22.76,87.57,87.57,0,0,0,17.07,17.06,93.5,93.5,0,0,0,9.77,6.44,105.82,105.82,0,0,0,10.22,5H126c9.87-3,18.34-8.74,25.29-15.24a97.5,97.5,0,0,0,17-21.32,88.25,88.25,0,0,0,9.31-22.45,89.56,89.56,0,0,0,2.8-20.75c0-6.38,0-12.13.06-17.15,0-2.51,0-4.84,0-7A11.84,11.84,0,0,0,179,81.1a10.28,10.28,0,0,0-3.07-3.38,14.53,14.53,0,0,0-2.95-1.61A19.1,19.1,0,0,0,171,75.4Z"
                                style="fill: rgb(243, 130, 26); transform-origin: 125.531px 125.505px;"
                                id="eld0giqfsvuk9" class="animable"></path>
                            <polygon
                                points="124.29 141.86 101.95 123.17 108.47 115.38 123.45 127.91 146.39 103.49 153.8 110.44 124.29 141.86"
                                style="fill: rgb(255, 255, 255); transform-origin: 127.875px 122.675px;"
                                id="elpmjyisshdil" class="animable"></polygon>
                        </g>
                        <g id="freepik--speech-bubble--inject-23" class="animable"
                            style="transform-origin: 624.545px 118.48px;">
                            <path d="M578.05,144.61l7-12a44.12,44.12,0,1,1,7.68,13.82v0Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 624.501px 118.436px;"
                                id="elxv2ss4j8vgi" class="animable"></path>
                            <path
                                d="M578.05,144.61l1,.1,2.83.34,10.93,1.33-.12.16v0l-.37-.79.56.67a44.16,44.16,0,0,0,17.46,12.79,43.57,43.57,0,0,0,6.49,2.05,48.53,48.53,0,0,0,7.21,1,43.7,43.7,0,0,0,31-10.2,44.2,44.2,0,0,0,11.46-14.82,43.44,43.44,0,0,0,4.16-19.43,43,43,0,0,0-5.26-20.11L664,95.35c-.49-.76-1-1.48-1.53-2.22A43.46,43.46,0,0,0,659.16,89c-.56-.69-1.25-1.26-1.87-1.89s-1.23-1.26-1.93-1.8l-2.05-1.63c-.34-.27-.67-.56-1-.8l-1.09-.71A44.5,44.5,0,0,0,632.36,75a43.65,43.65,0,0,0-18.86,1.75,43.89,43.89,0,0,0-25.3,21c-.3.56-.58,1.12-.87,1.67l-.43.82-.34.85-1.32,3.36a57.91,57.91,0,0,0-1.68,6.62,43.84,43.84,0,0,0,1.62,21.51l0,0,0,0c-2.3,3.86-4.06,6.82-5.27,8.83l-1.37,2.29-.48.79.43-.77,1.31-2.28,5.19-9v.09A43.89,43.89,0,0,1,583.22,111a59.81,59.81,0,0,1,1.67-6.68l1.32-3.39.34-.86.43-.83.87-1.69a44.4,44.4,0,0,1,44.58-23,45.07,45.07,0,0,1,19,7.16l1.11.72c.37.24.7.54,1,.81l2.07,1.65c.71.54,1.3,1.22,1.95,1.82s1.32,1.21,1.89,1.91a41.82,41.82,0,0,1,3.37,4.22c.52.75,1.05,1.48,1.55,2.24l1.34,2.39a44.35,44.35,0,0,1,1.09,40,44.49,44.49,0,0,1-27,23.37A44,44,0,0,1,624,162.65a49.12,49.12,0,0,1-7.27-1.05,42.76,42.76,0,0,1-6.54-2.09,44,44,0,0,1-17.5-13l.19-.12v0l.08.18-.2,0-11-1.48-2.79-.39Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 624.545px 118.48px;" id="elzqrvuxq6dnn"
                                class="animable"></path>
                            <rect x="607.88" y="104.91" width="32.03" height="32.03"
                                style="fill: rgb(224, 224, 224); transform-origin: 623.895px 120.925px;"
                                id="elt2n31zy2an" class="animable"></rect>
                            <path
                                d="M639.91,137a1.33,1.33,0,0,1,0-.17c0-.12,0-.27,0-.45,0-.42,0-1,0-1.73,0-1.55,0-3.75-.06-6.54,0-5.62-.07-13.59-.11-23.15l.22.23-32,0c-.06.06.49-.49.26-.25h0v8.62c0,2.82,0,5.59,0,8.28,0,5.37,0,10.45,0,15.11l-.22-.23,23.15.12,6.53,0,1.74,0h.45l.16,0-.56,0-1.69,0-6.49.06-23.29.11h-.23V137c0-4.66,0-9.74,0-15.11,0-2.69,0-5.46,0-8.28v-8.62h0l.26-.27,32,0h.23v.22c0,9.62-.09,17.64-.12,23.3,0,2.76,0,4.95-.06,6.48,0,.72,0,1.28,0,1.69A4.09,4.09,0,0,1,639.91,137Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 624.015px 120.865px;" id="el2g6abat5wm4"
                                class="animable"></path>
                            <polygon
                                points="629 132.64 609.74 116.53 615.36 109.81 628.27 120.61 648.05 99.57 654.43 105.56 629 132.64"
                                style="fill: rgb(69, 90, 100); transform-origin: 632.085px 116.105px;"
                                id="el509k3gu87tq" class="animable"></polygon>
                        </g>
                        <g id="freepik--Character--inject-23" class="animable"
                            style="transform-origin: 466.911px 277.217px;">
                            <path
                                d="M489.69,255.05,466,239.22c-7.88-1.86-16.73,3.79-18.37,11.72-7.83-1.64-16.14,3.85-18.83,11.38s-.34,16.31,4.86,22.4,12.86,9.69,20.71,11.25c11.29,2.24,24.49-.23,31.26-9.55C492,277.68,491,265.79,489.69,255.05Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 459.17px 267.803px;" id="elvis73y3834l"
                                class="animable"></path>
                            <path
                                d="M591.24,237.08A21.65,21.65,0,0,0,578.88,218c2.71-9.46,5.69-19.39,3.6-29-4.73-21.72-24.3-24.7-34.14-24.56L516,185.1c-8.66,9.81,2.21,63.67,6.11,76.16A39.06,39.06,0,0,0,549.45,287c9,2.25,19.38.82,26.28-5.44s9.09-17.78,3.49-25.22A21.66,21.66,0,0,0,591.24,237.08Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 551.987px 226.218px;" id="ellux9xsz1etj"
                                class="animable"></path>
                            <path
                                d="M425.16,327.41l3,132.59,176.73.69S591.77,274.57,588,272.75c-2.85-1.35-37.77-12.81-37.77-12.81l-15.53-4.52-64.18,12.32-23.28,5.09Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 515.025px 358.055px;"
                                id="elyx8cmtoqynb" class="animable"></path>
                            <path
                                d="M435.4,305.26c0-.35,16.88-33.54,16.88-33.54-16.54,1.74-31.31,7.58-40.91,20.17-4.47,5.86-6.47,14.74-8.7,21.07-1.5,4.29-11.4,62-11.4,62L430.48,391Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 421.775px 331.36px;" id="el6ju76y93osc"
                                class="animable"></path>
                            <path
                                d="M497.69,353.81l-37-85.33c-13.48,3-28.63,6.42-38.29,12.64l5.11,62.72-.75,116.85,70.8.37,4.36-83.15Z"
                                style="fill: rgb(243, 130, 26); transform-origin: 462.16px 364.77px;" id="eltkp13k662hf"
                                class="animable"></path>
                            <polygon
                                points="591.99 375.55 584.37 270.16 541.43 256.41 497.58 353.09 497.58 461.06 605.95 460.7 591.99 375.55"
                                style="fill: rgb(243, 130, 26); transform-origin: 551.765px 358.735px;"
                                id="elbwntpviqch" class="animable"></polygon>
                            <path
                                d="M592,375.55s.1.51.27,1.5.42,2.48.75,4.4c.65,3.88,1.6,9.59,2.83,16.94,2.43,14.71,5.95,36,10.29,62.28l0,.22H606l-108.37.42h-.25v-.25c0-26.44,0-55.23,0-85.1V353l0,0c15.8-34.8,30.67-67.55,43.88-96.67l.09-.18.19.06L584.43,270l.13,0v.14c2.3,32.28,4.17,58.63,5.47,76.91.64,9.14,1.14,16.26,1.47,21.1.17,2.41.29,4.26.37,5.51s.11,1.88.11,1.88-.07-.63-.17-1.87-.24-3.1-.42-5.51c-.37-4.84-.9-11.95-1.58-21.08-1.35-18.29-3.28-44.63-5.66-76.91l.14.18-42.94-13.73.28-.12c-13.2,29.12-28,61.88-43.82,96.69l0-.11V376c0,29.87,0,58.66,0,85.1l-.25-.25,108.37-.3-.19.22c-4.27-26.3-7.73-47.59-10.13-62.32-1.18-7.35-2.1-13.06-2.73-16.94-.3-1.93-.53-3.41-.69-4.41S592,375.55,592,375.55Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 551.76px 358.73px;" id="elzu5yd5h8and"
                                class="animable"></path>
                            <rect x="428.15" y="372.78" width="152.16" height="19.89"
                                style="fill: rgb(255, 255, 255); transform-origin: 504.23px 382.725px;"
                                id="elqavo3em8xi" class="animable"></rect>
                            <path
                                d="M585.11,271.67s9.89-.12,24.22,25.63c16.09,28.91,26.37,65.6,26.37,65.6l-39.61,21.62Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 610.405px 328.095px;"
                                id="elguatop41crl" class="animable"></path>
                            <path d="M436.9,274.62l4.31,186.08,16.94.09-5.87-190.54S439.56,273.24,436.9,274.62Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 447.525px 365.52px;"
                                id="elrhr5d3bpy4e" class="animable"></path>
                            <polygon points="556.95 261.38 551.76 460.79 573.91 460.79 574.95 267.38 556.95 261.38"
                                style="fill: rgb(255, 255, 255); transform-origin: 563.355px 361.085px;"
                                id="elfl3q5gm6b5b" class="animable"></polygon>
                            <g id="elmnutrq0vs3">
                                <g style="opacity: 0.3; transform-origin: 560.43px 375.418px;" class="animable">
                                    <path
                                        d="M511.51,314.63a25.56,25.56,0,0,0,12.23,19.19c3.23,1.91,6.91,3.11,9.74,5.58s4.41,5.69,6,8.93c12,24.05,24,48.16,33.29,73.4,2.07,5.64,4,11.4,7.35,16.42s8.22,9.29,14.13,10.43S607,447,609.35,441.47L534.62,302Z"
                                        id="elpr87g714jof" class="animable"
                                        style="transform-origin: 560.43px 375.418px;"></path>
                                </g>
                            </g>
                            <path
                                d="M497.58,353.09s0,.66,0,2,0,3.22,0,5.73c0,5,0,12.41.06,21.82,0,18.85.06,45.84.1,78.46v.22h-.22l-70.92-.38h-.25v-.26c.13-21,.27-43.63.41-67,.11-17.33.22-34.24.33-50.48v0c-1.76-22-3.43-42.82-5-62V281l.12-.08c6.28-3.84,13-6.2,19.5-8.18s12.89-3.41,19-4.78l.17,0,.06.16,26.75,62c3.16,7.37,5.63,13.11,7.3,17l1.89,4.44c.43,1,.63,1.52.63,1.52s-.24-.51-.69-1.51L495,347.15l-7.41-17-26.9-61.93.23.12c-6.09,1.37-12.44,2.86-18.94,4.8s-13.18,4.34-19.39,8.16l.11-.22c1.55,19.19,3.24,40,5,62h0c-.1,16.25-.21,33.15-.32,50.48-.15,23.4-.3,46-.43,67l-.25-.25,70.91.45-.22.21c0-32.62.07-59.61.1-78.46,0-9.4,0-16.78.06-21.81,0-2.5,0-4.42,0-5.73S497.58,353.09,497.58,353.09Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 459.915px 364.64px;" id="eltgh02tg2rx"
                                class="animable"></path>
                            <path
                                d="M437,160.49a12.65,12.65,0,0,1,9.91-19.38l20,2.92-5.82,33.79c-.55,3.23-1.21,6.66-3.45,9.05a11.52,11.52,0,0,1-8.49,3.16A17.32,17.32,0,0,1,437,160.49Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 449.432px 165.577px;" id="el234mhytgmzt"
                                class="animable"></path>
                            <path
                                d="M497.58,290.34c16.7,0,34.76-17.63,35.09-34.33l1.78-91.52c1.39-27-13.16-50.28-40.17-50.92l-2.5.09a48.3,48.3,0,0,0-46.58,46.05c-1.07,23.39-.15,44.52.44,57,1.22,25.9,25.41,30,25.41,30s-2.08,22.8,1.48,29.52c8,15.06,14.32,13.77,25.05,14Z"
                                style="fill: rgb(255, 191, 157); transform-origin: 489.624px 201.955px;"
                                id="elwnfklu1yeke" class="animable"></path>
                            <path d="M470.85,246.8s16.37.4,33.39-11.14c0,0-7.73,19.62-33.66,18.18Z"
                                style="fill: rgb(255, 154, 108); transform-origin: 487.41px 244.788px;"
                                id="elp6ixd0jty68" class="animable"></path>
                            <path
                                d="M457.08,180.48a3.71,3.71,0,0,0,3.7,3.61,3.55,3.55,0,0,0,3.7-3.47,3.71,3.71,0,0,0-3.7-3.61A3.54,3.54,0,0,0,457.08,180.48Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 460.78px 180.55px;" id="elg4veb5frnlf"
                                class="animable"></path>
                            <path
                                d="M451.62,169.75c.47.46,3.2-1.71,7.18-1.84s7,1.77,7.39,1.26c.2-.22-.3-1.07-1.6-2a10.18,10.18,0,0,0-5.93-1.6,9.74,9.74,0,0,0-5.7,2.06C451.77,168.65,451.38,169.54,451.62,169.75Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 458.893px 167.687px;" id="elete5eogtozn"
                                class="animable"></path>
                            <path
                                d="M493.33,180.48a3.7,3.7,0,0,0,3.69,3.61,3.54,3.54,0,0,0,3.7-3.47A3.7,3.7,0,0,0,497,177,3.54,3.54,0,0,0,493.33,180.48Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 497.025px 180.546px;" id="elbe9prf42zec"
                                class="animable"></path>
                            <path
                                d="M490.67,170c.48.46,3.21-1.71,7.19-1.84s7,1.77,7.39,1.26c.2-.22-.29-1.08-1.6-2a10.13,10.13,0,0,0-5.93-1.6,9.77,9.77,0,0,0-5.71,2.06C490.83,168.91,490.44,169.8,490.67,170Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 497.95px 167.937px;" id="elvs7k3es3wz"
                                class="animable"></path>
                            <path
                                d="M477.45,201.09c0-.22-2.48-.56-6.51-.94-1-.07-2-.24-2.18-.92s.12-1.84.57-3q1.31-3.74,2.74-7.85c3.79-11.16,6.5-20.33,6.05-20.48s-3.89,8.78-7.68,19.95c-.91,2.75-1.79,5.38-2.61,7.89-.35,1.16-1,2.5-.39,4a2.54,2.54,0,0,0,1.72,1.43,6.63,6.63,0,0,0,1.74.18C474.94,201.39,477.44,201.32,477.45,201.09Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 472.679px 184.629px;" id="eliy2wux950qb"
                                class="animable"></path>
                            <path
                                d="M481.11,215.62a4.92,4.92,0,0,0,3.46,1.4,5.23,5.23,0,0,0,3.62-1.57c1.72-1.58,2.05-4.14,1.72-6.33a2.47,2.47,0,0,0-.4-1.05,2,2,0,0,0-.12-.59,4.63,4.63,0,0,0-2.58-2.61,5.94,5.94,0,0,0-3.77-.18,5.76,5.76,0,0,0-3.87,4.71A7.27,7.27,0,0,0,481.11,215.62Z"
                                style="fill: rgb(255, 154, 108); transform-origin: 484.549px 210.743px;"
                                id="elp23569vfzw" class="animable"></path>
                            <path
                                d="M490.57,204.64c-.62-.18-1.62,4-5.93,6.16s-8.68.62-8.85,1.2c-.12.25.8,1.05,2.69,1.55a10.82,10.82,0,0,0,7.33-.76,9.37,9.37,0,0,0,4.7-5.23C491.09,205.84,490.86,204.69,490.57,204.64Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 483.324px 209.253px;" id="elwhoj4duvhlm"
                                class="animable"></path>
                            <path
                                d="M489.65,156.25c.43,1.07,4.38.42,9.08.82s8.51,1.55,9.09.55c.27-.47-.43-1.47-2-2.46a15.81,15.81,0,0,0-13.84-1C490.29,154.87,489.46,155.75,489.65,156.25Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 498.75px 155.519px;" id="elxb8lwnlirx"
                                class="animable"></path>
                            <path
                                d="M452.67,155c.73.88,3.44-.16,6.74-.31s6.11.39,6.72-.58c.27-.46-.2-1.36-1.45-2.17a9.79,9.79,0,0,0-10.85.71C452.7,153.66,452.35,154.61,452.67,155Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 459.38px 152.99px;" id="elhz5h920c43m"
                                class="animable"></path>
                            <path
                                d="M533.51,183.22c.43-.2,17.62-5.88,17.67,11.85s-17.77,14.13-17.8,13.62S533.51,183.22,533.51,183.22Z"
                                style="fill: rgb(255, 191, 157); transform-origin: 542.278px 195.764px;"
                                id="ele42z9swuyif" class="animable"></path>
                            <path
                                d="M538.78,202c.07-.06.31.21.83.45a3.09,3.09,0,0,0,2.31,0c1.87-.69,3.44-3.67,3.52-6.87a10.3,10.3,0,0,0-.88-4.42,3.58,3.58,0,0,0-2.33-2.36,1.56,1.56,0,0,0-1.82.85c-.24.5-.12.85-.22.88s-.38-.3-.24-1a1.94,1.94,0,0,1,.7-1.11,2.3,2.3,0,0,1,1.7-.46,4.35,4.35,0,0,1,3.24,2.74,10.41,10.41,0,0,1,1.08,4.94c-.1,3.58-1.92,6.92-4.48,7.67a3.3,3.3,0,0,1-2.83-.46C538.81,202.38,538.72,202,538.78,202Z"
                                style="fill: rgb(255, 154, 108); transform-origin: 542.719px 195.694px;"
                                id="elrysuud0e1v" class="animable"></path>
                            <path
                                d="M511.42,141c2.1-2.09,5.15-2.85,8.08-3.2A41.36,41.36,0,0,1,542,141.45c3.65,1.73,7.17,4.13,9.14,7.66s2,8.36-.78,11.29A12.43,12.43,0,0,1,540.41,183h0a8.07,8.07,0,0,1-12.21,6.11,12.89,12.89,0,0,1-3.19-2.88c-3.39-4.35-3.73-12.6-2.8-18a11.8,11.8,0,0,1-9.08-4.82,22.7,22.7,0,0,1-4-9.76C508.25,149.21,508.28,144.14,511.42,141Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 532.567px 163.894px;" id="elj6op11dt35"
                                class="animable"></path>
                            <path
                                d="M517.87,94.06c1.21.25,30.29,8.88,36.21,31.37s3.31,29.1,3.31,29.1a14.52,14.52,0,0,1,2.91,2.85c1.13,1.53-1.13,8.34-4.93,7.3-28-14.68-62-18.24-100.15-19.59l-29.1-2.3c-8.21.41-10.93-1.95-7.36-3.77,2.74-1.39,26.5-9.14,26.5-9.14l4.77-3L463.16,111s-1.33-2.42,1.74-4.15S494,89.11,517.87,94.06Z"
                                style="fill: rgb(243, 130, 26); transform-origin: 488.907px 128.951px;"
                                id="el2odo5jw07qc" class="animable"></path>
                            <g id="el5t1tbb2kos">
                                <g style="opacity: 0.3; transform-origin: 511.24px 106.471px;" class="animable">
                                    <path
                                        d="M544,108.82s-31.48-7.26-46.18-1.36l1.71-.72-13.86,5c-2.34.85-5.07,1.66-7.19.36,0,0,7.62-6,21.23-9.6S534.56,98.38,544,108.82Z"
                                        id="el3l1s29bw81" class="animable"
                                        style="transform-origin: 511.24px 106.471px;"></path>
                                </g>
                            </g>
                            <path
                                d="M544.42,109A22.54,22.54,0,0,0,541.7,107a39.7,39.7,0,0,0-8.31-4.22,47.59,47.59,0,0,0-13.5-2.86A39.79,39.79,0,0,0,503.16,102a72.06,72.06,0,0,0-8,3.64c-2.5,1.33-5,2.48-7.21,3.82a43.8,43.8,0,0,1-6.44,3.5,13.76,13.76,0,0,1-6.23.83c-7.83-.41-12.52-2.34-12.14-2.82a1.22,1.22,0,0,0,.59.66,9.89,9.89,0,0,0,2.35,1,41.92,41.92,0,0,0,9.18,1.54,14,14,0,0,0,6.4-.8,42.78,42.78,0,0,0,6.52-3.49c2.22-1.31,4.7-2.46,7.2-3.78a71.81,71.81,0,0,1,7.93-3.61,39.42,39.42,0,0,1,16.53-2.14,47.45,47.45,0,0,1,13.41,2.73,41.87,41.87,0,0,1,8.32,4.05c.93.58,1.63,1.07,2.1,1.41S544.42,109,544.42,109Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 503.769px 107.006px;" id="el6dyoytrqbzn"
                                class="animable"></path>
                            <g id="elovs0vznr6jp">
                                <g style="opacity: 0.3; transform-origin: 533.751px 129.7px;" class="animable">
                                    <path
                                        d="M556.24,134.8c-5.7-.42-9.93-2.19-15.51-3.8-6-1.72-11.86-3.16-17.71-5.16-4.45-1.52-9.73-3-12.47-6.43a6.62,6.62,0,0,0,1.61,6.3c1.62,1.78,7.11,4.13,9.39,4.92,13,4.48,22,7.5,35.63,9.36a39.88,39.88,0,0,0-.94-5.19"
                                        id="ela08x5laasyn" class="animable"
                                        style="transform-origin: 533.751px 129.7px;"></path>
                                </g>
                            </g>
                            <path
                                d="M553.32,123c3.51,1.81,5.66,3,5.56,6.1-.08,2.57-.81,5.67-3.36,5.95a6.37,6.37,0,0,1-2.32-.33l-38.85-10.54a5.92,5.92,0,0,1-3.51-1.91c-1.18-1.73-.08-4.27,1.73-5.33s4-1,6.11-.94c11.89.57,23.33,3.3,34.64,7"
                                style="fill: rgb(243, 130, 26); transform-origin: 534.617px 125.514px;"
                                id="elhc6ohzh4w1l" class="animable"></path>
                            <path
                                d="M511.41,122.84a3.64,3.64,0,0,1-1-1.78,5,5,0,0,1,1.95-4.86c2-1.32,4.94-1.6,8-1.23s6.61.82,10.22,1.41a105.56,105.56,0,0,1,18.16,4.48c2.26.79,4,1.55,5.28,2.07l1.42.62a2,2,0,0,0,.5.19,2.21,2.21,0,0,0-.46-.27l-1.38-.71c-1.21-.58-3-1.39-5.24-2.23a96.32,96.32,0,0,0-18.2-4.63c-3.63-.6-7.09-1-10.26-1.38s-6.22,0-8.28,1.4a5.11,5.11,0,0,0-1.93,5.18,3.41,3.41,0,0,0,.71,1.39C511.25,122.75,511.4,122.86,511.41,122.84Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 533.006px 119.061px;" id="elmwfwcxncb6"
                                class="animable"></path>
                            <polygon points="459.04 115.97 483.85 117.1 481.3 123.94 454.4 121.59 459.04 115.97"
                                style="fill: rgb(255, 255, 255); transform-origin: 469.125px 119.955px;"
                                id="eld2qg7r1svt7" class="animable"></polygon>
                            <path
                                d="M495.06,140.44c0-.14-10.91-2.44-24.43-5.16s-24.51-4.8-24.54-4.67,10.91,2.44,24.44,5.16S495,140.57,495.06,140.44Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 470.575px 135.525px;" id="elzpf9xzq4bcp"
                                class="animable"></path>
                            <polygon
                                points="463.61 268.48 470.61 255.84 497.58 290.34 535.17 243.94 540.67 258.09 511.51 309.1 499.14 292.33 496.2 292.76 486 310.49 463.61 268.48"
                                style="fill: rgb(224, 224, 224); transform-origin: 502.14px 277.215px;"
                                id="elvznzh3swyvl" class="animable"></polygon>
                            <path
                                d="M521.93,293.77a9,9,0,0,1-.8,1.28c-.54.81-1.32,2-2.25,3.46a100.48,100.48,0,0,0-6.53,12.09l-.2.43-.26-.4-.77-1.22c-3.18-4.79-6.42-8.89-8.6-12-1.11-1.53-2-2.79-2.54-3.68a8.52,8.52,0,0,1-.84-1.42,11,11,0,0,1,1,1.3l2.67,3.59c2.26,3,5.55,7.08,8.74,11.91.27.42.54.83.78,1.22l-.45,0a85.13,85.13,0,0,1,6.7-12.06c1-1.46,1.8-2.61,2.39-3.38A8.75,8.75,0,0,1,521.93,293.77Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 510.535px 301.67px;" id="elzyv3bc9wcm"
                                class="animable"></path>
                            <path
                                d="M552.42,163.47a3.33,3.33,0,0,1,.71.76,12,12,0,0,1,1.47,2.44,13.83,13.83,0,0,1-4.28,17,12.08,12.08,0,0,1-2.45,1.44,3.3,3.3,0,0,1-1,.34,27.34,27.34,0,0,0,3.21-2.07,14,14,0,0,0,4.17-16.52A27,27,0,0,0,552.42,163.47Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 551.393px 174.46px;" id="el7vrfm0sixin"
                                class="animable"></path>
                            <path
                                d="M496.2,292.76s0,.13-.13.36l-.45,1c-.41.89-1,2.18-1.86,3.79a124.36,124.36,0,0,1-7.56,12.68L486,311l-.19-.35-6.21-11.49c-4.36-8.14-8.3-15.51-11.18-20.92-1.39-2.64-2.52-4.81-3.34-6.36l-.88-1.75a3.82,3.82,0,0,1-.28-.62,3.25,3.25,0,0,1,.37.57l1,1.7,3.48,6.29L480,298.87c2.18,4.08,4.27,8,6.17,11.51l-.41,0a142.16,142.16,0,0,0,7.7-12.55l2-3.72.52-1A1.5,1.5,0,0,1,496.2,292.76Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 480.06px 290.255px;" id="eldfis3guw1c"
                                class="animable"></path>
                            <path
                                d="M392.14,351.46,377.75,392.7l-21.56-25.08-28.68,17.81L364,434.24c9.88,14.08,26.18,18.5,35.09,16.37,18.16-4.33,27.83-27.84,27.83-27.84l-.11-22.52-3.87-33.4Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 377.215px 401.288px;"
                                id="elr37o0z57ld7" class="animable"></path>
                            <path d="M392.68,309.1s55.41,60.2,66.78,71.23c5.42,5.26,16.88,12.32,16.88,12.32l-17.18,2Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 434.51px 351.875px;"
                                id="eleza9haedcc" class="animable"></path>
                            <g id="el3af28rfhkz">
                                <g style="opacity: 0.3; transform-origin: 423.11px 402.324px;" class="animable">
                                    <path d="M376,399s22.72,5.29,38.22,6.14,56,.59,56,.59l-8-6.85Z" id="el4thoo6ovwdn"
                                        class="animable" style="transform-origin: 423.11px 402.324px;"></path>
                                </g>
                            </g>
                            <polygon points="388.88 301.34 289.54 298.91 375.96 399.03 467.65 401.53 388.88 301.34"
                                style="fill: rgb(38, 50, 56); transform-origin: 378.595px 350.22px;" id="elb4epzg1ag5a"
                                class="animable"></polygon>
                            <path
                                d="M346.08,338.54a4.61,4.61,0,0,0-5-4.63c-1.46.11-3.37.29-5.72.61-6.06.81-23.82,10.27-24.18,13.87-.53,5.28,2.2,7.22,2.2,7.22s-3.37,4.78-1.94,8.6c1.22,3.27,6.55,4.23,6.55,4.23s-3.77,4.7.39,7.82c1.45,1.08,4.35,3.15,5,3.86a12.87,12.87,0,0,0,1.2,2.78,10.72,10.72,0,0,0,7.89,4.19l1,.06a7.81,7.81,0,0,0,5.4-1.75c6.87-5.63,26.29-21.9,26.55-26.24,0,0,3.7-3.09,2.09-6.14s-7.22-1.51-7.22-1.51a4.65,4.65,0,0,0,1.26-5.39c-1.42-3.21-11.47-2.59-16-1.84-3.62.59-13.72,2.58-13.72,2.58s13.36-5.08,14.08-7.41A3.94,3.94,0,0,0,346.08,338.54Z"
                                style="fill: rgb(255, 191, 157); transform-origin: 339.501px 360.528px;"
                                id="elxttzgpq116r" class="animable"></path>
                            <path
                                d="M365.46,359.16a10.07,10.07,0,0,1-1.34.87c-.87.53-2.16,1.27-3.78,2.13-3.22,1.74-7.79,3.94-12.94,6.12s-9.89,4-13.34,5.19c-1.72.61-3.12,1.09-4.1,1.4a8.07,8.07,0,0,1-1.53.44,10.24,10.24,0,0,1,1.47-.62l4-1.56c3.42-1.31,8.13-3.13,13.27-5.31s9.71-4.32,13-6c1.63-.82,2.94-1.51,3.85-2A9.18,9.18,0,0,1,365.46,359.16Z"
                                style="fill: rgb(255, 154, 108); transform-origin: 346.945px 367.235px;"
                                id="elfr0gzbt8pu" class="animable"></path>
                            <path
                                d="M361,351.37a9.29,9.29,0,0,1-1.47.36c-.94.22-2.32.52-4,1-3.36.85-7.94,2.29-12.94,4.05-2.5.88-4.91,1.67-7,2.5s-4,1.67-5.6,2.4-2.82,1.38-3.68,1.82a9.19,9.19,0,0,1-1.36.67,1.62,1.62,0,0,1,.31-.24c.21-.14.53-.35.95-.6.84-.5,2.07-1.19,3.63-2s3.44-1.65,5.58-2.51,4.54-1.66,7-2.55a125.87,125.87,0,0,1,13-3.91c1.7-.4,3.09-.65,4.05-.81A8.17,8.17,0,0,1,361,351.37Z"
                                style="fill: rgb(255, 154, 108); transform-origin: 342.975px 357.77px;"
                                id="elpxp2usini3" class="animable"></path>
                            <path
                                d="M331.84,346.86a11,11,0,0,1-2.13,1.23c-1.36.69-3.27,1.56-5.37,2.51s-4,1.87-5.34,2.56a14.68,14.68,0,0,1-2.21,1.07,9.85,9.85,0,0,1,2-1.38,56.43,56.43,0,0,1,5.3-2.7c2.11-1,4-1.78,5.42-2.38A12.64,12.64,0,0,1,331.84,346.86Z"
                                style="fill: rgb(255, 154, 108); transform-origin: 324.315px 350.545px;"
                                id="el0gg173ylc4j" class="animable"></path>
                            <path
                                d="M359.36,367.28a6.69,6.69,0,0,1-.9,1.08c-.61.68-1.52,1.63-2.68,2.76-2.31,2.29-5.71,5.22-9.36,8.55-.91.83-1.77,1.69-2.67,2.45a32.18,32.18,0,0,1-2.71,2.05,18.41,18.41,0,0,1-5.18,2.46,11.6,11.6,0,0,1-3.83.48,6.89,6.89,0,0,1-1-.11q-.36-.06-.36-.09c0-.05.51,0,1.41,0a12.42,12.42,0,0,0,3.73-.62,19.14,19.14,0,0,0,5-2.51,32.77,32.77,0,0,0,2.64-2c.88-.75,1.73-1.61,2.65-2.45,3.66-3.34,7.09-6.22,9.46-8.43,1.19-1.1,2.13-2,2.78-2.64A8.13,8.13,0,0,1,359.36,367.28Z"
                                style="fill: rgb(255, 154, 108); transform-origin: 345.015px 377.2px;" id="elnzu7wusxv8"
                                class="animable"></path>
                            <path
                                d="M360.41,297.88l-43.61-.55a1,1,0,0,0-.81,1.73l9.5,11.12,43,1.3a1,1,0,0,0,.86-1.65l-8.14-11.51A1,1,0,0,0,360.41,297.88Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 342.629px 304.403px;"
                                id="elx8o4nteolcj" class="animable"></path>
                            <path
                                d="M325.27,310.65l-9.64-11.28a1.52,1.52,0,0,1,1.18-2.52l43.6.55a1.53,1.53,0,0,1,1.23.64l8.14,11.51a1.53,1.53,0,0,1-1.25,2.41Zm35.17-12.29h0l-43.6-.55a.57.57,0,0,0-.44.94l9.36,10.95,42.82,1.3a.53.53,0,0,0,.49-.31.55.55,0,0,0,0-.59l-8.13-11.5A.59.59,0,0,0,360.44,298.36Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 342.656px 304.405px;" id="ellb95a3n0cvs"
                                class="animable"></path>
                            <path
                                d="M397.22,420.92a45.89,45.89,0,0,0,.07-5.65,25.53,25.53,0,0,0-14.76-21.33,42.85,42.85,0,0,0-5.32-1.93,1.72,1.72,0,0,1,.4,0c.25.05.63.09,1.11.22a23.34,23.34,0,0,1,4,1.33,25,25,0,0,1,15,21.64,22.35,22.35,0,0,1-.14,4.18,10.94,10.94,0,0,1-.19,1.12A1.59,1.59,0,0,1,397.22,420.92Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 387.485px 406.459px;" id="elhnoge8ogcs4"
                                class="animable"></path>
                            <path
                                d="M545.06,340.88s21.76,53.89,31.63,73.33c10.23,20.15,25.42,53.91,55.88,36.26,24.91-14.44,2.34-90.27,2.34-90.27l-22.42,10.13-33.16-53.06Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 594.671px 386.341px;"
                                id="elnngc1ndg55s" class="animable"></path>
                            <path
                                d="M557.87,254.12a2.84,2.84,0,0,0-3.92-1.68c-2.31,1.09-5.71,3.7-6.51,9.66-1.25,9.23.47,15.75-1.69,18.16s-29.3,4.34-31.4,8.3-.83,7.27-.92,9.22a2.86,2.86,0,0,1-.82,1.86c-1.23,1.26-3.31,4.1-1.32,7.53a2.93,2.93,0,0,1,.11,2.8c-.8,1.6-1.43,4.37,1.37,7.23a2.9,2.9,0,0,1,.63.92c.82,1.9,4,8.65,8.51,10a33.78,33.78,0,0,0,10.42,1.13,2.82,2.82,0,0,1,1.94.69c2.29,2,9.89,6.85,12.14,9.79,0,0,28-19.58,29.77-20.5,0,0-12.62-19.26-13.26-28.09-.67-9.42-6.6-20.39-5-29.22C558.61,258.09,558.37,255.65,557.87,254.12Z"
                                style="fill: rgb(255, 191, 157); transform-origin: 543.322px 295.947px;"
                                id="elhm26ct9lmrl" class="animable"></path>
                            <path
                                d="M545.06,340.88s0-.05.15-.13l.47-.36,1.87-1.33,7.05-4.94,24.59-17.05.2-.14.14.21c3.61,5.55,7.52,11.65,11.55,18L614.68,373c3,4.81,5.48,8.71,7.2,11.43l2,3.12.5.81a1.36,1.36,0,0,1,.15.29,2.77,2.77,0,0,1-.19-.26l-.54-.79c-.49-.72-1.17-1.75-2-3.06-1.75-2.66-4.27-6.53-7.34-11.34-6.16-9.6-14.45-23-23.73-37.74-4-6.39-7.93-12.5-11.52-18.06l.34.07-24.69,16.9-7.13,4.82-1.91,1.27-.5.32Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 584.795px 352.79px;" id="elzbumjb71pv"
                                class="animable"></path>
                            <path
                                d="M638.28,398.61a4.76,4.76,0,0,1-.54-.9c-.37-.7-.81-1.53-1.32-2.51a44.55,44.55,0,0,0-5-7.84,20.16,20.16,0,0,0-7.3-5.59,25.89,25.89,0,0,0-3.68-1.12,3.24,3.24,0,0,1,1.05.05,12.87,12.87,0,0,1,2.77.73,19.11,19.11,0,0,1,7.55,5.59,38.29,38.29,0,0,1,5,8c.52,1.08.91,2,1.17,2.59A3.75,3.75,0,0,1,638.28,398.61Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 629.36px 389.619px;" id="eljc4251byo8o"
                                class="animable"></path>
                        </g>
                        <defs>
                            <filter id="active" height="200%">
                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                </feMorphology>
                                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                <feMerge>
                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                </feMerge>
                            </filter>
                            <filter id="hover" height="200%">
                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                </feMorphology>
                                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                <feMerge>
                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                </feMerge>
                                <feColorMatrix type="matrix"
                                    values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                                </feColorMatrix>
                            </filter>
                        </defs>
                    </svg>
                </div>

            </div>

        </div>
    </section>
    <!-- KENAPA OK PROPERTI END -->
 @include('footer')