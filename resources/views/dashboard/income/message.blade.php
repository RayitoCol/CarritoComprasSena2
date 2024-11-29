@extends('dashboard.master')
@section('titulo','Mensaje')
@include('layouts/navigation')
@section('contenido')
<h1>Mensaje</h1>
<div class="container py-4">
    <h2>{{$msg}}</h2>
    <a href="{{url('dashboard/income')}}" class="btn btn-info">Regresar</a>
</div>
@endsection