<x-layout>
    <section class="hero">
        <nav class="flex flex-row w-full p-8 bg-gradient-to-b from-white to-transparent absolute z-50">
            <div class="container mx-auto justify-between flex lg:flex-row md:flex-row flex-col-reverse">
                <div class="lg:mt-0 md:mt-0 mt-8 hidden lg:flex md:flex">
                    <x-breadcrumbs :links="['Aerosol' => route('supervisor')]" />
                </div>
                <x-price-offer/>
                <x-navbar />
            </div>
        </nav>
        <div class="background">
            <video src="{{ asset('video/video1.mp4') }}" type="video/mp4" loop autoplay muted></video>
            <div class="overlay"></div>
            <div class="hero-content flex-col">
                <h1 class="font-bold lg:text-3xl md:text-3xl text-3md">MS - WASTE</h1>
                <h2
                    class="font-bold lg:text-xl md:text-xl text-md lg:w-[80%] md:w-[80%] w-[100%] lg:text-left md:text-left text-center">
                    Inteligentná a jednoduchá likvidácia odpadu.</h2>
            </div>
            <div class="hero-content-arrow">
                <a href="">
                    Viac o produkte
                    <svg width="162" height="95" viewBox="0 0 162 95" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_0_241" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                            width="162" height="95">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M0 31.6397L71.2847 90.7181C76.9199 95.3884 85.0806 95.3884 90.7158 90.7181L162 31.6401V0.000436078L81.0003 67.1304L0 0V31.6397Z"
                                fill="white" />
                        </mask>
                        <g mask="url(#mask0_0_241)">
                            <rect x="208.151" y="237.05" width="196.698" height="408.785"
                                transform="rotate(172.871 208.151 237.05)" fill="#6DCFF6" />
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <section class="lg:py-20 md:py-20 pt-80 p-8 lg:p-0 md:p-0 lg:ml-0 md:ml-0 ml-8">
        <div class="flex lg:flex-row md:flex-row flex-col lg:justify-end justify-center lg:py-20 md:py-20 py-10">
            <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 container layout lg:rounded-tl-3xl md:rounded-tl-3xl rounded-t-3xl relative">
                <div class="flex lg:hidden md:hidden">
                    <img class="overflow-visible w-96 h-96 absolute -top-80"
                        src="{{ asset('images/waste-removebg-preview.png') }}" alt="">
                </div>
                <div class="p-10">
                    <p class="lg:text-md md:text-md text-xs leading-6 font-medium text-white">MS-Waste je zariadenie, vyvinuté spoločnosťou Metales pod
                        značkou Mestorm Solution, ktoré slúži nariešenie problémov so zberom a prepravu odpadu
                        vzniknutého pri výrobe.</p>
                </div>
                <div class="pb-20 hidden lg:flex md:flex">
                    <img class="overflow-visible absolute w-96 h-96 mb-20 -top-20"
                        src="{{ asset('images/waste-removebg-preview.png') }}" alt="">
                </div>
                <div class="bg-[#6DCFF6] w-full md:w-auto lg:w-auto p-8 flex flex-row items-center gap-4 rounded-b-3xl absolute -bottom-[5.80rem]">
                    <img src="{{ asset('images/mailwhite.svg') }}" alt="">
                    <p class="lg:text-1md md:text-1md text-xs text-white ">Vyžiadať is cenovú ponuku</p>
                </div>
            </div>
        </div>
    </section>
    <section class="container mx-auto p-8">
        <h2 class="font-bold lg:text-left md:text-left text-center lg:text-2xl md:text-2xl text-md lg:py-20 md:py-20 py-10">Prečo práve MS-WASTE?</h2>
        <div class="grid lg:grid-cols-3 md:grid-cols-3 grid-cols-1 gap-20">
            <div class="flex flex-col justify-center items-center gap-10">
                <img class="w-48 h-48 lg:w-auto lg:h-auto md:w-auto md:h-auto" src="{{ asset('images/waste1.png') }}" alt="">
                <p class="text-center lg:w-auto md:w-auto w-60 lg:text-md md:text-md text-xs leading-6">MS-WASTE obsahuje zároveň aj ochranné prvky proti poškodeniu nášho
                    produktu ale aj vaších zariadení.</p>
            </div>
            <div class="flex flex-col justify-center items-center gap-10">
                <img class="w-48 h-48 lg:w-auto lg:h-auto md:w-auto md:h-auto" src="{{ asset('images/waste2.png') }}" alt="">
                <p class="text-center lg:w-auto md:w-auto w-60 lg:text-md md:text-md text-xs leading-6">Vďaka priemyselným kolieskam nebute mať problém manipulovať
                    s MS-WASTE.</p>
            </div>
            <div class="flex flex-col justify-center items-center gap-10">
                <img class="w-48 h-48 lg:w-auto lg:h-auto md:w-auto md:h-auto" src="{{ asset('images/waste3.png') }}" alt="">
                <p class="text-center lg:w-auto md:w-auto w-60 lg:text-md md:text-md text-xs leading-6">Jednoduché a bezpečné vyklápanie odpadu vzniknutého pri výrobe
                    s MS-WASTE.</p>
            </div>
        </div>
    </section>
    <section class="container mx-auto p-8 lg:py-20 md:py-20 py-10">
        <h2 class="font-bold lg:text-left md:text-left text-center lg:text-2xl md:text-2xl text-md py-10 lg:py-10 md:py-10">Niečo o našom produkte </h2>
        <div class="flex-row gap-4 py-10 hidden lg:flex md:flex">
            <img src="{{ asset('images/analytics.svg') }}" alt="">
            <h2 class="text-xl font-bold">Technické parametre</h2>
        </div>
        <div class="layout lg:rounded-r-3xl md:rounded-r-3xl rounded-t-3xl  lg:px-20 md:px-20 px-10 py-10 grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 gap-10">
            <div class="flex flex-col gap-4 py-10 lg:hidden md:hidden items-center">
                <img class="w-10 h-10" src="{{ asset('images/analytics.svg') }}" alt="">
                <h2 class="text-md font-bold text-center text-white">Technické parametre</h2>
            </div>
            <div class="grid grid-cols-2 gap-10">
                <ul class="flex flex-col gap-4 text-center lg:text-start md:text-start lg:border-r lg:border-white/35">
                    <li class="text-white lg:text-md md:text-md text-xs">Dĺžka (mm) (a)</li>
                    <li class="text-white lg:text-md md:text-md text-xs">Šírka (mm) (b)</li>
                    <li class="text-white lg:text-md md:text-md text-xs">Výška (mm) (c)</li>
                    <li class="text-white lg:text-md md:text-md text-xs">Hmotnosť (kg)</li>
                    <li class="text-white lg:text-md md:text-md text-xs">Max. hmotnosť (kg)</li>
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
                <h2 class="font-bold text-white lg:text-xl md:text-xl text-md lg:text-left md:text-left text-center">Návod na použitie</h2>
            </div>
        </div>
    </section>
    <section class="py-20">
        <div class="hidden lg:flex md:flex">
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
        <div class="flex lg:hidden md:hidden p-8">
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
