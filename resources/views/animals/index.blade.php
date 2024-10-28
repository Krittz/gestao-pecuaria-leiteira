@extends('app')

@section('title', 'Animais')

@section('content')
@section('section-title', 'Animais')

@if (session('success'))
<div>
    {{ session('success') }}
</div>
@endif
<div class="table-action">
    <a href="{{ route('animals.create') }}"><ion-icon name="add-outline"></ion-icon> Novo Animal</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sexo</th>
            <th>Nascimento</th>
            <th>Prenhez</th>
            <th>Mãe</th>
            <th>Pai</th>
            <th>Imagem</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($animals as $animal)
        <tr>
            <td>{{ $animal->id }}</td>
            <td>{{ $animal->nome }}</td>

            <td>{{ $animal->sexo }}</td>
            <td>{{ $animal->nascimento }}</td>
            <td>{{ $animal->prenhez ? 'Sim' : 'Não' }}</td>
            <td>{{ $animal->mae ? $animal->mae->nome : 'N/A' }}</td>
            <td>{{ $animal->pai ? $animal->pai->nome : 'N/A' }}</td>

            <td style="justify-items: center;">
                @if ($animal->imagem)
                <img src="{{ asset('storage/' . $animal->imagem) }}" alt="{{ $animal->nome }}" width="100">
                @else
                N/A
                @endif
            </td>
            <td>
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

@endsection