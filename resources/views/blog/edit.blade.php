<x-admin-layout>
    <x-sidebar>
        <div>
            <form method="POST" action="{{ route('blog.update', $blog->slug) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="max-w-7xl mx-auto">
                    <div class="text-xl">
                        <a href="{{route('blog.index')}}"><i class='bx bx-arrow-back'></i>All Blogs</a>
                    </div>
                    <div class="mt-4">
                        <label class="block text-sm font-bold mb-2" for="title">Title</label>
                        <input type="text" id="title" name="title" value="{{ old('title', $blog->title) }}" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"/>
                        @error('title')
                            <div class="text-xs text-[red]">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="my-4">
                        <label class="block text-sm font-bold mb-2" for="image">Main Image</label>
                        <input type="file" id="image" name="image" class="editor shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"/>
                        @error('image')
                            <div class="text-xs text-[red]">{{ $message }}</div>
                        @enderror    
                        @if($blog->image)
                            <div class="mt-4">
                                <img src="{{ $blog->image }}" alt="Hlavný obrázok" class="w-20 h-20">
                            </div>
                        @endif
                    </div>

                    <label class="block text-sm font-bold mb-2" for="featured_text">Featured text</label>
                    <div id="quill-editor-1" class="mb-3" style="height: 300px;">
                        {{ old('featured_text', $blog->featured_text) }}
                    </div>
                    <textarea rows="3" class="mb-3 hidden" name="featured_text" id="quill-editor-area-1"></textarea>
                    <label class="block text-sm font-bold mb-2" for="content">Content text</label>
                    <div id="quill-editor-2" class="mb-3 overflow-hidden" style="height: 300px;">
                        {{ old('content', $blog->content) }}
                    </div>
                    <textarea rows="3" class="mb-3 hidden" name="content" id="quill-editor-area-2"></textarea>
                    <div class="mt-4">
                        <button type="submit" class="px-6 py-2 rounded-md text-black border border-gray-900">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </x-sidebar>
</x-admin-layout>
