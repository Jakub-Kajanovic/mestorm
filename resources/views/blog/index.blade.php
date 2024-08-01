<x-admin-layout>
    <x-sidebar>
        <div class="text-xl py-20">
            <a href="{{route('blog.create')}}"><i class='bx bx-edit-alt' ></i>Vytvoriť blog</a>
        </div>
            @if(session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <span class="font-medium">Success alert!</span> {{ session('success') }}
            </div>
            @endif
            <div class="overflow-x-auto shadow-md sm:rounded-lg max-w-6xl justify-center">
                <table class="w-full min-w-[600px] text-xs text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-2 py-2">Name</th>
                            <th scope="col" class="px-2 py-2">Slug</th>
                            <th scope="col" class="px-2 py-2">Date</th>
                            <th scope="col" class="px-2 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-2 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $blog->title }}
                            </th>
                            <td class="px-2 py-2">
                                {{ $blog->slug }}
                            </td>
                            <td class="px-2 py-2">
                                {{ $blog->created_at->format('d-m-Y') }}
                            </td>
                            <td class="flex items-center px-2 py-2 space-x-2">
                                <a href="{{ route('blog.edit', $blog->slug) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="{{ route('blog.show', $blog->slug) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                                <button data-modal-target="popup-modal-{{ $blog->id }}" data-modal-toggle="popup-modal-{{ $blog->id }}" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @foreach ($blogs as $blog)
            <!-- Modal -->
            <div id="popup-modal-{{ $blog->id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal-{{ $blog->id }}">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this blog?</h3>
                            <form method="POST" action="{{ route('blog.destroy', $blog->id) }}" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button data-modal-hide="popup-modal-{{ $blog->id }}" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                    Yes, I'm sure
                                </button>
                            </form>
                            <button data-modal-hide="popup-modal-{{ $blog->id }}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </x-sidebar>
</x-admin-layout>
