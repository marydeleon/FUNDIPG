<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Instructor;
use App\Models\Instructorevent;
use Illuminate\Http\Request;

/**
 * Class InstructoreventController
 * @package App\Http\Controllers
 */
class InstructoreventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructorevents = Instructorevent::paginate();
        $instructores = Instructor::all();
        return view('instructorevent.index', compact('instructorevents','instructores'))
            ->with('i', (request()->input('page', 1) - 1) * $instructorevents->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventos= Event::all();
        $instructores = Instructor::all();
        $instructorevent = new Instructorevent();
        return view('instructorevent.create', compact('instructorevent','eventos','instructores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Instructorevent::$rules);

        $instructorevent = Instructorevent::create($request->all());



        return redirect()->route('instructorevents.index')
            ->with('success', 'Instructorevent created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instructorevent = Instructorevent::find($id);

        return view('instructorevent.show', compact('instructorevent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instructorevent = Instructorevent::find($id);

        return view('instructorevent.edit', compact('instructorevent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Instructorevent $instructorevent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instructorevent $instructorevent)
    {
        request()->validate(Instructorevent::$rules);

        $instructorevent->update($request->all());

        return redirect()->route('instructorevents.index')
            ->with('success', 'Instructorevent updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $instructorevent = Instructorevent::find($id)->delete();

        return redirect()->route('instructorevents.index')
            ->with('success', 'Instructorevent deleted successfully');
    }
}
