@extends('layouts.main')
@section('title', 'Eventos')

@section('content')

<div id="busca-container" class="col-md-12">
	<h1>Busque um Evento</h1>
	<form action="">
		<input type="text" id="busca" name="busca" class="form-control"  placeholder="Procurar...">
	</form>
</div>

<div id="events-container" class="col-md-12">
	<h2>Próximos eventos</h2>
	<p>Vejá os eventos dos próximos dias..</p>

	@if(count($events) == 0)
		</p>Não há eventos disponiveis</p>
	@endif	
	<div id="cards-container" class="row">
		@foreach($events as $event)
			<div class="card col-md-3">
				<img src="/img/events/{{$event->img}}" alt="{{$event->titulo}}">
				<div class="card-body">
					<p class="card-date">{{ date('d/m/Y', strtotime($event->data)) }}</p>
					<h5 class="card-title">{{$event->titulo}}</h5>
					<p class="card-participants">X Participantes</p>
					<a href="/events/{{$event->id}}" class="btn btn-primary">Saiba mais</a>
				</div>
			</div>
		@endforeach
	
	</div>
</div>

@endsection
