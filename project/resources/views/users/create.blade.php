@extends('template.users')
@section('title', 'Novo Usuário')
@section('body')
    <h1>Cadastrar</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome">
        
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
        
            <label for="password">Senha</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha">
        
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF">
        
            <label for="tel">Telefone</label>
            <input type="tel" class="form-control" id="tel" name="tel" placeholder="Digite seu telefone">
        
            <label for="date">Data de Nascimento</label>
            <input type="date" class="form-control" id="birthDate" name="birthDate" placeholder="Digite sua data de nascimento">

            <div class="my-3">
                <label for="education">Escolaridade: </label>
                <select name="education" id="education">
                    <option value="" selected> ------- SELECIONE ------- </option>
                    <option value="Fundamental Incompleto">Fundamental Incompleto</option>
                    <option value="Fundamental Completo">Fundamental Completo</option>
                    <option value="Médio Incompleto">Médio Incompleto</option>
                    <option value="Médio Completo">Médio Completo</option>
                    <option value="Superior Incompleto">Superior Incompleto</option>
                    <option value="Superior Completo">Superior Completo</option>
                </select>
            </div>

            <label for="address" class="form-label">Endereço Completo</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Digite seu endereço">            
        </div>
        <button type="submit" class="mt-3 btn btn-primary">Cadastrar</button>
    </form>
@endsection