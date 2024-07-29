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
                        <a href="{{route('blog.index')}}"><i class='bx bx-arrow-back'></i>All Blogs</a>
                    </div>
                    <div class="mt-2">
                        <label class="block text-lightGray text-sm font-bold mb-2" for="title">Name</label>
                        <input type="text" id="title" name="title" value="{{old('title', $blog->title)}}" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"/>
                        @error('title')
                            <div class="text-xs text-[red]">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="my-2">
                        <label class="block text-lightGray text-sm font-bold mb-2" for="image">Main image</label>
                        <input type="file" id="image" name="image" value="{{old('image', $blog->image)}}" class="editor shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"/>
                        @error('image')
                            <div class="text-xs text-[red]">{{ $message }}</div>
                        @enderror    
                    </div>
                    <label class="block text-sm font-bold mb-2" for="featured_text">Featured text</label>
                    <div id="quill-editor-1" class="mb-3" style="height: 300px;">
                        {{ old('featured_text', $blog->featured_text) }}
                    </div>
                    <textarea rows="3" class="mb-3 hidden" name="featured_text" id="quill-editor-area-1"></textarea>
                    <label class="block text-sm font-bold mb-2" for="content">Content</label>
                    <div name="content" id="editor" value="{{old('content', $blog->content)}}">{{old('content', $blog->content)}}</div>
                    <div class="mt-4">
                        <button type="submit" class="px-6 py-2 rounded-md text-black border border-gray-900">Vytvoriť</button>
                    </div>
                </div>
            </form>
        </div>
    </x-sidebar>
</x-admin-layout>