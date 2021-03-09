<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index(){

        $events = Event::all();

        return view('welcome', ['events' => $events]);

    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){

        $event = new Event;

        $event->titulo = $request->titulo;
        $event->cidade = $request->cidade;
        $event->privado = $request->privado;
        $event->descricao = $request->descricao;

        $event->save();

        return redirect('/')->with('msg', 'Envento criado com sucesso!!');
    }
}
