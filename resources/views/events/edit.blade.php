@extends('layouts.main')
@section('title', 'Editando o Eventos: '.$event->titulo)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Edtando: {{$event->titulo}}</h1>
	<form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="img">Imagem do Evento:</label>
      <input type="file" class="form-control-file" id="img" name="img">
      <img src="/img/events/{{$event->img}}" alt="{{$event->titulo}}">     
	</div>
		<div class="form-group">
    	<label for="titulo">Evento:</label>
      <input type="text" class="form-control" id="titulo" name="titulo"  value="{{$event->titulo}}">
    </div>
		<div class="form-group">
    	<label for="titulo">Data do Evento:</label>
      <input type="date" class="form-control" id="data" name="data" value="{{ $event->data->format('Y-m-d') }}">
    </div>
		<div class="form-group">
    	<label for="cidade">Cidade:</label>
      <input type="text" class="form-control" id="cidade" name="cidade" value="{{$event->cidade}}">
    </div>
		<div class="form-group">
    	<label for="titulo">Evento publico?</label>
			<select name="privado" id="privado" class="form-control">
				<option value="0">Não</option>
				<option value="1" {{ $event->privado == 1 ? "selected= 'selected'": "" }}>sim</option>
			</select>
    </div>

		<div class="form-group">
			<label for="titulo">Adicione itens:</label>
			<div class="form-group">
				<input type="checkbox" name="itens[]" value="Cadeira"> Cadeira
			</div>
			<div class="form-group">
				<input type="checkbox" name="itens[]" value="Palco"> Palco
			</div>
			<div class="form-group">
				<input type="checkbox" name="itens[]" value="Brindes"> Brindes
			</div>
			
    </div>


		<div class="form-group">
    	<label for="titulo">Descrição:</label>
			<textarea class="form-control" name="descricao" id="descricao">{{ $event->descricao }}</textarea>
    </div>
		<input type="submit" class="btn btn-primary" value="Alterar evento">
  </form>
</div>

@endsection
