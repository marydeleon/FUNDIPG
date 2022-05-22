@extends('adminlte::page')
@section('title', 'Lista de Eventos')

@section('template_title')
    Event
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lista de Eventos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('events.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
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

										<th>Nombre de Evento</th>

										<th>Fecha</th>
										<th>Inicio</th>
										<th>Termina</th>
										<th>Salon</th>
										<th>Aforo <br> restante</th>
                                        <th>Costo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($events as $event)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $event->nombre }}</td>
											<td>{{ $event->hour->fecha }}</td>
											<td>{{ $event->hour->inicio}}</td>
											<td>{{ $event->hour->fin}}</td>
											<td>{{ $event->classroom->nombre }}</td>
											<td>{{ $event->classroom->aforo_restante }}</td>
                                            <td>Q. {{ $event->costo }}</td>

                                            <td>
                                                <form action="{{ route('events.destroy',$event->id) }}" method="POST">

                                                    <a class="btn btn-sm btn-success" href="{{ route('events.edit',$event->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>


                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $events->links() !!}
            </div>
        </div>
    </div>
@endsection
