<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Event;
use App\Models\Hour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



use function GuzzleHttp\Promise\all;

/**
 * Class EventController
 * @package App\Http\Controllers
 */
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::where('estado','activo')
                    ->paginate();

        return view('event.index', compact('events'))
            ->with('i', (request()->input('page', 1) - 1) * $events->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = new Event();
        $hours = Hour::all();



         $classrooms= Classroom::where('diponibilidad','Disponible')->get() ;

        /* $classrooms = DB::select('SELECT * FROM `classrooms` WHERE `diponibilidad` = "Disponible" '); */
        return view('event.create', compact('event','hours','classrooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Event::$rules);

        $consulta = Event::select(['id','id_horario','id_salon'])
                    ->where('id_horario',$request->id_horario)
                    ->where('id_salon',$request->id_salon)
                    ->get();

        if($consulta == "[]"){

            $event = Event::create($request->all());
            $evento = Event::find($event->id);
            $evento->estado="activo";
            $evento->save();

        return redirect()->route('events.index')
            ->with('success', 'Evento creado correctamente!.');
        }else{
            return redirect()->route('events.create')
                        ->with('success', 'Error! Fecha y Hora ya existen en el salon!! ');
        }




    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $event = Event::all();
        $hour = Hour::all();
        return view('event.show', compact('event', 'hour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);



        return view('event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Event $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        request()->validate(Event::$rules);

        $event->update($request->all());

        return redirect()->route('events.index')
            ->with('success', 'Evento actualizado!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {

        // $event= DB::update('update events set estado = eliminado where events.id = `$id`');
         $event = Event::find($id);
         $event->estado="elminado";
         $event->save();



        return redirect()->route('events.index')
            ->with('success', 'Evento eliminado correctamente!');
    }
}
