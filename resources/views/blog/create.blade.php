<x-admin-layout>
    <x-sidebar>
        <div>
            <div>
                @if(session('success'))
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                        <span class="font-medium">Success alert!</span> {{ session('success') }}
                    </div>
                @endif
            </div>
            <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="max-w-7xl mx-auto">
                    <div class="text-md">
                        <a href="{{ route('blog.index') }}"><i class='bx bx-arrow-back'></i>All Blogs</a>
                    </div>
                    <div class="my-2">
                        <label class="block text-lightGray text-sm font-bold mb-2" for="image">Main Image</label>
                        <input type="file" id="image" name="image" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"/>
                        @error('image')
                            <div class="text-xs text-[red]">{{ $message }}</div>
                        @enderror    
                    </div>
                    
                    <!-- English translation -->
                    <div class="mt-4">
                        <h3 class="font-bold text-lg">English</h3>
                        <div>
                            <label class="block text-sm font-bold mb-2" for="title_en">Title</label>
                            <input type="text" id="title_en" name="translations[en][title]" value="{{ old('translations.en.title', $blog->getTranslation('en')->title ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"/>
                            @error('translations.en.title')
                                <div class="text-xs text-[red]">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label class="block text-sm font-bold mb-2" for="featured_text_en">Featured Text</label>
                            <textarea name="translations[en][featured_text]" id="myeditorinstance" class="editor">{{ old('translations.en.featured_text', $blog->getTranslation('en')->featured_text ?? '') }}</textarea>
                            @error('translations.en.featured_text')
                                <div class="text-xs text-[red]">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label class="block text-sm font-bold mb-2" for="content_en">Content</label>
                            <textarea name="translations[en][content]" id="myeditorinstance" class="editor">{{ old('translations.en.content', $blog->getTranslation('en')->content ?? '') }}</textarea>
                            @error('translations.en.content')
                                <div class="text-xs text-[red]">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Slovak translation -->
                    <div class="mt-4">
                        <h3 class="font-bold text-lg">Slovak</h3>
                        <div>
                            <label class="block text-sm font-bold mb-2" for="title_sk">Title</label>
                            <input type="text" id="title_sk" name="translations[sk][title]" value="{{ old('translations.sk.title', $blog->getTranslation('sk')->title ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"/>
                            @error('translations.sk.title')
                                <div class="text-xs text-[red]">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label class="block text-sm font-bold mb-2" for="featured_text_sk">Featured Text</label>
                            <textarea name="translations[sk][featured_text]" id="myeditorinstance" class="editor">{{ old('translations.sk.featured_text', $blog->getTranslation('sk')->featured_text ?? '') }}</textarea>
                            @error('translations.sk.featured_text')
                                <div class="text-xs text-[red]">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label class="block text-sm font-bold mb-2" for="content_sk">Content</label>
                            <textarea name="translations[sk][content]" id="myeditorinstance" class="editor">{{ old('translations.sk.content', $blog->getTranslation('sk')->content ?? '') }}</textarea>
                            @error('translations.sk.content')
                                <div class="text-xs text-[red]">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- German translation -->
                    <div class="mt-4">
                        <h3 class="font-bold text-lg">German</h3>
                        <div>
                            <label class="block text-sm font-bold mb-2" for="title_de">Title</label>
                            <input type="text" id="title_de" name="translations[de][title]" value="{{ old('translations.de.title', $blog->getTranslation('de')->title ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"/>
                            @error('translations.de.title')
                                <div class="text-xs text-[red]">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label class="block text-sm font-bold mb-2" for="featured_text_de">Featured Text</label>
                            <textarea name="translations[de][featured_text]" id="myeditorinstance" class="editor">{{ old('translations.de.featured_text', $blog->getTranslation('de')->featured_text ?? '') }}</textarea>
                            @error('translations.de.featured_text')
                                <div class="text-xs text-[red]">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label class="block text-sm font-bold mb-2" for="content_de">Content</label>
                            <textarea name="translations[de][content]" id="myeditorinstance" class="editor">{{ old('translations.de.content', $blog->getTranslation('de')->content ?? '') }}</textarea>
                            @error('translations.de.content')
                                <div class="text-xs text-[red]">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="px-6 py-2 rounded-md text-black border border-gray-900">Vytvoriť</button>
                    </div>
                </div>
            </form>
        </div>
    </x-sidebar>
</x-admin-layout>
