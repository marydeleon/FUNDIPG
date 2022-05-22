@extends('adminlte::page')
@section('title', 'Registrar Instructor a Evento')

@section('template_title')
    Instructorevents
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Instructorevent') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('instructorevents.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
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

										<th>Id</th>
										<th>Nombre de Instructor</th>
										<th>Lista de Evento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($instructores as $instructor)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $instructor->id }}</td>
											<td>{{ $instructor->nombre }}</td>

                                            <td>
                                                @foreach ($instructorevents as $instructorevent)
                                                @if ($instructor->id == $instructorevent->id_instructor)
                                                {{$instructorevent->event->nombre}}
                                                <b>Fecha:</b> {{$instructorevent->event->hour->fecha}}
                                                <b>Hora incio:</b>{{$instructorevent->event->hour->inicio}}
                                                <b>Hora que Finaliza</b> :{{$instructorevent->event->hour->fin}}
                                                <br>

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
                {!! $instructorevents->links() !!}
            </div>
        </div>
    </div>
@endsection
