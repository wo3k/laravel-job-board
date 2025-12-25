<x-layout :title="$pageTitle">
    <h1>Edit Comment</h1>
    <h3>Id: {{ $comment ->id }}</h3>
    <h3>Author: {{ $comment ->author }}</h3>
    <h3>Content: {{ $comment ->content }}</h3>
    <h3>Post_id: {{ $comment ->post_id }}</h3>
</x-layout>