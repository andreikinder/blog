@props(['name'])
<x-form.field>
    <x-form.label name="{{$name}}" />
    <textarea required
              name="{{$name}}"
              id="{{$name}}"

              rows="7"  class=" border border-gray-200 rounded w-full text-sm focus:outline-none focus:ring" >{{@old($name)}}</textarea>
    <x-form.erorr name="{{$name}}" />
</x-form.field>

