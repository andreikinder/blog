<x-layout>
    <section class="px-6 py-8">

        <main class="max-w-lg mx-auto mt-10 ">
            <x-panel>
                <h1 class="font-bold text-xl text-center">Log In !</h1>
                <form method="POST" action="/login" class="mt-10">
                    @csrf



                    <x-form.input type="email" name="email" autocomplete="username" />
                    <x-form.input type="password" name="password"  autocomplete="new-password" />

                    <x-form.button>Submit</x-form.button>


                </form>
            </x-panel>


        </main>

    </section>
</x-layout>
