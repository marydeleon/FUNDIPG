@extends('layouts.app')

@section('template_title')
    {{ $eventestudent->name ?? 'Show Eventestudent' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Eventestudent</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('eventestudents.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Evento:</strong>
                            {{ $eventestudent->id_evento }}
                        </div>
                        <div class="form-group">
                            <strong>Id Estudiante:</strong>
                            {{ $eventestudent->id_estudiante }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
