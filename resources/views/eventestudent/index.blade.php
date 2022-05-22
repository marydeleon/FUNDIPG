@extends('adminlte::page')
@section('title', 'Crear Evento')

@section('template_title')
    Eventestudent
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Salon y Evento') }}
                            </span>


                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Nombre de Salon</th>
										<th>Nombre de Evento</th>
										<th>Lista de Estudiantes</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($eventos as $evento)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $evento->classroom->nombre }}</td>
											<td>{{ $evento->nombre}}</td>

                                            <td>
                                               @foreach ($eventestudents as $estudiantes)
                                               @if ($evento->id == $estudiantes->id_evento)
                                                {{$estudiantes->estudiante->nombre}}
                                                {{$estudiantes->estudiante->apellido}}<br>

                                               @endif
                                               @endforeach

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $eventestudents->links() !!}
            </div>
        </div>
    </div>
@endsection
