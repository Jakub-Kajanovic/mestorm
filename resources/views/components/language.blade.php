<div class="relative">
    <div id="dropdownButton" onclick="toggleDropdown()" class="cursor-pointer items-center lg:text-md md:text-md text-sm rounded-md flex flex-row justify-between">
        @lang('messages.jazyk')<i class='bx bx-chevron-down text-sm'></i>
    </div>
    <div id="dropdown" class="hidden flex flex-col absolute gap-3 w-44 bg-white rounded-md shadow-md px-2 py-2 lg:right-0 right-1">
        <a href="{{ route('locale', ['lang' => 'en']) }}" class="flex flex-row gap-3 text-sm cursor-pointer hover:bg-slate-200 py-2 px-2 rounded-sm">
            <img class="w-10 h-8" src="{{asset('images/ukFlag.webp')}}" alt="">EN
        </a>
        <a href="{{ route('locale', ['lang' => 'de']) }}" class="flex flex-row gap-3 text-sm cursor-pointer hover:bg-slate-200 py-2 px-2 rounded-sm">
            <img class="w-10 h-8" src="{{asset('images/deFlag.webp')}}" alt="">DE
        </a>
        <a href="{{ route('locale', ['lang' => 'sk']) }}" class="flex flex-row gap-3 text-sm cursor-pointer hover:bg-slate-200 py-2 px-2 rounded-sm">
            <img class="w-10 h-8" src="{{asset('images/slovakiaFlag.png')}}" alt="">SK
        </a>
    </div>
</div>

<script>
    function toggleDropdown() {
        let dropdown = document.querySelector('#dropdown');
        dropdown.classList.toggle('hidden');
    }
</script>
