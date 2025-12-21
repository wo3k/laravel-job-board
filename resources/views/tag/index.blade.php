<x-layout :title="$pageTitle">
    <h1>Tags</h1>
    @foreach ($tags as $tag)
    <h1 class="text-2xl">{{ $tag->title }}</h1>
    @endforeach
</x-layout>