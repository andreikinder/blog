@if( session()->has('success'))
<div
    x-data="{ show : true}"
    x-init="setTimeout (() => show = false, 4000 )"
    x-show="show"
    class="bg-blue-500 text-sm text-white bottom-3 fixed right-3 p-4 rounded">
    <p>{{session('success')}}</p>
</div>
@endif
