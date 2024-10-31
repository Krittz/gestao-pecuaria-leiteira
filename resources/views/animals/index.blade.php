@extends('app')

@section('content')
@section('section-title', 'Animais')

@section('search')
@section('search-action', route('animals.index'))
@section('search-placeholder', 'Pesquisar por nome de animal')
@include('components.search')
@endsection

@if (session('success'))
<div class="notify">
    <div class="notify-header">
        <div class="notify-title">
            <i class="ph ph-bell"></i>
            <h1>Notificação</h1>
        </div>
        <div class="notify-close">
            <i class="ph ph-x-circle"></i>
        </div>
    </div>
    <div class="notify-content">
        <p> {{ session('success') }}</p>
    </div>
</div>
@endif



<div class="table-action">
    <a href="{{ route('animals.create') }}"><i class="ph ph-plus"></i> Novo Animal</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Código</th>
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
            <td>{{ $animal->id }}</td>
            <td class="table-img">
                @if ($animal->imagem)
                <img src="{{ asset('storage/' . $animal->imagem) }}" alt="{{ $animal->nome }}" class="animal-photo" onclick="showImage(this.src)">
                @else
                N/A
                @endif
            </td>
            <td>{{ $animal->nome }}</td>
            <td>{{ $animal->sexo }}</td>
            <td>{{ \Carbon\Carbon::parse($animal->nascimento)->format('d/m/ Y') }}</td>
            <td>{{ $animal->prenhez ? 'Sim' : 'Não' }}</td>
            <td>{{ $animal->mae ? $animal->mae->nome : 'N/A' }}</td>
            <td>{{ $animal->pai ? $animal->pai->nome : 'N/A' }}</td>
            <td>
                <div class="animal-actions">
                    <form action="#" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn-editar">
                        <i class="ph ph-pencil-simple"></i>
                        </button>
                    </form>
                    <form action="{{ route('animals.destroy', ['animal' => $animal->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-excluir">
                        <i class="ph ph-trash-simple"></i>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div id="fullScreenImage" class="full-screen" style="display: none;">
    <span class="close" onclick="closeImage()">&times;</span>
    <img id="displayImage" src="" alt="Imagem Ampliada">
</div>
@endsection