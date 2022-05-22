@extends('adminlte::page')
@section('title', 'Lista de  Horarios')

@section('template_title')
    Hour
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lista de Horarios') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('hours.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Horario') }}
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

										<th>Fecha</th>
										<th>Inicio</th>
										<th>Fin</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hours as $hour)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $hour->fecha }}</td>
											<td>{{ $hour->inicio }}</td>
											<td>{{ $hour->fin }}</td>

                                            <td>
                                                <form action="{{ route('hours.destroy',$hour->id) }}" method="POST">

                                                    <a class="btn btn-sm btn-success" href="{{ route('hours.edit',$hour->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $hours->links() !!}
            </div>
        </div>
    </div>
@endsection
