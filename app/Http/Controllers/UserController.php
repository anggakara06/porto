<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->latest()->get();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.form', [
            'user' => new User(),
            'page_meta' => [
                'title' => 'Create new User',
                'method' => 'post',
                'url' => '/users',
                'submit_text' => 'Save',
            ]

        ]);
    }

    public function store(Request $request)
    {
        User::create($request->validate($this->requestValidated()));
        return redirect('/users');
    }

    public function show(User $user)
    {
        return view('users/show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users/form', [
            'user' =>$user,
            'page_meta' => [
                'title' => 'Edit User :'.$user->name,
                'method' => 'put',
                'url' => '/users/'.$user->id,
                'submit_text' => 'Update',
            ]
        ]);
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->validate($this->requestValidated()));
        return redirect('/users');
    }

    protected function requestValidated(): array
    {
            return [
            'name' => ['required', 'min:3', 'max:255', 'string'],
            'email' => 'required|email',
            'password' => ['required', 'min:8']
        ];
    }
}
