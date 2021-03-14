@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1">
	<h1>Meus eventos</h1>
</div>
<div class="col-md-10 offset-md-1" id="dashboard-events">
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
					<td>
						<a href="/events/edit/{{$event->id}}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a> 
						<form action="/events/{{$event->id}}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Remover</button>
						</form>
					</td> 
				
				@endforeach
			</tbody>
			
		</table>
	@else
		<p>Você ainda não tem eventos, <a href="/events/create">criar evento</a></p>
	@endif 
</div>

@endsection