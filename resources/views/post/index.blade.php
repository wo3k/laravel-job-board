<x-layout :title="$pageTitle">
    <h1>Blog</h1>
    @foreach ($posts as $post)
    <h1 class="text-2xl">{{ $post->title }}</h1>
    <p class="text-1xl">{{ $post->author }}</p>
    <p>{{ $post->body }}</p>
    @endforeach

    {{ $posts->links() }}
</x-layout>