<x-layout>
    <section class="contact">
        <nav class="flex flex-row w-full p-8 bg-gradient-to-b from-white to-transparent absolute z-50">
            <div class="container mx-auto justify-between flex lg:flex-row md:flex-row flex-col-reverse">
                <div class="lg:mt-0 md:mt-0 mt-8 hidden lg:flex md:flex">
                    <x-breadcrumbs :links="['Aerosol' => route('supervisor')]" />
                </div>
                <x-price-offer/>
                <x-navbar />
            </div>
        </nav>
        <div>
            <div class="hero-content-contact flex-col">
                <h1 class="font-bold lg:text-3xl md:text-3xl text-3md lg:text-left md:text-left text-center">Ako vám pomôžeme ?</h1>
                <h2
                    class="font-bold lg:text-xl md:text-xl text-md lg:w-[80%] md:w-[80%] w-[100%] lg:text-left md:text-left text-center">
                    Vyrišime takmer všetko!</h2>
                    <div class="mt-20 grid lg:grid-cols-3 md:grid-cols-3 grid-cols-1 lg:gap-10 md:gap-10 gap-4">
                        <div class="layout p-10 rounded-3xl flex lg:flex-row md:flex-row flex-col gap-6 lg:col-span-2 md:col-span-2 lg:justify-start md:justify-start justify-center items-center">
                            <img class="lg:w-80 lg:h-80 md:w-80 md:h-80 w-40 h-40 rounded-3xl -mt-20" src="{{asset('images/sekera.png')}}" alt="">
                            <div class="flex flex-col gap-4">
                                <h3 class="text-white text-sm">Igor Sekyra</h3>
                                <p class="font-bold text-white text-md">Mestorm manager</p>
                                <div class="flex flex-row gap-4 lg:justify-start md:justify-start justify-center items-center">
                                    <img class="w-10 h-8" src="{{asset('images/slovakiaFlag.png')}}" alt="">
                                    <img class="w-10 h-8" src="{{asset('images/ukFlag.webp')}}" alt="">
                                </div>
                                <ul class="flex flex-col lg:gap-4 md:gap-4 gap-2 lg:mt-8 md:mt-8 mt-4 lg:justify-start md:justify-start justify-center items-center">
                                    <a href="mailto:manager@mestorm.eu"><li class="flex flex-row gap-2 text-sm text-white font-light"><img src="{{asset('images/mailwhite.svg')}}" alt="">manager@mestorm.eu</li></a>
                                    <a href="telto:+421 911 703 587"><li class="flex flex-row gap-2 text-sm text-white font-light"><img src="{{asset('images/callwhite.svg')}}" alt="">+421 911 703 587</li></a>
                                </ul>
                            </div>
                        </div>
                        <div class="layout p-10 rounded-3xl flex flex-row gap-10">
                            <div class="flex flex-col gap-4">
                                <h3 class="text-white text-sm">Jaroslav Sklenár</h3>
                                <p class="font-bold text-white text-md">Sales Representative</p>
                                <div class="flex flex-row gap-4 lg:justify-start md:justify-start justify-center items-center">
                                    <img class="w-8 h-6" src="{{asset('images/slovakiaFlag.png')}}" alt="">
                                    <img class="w-8 h-6" src="{{asset('images/ukFlag.webp')}}" alt="">
                                    <img class="w-8 h-6" src="{{asset('images/deFlag.webp')}}" alt="">
                                    <img class="w-8 h-6" src="{{asset('images/russiaFlag.png')}}" alt="">
                                </div>
                                <ul class="flex flex-col gap-4 mt-10 lg:justify-start md:justify-start justify-center items-center">
                                    <a href="mailto:j.sklenar@heat-treatment.com"><li class="flex flex-row gap-2 text-sm text-white font-light"><img src="{{asset('images/mailwhite.svg')}}" alt="">j.sklenar@heat-treatment.com</li></a>
                                    <a href="telto:+421 918 189 834"><li class="flex flex-row gap-2 text-sm text-white font-light"><img src="{{asset('images/callwhite.svg')}}" alt="">+421 918 189 834</li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <section class="container mx-auto p-8 lg:py-20 md:py-20 ">
        <h1 class="font-bold lg:text-2xl md:text-2xl text-md lg:text-left md:text-left text-center">Niečo o nás</h1>
        <p class="font-light lg:text-1md md:text-1md text-xs leading-6 lg:text-left md:text-left text-center">Máte nejaké otázky týkajúce sa našich produktov ? Nejaké špeciálne požiadavky alebo otázky ? <br> Potrebujete poradiť ohľadne nášho produktu ? Alebo máte pre nás nijaké inovácie alebo návrhy ?
        </p>
        <h2 class="font-bold lg:text-2xl md:text-2xl text-md lg:text-left md:text-left text-center pt-20">Mestorm Solutions</h2>
        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 items-center justify-center gap-20">
            <div>
                <p class="lg:text-1md md:text-1md text-xs leading-6 lg:text-left md:text-left text-center font-light">Mestorm je značka založená spoločnosťou Metales s.r.o a bola zaležená v roku 2009, na riešenie problematiky vo vlastnej materinskej spoločnosti. Je podporovaná a financovaná vlastnou výrobou. Nachádzame sa v Dolnom Kubíne, v severnej časti Slovenska.</p>
                <div class="rounded-3xl lg:hidden md:hidden flex mt-10">
                    <img src="{{asset('images/mestormPlace.png')}}" alt="">
                </div>
                <div class="lg:hidden md:hidden flex flex-row items-center gap-6 mt-10 justify-center">
                    <img src="{{asset('images/home.svg')}}" alt="">
                    <p class="text-1md font-light">M. R. Štefánika 1832/44<br>
                        026 01 Dolný Kubín</p>
                </div>
                <div class="lg:flex flex-row gap-6 items-center mt-10 hidden md:flex">
                    <a href=""><img class="w-10 h-10" src="{{asset('images/worldMobile.png')}}" alt=""></a>
                    <a href=""><img class="w-10 h-10" src="{{asset('images/facebook2.png')}}" alt=""></a>
                    <a href=""><img class="w-10 h-10" src="{{asset('images/mail.svg')}}" alt=""></a>
                    <a href=""><img class="w-10 h-10" src="{{asset('images/smallmap.svg')}}" alt=""></a>
                </div>
                <div class="lg:flex md:flex hidden flex-row items-center gap-6 mt-10">
                    <img src="{{asset('images/home.svg')}}" alt="">
                    <p class="text-1md font-light">M. R. Štefánika 1832/44<br>
                        026 01 Dolný Kubín</p>
                </div>
                <div class="lg:hidden flex flex-row gap-10 items-center mt-10 md:hidden justify-center">
                    <a href=""><img class="w-10 h-10" src="{{asset('images/worldMobile.png')}}" alt=""></a>
                    <a href=""><img class="w-10 h-10" src="{{asset('images/facebook2.png')}}" alt=""></a>
                    <a href=""><img class="w-10 h-10" src="{{asset('images/mail.svg')}}" alt=""></a>
                    <a href=""><img class="w-10 h-10" src="{{asset('images/smallmap.svg')}}" alt=""></a>
                </div>
            </div>
            <div class="layout rounded-3xl p-10 lg:flex md:flex hidden">
                <img class="-ml-20" src="{{asset('images/mestormPlace.png')}}" alt="">
            </div>
        </div>
    </section>
    <section class="mx-auto container p-8 lg:py-20 md:py-20" id="form">
        <h2 class="lg:text-2xl md:text-2xl text-md text-center lg:py-20 md:py-20 py-10 font-bold">Kontaktný formulár</h2>
        <form action="{{route('form.submit')}}" method="POST">
            @csrf
            <div class="flex flex-col lg:gap-10 md:gap-10 gap-4 max-w-5xl mx-auto">
                <input type="text" name="name" class="rounded-2xl px-4 lg:py-4 md:py-4 py-2 border-2 border-[#6DCFF6] italic lg:text-1md md:text-1md text-xs leading-6 font-light" placeholder="Meno a Priezvisko" required>
                <input type="email" name="email" class="rounded-2xl px-4 lg:py-4 md:py-4 py-2 border-2 border-[#6DCFF6] italic lg:text-1md md:text-1md text-xs leading-6 font-light" placeholder="Email" required>
                <input type="number" name="phone" class="rounded-2xl px-4 lg:py-4 md:py-4 py-2 border-2 border-[#6DCFF6] italic lg:text-1md md:text-1md text-xs leading-6 font-light" placeholder="Tel. číslo">
                <input type="text" name="company_name" class="rounded-2xl px-4 lg:py-4 md:py-4 py-2 border-2 border-[#6DCFF6] italic lg:text-1md md:text-1md text-xs leading-6 font-light" placeholder="Názov firmy">
                <input type="text" name="company_address" class="rounded-2xl px-4 lg:py-4 md:py-4 py-2 border-2 border-[#6DCFF6] italic lg:text-1md md:text-1md text-xs leading-6 font-light" placeholder="Adresa firmy">
                <textarea name="message" rows="10" class="rounded-2xl px-4 py-4 border-2 border-[#6DCFF6] italic text-1md font-light" placeholder="Správa..." required></textarea>
            </div>
            <div class="flex justify-center mt-10">
                <button type="submit" class="bg-[#6DCFF6] lg:w-auto w-full px-8 py-6 rounded-3xl flex flex-row gap-4 text-1md text-white items-center lg:justify-start md:justify-start justify-center"><img src="{{asset('images/mailwhite.svg')}}" alt="">odoslať správu</button>
            </div>
        </form>
    </section>
</x-layout>

