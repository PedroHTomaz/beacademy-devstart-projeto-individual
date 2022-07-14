@extends('template.users')
@section('title', 'Contrata Dev - Usuários')
@section('body')
        <h1>Usuários</h1>

        <div class="container">
            <div class="row">
                <div class="col-sm mt-2 mb-5">
                    <form action="{{ route('users.index') }}" method="GET">
                        <div class="input-group">
                            <input type="search" class="form-control rounded" name="search" />
                            <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <table class="table table-bordered table-dark">
            <thead class="text-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">SOBRE</th>
                    <th scope="col">CIDADE</th>
                    <th scope="col">AÇÕES</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->about }}</td>
                    <td>{{ $user->city }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">VISUALIZAR</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

@endsection