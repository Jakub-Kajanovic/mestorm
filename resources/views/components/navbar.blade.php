<ul class="flex flex-row gap-6 text-sm">
    <li><a href="/">Domov</a></li>
    <li><a href="{{route('blog')}}">Blog</a></li>
    <li><a href="">Messin App</a></li>
    <li><a href="{{route('contact')}}">Kontakt</a></li>
    <div class="flex flex-col gap-4">
        <li><a href="" class="flex flex-row gap-3 text-sm cursor-pointer"><img class="w-10 h-8" src="{{asset('images/ukFlag.webp')}}" alt="">EN</a></li>
        <li><a href="" class="flex flex-row gap-3 text-sm cursor-pointer"><img class="w-10 h-8" src="{{asset('images/deFlag.webp')}}" alt="">DE</a></li>    
    </div>
</ul>
