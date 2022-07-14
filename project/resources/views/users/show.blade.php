@extends('template.users')
@section('title', 'Contrata Dev - Visualizar Usuário')
@section('body')
        <h1>Usuário - {{ $user->name }}</h1>
        <table class="table table-bordered table-dark">
            <thead class="text-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">SOBRE</th>
                    <th scope="col">E-MAIL</th>
                    <th scope="col">EDUCAÇÃO</th>
                    <th scope="col">CIDADE</th>
                    <th scope="col">AÇÕES</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->about }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->education }}</td>
                    <td>{{ $user->city }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">EDITAR</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">EXCLUIR</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
@endsection