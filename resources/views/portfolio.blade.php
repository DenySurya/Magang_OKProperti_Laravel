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
                        Portofolio
                    </h1>
                    <h2 data-aos="fade-left" data-aos-anchor-placement="center-center" data-aos-delay="500"
                        class="mb-16 text-sm font-light text-white lg:text-2xl lg:w-full text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <!-- END COROSEL -->

    <!-- ISI -->
    <section id="aboutt" class="dark:bg-slate-700 bg-white pt-24 pb-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-start px-4 pt-8">
                    <h1 data-aos="zoom-in-up" data-aos-anchor-placement="center-bottom" data-aos-delay="300"
                        class="mb-2 text-xl font-bold uppercase dark:text-white text-text1 text-center lg:text-3xl md:text-md lg:text-center">
                        JUMLAH PROPERTI
                        <hr data-aos="zoom-in-up" data-aos-anchor-placement="center-bottom" data-aos-delay="300"
                            class="my-2 border-primary flex mx-auto border-t-4 w-60 dark:gray-700 lg:my-2">
                    </h1>
                </div>
            </div>
        </div>

        <div class="container mx-auto pt-20">
            <div class="py-4 md:px-0">
                <div class="grid  grid-cols-2 md:grid-cols-4  gap-4 md:gap-6">
                    <div class=" h-15 aspect-square">

                        <img class="mx-auto px-3" src="{{asset('images/kamar.svg')}}" alt="" sizes="" srcset="">
                        <h2 class=" text-center pt-5 text-xl font-medium text-primary"> RUMAH </h2>

                        <p class="text-center py-1 pb-5 font-normal dark:text-white"> 100</p>
                    </div>
                    <div class=" h-15 aspect-square">

                        <img class="mx-auto px-3" src="{{asset('images/kamar.svg')}}" alt="" sizes="" srcset="">
                        <h2 class=" text-center pt-5 text-xl font-medium text-primary"> APARTEMENT </h2>

                        <p class="text-center py-1 pb-5 font-normal dark:text-white">100</p>
                    </div>
                    <div class=" h-15 aspect-square">

                        <img class="mx-auto px-3" src="{{asset('images/kamar.svg')}}" alt="" sizes="" srcset="">
                        <h2 class=" text-center pt-5 text-xl font-medium text-primary">KOST</h2>

                        <p class="text-center py-1 pb-5 font-normal dark:text-white">100</p>
                    </div>
                    <div class=" h-15 aspect-square">

                        <img class="mx-auto px-3" src="{{asset('images/kamar.svg')}}" alt="" sizes="" srcset="">
                        <h2 class=" text-center pt-5 text-xl font-medium text-primary">TANAH</h2>

                        <p class="text-center py-1 pb-5 font-normal dark:text-white">100</p>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- ISI END -->
@include('footer')