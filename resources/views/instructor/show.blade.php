@extends('layouts.app')

@section('template_title')
    {{ $instructor->name ?? 'Show Instructor' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Instructor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('instructors.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $instructor->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $instructor->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $instructor->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $instructor->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Curso:</strong>
                            {{ $instructor->curso }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
