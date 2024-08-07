<nav {{ $attributes }}>
    <ul class="flex space-x-4 text-slate-500">
        <li>
            <a href="/">Domov</a>
        </li>  

        @foreach ($links as $label => $link)
        <li>
            <i class="fa-solid fa-arrow-right"></i>
        </li>
        <li>
            <a href="{{ $link }}">{{ $label }}</a>
        </li>
        @endforeach
    </ul>
</nav>