<ul class="flex flex-row lg:gap-6 md:gap-6 gap-4 lg:text-md md:text-md text-sm p-2">
    <li><a href="/">@lang('messages.domov')</a></li>
    <li><a href="{{route('blog')}}">@lang('messages.blog')</a></li>
    <li><a href="">Messin App</a></li>
    <li><a href="{{route('contact')}}">@lang('messages.kontakt')</a></li>
    <li>
        <x-language/>
    </li>
</ul>
