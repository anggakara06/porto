<x-app-layout title="Users">

    <x-slot name="heading">Users</x-slot>

{{--    <div class="px-4 sm:px-6 lg:px-8">--}}
{{--    </div>--}}

    <div class="sm:flex sm:items-center">
        <x-section-title>
            <x-slot name="title">Users</x-slot>
            <x-slot name="description">
                A list of all the users in your account including their name, title,
                email and role.
            </x-slot>
        </x-section-title>


        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <x-button as="a" href="/users/create">
                Add user
            </x-button>
        </div>
    </div>
<div class="mt-8 flow-root">

    </div>
    <x-table>
        <x-table.thead>
            <tr>
                <x-table.td>#</x-table.td>
                <x-table.td>Name</x-table.td>
                <x-table.td>Email</x-table.td>
                <x-table.td>Created At</x-table.td>
            </tr>
        </x-table.thead>
        <x-table.tbody>
        @foreach($users as $user)
            <tr>
                <x-table.td>{{ $loop->iteration }}</x-table.td>
                <x-table.td>{{ $user->name }}</x-table.td>
                <x-table.td>{{ $user->email }}</x-table.td>
                <x-table.td>{{ $user->created_at->diffForHumans() }}</x-table.td>
            </tr>
        @endforeach
        </x-table.tbody>
    </x-table>
</x-app-layout>
