<x-layout>
    <section class="hero">
        <nav class="flex flex-row w-full p-8 bg-gradient-to-b from-white to-transparent absolute z-50">
            <div class="container mx-auto justify-between flex lg:flex-row md:flex-row flex-col-reverse items-center">
                <div class="lg:mt-0 md:mt-0 mt-8 lg:flex md:flex hidden">
                    <x-breadcrumbs :links="['Aerosol' => route('supervisor')]" />
                </div>
                <x-price-offer/>
                <x-navbar />
            </div>
        </nav>
        <div class="background" data-aos="zoom-in">
            <video src="{{ asset('video/video1.mp4') }}" type="video/mp4" loop autoplay muted></video>
            <div class="overlay"></div>
            <div class="hero-content flex-col">
                <h1 class="font-bold lg:text-3xl md:text-3xl text-3md">MS - SUPERVISOR</h1>
                <h2
                    class="font-bold lg:text-xl md:text-xl text-md lg:w-[80%] md:w-[80%] w-[100%] lg:text-left md:text-left text-center">
                    @lang('messages.ms-supervisor-title')</h2>
                <p class="italic text-1md mt-10 font-light lg:text-left md:text-left text-center">@lang('messages.ms-supervisor-text')</p>
            </div>
            <div class="hero-content-arrow">
                <x-arrow href="#why-supervisor" />
            </div>
        </div>
    </section>
    <section data-aos="fade-up"
        class="lg:grid md:grid lg:grid-cols-2 md:grid-cols-2 mx-auto container p-8 gap-20 py-20 justify-items-center hidden">
        <div class="layout p-10 lg:rounded-l-3xl md:rounded-l-3xl flex items-center">
            <p class="text-white text-md font-light">@lang('messages.ms-supervisor-text1')</p>
        </div>
        <div>
            <img class="w-60 lg:-mt-10" src="{{ asset('images/logoSM.png') }}" alt="">
        </div>
        <div>
            <img class="w-60 lg:-mt-10" src="{{ asset('images/supervisor.webp') }}" alt="">
        </div>
        <div class="layout p-10 lg:rounded-r-3xl md:rounded-r-3xl flex items-center">
            <p class="text-white text-md font-light">@lang('messages.ms-supervisor-text2')</p>
        </div>
    </section>
    <section data-aos="fade-up"
        class="flex flex-col mx-auto container p-8 gap-20 py-20 justify-items-center lg:hidden md:hidden items-center">
        <div>
            <img class="w-60 lg:-mt-10" src="{{ asset('images/logoSM.png') }}" alt="">
        </div>
        <div class="layout p-10 rounded-b-3xl flex items-center">
            <p class="text-white text-xs font-light">@lang('messages.ms-supervisor-text1')</p>
        </div>
        <div>
            <img class="w-60 lg:-mt-10" src="{{ asset('images/supervisor.webp') }}" alt="">
        </div>
        <div class="layout p-10 rounded-b-3xl flex items-center">
            <p class="text-white text-xs font-light">@lang('messages.ms-supervisor-text2')</p>
        </div>
    </section>
    <section class="grid lg:grid-cols-2 md:grid-cols-2 p-8 gap-10 lg:py-20 md:py-20 py-10 container mx-auto" id="why-supervisor">
        <div class="flex flex-col gap-3" data-aos="fade-up">
            <img class="w-12 h-10" src="{{ asset('images/hand.svg') }}" alt="">
            <h2 class="lg:text-3md md:text-3md text-md font-bold">@lang('messages.ms-supervisor-parts')</h2>
            <p class="lg:text-sm md:text-sm text-xs italic font-light leading-6">@lang('messages.ms-supervisor-parts-text')</p>
        </div>
        <div class="flex flex-col gap-3" data-aos="fade-up">
            <img class="w-12 h-10" src="{{ asset('images/key.svg') }}" alt="">
            <h2 class="lg:text-3md md:text-3md text-md font-bold">@lang('messages.ms-supervisor-assemble')</h2>
            <p class="lg:text-sm md:text-sm text-xs italic font-light leading-6">@lang('messages.ms-supervisor-assemble-text')
            </p>
        </div>
        <div class="flex flex-col gap-3" data-aos="fade-up">
            <img class="w-12 h-10" src="{{ asset('images/eye.svg') }}" alt="">
            <h2 class="lg:text-3md md:text-3md text-md font-bold">@lang('messages.ms-supervisor-eye')</h2>
            <p class="lg:text-sm md:text-sm text-xs italic font-light leading-6">@lang('messages.ms-supervisor-eye-text')</p>
        </div>
        <div class="flex flex-col gap-3" data-aos="fade-up">
            <img class="w-12 h-10" src="{{ asset('images/heart.svg') }}" alt="">
            <h2 class="lg:text-3md md:text-3md text-md font-bold">@lang('messages.ms-supervisor-health')</h2>
            <p class="lg:text-sm md:text-sm text-xs italic font-light leading-6">@lang('messages.ms-supervisor-health-text')</p>
        </div>
    </section>
    <section>
        <div class="hidden lg:flex md:flex" data-aos="fade-up">
            <div class="layout py-10 container px-20 rounded-tr-3xl">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ asset('images/swiper-1.webp') }}" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('images/swiper-2.webp') }}" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('images/swiper-3.webp') }}" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('images/swiper3.webp') }}" alt="">
                        </div>
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
                        <div class="swiper-slide"><img src="{{ asset('images/swiper-1.webp') }}" alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{ asset('images/swiper-2.webp') }}" alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{ asset('images/swiper-3.webp') }}" alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{ asset('images/swiper3.webp') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>
</x-layout>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
