@extends('layouts.main')
@section('title', 'Criar Eventos')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie seu Evento</h1>
  <form action="/events" method="POST" enctype="multipart/form-data">
  	@csrf
    <div class="form-group">
      <label for="img">Imagem do Evento:</label>
      <input type="file" class="form-control-file" id="img" name="img">
    </div>
		<div class="form-group">
    	<label for="titulo">Evento:</label>
      <input type="text" class="form-control" id="titulo" name="titulo"  placeholder="Nome do evento">
    </div>
		<div class="form-group">
    	<label for="cidade">Cidade:</label>
      <input type="text" class="form-control" id="cidade" name="cidade"  placeholder="Local do evento">
    </div>
		<div class="form-group">
    	<label for="titulo">Evento publico?</label>
			<select name="privado" id="privado" class="form-control">
				<option value="0">Não</option>
				<option value="1">sim</option>
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
			<textarea class="form-control" name="descricao" id="descricao"></textarea>
    </div>
		<input type="submit" class="btn btn-primary" value="Criar evento">
  </form>
</div>

@endsection
