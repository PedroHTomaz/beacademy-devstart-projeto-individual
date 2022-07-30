<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index(Request $request)
    {
        $users = $this->model->getUsers(
            $request->search ?? ''
        );

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function login()
    {
        return view('users.login');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $this->model->create($data);

        return redirect()->route('users.index')->with('flash_message', 'Pronto! Cadastrado com sucesso.');
    }

    public function show($id)
    {
        if(!$user = User::findOrFail($id)) {
            return redirect()->route('users.index');
        }

        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        if(!$user = $this->model->find($id)){
            return redirect()->route('users.index');
        }

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        if(!$user = $this->model->find($id)){
            return redirect()->route('users.index');
        }

        $data = $request->only('name', 'email', 'about', 'education', 'city');
        if($request->password){
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);

        return redirect()->route('users.index')->with('flash_message', 'Pronto! Editado com sucesso!');
    }

    public function destroy($id)
    {
        if(!$user = $this->model->find($id)){
            return redirect()->route('users.index');
        }

        $user->delete();

        return redirect()->route('users.index')->with('flash_message', 'Pronto! Excluido com sucesso.');
    }
}
