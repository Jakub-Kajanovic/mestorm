<header>
    <nav class="container md:flex hidden lg:flex-row md:flex-row lg:p-8 lg:py-12 md:p-6  lg:justify-between md:justify-between mx-auto">
    <div class="flex md:flex-row lg:flex-row gap-4 mb-20">
        <a href="" class="flex flex-row gap-3 text-sm cursor-pointer"><img class="w-10 h-8" src="{{asset('images/ukFlag.webp')}}" alt="">EN</a>
        <a href="" class="flex flex-row gap-3 text-sm cursor-pointer"><img class="w-10 h-8" src="{{asset('images/deFlag.webp')}}" alt="">DE</a>
    </div>
    <div class="flex flex-col lg:ml-36 md:ml-36 items-center">
        <img class="lg:pt-1  lg:w-18 md:w-14" src="{{asset('images/logoSM.png')}}" alt="">
        <h1 class="lg:text-xl md:text-md font-bold flex-nowrap">MESTORM SOLUTION</h1>
        <h1 class="lg:text-md md:text-sm font-light italic flex-nowrap">Zariadenia pre strojárstvo od firmy Metales</h1>
    </div>
    <ul class="flex flex-row gap-6 text-sm">
        <li><a href="/">Domov</a></li>
        <li><a href="{{route('blog')}}">Blog</a></li>
        <li><a href="">Messin App</a></li>
        <li><a href="{{route('contact')}}">Kontakt</a></li>
    </ul>
</div>
</nav>
<nav class="container flex flex-row md:hidden lg:hidden px-8 py-2 mx-auto justify-center gap-10">
<div class="flex pt-1 ml-[4.6rem] flex-col items-center">
    <img class="pt-1 w-10 md:w-14" src="{{asset('images/logoSM.png')}}" alt="">
    <h1 class="text-md font-bold flex-nowrap">MESTORM SOLUTION</h1>
    <h1 class="text-m-md font-light italic flex-nowrap">Zariadenia pre strojárstvo od firmy Metales</h1>
</div>
<div class="flex flex-col gap-4">
    <a href="" class="flex flex-row gap-3 text-sm cursor-pointer"><img class="w-8 h-6" src="{{asset('images/ukFlag.webp')}}" alt=""></a>
    <a href="" class="flex flex-row gap-3 text-sm cursor-pointer"><img class="w-8 h-6" src="{{asset('images/deFlag.webp')}}" alt=""></a>
</div>
</nav>
<x-navbar-mobile />
</header>
