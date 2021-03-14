<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    public function index(){

        $search = request('search');

        if($search){

            $events = Event::where([
                ['titulo', 'like', '%'.$search.'%']
            ])->get();
       
        }else{
            $events = Event::all();
        }

        return view('welcome', ['events' => $events, 'search' => $search]);

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

        $user = auth()->user();
        $event->user_id = $user->id;
        
        $event->save();

        return redirect('/')->with('msg', 'Envento criado com sucesso!!');
    }

    public function show($id){
         $event = Event::findOrFail($id);

         $eventOwner = User::where('id', $event->user_id)->first()->toArray();

         return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner]);
    }

    public function dashboard(){
        $user = auth()->user();

        $events = $user->events;

        return view('events.dashboard',['events' => $events]);
    }

    public function destroy($id){
       
        Event::findOrFail($id)->delete();
        
        return redirect('/dashboard')->with('msg', 'Evento excluido com sucesso!');
    }

    public function edit($id){

        $event = Event::findOrFail($id);

        return view('events.edit', ['event' => $event]);
    }

    public function update(Request $request){

        $data = $request->all();

        // Image Upload
        if($request->hasFile('img') && $request->file('img')->isValid()) {

            $requestImg = $request->img;

            $extension = $requestImg->extension();

            $imgName = md5($requestImg->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImg->move(public_path('img/events'), $imgName);

            $data['img'] = $imgName;

        }

        Event::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Evento alterado com sucesso!');

    }
}
