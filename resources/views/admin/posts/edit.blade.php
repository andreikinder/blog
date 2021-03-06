<x-layout>
<x-setting heading="Edit post {{$post->title}}">

    <form action="/admin/posts/{{$post->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <x-form.input name="title" :value="old('title',$post->title)"/>
        <x-form.input name="slug" :value="old('slug',$post->slug)" />
        <div class="flex mt-6">
            <div class="flex-1">
                <x-form.input name="thumbnail" type="file" :value="old('thumbnail',$post->thumbnail)" />
            </div>
            <img src="{{ asset('storage/'. $post->thumbnail)}}" alt="" class="rounded-xl ml-6" width="100">
        </div>


        <x-form.textarea name="excerpt">{{old('excerpt', $post->excerpt)}}</x-form.textarea>
        <x-form.textarea name="body">{{old('body', $post->body)}}</x-form.textarea>


        <x-form.field>
            <x-form.label name="category" />
            <select name="category_id" id="" class="border border-gray-200 rounded p-2 w-full focus:outline-none focus:ring">
                @foreach(\App\Models\Category::all() as $category)
                    <option
                        {{old('category_id', $post->category_id) == $category->id ? 'selected': '' }}
                        value="{{$category->id}}">{{ ucwords($category->name)}}</option>
                @endforeach
            </select>
            <x-form.erorr name="category_id" />
        </x-form.field>


        <x-form.button>Publish</x-form.button>
    </form>
</x-setting>




</x-layout>
