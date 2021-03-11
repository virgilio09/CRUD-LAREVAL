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
        $event->data = $request->data;
        $event->privado = $request->privado;
        $event->itens = $request->itens;
        $event->descricao = $request->descricao;
        
        // img upload
        if($request->hasFile('img') && $request->file('img')->isvalid()){

            $requestImg = $request->img;

            $extension = $requestImg->extension();

            $imgName = md5($requestImg->getClientOriginalName().strtotime('now').".".$extension);

            $request->img->move(public_path('img/events'), $imgName);

            $event->img = $imgName;
        }
        $event->save();

        return redirect('/')->with('msg', 'Envento criado com sucesso!!');
    }

    public function show($id){
         $event = Event::findOrFail($id);

         return view('events.show', ['event' => $event]);
    }
}
