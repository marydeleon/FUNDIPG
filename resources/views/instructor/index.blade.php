@extends('adminlte::page')
@section('title', 'Lista de Instructores')

@section('template_title')
    Instructor
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lista de Instructores') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('instructors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Registrar nuevo Instructor') }}
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

										<th>Nombre</th>
										<th>Apellido</th>
										<th>Telefono</th>
										<th>Direccion</th>
										<th>Curso</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($instructors as $instructor)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $instructor->nombre }}</td>
											<td>{{ $instructor->apellido }}</td>
											<td>{{ $instructor->telefono }}</td>
											<td>{{ $instructor->direccion }}</td>
											<td>{{ $instructor->curso }}</td>

                                            <td>
                                                <form action="{{ route('instructors.destroy',$instructor->id) }}" method="POST">

                                                    <a class="btn btn-sm btn-success" href="{{ route('instructors.edit',$instructor->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $instructors->links() !!}
            </div>
        </div>
    </div>
@endsection
