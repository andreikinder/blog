<x-layout>
    <h1>{{$post->title}}</h1>
    <p><small>{{$post->date}}</small></p>
    <p>Category is <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>

    <p>By author {{$post->user->name}}</p>

    {!! $post->body !!}
</x-layout>
