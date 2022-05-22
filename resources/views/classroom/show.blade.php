@extends('layouts.app')

@section('template_title')
    {{ $classroom->name ?? 'Show Classroom' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Classroom</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('classrooms.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $classroom->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Aforo Total:</strong>
                            {{ $classroom->aforo_total }}
                        </div>
                        <div class="form-group">
                            <strong>Aforo Restante:</strong>
                            {{ $classroom->aforo_restante }}
                        </div>
                        <div class="form-group">
                            <strong>Diponibilidad:</strong>
                            {{ $classroom->diponibilidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
