<x-layout>
    <section class="hero">
        <nav class="flex flex-row w-full p-8 bg-gradient-to-b from-white to-transparent absolute z-50">
            <div class="container mx-auto justify-between flex lg:flex-row md:flex-row flex-col-reverse">
                <div class="lg:mt-0 md:mt-0 mt-8 lg:flex md:flex hidden">
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
                <h1 class="font-bold lg:text-3xl md:text-3xl text-3md">MS - SUPERVISOR</h1>
                <h2
                    class="font-bold lg:text-xl md:text-xl text-md lg:w-[80%] md:w-[80%] w-[100%] lg:text-left md:text-left text-center">
                    Dokonalý výhľad pre operátora na CNC nástroj
                    a obrobok počas obrábania</h2>
                <p class="italic text-1md mt-10 font-light lg:text-left md:text-left text-center">Odsávač aerosólov
                    procesných kvapalín Mestorm Solution zbaví
                    vašu prevádzku olejovej hmly a problémov s ňou súvisiacich.</p>
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
    <section
        class="lg:grid md:grid lg:grid-cols-2 md:grid-cols-2 mx-auto container p-8 gap-20 py-20 justify-items-center hidden">
        <div class="layout p-10 lg:rounded-l-3xl md:rounded-l-3xl flex items-center">
            <p class="text-white text-md font-light">Supervisor je zariadenie, vyvinuté spoločnosťou Metales pod značkou
                Mestorm Solution, ktoré slúži nariešenie problémov spojených so zlou viditelnosťou priprocese obrábania,
                čím chráni Vašich zamestnancovproti zbytočnému hazardu so zdravím.</p>
        </div>
        <div>
            <img class="w-60 lg:-mt-10" src="{{ asset('images/logoSM.png') }}" alt="">
        </div>
        <div>
            <img class="w-60 lg:-mt-10" src="{{ asset('images/supervisor.webp') }}" alt="">
        </div>
        <div class="layout p-10 lg:rounded-r-3xl md:rounded-r-3xl flex items-center">
            <p class="text-white text-md font-light">Zariadenie, ktoré sa pripevní na vnútornú stranu dveríuzavretých
                CNC zariadení Vám zabezpečí čistý priezoraj počas najťažších procesoch. Princíp fungovaniapodlieha
                vývoju spoločnosti Mestorm. Pre fungovaniezariadenia je potrebný prívod stlačeného vzduchu.</p>
        </div>
    </section>
    <section
        class="flex flex-col mx-auto container p-8 gap-20 py-20 justify-items-center lg:hidden md:hidden items-center">
        <div>
            <img class="w-60 lg:-mt-10" src="{{ asset('images/logoSM.png') }}" alt="">
        </div>
        <div class="layout p-10 rounded-b-3xl flex items-center">
            <p class="text-white text-xs font-light">Supervisor je zariadenie, vyvinuté spoločnosťou Metales pod značkou
                Mestorm Solution, ktoré slúži nariešenie problémov spojených so zlou viditelnosťou priprocese obrábania,
                čím chráni Vašich zamestnancovproti zbytočnému hazardu so zdravím.</p>
        </div>
        <div>
            <img class="w-60 lg:-mt-10" src="{{ asset('images/supervisor.webp') }}" alt="">
        </div>
        <div class="layout p-10 rounded-b-3xl flex items-center">
            <p class="text-white text-xs font-light">Zariadenie, ktoré sa pripevní na vnútornú stranu dveríuzavretých
                CNC zariadení Vám zabezpečí čistý priezoraj počas najťažších procesoch. Princíp fungovaniapodlieha
                vývoju spoločnosti Mestorm. Pre fungovaniezariadenia je potrebný prívod stlačeného vzduchu.</p>
        </div>
    </section>
    <section class="grid lg:grid-cols-2 md:grid-cols-2 p-8 gap-10 lg:py-20 md:py-20 py-10">
        <div class="flex flex-col gap-3">
            <img class="w-12 h-10" src="{{ asset('images/hand.svg') }}" alt="">
            <h2 class="lg:text-3md md:text-3md text-md font-bold">Dostupnosť dielov</h2>
            <p class="lg:text-sm md:text-sm text-xs italic font-light leading-6">Odsávače MS-MD priamo chránia zdravie
                ľudí zamestnaných v kovospracujúcom a strojárskom priemysle, keď minimalizujú ich kontakt s prachom a
                nečistotami v priemyselných miestnostiach ako napríklad kompresorovne, serverovne a pod.</p>
        </div>
        <div class="flex flex-col gap-3">
            <img class="w-12 h-10" src="{{ asset('images/key.svg') }}" alt="">
            <h2 class="lg:text-3md md:text-3md text-md font-bold">Jendoduchá montáž</h2>
            <p class="lg:text-sm md:text-sm text-xs italic font-light leading-6">Pri kúpe MS-Supervisor zákazníkovi
                ponúkame aj odbornú montáž. Nie je však žiadny problém, ak sa zákazník rozhodne inštalovať zariadenie
                samostatne. Súčasťou balenia je kompletný montážny materiál a podrobný návod.
            </p>
        </div>
        <div class="flex flex-col gap-3">
            <img class="w-12 h-10" src="{{ asset('images/eye.svg') }}" alt="">
            <h2 class="lg:text-3md md:text-3md text-md font-bold">Čistý výhľad operátora</h2>
            <p class="lg:text-sm md:text-sm text-xs italic font-light leading-6">MS-MD odsáva prach a nečistoty z
                kompresorovní a serverovní a aj iných priemyslových miestnosti, odkiaľ by sa pri prevádzke kompresorov a
                iných neustále pracujúcich zariadení vytváral prach a usádzal by sa na podlahe, stenách, stropoch a
                ostatných zariadeniach vašej priemyslovej miestnosti.</p>
        </div>
        <div class="flex flex-col gap-3">
            <img class="w-12 h-10" src="{{ asset('images/heart.svg') }}" alt="">
            <h2 class="lg:text-3md md:text-3md text-md font-bold">Dostupnosť dielov</h2>
            <p class="lg:text-sm md:text-sm text-xs italic font-light leading-6">Výrobca odsávačov MS-MD, Metales s. r.
                o. má všetky svoje kompresorovne a serverovne vybavené odsávačmi MS-MD už niekoľko rokov. Merania
                preukázali ich výbornú efektivitu v náročných podmienkach nepretržitej výroby.</p>
        </div>
    </section>
    <section>
        <div class="hidden lg:flex md:flex">
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
