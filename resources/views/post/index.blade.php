<x-layout :title="$pageTitle">
  @if (session('sucsses'))
    <div class="bg-green-50 px-3 py2">
      {{ session('sucsses') }}
    </div>
  @endif
  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/blog/create"
      class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
      Create New Post</a>
  </div>
  @foreach ($posts as $post)
    <div class="flex justify-between items-center border border-gray-200 px-4 py-6 my-2">
      <div class="flex-1">
        <h1 class="text-2xl">
          <a href="/blog/{{ $post->id }}">{{ $post->title }}</a>
        </h1>
        <p class="text-xl">{{ $post->author }}
        </p>
      </div>

      <div class="flex gap-2 whitespace-nowrap">
        <a class="text-yellow-500 hover:text-gray-500" href="/blog/{{ $post->id }}/edit">Edit</a>
        <form method="POST" action="/blog/{{ $post->id }}"
          onsubmit="return confirm('Are You Sure You Want To Delete This Post')">
          @csrf
          @method('DELETE')
          <button class="text-red-500 hover:text-gray-500">Delete</button>
        </form>
      </div>
    </div>

  @endforeach

  {{ $posts->links() }}
</x-layout>