@extends('app')

@section('title', 'Cadastrar Animal')
@section('section-title', 'Cadastrar Animal')

@section('content')




@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
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
            <ion-icon name="cloud-upload-outline"></ion-icon>
            Carregar Imagem</label>
    </div>
    <div class="form-group">
        <label for="mae_id">Mãe</label>
        <input type="text" name="mae_id" id="mae_id" value="{{ old('mae_id') }}">
    </div>
    <div class="form-group">
        <label for="pai_id">Pai</label>
        <input type="text" name="pai_id" id="pai_id" value="{{ old('pai_id') }}">
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