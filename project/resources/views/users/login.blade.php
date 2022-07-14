@extends('template.users')
@section('title', 'Contrata Dev - Entrar')
@section('body')
<div class="container">
    <h1 class="text-center">Entrar</h1>
    <div class="form-group">
        <form action="" method="POST">
            <label for="email" class="py-2">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
                        
            <label for="password" class="py-2">Senha</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha">
        </form>
    </div>
</div>