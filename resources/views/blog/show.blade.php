<x-layout>
    <x-header />
    <section class="mx-auto container p-8">
        <div>
            <a class="text-md font-bold " href="{{route('blog')}}"><i class='bx bx-left-arrow-alt'></i>Všetky články</a>
        </div>
        <div class="max-w-4xl mx-auto py-10">
            <img src="{{asset($blog->image)}}" alt="">
        </div>
        <div class="text-sm font-light">
            {{$blog->created_at}}
        </div>
        <article class="flex flex-col gap-10">
            <h1 class="font-bold text-xl text-center">{{$blog->title}}</h1>
            <p class="font-light text-sm"><?php echo $blog->content ?></p>
        </article>
    </section>
</x-layout>