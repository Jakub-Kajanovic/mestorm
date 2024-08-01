<x-layout>
    <section class="hero">
        <nav class="flex flex-row w-full p-8 bg-gradient-to-b from-white to-transparent absolute z-50">
            <div class="container mx-auto justify-between flex lg:flex-row md:flex-row flex-col-reverse">
                <div class="lg:mt-0 md:mt-0 mt-8 hidden lg:flex md:flex">
                    <x-breadcrumbs :links="['Ms-Aerosol' => route('aerosol')]" />
                </div>
                <x-price-offer/>
                <x-navbar/>
            </div>
        </nav>
        <div class="background" data-aos="zoom-in">
            <video src="{{ asset('video/video1.mp4') }}" type="video/mp4" loop autoplay muted></video>
            <div class="overlay"></div>
            <div class="hero-content flex-col text-center">
                <h1 class="font-bold lg:text-3xl md:text-3xl text-3md">MS-S/MS-M/MS-L</h1>
                <h2 class="font-bold lg:text-xl md:text-xl text-md lg:w-[80%] md:w-[100%] lg:text-left md:text-left text-center">@lang('messages.ms-aerosol-title')</h2>
                <p class="italic lg:text-1md md:text-1md text-m-md mt-10 font-light lg:text-left md:text-left text-center">@lang('messages.ms-aerosol-text')</p>
            </div>
            <div class="hero-content-arrow">
                <x-arrow href="#ms-aerosol-why-areosol" />
            </div>
        </div>
    </section>
    <section class="container mx-auto lg:py-24 md:py-24 py-10 p-8" id="ms-aerosol-why-areosol">
        <h1 class="lg:text-3xl md:text-2xl text-md font-bold lg:text-left md:text-left text-center" data-aos="fade-up">@lang('messages.ms-aerosol-why-areosol')</h1>
        <div class="grid lg:grid-cols-3 md:grid-cols-3 grid-cols-1 gap-16 lg:py-20 md:py-20 py-10">
            <div class="flex flex-col gap-4" data-aos="fade-up">
                <img class="w-10 h-8" src="{{asset('images/shield.svg')}}" alt="">
                <h2 class="lg:text-3md md:text-3md text-md font-bold">@lang('messages.ms-aerosol-health')</h2>
                <p class="lg:text-sm md:text-sm text-xs italic leading-6">@lang('messages.ms-aerosol-health-text')</p>
            </div>
            <div class="flex flex-col gap-4" data-aos="fade-up">
                <img class="w-10 h-8" src="{{asset('images/savings.svg')}}" alt="">
                <h2 class="lg:text-3md md:text-3md text-md font-bold">@lang('messages.ms-aerosol-safe')</h2>
                <p class="lg:text-sm md:text-sm text-xs italic leading-6">@lang('messages.ms-aerosol-safe-text')</p>
            </div>
            <div class="flex flex-col gap-4" data-aos="fade-up">
                <img class="w-10 h-8" src="{{asset('images/key.svg')}}" alt="">
                <h2 class="lg:text-3md md:text-3md text-md font-bold">@lang('messages.ms-aerosol-assembly')</h2>
                <p class="lg:text-sm md:text-sm text-xs italic leading-6">@lang('messages.ms-aerosol-assembly-text')</p>
            </div>
            <div class="flex flex-col gap-4" data-aos="fade-up">
                <img class="w-10 h-8" src="{{asset('images/mop.svg')}}" alt="">
                <h2 class="lg:text-3md md:text-3md text-md font-bold">@lang('messages.ms-aerosol-clean')</h2>
                <p class="lg:text-sm md:text-sm text-xs italic leading-6">@lang('messages.ms-aerosol-clean-text')</p>
            </div>
            <div class="flex flex-col gap-4" data-aos="fade-up">
                <img class="w-10 h-8" src="{{asset('images/beenhere.svg')}}" alt="">
                <h2 class="lg:text-3md md:text-3md text-md font-bold">@lang('messages.ms-aerosol-long-reability')</h2>
                <p class="lg:text-sm md:text-sm text-xs italic leading-6">@lang('messages.ms-aerosol-long-reability-text')</p>
            </div>
            <div class="flex flex-col gap-4" data-aos="fade-up">
                <img class="w-10 h-8" src="{{asset('images/home_repair_service.svg')}}" alt="">
                <h2 class="lg:text-3md md:text-3md text-md font-bold">@lang('messages.ms-aerosol-easy-maintenance')</h2>
                <p class="lg:text-sm md:text-sm text-xs italic leading-6">@lang('messages.ms-aerosol-easy-maintenance-text')</p>
            </div>
        </div>
    </section>
    <section>
        <div data-aos="fade-up" class="container mx-auto"><h2 class="lg:text-xl md:text-xl text-md font-bold p-10 lg:py-10 md:py-10 py-0 lg:text-left md:text-left text-center">@lang('messages.ms-aerosol-filter')</h2>
        </div>
    <div class="p-8 lg:hidden md:hidden flex" data-aos="fade-up">
        <div class="layout lg:p-0 md:p-0 px-8 lg:rounded-none md:rounded-none rounded-t-3xl">
        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 container mx-auto flex-row justify-between lg:py-10 md:py-10 pt-10 -mb-10">
            <div class="flex flex-col gap-8">   
                <p class="text-sm text-white">@lang('messages.ms-aerosol-filter-text1')</p>
                <p class="text-sm text-white font-bold">@lang('messages.ms-aerosol-filter-text2')</p>
                <p class="text-sm text-white italic">@lang('messages.ms-aerosol-filter-text3')</p>
            </div>
            <div class="lg:-mt-20 md:-mt-20"><img src="{{asset('images/lozisko.webp')}}" alt=""></div>
        </div>
        </div>
    </div>
    <div class="md:flex lg:flex hidden" data-aos="fade-up">
        <div class="layout lg:p-0 md:p-0 px-8 mr-20 rounded-tr-3xl">
        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 px-20 container mx-auto flex-row justify-between py-10">
            <div class="flex flex-col gap-8">   
                <p class="text-sm text-white">@lang('messages.ms-aerosol-filter-text1')</p>
                <p class="text-sm text-white font-bold ">@lang('messages.ms-aerosol-filter-text2')</p>
                <p class="text-sm text-white italic">@lang('messages.ms-aerosol-filter-text3')</p>
            </div>
            <div class="lg:-mt-20 md:-mt-20"><img src="{{asset('images/lozisko.webp')}}" alt=""></div>
        </div>
        </div>
    </div>
    </section>
    <section>
        <div data-aos="fade-up" class="container mx-auto"><h2 class="lg:text-xl md:text-xl text-md font-bold lg:ml-10 md:ml-10 ml-0 lg:pt-20 md:pt-20 pt-10 pb-10 p-8 text-center lg:text-left md:text-left">@lang('messages.ms-aerosol-information')</h2>
        </div>
    </section>
    <section class="flex justify-end py-20">
        <div class="hidden lg:flex md:flex" data-aos="fade-up">
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
                                <p class="text-xl font-bold text-white">@lang('messages.ms-aerosol-information-text1')</p>
                            </div>
                            <div id="content2" class="content-section hidden">
                                <p class="text-xl font-bold text-white">@lang('messages.ms-aerosol-information-text2')</p>
                            </div>
                            <div id="content3" class="content-section hidden">
                                <p class="text-xl font-bold text-white">@lang('messages.ms-aerosol-information-text3')</p>
                            </div>
                            <div id="content4" class="content-section hidden">
                                <p class="text-xl font-bold text-white">@lang('messages.ms-aerosol-information-text4')</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img src="{{asset('images/machineQR.webp')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:hidden md:hidden flex p-8" data-aos="fade-up">
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
                                <p class="text-xs leading-6 font-bold text-white">@lang('messages.ms-aerosol-information-text1')</p>
                            </div>
                            <div id="content6" class="content-section hidden py-10  text-center">
                                <p class="text-xs leading-6 font-bold text-white">@lang('messages.ms-aerosol-information-text2')</p>
                            </div>
                            <div id="content7" class="content-section hidden py-10  text-center">
                                <p class="text-xs leading-6 font-bold text-white">@lang('messages.ms-aerosol-information-text3')</p>
                            </div>
                            <div id="content8" class="content-section hidden py-10  text-center">
                                <p class="text-xs leading-6 font-bold text-white">@lang('messages.ms-aerosol-information-text4')</p>
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
    <section class="container mx-auto p-8 lg:py-24 md:py-24 py-10">
        <h3 data-aos="fade-up" class="lg:text-2xl md:text-2xl text-md lg:text-left md:text-left text-center font-bold pt-10 lg:pb-20 md:pb-20 pb-8">@lang('messages.ms-aerosol-solutions')</h3>
        <div class="flex lg:flex-row md:flex-row flex-col-reverse justify-between items-start lg:gap-32 md:gap-32 gap-10">
            <div class="card flex flex-col justify-between rounded-3xl">
                <div class="p-10">
                    <p class="text-md text-white font-light">
                       @lang('messages.ms-aerosol-solutions-text')
                    </p>
                </div>
                <div class="bg-[#6DCFF6] rounded-b-3xl">
                    <div class="flex lg:flex-row md:flex-row flex-col mx-auto justify-center items-center gap-2 p-5">
                        <svg width="32" height="26" viewBox="0 0 32 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.54872 25.326C3.51691 25.326 2.64114 24.9661 1.9214 24.2464C1.20167 23.5266 0.841797 22.6509 0.841797 21.619V4.38289C0.841797 3.34459 1.20167 2.46326 1.9214 1.73889C2.64114 1.01453 3.51691 0.652344 4.54872 0.652344H27.4515C28.4898 0.652344 29.3712 1.01453 30.0955 1.73889C30.8199 2.46326 31.1821 3.34459 31.1821 4.38289V21.619C31.1821 22.6509 30.8199 23.5266 30.0955 24.2464C29.3712 24.9661 28.4898 25.326 27.4515 25.326H4.54872ZM16.0001 15.1613L4.54872 7.53497V21.619H27.4515V7.53497L16.0001 15.1613ZM16.0001 11.8913L27.3571 4.38289H4.6668L16.0001 11.8913ZM4.54872 7.53497V4.38289V21.619V7.53497Z" fill="#FFFFFF"/>
                        </svg>
                        <p class="text-1md font-light text-white">@lang('messages.price-offer-white')</p>
                    </div>
                </div>
            </div>
            <div class="flex lg:flex-row md:flex-row flex-col justify-between gap-10 mt-10 lg:p-0 md:p-0 p-8" data-aos="fade-up">
                <div class="text-center flex flex-col  justify-center items-center gap-4">
                    <img class="w-10" src="{{asset('images/logoSM.png')}}" alt="">
                    <h2 class="font-bold text-3md">@lang('messages.ms-aerosol-ms-s')</h2>
                    <p class="italic text-sm font-light">@lang('messages.ms-aerosol-ms-s-text')</p>
                </div>
                <div class="text-center flex flex-col  justify-center items-center gap-4">
                    <img class="w-10" src="{{asset('images/logoSM.png')}}" alt="">
                    <h2 class="font-bold text-3md">@lang('messages.ms-aerosol-ms-m')</h2>
                    <p class="italic text-sm font-light">@lang('messages.ms-aerosol-ms-m-text')</p>
                </div>
                <div class="text-center flex flex-col  justify-center items-center gap-4">
                    <img class="w-10" src="{{asset('images/logoSM.png')}}" alt="">
                    <h2 class="font-bold text-3md">@lang('messages.ms-aerosol-ms-l')</h2>
                    <p class="italic text-sm font-light">@lang('messages.ms-aerosol-ms-l-text')</p>
                </div>
            </div>
        </div>
        <div class="py-10 lg:flex md:flex hidden" data-aos="fade-up">
            <img src="{{asset('images/areasols.webp')}}" alt="">
        </div>
    </section>
    <section>
    <div class="hidden lg:flex md:flex" data-aos="fade-up">
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
    <div class="flex lg:hidden md:hidden p-8" data-aos="fade-up">
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
        <div class="flex flex-col gap-6" data-aos="fade-up">
            <h1 class="lg:text-xl md:text-xl text-md font-bold lg:text-left md:text-left text-center">@lang('messages.ms-aerosol-maker')</h1>
            <p class="italic font-light text-center lg:text-left md:text-left">@lang('messages.ms-aerosol-maker-text')</p>
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

