<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>



    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <!--  Category -->
        <div class="relative  lg:inline-flex  bg-gray-100 rounded-xl ">
            <x-category-dropdown />
        </div>



        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/">
                @if(request('category'))
                    <input type="text" name="category"  hidden value="{{request('category')}}">
                @endif
                <input type="text"
                       name="search"
                       placeholder="Find something"
                       value="{{request('search')}}"
                       class="bg-transparent placeholder-black font-semibold text-sm">
                <button hidden type="submit">submit</button>
            </form>
        </div>
    </div>
</header>
