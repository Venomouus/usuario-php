@extends('layouts.app')

@section('title','Edição')

@section('content')

<div class="container mt-5">
    <h1>Editar um usuario</h1>
    <hr>
    <form action="{{ route('usuarios-update', ['id'=>$usuarios->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" value="{{$usuarios->nome}}" placeholder="Digite um nome...">
            </div>
            <br>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value="{{$usuarios->email}}" placeholder="Digite um email...">
            </div>
            <br>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="numeric" class="form-control" name="idade" value="{{$usuarios->idade}}" placeholder="Digite sua idade...">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Atualizar">
            </div>
        </div>
    </form>
</div>

@endsection