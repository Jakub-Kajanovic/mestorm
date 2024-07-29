<x-layout>
    <x-header />
    <section class="mx-auto container p-8 flex flex-col gap-10 items-center">
        <h1 class="lg:text-3xl md:text-3xl text-3md font-bold">Blog</h1>
        <h2 class="lg:text-1xl md:text-1xl text-sm font-bold lg:text-left md:text-left text-center">Tu nájdete užitočné informácie, rady<br class="lg:hidden md:hidden"> a novinky zo sveta bezpečnostných systémov.</h2>
        @if ($latestBlog)
                <div class="flex lg:flex-row md:flex-row flex-col-reverse rounded-3xl border border-[#E2E2E2] shadow mt-20 overflow-hidden">
                    <div class="p-10 flex flex-col gap-10">
                        <h1 class="font-bold text-2md">{{ $latestBlog->title }}</h1>
                        <div class="font-light text-1md lg:text-1md md:text-1md text-xs leading-6">
                            {!! $latestBlog->featured_text !!}
                        </div>
                        <div class="flex flex-row justify-between">
                            <p class="text-[#718096] lg:text-md md:text-md text-xs leading-6 font-light">{{ $latestBlog->created_at }}</p>
                            <a class="text-1md font-bold text-black" href="{{ route('blog.show', $latestBlog->slug) }}">Read more</a>
                        </div>
                    </div>
                    <div><img class="h-full w-full" src="{{ asset($latestBlog->image) }}" alt=""></div>
                </div>
        @endif
        <div class="border-2 border-[#D9D9D9] w-full mt-10"></div>
    </section>
    <section class="mx-auto container p-8">
        <div class="grid lg:grid-cols-3 md:grid-cols-3 grid-cols-1 gap-10">
            @foreach ($blogs as $blog)               
            <div class="flex flex-col lg:rounded-b-xl md:rounded-b-xl rounded-xl shadow overflow-hidden">
                <img src="{{asset($blog->image)}}" alt="">
                <div class="p-4">
                    <h1 class="text-1md font-bold">{{$blog->title}}</h1>
                    <p class="text-md font-light">
                    {!! $blog->featured_text !!}    
                    </p>
                    <div class="flex flex-row justify-between mt-10">
                        <p class="text-[#718096] text-md font-light">{{$blog->created_at}}</p>
                        <a class="text-md font-bold text-black" href="{{route('blog.show', $blog->slug)}}">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-4 justify-center">
            {{ $blogs->links() }}
        </div>
    </section>
</x-layout>