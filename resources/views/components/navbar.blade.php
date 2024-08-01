<ul class="flex flex-row gap-6 text-md">
    <li><a href="/">@lang('messages.domov')</a></li>
    <li><a href="{{route('blog')}}">@lang('messages.blog')</a></li>
    <li><a href="">Messin App</a></li>
    <li><a href="{{route('contact')}}">@lang('messages.kontakt')</a></li>
    <li>
        <x-language/>
    </li>
</ul>
