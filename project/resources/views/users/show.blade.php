@extends('template.users')
@section('title', 'Contrata Dev - Visualizar Usuário')
@section('body')
<div class='container'>
   <h1 class="mt-5 mb-4 text-primary">{{ $user->name }}</h1> 
   <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <!--<img src="">-->
                <div class="card-body">
                    <h3 class="card-title">{{ $user->name }}</h3>
                    <span><strong>Sobre</strong>: {{ $user->about }}</span>
                    <span><strong>Cidade</strong>: {{ $user->city }}</span><br>
                    <span><strong>Contato</strong>: {{ $user->email }}</span><br>
                    <span><strong>Escolaridade</strong>: {{ $user->education }}</span><br>
                    <span><strong>Data de cadastro</strong>: {{ $user->created_at }}</span><br>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">EDITAR</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">EXCLUIR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection