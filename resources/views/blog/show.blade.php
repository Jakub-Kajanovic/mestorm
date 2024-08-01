<x-layout>
    <x-header />
    <section class="mx-auto container p-8">
        <div>
            <a class="text-md font-bold" href="{{ route('blog') }}">
                <i class='bx bx-left-arrow-alt'></i> Všetky články
            </a>
        </div>
        <div class="max-w-4xl mx-auto py-10">
            <img src="{{ asset($blog->image) }}" alt="">
        </div>
        <div class="text-sm font-light">
            {{ $blog->created_at->format('d.m.Y') }}
        </div>
        <article class="flex flex-col gap-10">
            @if ($translation)
                <h1 class="font-bold text-xl text-center">{{ $translation->title }}</h1>
                <p class="font-light text-sm">{!! $translation->content !!}</p>
            @else
                <h1 class="font-bold text-xl text-center">Preklad nie je k dispozícii</h1>
                <p class="font-light text-sm">Tento článok nie je k dispozícii v zvolenom jazyku.</p>
            @endif
        </article>
    </section>
</x-layout>
