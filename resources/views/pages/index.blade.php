<x-layout>
<x-header />
    <section class="flex lg:flex-row md:flex-row flex-col gap-10" data-aos="zoom-in">
    <a class="cursor-pointer hover:scale-105 transition-all duration-700" href="{{route('aerosol')}}">
        <div class="flex flex-col picture1">
            <img class="hidden lg:flex md:flex" src="{{asset('images/picture1.webp')}}" alt="">
            <h2 class="text-2md font-medium lg:pl-8 md:pl-8 ">MS-S / MS-M / MS-L</h2>
            <p class="text-sm italic lg:pl-8 md:pl-8 px-8">@lang('messages.ms-s-home')</p>
        </div>
    </a>
    <a class="cursor-pointer hover:scale-105 transition-all duration-700" href="{{route('supervisor')}}">
        <div class="flex flex-col picture2">
            <img class="hidden lg:flex md:flex" src="{{asset('images/picture2.webp')}}" alt="">
            <h2 class="text-2md font-medium lg:pl-8 md:pl-8">MS-Supervisor</h2>
            <p class="text-sm italic lg:pl-8 md:pl-8 px-8">@lang('messages.ms-supervisor-home')</p>
        </div>
    </a>
    <a class="cursor-pointer hover:scale-105 transition-all duration-700" href="{{route('waste')}}">
        <div class="flex flex-col picture3">
            <img class="hidden lg:flex md:flex" src="{{asset('images/picture3.webp')}}" alt="">
            <h2 class="text-2md font-medium lg:pl-8 md:pl-8">MS-WASTE</h2>
            <p class="text-sm italic lg:pl-8 md:pl-8 px-8">@lang('messages.ms-waste-home')</p>
        </div>
    </a>
    <a class="cursor-pointer hover:scale-105 transition-all duration-700" href="{{route('dust')}}">
        <div class="flex flex-col picture4">
            <img class="hidden lg:flex md:flex" src="{{asset('images/picture4.webp')}}" alt="">
            <h2 class="text-2md font-medium lg:pl-8 md:pl-8">MS-DUST</h2>
            <p class="text-sm italic lg:pl-8 md:pl-8 px-8">@lang('messages.ms-dust-home')</p>
        </div>
    </a>
    </section>
    <section class="container mx-auto flex-col py-20 px-8">
        <div class="flex lg:flex-row md:flex-row flex-col mx-auto justify-center items-center gap-2">
            <x-price-offer/>
        </div>
        <div class="max-w-2xl mx-auto pt-20">
            <img src="{{asset('images/map.webp')}}" alt="">
        </div>
    </section>
</x-layout>