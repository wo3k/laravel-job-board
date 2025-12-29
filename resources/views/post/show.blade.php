<x-layout :title="$pageTitle">
    @if (session('sucsses'))
        <div class="bg-green-50 px-3 py2">
            {{ session('sucsses') }}
        </div>
    @endif
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <p>{{ $post->author }}</p>
    <ul class="mt-6 space-y-4">
        @foreach ($post->comments as $comment)
            <li class="p-4 bg-gray-100 rounded-md shadow-sm">
                <p class="text-gray-800">{{ $comment->content }}</p>
                <span class="mt-1 text-sm text-gray-600">
                    — {{ $comment->author }}
                </span>
            </li>
        @endforeach
    </ul>
    <div id="comment-form" class="border border-gray-300 px-3 py-2 mt-2">
        <form method="POST" action="/comments" class="mt-8">
            @csrf

            <input type="hidden" name="post_id" value="{{ $post->id }}">

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="author" class="block text-sm/6 font-medium text-gray-900">Your Name</label>
                            <div class="mt-2">
                                <input id="author" type="text" value="{{ old('author') }}" name="author"
                                    autocomplete="family-name"
                                    class=" {{ $errors->has('author') ? 'outline-red-500' : 'outline-gray-300' }} block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                            </div>
                            @error('author')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-span-full">
                            <label for="content" class="block text-sm/6 font-medium text-gray-900">Your Comment</label>
                            <div class="mt-2">
                                <textarea id="content" name="content" rows="4"
                                    class=" {{ $errors->has('content') ? 'outline-red-500' : 'outline-gray-300' }} block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ old('content') }}</textarea>
                            </div>
                            <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about yourself.</p>
                            @error('content')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-4">
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Add Comment
                </button>
            </div>
        </form>
    </div>

    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const form = document.getElementById('comment-form');
                if (form) {
                    form.scrollIntoView({ behavior: 'smooth' });
                }
            });
        </script>
    @endif
</x-layout>