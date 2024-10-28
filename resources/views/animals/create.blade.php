@extends('app')

@section('title', 'Cadastrar Animal')

@section('content')
<h1>Cadastrar Animal</h1>

@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('animals.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome') }}">
    </div>

    <div>
        <label for="sexo">Sexo:</label>
        <input type="text" name="sexo" id="sexo" value="{{ old('sexo') }}">
    </div>
    <div>
        <label for="nascimento">Nascimento:</label>
        <input type="date" name="nascimento" id="nascimento" value="{{ old('nascimento') }}">
    </div>

    <div>
        <label for="mae_id">Mãe:</label>
        <input type="number" name="mae_id" id="mae_id" value="{{ old('mae_id') }}">
    </div>
    <div>
        <label for="pai_id">Pai:</label>
        <input type="number" name="pai_id" id="pai_id" value="{{ old('pai_id') }}">
    </div>
    <div class="not">
        <label for="prenhez">Prenhez:</label>
        <input type="checkbox" name="prenhez" id="prenhez" {{ old('prenhez') ? 'checked' : '' }}>
    </div>
    <div class="not">
        <label for="imagem">Imagem:</label>
        <input type="file" name="imagem" id="imagem">
    </div>

    <button type="submit">Cadastrar</button>

</form>
@endsection