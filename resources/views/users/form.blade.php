<x-app-layout title="Create User">
    <x-slot name="heading">
        Update User : {{ $user->name }}
    </x-slot>

    <form action="/users/{{ $user->id }}" method="post" class="space-y-6">
        @method('PUT')
        @csrf
        <div>
            <label for="name">Name</label>
            <input value="{{ old('name',$user->name) }}" class="border px-4 py-2 rounded block mt-1" type="text" name="name" id="name" >
            @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="email">Email</label>
            <input value="{{ old('email',$user->email) }}" class="border px-4 py-2 rounded block mt-1" type="text" name="email" id="email" >
            @error('email')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input class="border px-4 py-2 rounded block mt-1" type="password" name="password" id="password">
            @error('password')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <x-button>Update</x-button>
    </form>
</x-app-layout>
