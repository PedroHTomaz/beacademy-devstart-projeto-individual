@extends('template.users')
@section('title', 'Novo Usuário')
@section('body')
    <div class="my-3">
        <h1 class="text-center mb-4">Cadastrar</h1>

        <div>
            <img src="{{ asset('assets/developer.svg') }}" alt="ilustração de uma pessoa no computador" height="400 rem">
        </div>

        <form action="{{ route('users.store') }}" method="POST" class="w-50 ms-auto">
            @csrf
            <div class="form-group">
                <label for="name" class="pb-2">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome">

                <label for="description" class="py-2">Breve descrição</label><br>
                <textarea name="description" id="description" class="form-control"></textarea>
            
                <label for="email" class="py-2">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
            
                <label for="password" class="py-2">Senha</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha">
            
                <label for="tel" class="py-2">Telefone</label>
                <input type="tel" class="form-control" id="tel" name="tel" placeholder="Digite seu telefone">
            
                <label for="date" class="py-2">Data de Nascimento</label>
                <input type="date" class="form-control" id="birthDate" name="birthDate" placeholder="Digite sua data de nascimento">

                <div class="my-3">
                    <label for="education" class="pb-2">Escolaridade: </label>
                    <select name="education" id="education" class="form-control">
                        <option value="" selected> ------- SELECIONE ------- </option>
                        <option value="Fundamental Incompleto">Fundamental Incompleto</option>
                        <option value="Fundamental Completo">Fundamental Completo</option>
                        <option value="Médio Incompleto">Médio Incompleto</option>
                        <option value="Médio Completo">Médio Completo</option>
                        <option value="Superior Incompleto">Superior Incompleto</option>
                        <option value="Superior Completo">Superior Completo</option>
                    </select>
                </div>

                <label for="city" class="py-2">Cidade</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Digite seu endereço">
            </div>
            <button type="submit" class="mt-3 btn btn-primary">Cadastrar</button>
        </form>
    </div>
@endsection