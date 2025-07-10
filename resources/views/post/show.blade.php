<x-layout :title="$pageTitle">
    <h2>{{ $post['title'] }}</h2>
    <p>{{ $post['body'] }}</p>
    <p>Author: {{ $post['author'] }}</p>
</x-layout>
