@extends('adminlte::page')
@section('title', 'Crear Horarios')

@section('template_title')
    Create Hour
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
                        <span class="card-title">Crear Horarios</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('hours.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                                <div class="form-group">
                                  <label>Fecha:</label>
                                  <input type="date" name="fecha" class="form-control" id="fecha">
                                </div>
                                <div class="form-group">
                                  <label>Inicio:</label>
                                  <input type="time" name="inicio" class="form-control" id="inicio">
                                </div>
                                <div class="form-group">
                                    <label>Finaliza:</label>
                                    <input type="time" name="fin" class="form-control" id="fin">
                                  </div>

                                <button type="submit" class="btn btn-primary">Guardar</button>



                        </form>




                    </div>

                </div>



            </div>
        </div>
    </section>
@endsection
