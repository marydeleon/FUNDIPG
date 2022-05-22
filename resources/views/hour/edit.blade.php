@extends('adminlte::page')
@section('title', 'Editar Horarios')

@section('template_title')
    Update Hour
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Horario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('hours.update', $hour->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('hour.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
