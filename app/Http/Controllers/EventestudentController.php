<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Estudiante;
use App\Models\Event;
use App\Models\Eventestudent;
use Illuminate\Http\Request;


/**
 * Class EventestudentController
 * @package App\Http\Controllers
 */
class EventestudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventestudents = Eventestudent::paginate();

        $salones = Classroom::all();
        $eventos = Event::all();


        return view('eventestudent.index', compact('eventestudents','salones','eventos'))
            ->with('i', (request()->input('page', 1) - 1) * $eventestudents->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $eventestudent = new Eventestudent();

        $eventos = Event::where('estado','activo')->get() ;
        $estudiantes=Estudiante::all();




        return view('eventestudent.create', compact('eventestudent','eventos','estudiantes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         request()->validate(Eventestudent::$rules);




         $consulta = Eventestudent::SELECT(['id','id_evento','id_estudiante'])
                    ->where('id_evento',$request->id_evento)
                    ->where('id_estudiante',$request->id_estudiante)
                    ->get();

                    if($consulta == "[]"){
                        $event = Eventestudent::create($request->all());
                        /*$consultados = Classroom::SELECT(['id','aforo_restante'])
                                ->where('id',$id_evento)
                                ->get();
                        return $consultados->aforo_restante;*/

                    return redirect()->route('eventestudents.index')
                        ->with('success', 'Estudiante agregado al evento correctamente!.');
                    }else{
                        return redirect()->route('eventestudents.create')
                                    ->with('success', 'Error! Evento y Estudiante ya existen!! ');
                    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eventestudent = Eventestudent::find($id);

        return view('eventestudent.show', compact('eventestudent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eventestudent = Eventestudent::find($id);

        return view('eventestudent.edit', compact('eventestudent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Eventestudent $eventestudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eventestudent $eventestudent)
    {
        request()->validate(Eventestudent::$rules);

        $eventestudent->update($request->all());

        return redirect()->route('eventestudents.index')
            ->with('success', 'Eventestudent updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $eventestudent = Eventestudent::find($id)->delete();

        return redirect()->route('eventestudents.index')
            ->with('success', 'Eventestudent deleted successfully');
    }
}
