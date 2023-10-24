@extends('layouts.app')

@section('title','Criação')

@section('content')

<div class="container mt-5">
    <h1>Crie um novo usuario</h1>
    <hr>
    <form action="{{ route('usuarios-store') }}" method="POST">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite um nome...">
            </div>
            <br>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" placeholder="Digite um email...">
            </div>
            <br>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="numeric" class="form-control" name="idade" placeholder="Digite sua idade...">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>

@endsection