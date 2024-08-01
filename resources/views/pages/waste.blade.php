<x-layout>
    <section class="hero">
        <nav class="flex flex-row w-full p-8 bg-gradient-to-b from-white to-transparent absolute z-50">
            <div class="container mx-auto justify-between flex lg:flex-row md:flex-row flex-col-reverse">
                <div class="lg:mt-0 md:mt-0 mt-8 hidden lg:flex md:flex">
                    <x-breadcrumbs :links="['Ms-Waste' => route('waste')]" />
                </div>
                <x-price-offer/>
                <x-navbar />
            </div>
        </nav>
        <div class="background" data-aos="zoom-in">
            <video src="{{ asset('video/video1.mp4') }}" type="video/mp4" loop autoplay muted></video>
            <div class="overlay"></div>
            <div class="hero-content flex-col">
                <h1 class="font-bold lg:text-3xl md:text-3xl text-3md">MS - WASTE</h1>
                <h2
                    class="font-bold lg:text-xl md:text-xl text-md lg:w-[80%] md:w-[80%] w-[100%] lg:text-left md:text-left text-center">
                    @lang('messages.ms-waste-title')</h2>
                    <p class="italic lg:text-1md md:text-1md text-m-md mt-10 font-light lg:text-left md:text-left text-center">@lang('messages.ms-waste-text')</p>

            </div>
            <div class="hero-content-arrow">
                <x-arrow href="#why-waste" />
            </div>
        </div>
    </section>
    <section class="lg:py-20 md:py-20 pt-80 p-8 lg:p-0 md:p-0 lg:ml-0 md:ml-0 ml-8">
        <div class="flex lg:flex-row md:flex-row flex-col lg:justify-end justify-center lg:py-20 md:py-20 py-10" data-aos="fade-up">
            <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 container layout lg:rounded-tl-3xl md:rounded-tl-3xl rounded-t-3xl relative">
                <div class="flex lg:hidden md:hidden">
                    <img class="overflow-visible w-96 h-96 absolute -top-80"
                        src="{{ asset('images/waste-removebg-preview.png') }}" alt="">
                </div>
                <div class="lg:p-20 md:p-20 p-10">
                    <p class="lg:text-md md:text-md text-xs leading-6 font-medium text-white">@lang('messages.ms-waste-text1')</p>
                </div>
                <div class="pb-20 hidden lg:flex md:flex">
                    <img class="overflow-visible absolute w-96 h-96 mb-20 -top-20"
                        src="{{ asset('images/waste-removebg-preview.png') }}" alt="">
                </div>
                <div class="bg-[#6DCFF6] w-full md:w-auto lg:w-auto p-8 flex flex-row items-center gap-4 rounded-b-3xl absolute -bottom-[5.80rem]">
                    <img src="{{ asset('images/mailwhite.svg') }}" alt="">
                    <a href="{{route('contact')}}"><p class="lg:text-1md md:text-1md text-xs text-white ">@lang('messages.price-offer-white')</p></a>
                </div>
            </div>
        </div>
    </section>
    <section class="container mx-auto p-8" id="why-waste">
        <h2 data-aos="fade-up" class="font-bold lg:text-left md:text-left text-center lg:text-2xl md:text-2xl text-md lg:py-20 md:py-20 py-10">@lang('messages.ms-waste-why-waste')</h2>
        <div class="grid lg:grid-cols-3 md:grid-cols-3 grid-cols-1 gap-20">
            <div class="flex flex-col justify-center items-center gap-10">
                <img class="w-48 h-48 lg:w-auto lg:h-auto md:w-auto md:h-auto" src="{{ asset('images/waste1.png') }}" alt="">
                <p class="text-center lg:w-auto md:w-auto w-60 lg:text-md md:text-md text-xs leading-6">@lang('messages.ms-waste-why-waste-text1')</p>
            </div>
            <div class="flex flex-col justify-center items-center gap-10">
                <img class="w-48 h-48 lg:w-auto lg:h-auto md:w-auto md:h-auto" src="{{ asset('images/waste2.png') }}" alt="">
                <p class="text-center lg:w-auto md:w-auto w-60 lg:text-md md:text-md text-xs leading-6">@lang('messages.ms-waste-why-waste-text2')</p>
            </div>
            <div class="flex flex-col justify-center items-center gap-10">
                <img class="w-48 h-48 lg:w-auto lg:h-auto md:w-auto md:h-auto" src="{{ asset('images/waste3.png') }}" alt="">
                <p class="text-center lg:w-auto md:w-auto w-60 lg:text-md md:text-md text-xs leading-6">@lang('messages.ms-waste-why-waste-text3')</p>
            </div>
        </div>
    </section>
    <section class="container mx-auto p-8 lg:py-20 md:py-20 py-10">
        <h2 data-aos="fade-up" class="font-bold lg:text-left md:text-left text-center lg:text-2xl md:text-2xl text-md py-10 lg:py-10 md:py-10">@lang('messages.ms-waste-info-product') </h2>
        <div class="flex-row gap-4 py-10 hidden lg:flex md:flex">
            <img src="{{ asset('images/analytics.svg') }}" alt="">
            <h2 class="text-xl font-bold">@lang('messages.ms-waste-param')</h2>
        </div>
        <div data-aos="fade-up" class="layout lg:rounded-r-3xl md:rounded-r-3xl rounded-t-3xl  lg:px-20 md:px-20 px-10 py-10 grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 gap-10">
            <div class="flex flex-col gap-4 py-10 lg:hidden md:hidden items-center">
                <img class="w-10 h-10" src="{{ asset('images/analytics.svg') }}" alt="">
                <h2 class="text-md font-bold text-center text-white">@lang('messages.ms-waste-param')</h2>
            </div>
            <div class="grid grid-cols-2 gap-10">
                <ul class="flex flex-col gap-4 text-center lg:text-start md:text-start lg:border-r lg:border-white/35">
                    <li class="text-white lg:text-md md:text-md text-xs">@lang('messages.ms-waste-lenght')</li>
                    <li class="text-white lg:text-md md:text-md text-xs">@lang('messages.ms-waste-width')</li>
                    <li class="text-white lg:text-md md:text-md text-xs">@lang('messages.ms-waste-height')</li>
                    <li class="text-white lg:text-md md:text-md text-xs">@lang('messages.ms-waste-weight')</li>
                    <li class="text-white lg:text-md md:text-md text-xs">@lang('messages.ms-waste-max-weight')</li>
                </ul>
                <ul class="flex flex-col gap-4 text-center lg:text-start md:text-start">
                    <li class="text-white lg:text-md md:text-md text-xs">1100 mm</li>
                    <li class="text-white lg:text-md md:text-md text-xs">830 mm</li>
                    <li class="text-white lg:text-md md:text-md text-xs">970 mm</li>
                    <li class="text-white lg:text-md md:text-md text-xs">110 kg</li>
                    <li class="text-white lg:text-md md:text-md text-xs">1500 kg</li>
                </ul>
            </div>
            <div class="lg:border-none border-b border-white/35 lg:hidden md:hidden flex"></div>
            <div class="flex lg:flex-row md:flex-row flex-col gap-6 items-center">
                <img class="w-20 h-20" src="{{ asset('images/guide.svg') }}" alt="">
                <h2 class="font-bold text-white lg:text-xl md:text-xl text-md lg:text-left md:text-left text-center">@lang('messages.ms-waste-how-to-use')</h2>
            </div>
        </div>
    </section>
    <section class="py-20">
        <div data-aos="fade-up" class="hidden lg:flex md:flex">
            <div class="layout py-10 container px-20 rounded-tr-3xl">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ asset('images/swiper-1.webp') }}" alt=""></div>
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
        <div data-aos="fade-up" class="flex lg:hidden md:hidden p-8">
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
