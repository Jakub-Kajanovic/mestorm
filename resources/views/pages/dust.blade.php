<x-layout>
    <section class="hero">
        <nav class="flex flex-row w-full p-8 bg-gradient-to-b from-white to-transparent absolute z-50">
            <div class="container mx-auto justify-between flex lg:flex-row md:flex-row flex-col-reverse">
                <div class="lg:mt-0 md:mt-0 mt-8 lg:flex md:flex hidden">
                    <x-breadcrumbs :links="['Ms-Dust' => route('dust')]" />
                </div>
                <x-price-offer/>
                <x-navbar/>
            </div>
        </nav>
        <div class="background" data-aos="zoom-in">
            <video src="{{ asset('video/video1.mp4') }}" type="video/mp4" loop autoplay muted></video>
            <div class="overlay"></div>
            <div class="hero-content flex-col">
                <h1 class="font-bold lg:text-3xl md:text-3xl text-3md pt-20">MS - DUST</h1>
                <h2 class="font-bold lg:text-xl md:text-xl text-md lg:w-[80%] md:w-[80%] w-[100%] lg:text-left md:text-left text-center">@lang('messages.ms-dust-title')</h2>
                <p class="italic lg:text-1md md:text-1md text-m-md mt-10 font-light lg:text-left md:text-left text-center leading-6">@lang('messages.ms-dust-title-text')</p>
            </div>
            <div class="hero-content-arrow">
                <x-arrow href="#ms-dust-why-dust" />
            </div>
        </div>
    </section>
    <section class="container mx-auto lg:py-24 md:py-24 py-10 p-8" id="ms-dust-why-dust">
        <h1 data-aos="fade-up" class="lg:text-3xl md:text-2xl text-md font-bold lg:text-left md:text-left text-center">@lang('messages.ms-dust-why-dust')</h1>
        <div class="grid lg:grid-cols-3 md:grid-cols-3 grid-cols-1 gap-16 lg:py-20 md:py-20 py-10">
            <div class="flex flex-col gap-4" data-aos="fade-up">
                <img class="w-10 h-8" src="{{asset('images/shield.svg')}}" alt="">
                <h2 class="lg:text-3md md:text-3md text-md font-bold">@lang('messages.ms-dust-health')</h2>
                <p class="lg:text-sm md:text-sm text-xs italic leading-6">@lang('messages.ms-dust-health-text')</p>
            </div>
            <div class="flex flex-col gap-4" data-aos="fade-up">
                <img class="w-10 h-8" src="{{asset('images/heart.svg')}}" alt="">
                <h2 class="lg:text-3md md:text-3md text-md font-bold">@lang('messages.ms-dust-machine-health')</h2>
                <p class="lg:text-sm md:text-sm text-xs italic leading-6">@lang('messages.ms-dust-machine-health-text')</p>
            </div>
            <div class="flex flex-col gap-4" data-aos="fade-up">
                <img class="w-10 h-8" src="{{asset('images/key.svg')}}" alt="">
                <h2 class="lg:text-3md md:text-3md text-md font-bold">@lang('messages.ms-dust-easy-assemble')</h2>
                <p class="lg:text-sm md:text-sm text-xs italic leading-6">@lang('messages.ms-dust-easy-assemble-text')</p>
            </div>
            <div class="flex flex-col gap-4" data-aos="fade-up">
                <img class="w-10 h-8" src="{{asset('images/mop.svg')}}" alt="">
                <h2 class="lg:text-3md md:text-3md text-md font-bold">@lang('messages.ms-dust-clean-work-place')</h2>
                <p class="lg:text-sm md:text-sm text-xs italic leading-6">@lang('messages.ms-dust-clean-work-place-text')</p>
            </div>
            <div class="flex flex-col gap-4" data-aos="fade-up">
                <img class="w-10 h-8" src="{{asset('images/beenhere.svg')}}" alt="">
                <h2 class="lg:text-3md md:text-3md text-md font-bold">@lang('messages.ms-dust-long-reabilitation')</h2>
                <p class="lg:text-sm md:text-sm text-xs italic leading-6">@lang('messages.ms-dust-long-reabilitation-text')</p>
            </div>
            <div class="flex flex-col gap-4" data-aos="fade-up">
                <img class="w-10 h-8" src="{{asset('images/home_repair_service.svg')}}" alt="">
                <h2 class="lg:text-3md md:text-3md text-md font-bold">@lang('messages.ms-dust-easy-maintenance')</h2>
                <p class="lg:text-sm md:text-sm text-xs italic leading-6">@lang('messages.ms-dust-easy-maintenance-text')</p>
            </div>
        </div>
    </section>
    <section>
        <div data-aos="fade-up" class="container mx-auto"><h2 class="lg:text-xl md:text-xl text-md font-bold p-10 lg:py-10 md:py-10 py-0 lg:text-left md:text-left text-center">@lang('messages.ms-dust-filter')</h2>
        </div>
    <div class="p-8 lg:hidden md:hidden flex" data-aos="fade-up">
        <div class="layout lg:p-0 md:p-0 px-8 lg:rounded-none md:rounded-none rounded-t-3xl">
        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 container mx-auto flex-row justify-between lg:py-10 md:py-10 pt-10 -mb-10">
            <div class="flex flex-col gap-8">   
                <p class="text-sm text-white">@lang('messages.ms-dust-filter-text1')</p>
                <p class="text-sm text-white font-bold">@lang('messages.ms-dust-filter-text2')</p>
                <p class="text-sm text-white italic">@lang('messages.ms-dust-filter-text3')</p>
            </div>
            <div class="lg:-mt-20 md:-mt-20"><img src="{{asset('images/lozisko.webp')}}" alt=""></div>
        </div>
        </div>
    </div>
    <div class="md:flex lg:flex hidden" data-aos="fade-up">
        <div class="layout lg:p-0 md:p-0 px-8 mr-20 rounded-tr-3xl">
        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 px-20 container mx-auto flex-row justify-between py-10">
            <div class="flex flex-col gap-8">   
                <p class="text-sm text-white">@lang('messages.ms-dust-filter-text1')</p>
                <p class="text-sm text-white font-bold ">@lang('messages.ms-dust-filter-text2')</p>
                <p class="text-sm text-white italic">@lang('messages.ms-dust-filter-text3')</p>
            </div>
            <div class="lg:-mt-20 md:-mt-20"><img src="{{asset('images/lozisko.webp')}}" alt=""></div>
        </div>
        </div>
    </div>
    </section>
    <section class="container p-8 mx-auto flex-row py-20">
        <h2 data-aos="fade-up" class="lg:text-2xl md:text-2xl text-md text-center lg:text-left md:text-left font-bold py-10">@lang('messages.ms-dust-where-to-use')</h2>
        <div data-aos="fade-up" class="flex-row max-w-6xl mx-auto min-h-[32rem] hidden lg:flex md:flex">
            <div class="w-1/2 carousel-container">
                <div class="carousel-slide active">
                    <img src="{{asset('images/ms-dust1.webp')}}" alt="Slide 2">
                </div>
                <div class="carousel-slide">
                    <img src="{{asset('images/ms-dust3.webp')}}" alt="Slide 1">
                </div>
                <div class="carousel-slide">
                    <img src="{{asset('images/ms-dust2.webp')}}" alt="Slide 3">
                </div>
            </div>
            <div class="flex flex-col justify-between w-1/2">
                <div class="layout p-10 rounded-r-3xl">
                    <p class="font-light text-md text-white">@lang('messages.ms-dust-where-to-use-text')</p>
                </div>
                <div class="flex flex-col gap-3 ml-4 pb-6">
                    <span class="pagination-object active" data-index="0"></span>
                    <span class="pagination-object" data-index="1"></span>
                    <span class="pagination-object" data-index="2"></span>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center lg:hidden md:hidden mx-auto">
            <div class="flex flex-row gap-3 pb-6">
                <span class="pagination-object active" data-index="0"></span>
                <span class="pagination-object" data-index="1"></span>
                <span class="pagination-object" data-index="2"></span>
            </div>
            <div class="carousel-container w-full h-[350px]">
                <div class="carousel-slide active">
                    <img src="{{asset('images/ms-dust1.webp')}}" alt="Slide 2">
                </div>
                <div class="carousel-slide">
                    <img src="{{asset('images/ms-dust3.webp')}}" alt="Slide 1">
                </div>
                <div class="carousel-slide">
                    <img src="{{asset('images/ms-dust2.webp')}}" alt="Slide 3">
                </div>
            </div>
            <div class="layout p-10 rounded-b-3xl">
                <p class="font-light text-xs leading-6 text-white">@lang('messages.ms-dust-where-to-use-text')</p>
            </div>
        </div>
    </section>
    <section>
        <div class="container mx-auto"><h2 class="lg:text-xl md:text-xl text-md font-bold lg:ml-10 md:ml-10 ml-0 lg:pt-20 md:pt-20 pt-10 p-8 text-center lg:text-left md:text-left flex flex-row gap-6"><img src="{{asset('images/chat_info.svg')}}" alt="">@lang('messages.ms-dust-all-informations')</h2>
        </div>
    </section>
    <section class="flex justify-end py-20">
    <div data-aos="fade-up" class="hidden lg:flex md:flex">
        <div class="bg-[#6DCFF6] rounded-tl-3xl p-20 container ">
            <div class="grid grid-cols-2">
                <div class="flex flex-col gap-2">
                    <p class="text-sm font-bold text-white">@lang('messages.postup')</p>
                    <div class="flex flex-row gap-4">
                        <button class="content-button text-xl font-bold text-white hover:bg-white rounded-xl px-3 py-1 hover:text-[#6DCFF6] active" data-content="content1">1</button>
                        <button class="content-button text-xl font-bold text-white hover:bg-white rounded-xl px-3 py-1 hover:text-[#6DCFF6]" data-content="content2">2</button>
                        <button class="content-button text-xl font-bold text-white hover:bg-white rounded-xl px-3 py-1 hover:text-[#6DCFF6]" data-content="content3">3</button>
                        <button class="content-button text-xl font-bold text-white hover:bg-white rounded-xl px-3 py-1 hover:text-[#6DCFF6]" data-content="content4">4</button>
                    </div>
                    <div id="content" class="pt-20">
                        <div id="content1" class="content-section">
                            <p class="text-xl font-bold text-white">@lang('messages.ms-dust-information-text1')</p>
                        </div>
                        <div id="content2" class="content-section hidden">
                            <p class="text-xl font-bold text-white">@lang('messages.ms-dust-information-text2')</p>
                        </div>
                        <div id="content3" class="content-section hidden">
                            <p class="text-xl font-bold text-white">@lang('messages.ms-dust-information-text3')</p>
                        </div>
                        <div id="content4" class="content-section hidden">
                            <p class="text-xl font-bold text-white">@lang('messages.ms-dust-information-text4')</p>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="{{asset('images/machineQR.webp')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-up" class="lg:hidden md:hidden flex p-8">
        <div class="bg-[#6DCFF6] rounded-tl-3xl lg:p-20 md:p-20 p-8 container">
            <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1">
                <div class="flex flex-col gap-2">
                    <p class="text-md font-bold text-white text-center">@lang('messages.postup')</p>
                    <div class="flex flex-row gap-4 justify-center">
                        <button class="content-button text-sm font-bold text-white hover:bg-white rounded-xl px-3 py-1 hover:text-[#6DCFF6] active" data-content="content5">1</button>
                        <button class="content-button text-sm font-bold text-white hover:bg-white rounded-xl px-3 py-1 hover:text-[#6DCFF6]" data-content="content6">2</button>
                        <button class="content-button text-sm font-bold text-white hover:bg-white rounded-xl px-3 py-1 hover:text-[#6DCFF6]" data-content="content7">3</button>
                        <button class="content-button text-sm font-bold text-white hover:bg-white rounded-xl px-3 py-1 hover:text-[#6DCFF6]" data-content="content8">4</button>
                    </div>
                    <div id="content" class="">
                        <div id="content5" class="content-section py-10 text-center">
                            <p class="text-xs leading-6 font-bold text-white">@lang('messages.ms-dust-information-text1')</p>
                        </div>
                        <div id="content6" class="content-section hidden py-10  text-center">
                            <p class="text-xs leading-6 font-bold text-white">@lang('messages.ms-dust-information-text2')</p>
                        </div>
                        <div id="content7" class="content-section hidden py-10  text-center">
                            <p class="text-xs leading-6 font-bold text-white">@lang('messages.ms-dust-information-text3')</p>
                        </div>
                        <div id="content8" class="content-section hidden py-10  text-center">
                            <p class="text-xs leading-6 font-bold text-white">@lang('messages.ms-dust-information-text4')</p>
                        </div>
                    </div>
                </div>
                <div class="w-80 text-center">
                    <img class="w-full" src="{{asset('images/machineQR.webp')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    </section>
    <section>
    <div data-aos="fade-up" class="hidden lg:flex md:flex">
        <div class="layout py-10 container px-20 rounded-tr-3xl">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="{{asset('images/swiper1.webp')}}" alt=""></div>
                  <div class="swiper-slide"><img src="{{asset('images/swiper2.webp')}}" alt=""></div>
                  <div class="swiper-slide"><img src="{{asset('images/swiper3.webp')}}" alt=""></div>
                  <div class="swiper-slide"><img src="{{asset('images/swiper3.webp')}}" alt=""></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <div data-aos="fade-up" class="flex lg:hidden md:hidden p-8">
        <div class="layout py-10 container rounded-3xl">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="{{asset('images/swiper1.webp')}}" alt=""></div>
                  <div class="swiper-slide"><img src="{{asset('images/swiper2.webp')}}" alt=""></div>
                  <div class="swiper-slide"><img src="{{asset('images/swiper3.webp')}}" alt=""></div>
                  <div class="swiper-slide"><img src="{{asset('images/swiper3.webp')}}" alt=""></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    </section>
    <section class="container mx-auto lg:py-20 md:py-20 py-8 p-8 flex lg:flex-row md:flex-row flex-col gap-20">
        <div data-aos="fade-up" class="flex flex-col gap-6">
            <h1 class="lg:text-xl md:text-xl text-md font-bold lg:text-left md:text-left text-center">@lang('messages.ms-dust-maker')</h1>
            <p class="italic font-light text-center lg:text-left md:text-left">@lang('messages.ms-dust-maker-text')</p>
            <div class="flex flex-row gap-8 justify-center lg:justify-start md:justify-start">
                <a class="w-10" href=""><img class="hidden lg:flex md:flex" src="{{asset('images/world.png')}}" alt=""><img class="flex lg:hidden md:hidden" src="{{asset('images/worldMobile.png')}}" alt=""></a>
                <a class="w-10" href=""><img class="hidden lg:flex md:flex"  src="{{asset('images/faceboo.png')}}" alt=""><img class="flex lg:hidden md:hidden"  src="{{asset('images/facebook2.png')}}" alt=""></a>
            </div>
        </div>
        <div data-aos="fade-up">
            <img class="hidden md:flex lg:flex" src="{{asset('images/logoMet.png')}}" alt="">
            <img class="flex md:hidden lg:hidden" src="{{asset('images/mobileM.png')}}" alt="">
        </div>
    </section>
</x-layout>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
