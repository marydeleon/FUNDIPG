@extends('adminlte::page')

@section('title', 'FUNDIPG')

@section('content_header')
    <h1>Bienvenido</h1>
@stop

@section('content')

<img src="{{asset('/imagenes/fondo.png')}}" class="img-fluid" alt="...">


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
