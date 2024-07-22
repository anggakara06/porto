@php
    use Carbon\Carbon;
@endphp
<x-app-layout title="Users">

    <x-slot name="heading">{{$user->name}}</x-slot>

    <div>
        <div class="mt-8 bg-white overflow-hidden shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">User Information</h3>
                <p class="mt-1 max-w>2xl text-sm text-gray-500">Personal details and application.</p>
                <div>==========================================</div>
                <div>{{ $user->email }}</div>
                <div>{{ $user->created_at->diffForHumans() }}</div>
            </div>
        </div>
    </div>

</x-app-layout>
