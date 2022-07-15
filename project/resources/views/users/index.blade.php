@extends('template.users')
@section('title', 'Contrata Dev - Visualizar Usuário')
@section('body')
<div class='container'>
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
    <div class="row">
        @foreach ($users as $user)
            <div class="col-sm-3">
                <div class="card">
                    <!--<img src="">-->
                    <div class="card-body">
                        <h4 class="card-title">{{ $user->name }}</h4>
                        <span>{{ $user->about }}</span><br>
                        <span><strong>Cidade</strong>: {{ $user->city }}</span><br>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">VISUALIZAR</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="justify-content-center pagination">
        {{ $users->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection