@extends('adminlte::page')
@section('title', 'Crear Evento')

@section('template_title')
    Create Eventestudent
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                @if ($message = Session::get('success'))
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Asignar evento a Estudiante</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('eventestudents.store') }}"  role="form" enctype="multipart/form-data">
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
                                <label>Id y Nombre Completo de estudiante:</label>
                                <select name="id_estudiante" id="inputid_estudiante" class="form-control">
                                  @foreach ($estudiantes as $estudiante )
                                       <option value="{{ $estudiante->id }}">Id >> {{ $estudiante->id}}, Nombre >> {{$estudiante->nombre}}, {{$estudiante->apellido}}</option>
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
