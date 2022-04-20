@auth
    <x-panel >
        <form method="POST" action="/posts/{{$post->slug}}/comments">

            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{auth()->id()}}" class="rounded-full" height="40" width="40">
                <h2 class="ml-3">Want to partisipate?</h2>
            </header>
            <div class="mt-6">
                <textarea required name="body" rows="7"  class="w-full text-sm focus:outline-none focus:ring" placeholder="Quick, type something to say !" ></textarea>
                @error('body')
                <span class="text-sm text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <x-form.button>Post</x-form.button>

            </div>

        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a class="hover:underline" href="/register">Register</a> or <a class="hover:underline" href="/login"> login</a> to leave a comment.
    </p>
@endauth
