@props(['name', 'type' => 'text'])
<x-form.field>
    <x-form.label name="{{$name}}" />
    <input class="border border-gray-400 p-2 w-full focus:outline-none focus:ring"
           name="{{$name}}"
           id="{{$name}}"
           type="{{$type}}"
           value="{{@old($name)}}"
           required >
    <x-form.erorr name="{{$name}}" />
</x-form.field>
