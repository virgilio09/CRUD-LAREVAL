@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1">
	<h1>Meus eventos</h1>
</div>
<div class="col-md-10 offset-md-1">
	@if(count($events) > 0)
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nome</th>
					<th scope="col">Participantes</th>
					<th scope="col">Ações</th>
				</tr>
			</thead>
			<tbody>
				@foreach($events as $event)
					<td scropt="row">{{$loop->index + 1}}</td>
					<td><a href="/events/{{$event->id}} ">{{$event->titulo}}</a></td> 
					<td>0</td> 
					<td><a href="#">Editar</a> <a href="#">Remover</a></td> 
				
				@endforeach
			</tbody>
			
		</table>
	@else
		<p>Você ainda não tem eventos, <a href="/events/create">criar evento</a></p>
	@endif 
</div>

@endsection