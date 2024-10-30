@extends('app')

@section('title', 'Animais')

@section('content')
@section('section-title', 'Animais')

@if (session('success'))
<div class="notify">
    <div class="notify-header">
        <div class="notify-title">
            <ion-icon name="notifications-outline"></ion-icon>
            <h1>Notificação</h1>
        </div>

        <div class="notify-close">
            <ion-icon name="close-outline"></ion-icon>
        </div>
    </div>
    <div class="notify-content">
        <p> {{ session('success') }}</p>
    </div>

</div>
@endif
<div class="table-action">
    <a href="{{ route('animals.create') }}"><ion-icon name="add-outline"></ion-icon> Novo Animal</a>
</div>

<table class="table">
    <thead>
        <tr>
            <!-- <th>ID</th> -->
            <th>Imagem</th>
            <th>Nome</th>
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
            <!-- <td>{{ $animal->id }}</td> -->
            <td style="justify-items: center;">
                @if ($animal->imagem)
                <img src="{{ asset('storage/' . $animal->imagem) }}" alt="{{ $animal->nome }}" width="100" class="animal-photo">
                @else
                N/A
                @endif
            </td>
            <td>{{ $animal->nome }}</td>

            <td>{{ $animal->sexo }}</td>
            <td>{{ $animal->nascimento }}</td>
            <td>{{ $animal->prenhez ? 'Sim' : 'Não' }}</td>
            <td>{{ $animal->mae ? $animal->mae->nome : 'N/A' }}</td>
            <td>{{ $animal->pai ? $animal->pai->nome : 'N/A' }}</td>


            <td>
                <div class="animal-actions">
                    <form action="#" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn-editar">
                            <ion-icon name="create-outline"></ion-icon>
                        </button>
                    </form>
                    <form action="{{ route('animals.destroy', ['animal' => $animal->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-excluir">
                            <ion-icon name="trash-outline"></ion-icon>
                        </button>
                    </form>
                </div>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection