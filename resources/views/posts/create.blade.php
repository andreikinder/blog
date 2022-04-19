<x-layout>

    <section class="px-6 py-8 ">
        <x-panel class="max-w-sm mx-auto">
            <h1 class="text-lg font-bold mb-4">Publish post</h1>
            <form action="/admin/posts/" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="my-3">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                        Title
                    </label>
                    <input class="border border-gray-400 p-2 w-full focus:outline-none focus:ring"
                           name="title"
                           id="title"
                           type="text"
                           value="{{@old('title')}}"
                           required >
                    @error('title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>


                <div class="my-3">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="slug">
                        Slug
                    </label>
                    <input class="border border-gray-400 p-2 w-full focus:outline-none focus:ring"
                           name="slug"
                           id="slug"
                           type="text"
                           value="{{@old('slug')}}"
                           required >
                    @error('slug')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>


                <div class="my-3">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="thumbnail">
                        Thumbnail
                    </label>
                    <input class="border border-gray-400 p-2 w-full focus:outline-none focus:ring"
                           name="thumbnail"
                           id="thumbnail"
                           type="file"
                           value="{{@old('thumbnail')}}"
                           required >
                    @error('thumbnail')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="my-3">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="excerpt">
                        Excerpt:
                    </label>
                    <textarea required name="excerpt" rows="7"  class=" border border-gray-400 w-full text-sm focus:outline-none focus:ring" >{{@old('excerpt')}}</textarea>
                    @error('excerpt')
                    <span class="text-sm text-red-500">{{$message}}</span>
                    @enderror
                </div>

                <div class="my-3">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">
                        Body:
                    </label>
                    <textarea required name="body" rows="7"  class=" border border-gray-400 w-full text-sm focus:outline-none focus:ring" >{{@old('body')}}</textarea>
                    @error('body')
                    <span class="text-sm text-red-500">{{$message}}</span>
                    @enderror
                </div>

                <div class="my-3">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                        Category
                    </label>

                    <select name="category_id" id="" class="border border-gray-400 p-2 w-full focus:outline-none focus:ring">
                    @foreach(\App\Models\Category::all() as $category)
                        <option
                            {{old('category_id') == $category->id ? 'selected': '' }}
                            value="{{$category->id}}">{{ ucwords($category->name)}}</option>
                    @endforeach
                    </select>

                    @error('category_id')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <x-submit-button>Publish</x-submit-button>
            </form>
        </x-panel>

    </section>




</x-layout>
