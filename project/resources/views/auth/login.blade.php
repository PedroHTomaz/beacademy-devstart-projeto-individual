@extends('template.users')
@section('title', 'Contrata Dev - Entrar')
@section('body')
<div class="d-flex align-items-center my-5">
    <div class="">
        <img src="{{ asset('assets/developer.svg') }}" alt="ilustração de uma pessoa no computador" class="img-fluid col-8">
    </div>
    <div class="w-50">
        <form action="{{ route('login') }}" method="POST" class="form-group">
            @csrf
            <h1 class="text-center mb-4">Entrar</h1>
            <div class="form-group">
                <label for="email" class="py-2">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
                
                <label for="password" class="py-2">Senha:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha">

                <a href="{{ route('password.request') }}">Esqueceu a Senha?</a>
            </div>
            <button type="submit" class="mt-3 btn btn-primary">ENTRAR</button>
        </form>
    </div>
</div>
@endsection