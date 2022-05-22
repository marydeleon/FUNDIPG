@extends('adminlte::page')
@section('title', 'Crear Salones')

@section('template_title')
    Create Classroom
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Salon</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('classrooms.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>Nombre:</label>
                                <input type="text" name="nombre" class="form-control" id="nombre">
                              </div>
                              <div class="form-group">
                                <label>Aforo Total:</label>
                                <input type="text" name="aforo_total" class="form-control" id="aforo_total">
                              </div>
                              <div class="form-group">
                                  <label>Aforo Restante:</label>
                                  <input type="text" name="aforo_restante" class="form-control" id="aforo_restante">
                                </div>

                                <div class="form-group">
                                    <label>Esta Disponible?</label>
                                    <Select name="diponibilidad" id="diponibilidad" class="form-control" required="required">
                                        <option value="Disponible">Disponible </option>
                                        <option value="No disponible">No disponible</option>

                                    </Select>
                                  </div>

                              <button type="submit" class="btn btn-primary">Guardar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
