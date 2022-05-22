@extends('adminlte::page')
@section('title', 'Registrar Instructor a Evento')

@section('template_title')
    Crear Instructorevent
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                     <span class="card-title">Crear Instructorevent</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('instructorevents.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('instructorevent.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

