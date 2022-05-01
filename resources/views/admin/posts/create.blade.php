<x-layout>
<x-setting heading="Publish post">
    <form action="/admin/posts/" method="POST" enctype="multipart/form-data">
        @csrf
        <x-form.input name="title"/>
        <x-form.input name="slug"/>
        <x-form.input name="thumbnail" type="file"/>

        <x-form.textarea name="excerpt" />

        <x-form.textarea name="body" />



        <x-form.field>
            <x-form.label name="category" />
            <select name="category_id" id="" class="border border-gray-200 rounded p-2 w-full focus:outline-none focus:ring">
                @foreach(\App\Models\Category::all() as $category)
                    <option
                        {{old('category_id') == $category->id ? 'selected': '' }}
                        value="{{$category->id}}">{{ ucwords($category->name)}}</option>
                @endforeach
            </select>
            <x-form.erorr name="category_id" />
        </x-form.field>


        <x-form.button>Publish</x-form.button>
    </form>
</x-setting>




</x-layout>
