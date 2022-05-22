@extends('adminlte::page')
@section('title', 'Registrar Instructor a Evento')

@section('template_title')
    Crear Instructorevent
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                     <span class="card-title">Crear Instructorevent</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('instructorevents.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>Nombre y Fecha y Hora del Evento:</label>
                                <select name="id_evento" id="inputid_event" class="form-control" >
                                    @foreach ($eventos as $evento )
                                         <option value="{{ $evento->id }}"> Nombre-> {{ $evento->nombre}} >>Fecha y Hora: {{ $evento->hour->fecha}}>>{{ $evento->hour->inicio}}>>{{ $evento->hour->fin}}
                                            Costo del Evento: Q.{{$evento->costo}}
                                        </option>
                                    @endforeach

                                </select>
                              </div>

                              <div class="form-group">
                                <label>Id y Nombre Completo de instructor:</label>
                                <select name="id_instructor" id="inputid_estudiante" class="form-control">
                                  @foreach ($instructores as $instructor )
                                       <option value="{{ $instructor->id }}">Id >> {{ $instructor->id}}, Nombre >> {{$instructor->nombre}}, {{$instructor->apellido}}</option>
                                  @endforeach

                              </select>
                              </div>

                              <button type="submit" class="btn btn-primary">Asignar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

