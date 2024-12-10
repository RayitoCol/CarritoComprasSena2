@extends('dashboard.master')
@section('titulo','Nuevo Ingreso')
@include('layouts.navigation')
@section('contenido')
<div class="container py-4">
    <form action="{{ route('income.store') }}" method="post"> 
    @csrf
    <div class="row">
        <div class="col-md-5 ms-5">
        <div class="form-group row">
            <label for="provider_id" class="col-sm-2 col-form-label">Id_proveedor</label>
                <select name="provider_id" id="provider_id" class="form-select" required >
                    <option value="">Seleccionar_Proveedor</option>
                    @foreach($person as $person)
                    <option value="{{$person->id}}">{{$person->type}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!--  -->
        <div class="col-md-5 mx-5 mb-3 ">
        <div class="form-group row ">
            <label for="user_id" class="col-sm-6 col-form-label">Id_usuario</label>
                <select name="user_id" id="user_id" class="form-select" required >
                    <option value="">Seleccionar_Usuario</option>
                    @foreach($user as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
        <!--  -->
        <div class="row">
            <div class="col-md-5 ms-5">
        <div class="form-group row">
            <label for="receipt_type" class="col-sm-2 col-form-label">Tipo_recibo</label>
                <input type="text" class="form-control" name="receipt_type" id="receipt_type" placeholder="Ingresa el Tipo_recibo">
            </div>
        </div>
        <!--  -->
        <div class="col-md-5 mx-5 mb-3 ">
        <div class="form-group row">
            <label for="receipt_series" class="col-sm-2 col-form-label">Serie_recibo</label>
                <input type="text" class="form-control" name="receipt_series" id="receipt_series" placeholder="Ingresa el Serie_recibo">
            </div>
        </div>
    </div>
        <!--  -->
        <div class="row">
            <div class="col-md-5 ms-5">
        <div class="form-group row">
            <label for="receipt_number" class="col-sm-2 col-form-label">Número_recibo</label>
                <input type="text" class="form-control" name="receipt_number" id="receipt_number" placeholder="Ingresa el Número_recibo">
            </div>
        </div>
    
        <!--  -->
        <div class="col-md-5 mx-5 mb-3 ">
        <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Fecha</label>
                <input type="date" class="form-control" name="date" id="date" placeholder="Ingresa el Fecha">
            </div>
        </div>
    </div>
    
        <!--  -->
    
        <div class="row">
            <div class="col-md-5 ms-5">
        <div class="form-group row">
            <label for="tax" class="col-sm-2 col-form-label">Impuesto</label>
                <input type="number" class="form-control" name="tax" id="tax" placeholder="Ingresa el Impuesto">
            </div>
        </div>
        <!--  -->
        <div class="col-md-5 mx-5 mb-3 ">
        <div class="form-group row">
            <label for="total" class="col-sm-2 col-form-label">total</label>
                <input type="number" class="form-control" name="total" id="total" placeholder="Ingresa el Total">
            </div>
        </div>
    </div>
        <!--  -->
        <div class="form-group row">
            <label for="status" class="col-sm--5 ms-5 col-form-label">Estado</label>
            <div class="col-sm-5 ms-5 mb-3">
                <input type="text" class="form-control" name="status" id="status" placeholder="Ingresa el Estado">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-5">
            <button type="submit" class="btn btn-success">Registrar</button>
            <a href="{{url('dashboard/income')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    
        </form>  
        <!-- detalles de ingresos -->
        
    </div>
    
    @endsection