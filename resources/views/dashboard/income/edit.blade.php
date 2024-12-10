@extends('dashboard.master')
@section('titulo','Editar Ingreso')
@include('layouts.navigation')
@section('contenido')
<div class="container py-4">
    <h1 class="mb-4">Modificar Ingreso</h1>
    <form action="{{ url('dashboard/income/'.$income->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="provider_id" class="col-sm-2 col-form-label">Id_proveedor</label>
            <div class="col-sm-10">
                <select name="provider_id" id="provider_id" class="form-select" required >
                    <option value="">Seleccionar_Proveedor</option>
                    @foreach($person as $person)
                    <option value="{{$person->id}}">{{$person->type}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!--  -->
        <div class="form-group row">
            <label for="user_id" class="col-sm-2 col-form-label">Id_usuario</label>
            <div class="col-sm-10">
                <select name="user_id" id="user_id" class="form-select" required >
                    <option value="1"></option>
    
                </select>
            </div>
        </div>
        <!-- Primer nombre -->
        <div class="form-group row">
            <label for="receipt_type" class="col-sm--2 col-form-label">Tipo_recibo</label>
            <div class="col-sm-15">
                <input type="text" class="form-control" name="receipt_type" id="receipt_type" value="{{$income->receipt_type}}" placeholder="Ingresa el Tipo_recibo de ingreso">
            </div>
        </div>
        <!-- Primer nombre -->
        <div class="form-group row">
            <label for="receipt_series" class="col-sm--2 col-form-label">Serie_recibo</label>
            <div class="col-sm-15">
                <input type="text" class="form-control" name="receipt_series" id="receipt_series" value="{{$income->receipt_series}}" placeholder="Ingresa el Serie_recibo de ingreso">
            </div>
        </div>
        <!-- Primer nombre -->
        <div class="form-group row">
            <label for="receipt_number" class="col-sm--2 col-form-label">Número_recibo</label>
            <div class="col-sm-15">
                <input type="text" class="form-control" name="receipt_number" id="receipt_number" value="{{$income->receipt_number}}" placeholder="Ingresa el Número_recibo de ingreso">
            </div>
        </div>
        <!-- Primer nombre -->
        <div class="form-group row">
            <label for="date" class="col-sm--2 col-form-label">Fecha</label>
            <div class="col-sm-15">
                <input type="date" class="form-control" name="date" id="date" value="{{$income->date}}" placeholder="Ingresa el Fecha de ingreso">
            </div>
        </div>
        <!-- Primer nombre -->
        <div class="form-group row">
            <label for="tax" class="col-sm--2 col-form-label">Impuesto</label>
            <div class="col-sm-15">
                <input type="text" class="form-control" name="tax" id="tax" value="{{$income->tax}}" placeholder="Ingresa el Impuesto de ingreso">
            </div>
        </div>
        <!-- Primer nombre -->
        <div class="form-group row">
            <label for="total" class="col-sm--2 col-form-label">Total</label>
            <div class="col-sm-15">
                <input type="text" class="form-control" name="total" id="total" value="{{$income->total}}" placeholder="Ingresa el Total de ingreso">
            </div>
        </div>
        <!-- Primer nombre -->
        <div class="form-group row">
            <label for="status" class="col-sm--2 col-form-label">Estado</label>
            <div class="col-sm-15">
                <input type="text" class="form-control" name="status" id="status" value="{{$income->status}}" placeholder="Ingresa el Estado de ingreso">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{url('dashboard/income')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
        </form>  
    </div>
    
    @endsection