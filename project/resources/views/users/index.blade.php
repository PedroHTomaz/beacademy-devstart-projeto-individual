@extends('template.users')
@section('title', 'Usuários')
@section('body')
        <h1>Usuários</h1>
        <table class="table table-bordered table-dark">
            <thead class="text-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">DESCRIÇÃO</th>
                    <th scope="col">AÇÕES</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->description }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">VISUALIZAR</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

@endsection