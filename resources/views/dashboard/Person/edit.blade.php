@extends('dashboard.master')
@section('titulo','CrearPersonas')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
<h1 class="mb-4">Modificar Persona</h1>
    <form action="{{ route('person.update',$person->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="type" class="col-sm-2 col-form-label">Tipo</label>
            <div class="col-sm-10">
                <select class="form-control" id="type" name="type" required>
                    <option value="">Selecciona un tipo</option>
                    <option value="Cliente" {{$person->type=='Cliente' ? 'selected' : ''}}>Cliente</option>
                    <option value="Proveedor" {{$person->type=='Proveedor' ? 'selected' : ''}}>Proveedor</option>
                    <option value="Empleado" {{$person->type=='Empleado' ? 'selected' : ''}}>Empleado</option>
                    <option value="Otro" {{$person->type=='Otro' ? 'selected' : ''}}>Otro</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="first_name">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{$person->first_name}}" required >
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="last_name">Apellido</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{$person->last_name}}" required >
            </div>
        </div>
        <div class="form-group row">
            <label for="document_type" class="col-sm-2 col-form-label">Tipo de Documento</label>
            <div class="col-sm-10">
                <select class="form-control" id="document_type" name="document_type" required>
      
                    <option value="">Selecciona un tipo de documento</option>
                    <option value="CC" {{$person->document_type=='CC' ? 'selected' : ''}}>Cédula de Ciudadanía</option>
                    <option value="TI" {{$person->document_type=='TI' ? 'selected' : ''}}>Tarjeta de Identidad</option>
                    <option value="CE" {{$person->document_type=='CE' ? 'selected' : ''}}>Cédula de Extranjería</option>
                    <option value="PP" {{$person->document_type=='PP' ? 'selected' : ''}}>Pasaporte</option>
                </select>
            </div>  
        </div>
        <div class="form-group row">
            <label for="document_number" class="col-sm-2 col-form-label">Número de Documento</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="document_number" name="document_number" value="{{$person->document_number}}">
            </div>    
        </div>
        <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">Dirección</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="address" name="address" value="{{$person->address}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">Teléfono</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="phone" name="phone" value="{{$person->phone}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" value="{{$person->email}}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{url('dashboard/person')}}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
