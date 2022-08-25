@include('header')
  <!-- COROSEL -->
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
                        About Us
                    </h1>
                    <h2 data-aos="fade-left" data-aos-anchor-placement="center-center" data-aos-delay="500"
                        class="mb-16 text-sm font-light text-white lg:text-2xl lg:w-full text-center">
                        Berisi informasi mengenai website Ok Properti
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <!-- END COROSEL -->


    <!-- About -->
    <section id="aboutt" class="dark:bg-slate-700 bg-white pt-16 pb-16 h-screen">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-start px-4 pb-4 pt-4">
                    <h1 data-aos="fade-right" data-aos-anchor-placement="center-center" data-aos-delay="1000"
                        class="mb-2 text-l font-bold uppercase dark:text-white text-text1 text-center lg:text-3xl md:text-md lg:text-center">
                        TENTANG KAMI
                    </h1>
                    <hr data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-delay="500"
                        class="my-5 mx-auto border-primary border-t-4 dark:gray-700 w-64 md-w-1/3">
                </div>

                <div class="grid grid-cols-1 gap-8 md:grid-cols-3 md:gap-6  pt-16 pb-16">
                    <!-- text -->
                    <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-delay="500"
                        class="h-15   md:col-span-1 aspect-auto ">
                        <p class=" dark:text-white font-bold text-base text-justify text-text1 lg:text-3xl md:text-md">
                            OK Properti ?
                        </p>

                    </div>
                    <!-- text -->
                    <div data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-delay="500"
                        class="h-15 aspect-auto col-span-2 ">
                        <p class=" dark:text-white  text-sm text-justify font-light text-text2 lg:text-2xl ">
                            OK Properti hadir sebagai layanan jual-beli dan sewa-menyewa properti yang bertujuan
                            membantu para pelaku jual-beli atau sewa-menyewa
                            dengan fitur-fitur yang ditawarkan oleh OK Properti. Kami memiliki beragam portofolio yang
                            membuat kami telah dipercayai sebagai salah
                            satu layanan transaksi properti yang mudah, terpecaya, dan tercepat.
                        </p>

                    </div>
                </div>

            </div>


        </div>
    </section>
    <!-- About END -->
@include('footer')