@extends('adminlte::page')
@section('title', 'Crear Evento')

@section('template_title')
    Create Event
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Evento</span>
                    </div>

                    @if ($message = Session::get('success'))
                    <div class="alert alert-danger">
                        <p>{{ $message }}</p>
                    </div>
                    @endif

                    <div class="card-body">
                        <form method="POST" action="{{ route('events.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>Nombre del Evento: </label>
                                <input type="text" name="nombre" class="form-control" id="nombre">
                              </div>




                                <div class="form-group">
                                    <label>Elegir Salon:</label>
                                    <select name="id_salon" id="inputid_classroom" class="form-control">
                                        @foreach ($classrooms as $classroom )
                                             <option value="{{ $classroom->id }}">Nombre-> {{ $classroom->nombre}}, Aforo Total-> {{$classroom->aforo_total}}, Aforo Restante-> {{$classroom->aforo_restante}}</option>
                                        @endforeach

                                    </select>
                                  </div>

                                  <div class="form-group">
                                    <label>Fecha y Hora del Evento:</label>
                                    <select name="id_horario" id="inputid_hour" class="form-control">
                                      @foreach ($hours as $hour )
                                           <option value="{{ $hour->id }}">Fecha-> {{ $hour->fecha}}, Inicio-> {{$hour->inicio}}, Finaliza-> {{$hour->fin}}</option>
                                      @endforeach

                                  </select>
                                  </div>


                                  <div class="form-group">
                                    <label>Costo del Evento: </label>
                                    <input type="number" name="costo" class="form-control" id="costo">
                                  </div>



                              <button type="submit" class="btn btn-primary">Guardar</button>

                        </form>






                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
