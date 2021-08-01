<x-layout>
    <section class="px-6 py-8">

        <main class="max-w-lg mx-auto mt-10 bg-gray-100
         border border-gray-200 rounded-xl p-6">
            <h1 class="font-bold text-xl text-center">Register</h1>
            <form method="POST" action="/register" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                        Name
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                           name="name"
                           id="name"
                           type="text"
                           value="{{@old('name')}}"
                           required >
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                        Username
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                           name="username"
                           id="username"
                           type="text"
                           value="{{@old('username')}}"
                            required >
                    @error('username')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                        Email
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                           name="email"
                           id="email"
                           type="email"
                           value="{{@old('email')}}"
                           required >
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                        Password
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                           name="password"
                           id="password"
                           type="password"
                           required >
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>
            </form>

            @if ($errors->any())
                <ul>
                @foreach($errors->all() as $error)
                    <li class="text-red-500 text-xs">{{$error}}</li>
                @endforeach
                </ul>
            @endif
        </main>

    </section>
</x-layout>
