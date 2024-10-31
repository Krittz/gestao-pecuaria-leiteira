@extends('app')

@section('title', 'Cadastrar Animal')
@section('section-title', 'Cadastrar Animal')

@section('content')

@if ($errors->any())
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
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
</div>
@endif

<form action="{{ route('animals.store') }}" method="POST" enctype="multipart/form-data" class="create-animal-form">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome') }}">
    </div>

    <div class="form-group">
        <label for="nascimento">Nascimento</label>
        <input type="date" name="nascimento" id="nascimento" value="{{ old('nascimento') }}">
    </div>
    <div class="form-group file">
        <input type="file" name="imagem" id="imagem">
        <label for="imagem">
            <i class="ph ph-cloud-arrow-up"></i>
            Carregar Imagem</label>
    </div>

    <div class="dropdown">
        <div class="select">
            <span class="selected">Sexo</span>
            <div class="caret"></div>
        </div>
        <ul class="form-menu">
            <li>Fêmea</li>
            <li>Macho</li>
        </ul>
    </div>
    <input type="hidden" name="sexo" id="sexoInput" value="{{ old('sexo') }}">

    <div class="dropdown">
        <div class="select">
            <span class="selected">Prenhez</span>
            <div class="caret"></div>
        </div>
        <ul class="form-menu">
            <li>Sim</li>
            <li>Não</li>
        </ul>
    </div>
    <input type="hidden" name="prenhez" id="prenhezInput" value="{{ old('prenhez') }}">

    <div class="buttons">
        <a href="{{ route('animals.index') }}">Cancelar</a>
        <button type="submit">Cadastrar</button>
    </div>
</form>

@endsection