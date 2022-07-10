@extends('template.users')
@section('title', 'Visualizar Usuário')
@section('body')
        <h1>Usuário{{ $user->name }}</h1>
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">CPF</th>
                    <th scope="col">TEL</th>
                    <th scope="col">DATA DE NASCIMENTO</th>
                    <th scope="col">EDUCAÇÃO</th>
                    <th scope="col">ENDEREÇO</th>
                    <th scope="col">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->cpf }}</td>
                    <td>{{ $user->tel }}</td>
                    <td>{{ $user->birthDate }}</td>
                    <td>{{ $user->education }}</td>
                    <td>{{ $user->address }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning">EDITAR</a>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-danger">DELETE</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

@endsection