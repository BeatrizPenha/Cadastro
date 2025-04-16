<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;



class UserController extends Controller
    {
    public function index()
    {

        $users= User::orderByDesc('id')->get;

        return view('user.index' , ['users' =>$users]);
        
    }

    public function show(User $users) 
    {
        return view('users.show', ['user' ->$users]);

    }

    public function create()
    {

        return view('users.create');
        
    }

    public function store(UserRequest $request)
    {


        $request->validated();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,

    ]);

    return to_route(route: 'user.index')->with('success', 'Usuário cadastrado com sucesso!');


    }

    public function edit(User $user)
    
    {
        return view('users.edit', ['user' ->$users]);

    }

    public function update(UserRequest $request)
    {
        $request->validated();

    }

    }