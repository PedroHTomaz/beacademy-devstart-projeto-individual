@extends('template.users')
@section('title', 'Contrata Dev')
@section('body')
<div class="d-flex flex-row-reverse justify-content-center align-items-center home">
    <div>
        <h1 class="display-3">Contrata Dev</h1>
        <hr>
        <p class="lead">
            Aqui você encontra os melhores devs do mercado!<br>
            E o melhor: de maneira <strong>SIMPLES</strong> e <strong>FÁCIL</strong>.
        </p>
        <div class="text-end">
            <a href="{{ route('users.login') }}" class="btn btn-primary my-2">ENTRAR</a>
            <a href="{{ route('users.create') }}" class="btn btn-outline-primary px-4 ms-3">CADASTRAR</a>
        </div>
    </div>
    <div>
        <img src="{{ asset('assets/interview.svg') }}" alt="ilustração de uma entrevista" height="400 rem" class="img-fluid col-8">
    </div>
</div>
@endsection