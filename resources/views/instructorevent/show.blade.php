@extends('layouts.app')

@section('template_title')
    {{ $instructorevent->name ?? 'Show Instructorevent' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Instructorevent</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('instructorevents.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Evento:</strong>
                            {{ $instructorevent->id_evento }}
                        </div>
                        <div class="form-group">
                            <strong>Id Instructor:</strong>
                            {{ $instructorevent->id_instructor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
