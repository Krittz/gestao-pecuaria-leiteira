@extends('app')

@section('title', 'Animais')

@section('content')
<h1>Animais</h1>

@if (session('success'))
<div>
    {{ session('success') }}
</div>
@endif

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Imagem</th>
            <th>Sexo</th>
            <th>Nascimento</th>
            <th>Prenhez</th>
            <th>Mãe</th>
            <th>Pai</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($animals as $animal)
        <tr>
            <td>{{ $animal->id }}</td>
            <td>{{ $animal->nome }}</td>
            <td>
                @if ($animal->imagem)
                <img src="{{ asset('storage/' . $animal->imagem) }}" alt="{{ $animal->nome }}" width="100">
                @else
                Sem imagem
                @endif
            </td>
            <td>{{ $animal->sexo }}</td>
            <td>{{ $animal->nascimento }}</td>
            <td>{{ $animal->prenhez ? 'Sim' : 'Não' }}</td>
            <td>{{ $animal->mae ? $animal->mae->nome : 'N/A' }}</td>
            <td>{{ $animal->pai ? $animal->pai->nome : 'N/A' }}</td>
            <td>
                <!-- Aqui você pode adicionar links para editar ou deletar o animal -->
                <a href="#">Editar</a>
                <form action="#" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('animals.create') }}">Cadastrar Novo Animal</a>
@endsection