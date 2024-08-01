<header>
    <nav class="container md:flex hidden lg:flex-row md:flex-row lg:p-8 lg:py-12 md:p-6  lg:justify-between md:justify-between mx-auto">
<x-language/>
    <div class="flex flex-col lg:ml-64 md:ml-64 items-center">
        <img class="lg:pt-1  lg:w-18 md:w-14 " src="{{asset('images/logoSM.png')}}" alt="">
        <h1 class="lg:text-xl md:text-md font-bold flex-nowrap">MESTORM SOLUTION</h1>
        <h1 class="lg:text-md md:text-sm font-light italic flex-nowrap">@lang('messages.logo-text')</h1>
    </div>
    <ul class="flex flex-row gap-6 text-sm">
        <li><a href="/">@lang('messages.domov')</a></li>
        <li><a href="{{route('blog')}}">@lang('messages.blog')</a></li>
        <li><a href="">Messin App</a></li>
        <li><a href="{{route('contact')}}">@lang('messages.kontakt')</a></li>
    </ul>
</div>
</nav>
<nav class="container flex flex-row md:hidden lg:hidden px-8 py-2 mx-auto justify-center gap-10">
<div class="flex pt-1 ml-[4.6rem] flex-col items-center">
    <img class="pt-1 w-10 md:w-14" src="{{asset('images/logoSM.png')}}" alt="">
    <h1 class="mt-2 font-bold flex-nowrap">MESTORM SOLUTION</h1>
    <h1 class="text-m-md font-light italic flex-nowrap text-center">Zariadenia pre strojárstvo od firmy Metales</h1>
</div>
<div class="flex flex-col gap-4">
    <a href="{{ route('locale', ['lang' => 'en']) }}" class="flex flex-row gap-3 text-sm cursor-pointer"><img class="w-8 h-6" src="{{asset('images/ukFlag.webp')}}" alt=""></a>
    <a href="{{ route('locale', ['lang' => 'de']) }}" class="flex flex-row gap-3 text-sm cursor-pointer"><img class="w-8 h-6" src="{{asset('images/deFlag.webp')}}" alt=""></a>
    <a href="{{ route('locale', ['lang' => 'sk']) }}" class="flex flex-row gap-3 text-sm cursor-pointer"><img class="w-8 h-6" src="{{asset('images/slovakiaFlag.png')}}" alt=""></a>

</div>
</nav>
<x-navbar-mobile /> 
</header>
