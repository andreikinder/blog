
<x-layout>
    @include('posts._header')

    @if ($posts->count())

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-posts-grid :posts="$posts"/>
        {{$posts->links()}}
    </main>
    @else
        <p class="text-center">No posts yet. Please come back later.</p>
    @endif
</x-layout>
