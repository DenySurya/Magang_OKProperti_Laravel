@include('header')
<section id="about" class="bg-primary dark:bg-slate-900 pt-16">
        <div class="relative h-full">
            <div class="relative flex flex-wrap">
                <div class="w-full self-center lg:self-center px-0 ">
                    <img src="{{asset('images/rumah3.svg')}}" alt="" class="w-full relative">
                </div>
                <span class="absolute">
                    <img src="{{asset('images/Rectangle1.svg')}}" alt="" class="">
                </span>
                <span class="absolute py-0 lg:py-4 w-full">
                    <img src="{{asset('images/persegi.svg')}}" alt="" class="flex mx-auto mt-2 lg:mt-4 mb-2" />
                </span>
                <div class="absolute pt-16 lg:pt-36 mt-5 w-full">
                    <h1 data-aos="fade-right" data-aos-anchor-placement="center-center" data-aos-delay="200"
                        class="mb-4 pt-4 text-2xl lg:text-4xl font-bold text-white text-center">
                        Contact
                    </h1>
                    <h2 data-aos="fade-left" data-aos-anchor-placement="center-center" data-aos-delay="500"
                        class="mb-16 text-sm font-light text-white lg:text-2xl lg:w-full text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </h2>
                </div>
            </div>
        </div>
    </section>



    <!-- ISI -->
    <section id="aboutt" class="dark:bg-slate-700 bg-white pt-16 pb-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-start px-4 pt-8">
                    <h1 data-aos="zoom-in-up" data-aos-anchor-placement="center-bottom" data-aos-delay="300"
                        class="mb-2 text-xl font-bold uppercase dark:text-white text-text1 text-center lg:text-3xl md:text-md lg:text-center">
                        HUBUNGI KAMI
                        <hr data-aos="zoom-in-up" data-aos-anchor-placement="center-bottom" data-aos-delay="300"
                            class="my-2 border-primary flex mx-auto border-t-4 w-60 dark:gray-700 lg:my-2">
                    </h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-start px-4 pt-12">
                    <div class="grid grid-cols-3 gap-8 sm:gap-2">
                        <!-- text -->
                        <div data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-delay="500"
                            class="h-15 pt-0  lg:col-span-1 aspect-video ">
                            <h1
                                class=" dark:text-white font-bold text-sm pt-12 mb-2 text-justify text-text1 lg:text-2xl md:text-md">
                                FACEBOOK
                            </h1>
                            <p class="dark:text-white text-sm text-justify font-light text-text1 lg:text-2xl mb-10">
                                Nyoman Gotama</p>

                            <h1
                                class=" dark:text-white font-bold text-sm pt-0 mb-2 text-justify text-text1 lg:text-2xl md:text-md">
                                WHATSAPP
                            </h1>
                            <p class="dark:text-white text-sm text-justify font-light text-text1 lg:text-2xl mb-10">
                                085346100532</p>

                            <h1
                                class=" dark:text-white font-bold text-sm pt-0 mb-2 text-justify text-text1 lg:text-2xl md:text-md">
                                INSTAGRAM
                            </h1>
                            <p class="dark:text-white text-sm text-justify font-light text-text1 lg:text-2xl mb-10">
                                nyoman_gotama</p>
                        </div>
                        <!-- Contact -->
                        <div class="grid col-span-2 grid-rows-3,9">
                            <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-delay="500"
                                class="h-15 pt-12 lg:col-span-2">
                                <span
                                    class="dark:text-white font-light text-sm pt-0 mb-2 text-justify text-text1 lg:text-2xl md:text-md">Nama</span>
                                <input
                                    class="w-full bg-gray-300 text-gray-900 mt-2 p-2 rounded-lg focus:outline-primary focus:shadow-outline"
                                    type="text" placeholder="">
                            </div>

                            <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-delay="500"
                                class="h-15 pt-8 lg:col-span-2">
                                <span
                                    class="dark:text-white font-light text-sm pt-0 mb-2 text-justify text-text1 lg:text-2xl md:text-md">E-mail</span>
                                <input
                                    class="w-full bg-gray-300 text-gray-900 mt-2 p-2 rounded-lg focus:outline-primary focus:shadow-outline"
                                    type="text" placeholder="">
                            </div>
                            <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-delay="500"
                                class="h-15 pt-8 lg:col-span-2">
                                <span
                                    class="dark:text-white font-light text-sm pt-4 mb-2 text-justify text-text1 lg:text-2xl md:text-md">Pesan</span>
                                <input
                                    class="w-full bg-slate-300 text-gray-900 h-32  mt-2 p-3 rounded-lg focus:outline-primary focus:shadow-outline">
                            </div>

                        </div>
                        <div class="mt-8 col-start-2">
                            <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-delay="500"
                                class="h-15 pt-0 lg:col-span-2">
                                <button
                                    class="col-start-2 uppercase text-sm font-bold tracking-wide bg-primary text-white p-4 rounded-lg w-full focus:outline-none focus:shadow-outline">
                                    Send
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
    <!-- ISI END -->
@include('footer')