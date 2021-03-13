@extends('layouts.main')
@section('title', $event->titulo)

@section('content')

  <div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="img-container" class="col-md-6">
        <img src="/img/events/{{$event->img}}" class="img-fluid" alt="{{ $event->titulo }}">
      </div>

      <div id="info-contaner" class="col-md-6">
        <h1>{{$event->titulo}}</h1>
          <p><ion-icon name="location-outline"></ion-icon>{{$event->cidade}}</p>
          <p><ion-icon name="people-outline"></ion-icon></ion-icon> Particpantes</p>
          <p><ion-icon name="star-outline"></ion-icon>{{  $eventOwner['name'] }}</p>
          <a href="#" class="btn btn-primary">Confirmar presença</a>
          <h3>evento conta com:</h3>
          <ul id="itens-list">
            @foreach($event->itens as $item)
              <li><ion-icon name="play-outline"></ion-icon>{{$item}}</li>
            @endforeach
          </ul>
          
      </div>
      <div class="col-md-12">
        <h3>Sobre o Evento:</h3>
        <p>{{$event->descricaos}}</p>
      </div>
    </div>
  </div>
@endsection