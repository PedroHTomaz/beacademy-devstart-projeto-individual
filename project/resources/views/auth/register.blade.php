@extends('template.users')
@section('title', 'Contrata Dev - Novo Usuário')
@section('body')
<div class="d-flex align-items-center my-5">
    <div>
        <img src="{{ asset('assets/developer.svg') }}" alt="ilustração de uma pessoa no computador" class="img-fluid col-8">
    </div>
    <div class="w-50">
        <h1 class="text-center mb-4">Cadastrar</h1>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="pb-2">Nome:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" required>

                <label for="description" class="py-2">Breve descrição sobre você:</label><br>
                <textarea name="about" id="about" class="form-control" required></textarea>
                
                <label for="email" class="py-2">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
                
                <label for="password" class="py-2">Senha:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required>

                <div class="my-3">
                    <label for="education" class="pb-2">Escolaridade: </label>
                    <select name="education" id="education" class="form-control" required>
                        <option value="" selected> ------- SELECIONE ------- </option>
                        <option value="Fundamental Incompleto">Fundamental Incompleto</option>
                        <option value="Fundamental Completo">Fundamental Completo</option>
                        <option value="Médio Incompleto">Médio Incompleto</option>
                        <option value="Médio Completo">Médio Completo</option>
                        <option value="Superior Incompleto">Superior Incompleto</option>
                        <option value="Superior Completo">Superior Completo</option>
                    </select>
                </div>

                <label for="city" class="py-2">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Digite sua cidade" required>
            </div>
            <button type="submit" class="mt-3 btn btn-primary">Cadastrar</button>
        </form>
    </div>
</div>
@endsection