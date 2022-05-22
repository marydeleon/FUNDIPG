@extends('adminlte::page')
@section('title', 'Editar Salones')

@section('template_title')
    Update Classroom
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Salon</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('classrooms.update', $classroom->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('classroom.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
