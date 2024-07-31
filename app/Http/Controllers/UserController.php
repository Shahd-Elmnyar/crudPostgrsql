<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index')->with('users', $users);
    }
    public function show($id){
        // return view('users.show');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(RegisterRequest $request, string $id)
    {
        // dd($request->validated());
        if($request->isMethod('patch')) {
            $data = $request->validated();
            $data['password'] = bcrypt($data['password']);
            User::where('id', $id)->update($data);
            // dd($data);
            return redirect()->route('user.index');
        }
    }
    public function create()
    {
        return view('users.create');
    }

    public function store(RegisterRequest $request){
        if ($request->isMethod('post')) {
            $data = $request->validated();
            // dd($data);
            $data['password'] = bcrypt($data['password']);
            User::create($data);
            return redirect()->back()->withSuccess('User created successfully');
        }
    }
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
