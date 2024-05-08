<x-app-layout title="Create User">

    <x-slot name="heading">
        Create User
    </x-slot>

    <form action="/users" method="post" class="space-y-6">
        @csrf
        <div>
            <label for="name">Name</label>
            <input class="border px-4 py-2 rounded block mt-1" type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input class="border px-4 py-2 rounded block mt-1" type="text" name="email" id="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input class="border px-4 py-2 rounded block mt-1" type="password" name="password" id="password">
        </div>
        <x-button as="button">Save</x-button>
{{--        <button class="block rounded-md bg-blue-600 px-3 py-2 text-center text-sm font-medium text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Save 10</button>--}}
    </form>
</x-app-layout>
