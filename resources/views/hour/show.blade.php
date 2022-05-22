@extends('layouts.app')

@section('template_title')
    {{ $hour->name ?? 'Show Hour' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Hour</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('hours.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $hour->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Inicio:</strong>
                            {{ $hour->inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fin:</strong>
                            {{ $hour->fin }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
