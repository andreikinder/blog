@props(['heading'])
<section class="px-6 py-8 max-w-4xl mx-auto">
        <h1 class="text-lg font-bold mb-6 border-b pb-3">{{$heading}}</h1>

    <div class="flex">
        <aside class="w-48">
            <h4 class="font-semibold mb-4">Links</h4>
            <ul>
                <li class="mb-1"><a href="/admin/posts/dashboard" class="{{request()->is('admin/posts/dashboard') ? 'text-blue-500' : ''}} " >Dashboard</a></li>
                <li class="mb-1"><a href="/admin/posts/create" class="{{request()->is('admin/posts/create') ? 'text-blue-500' : ''}} ">New Post</a></li>
            </ul>
        </aside>
        <main class="flex-1">
            <x-panel class="mx-auto">
                {{$slot}}
            </x-panel>
        </main>
    </div>


</section>
