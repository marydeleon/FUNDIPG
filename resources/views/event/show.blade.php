@extends('layouts.app')

@section('template_title')

@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Event</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('events.index') }}"> Back</a>
                        </div>
                    </div>

                   



                </div>
            </div>
        </div>
    </section>
@endsection
