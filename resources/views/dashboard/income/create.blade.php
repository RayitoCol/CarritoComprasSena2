@extends('dashboard.master')
@section('titulo','NuevoIngreso')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1>Crear Nuevo Ingreso</h1>
    <form action="{{ route('income.store') }}" method="post"> 
        @csrf
        <div class="form-group row">
            <label for="provider_id" class="col-sm-2 col-form-label">Id proveedor</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="provider_id" id="provider_id" placeholder="Ingresa el Id proveedor" value="{{ old('provider_id') }}">
               
                @if ($errors->has('provider_id'))
            <div class="text-danger">{{ $errors->first('provider_id') }}</div>
        @endif
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="user_id" class="col-sm-2 col-form-label">Id usuario</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="user_id" id="user_id" placeholder="Ingresa el Id usuario" value="{{ old('user_id') }}">

                @if ($errors->has('user_id'))
            <div class="text-danger">{{ $errors->first('user_id') }}</div>
        @endif
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="receipt_type" class="col-sm-2 col-form-label">Tipo comprobante</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_type" id="receipt_type" placeholder="Ingresa el tipo comprobante" value="{{ old('receipt_type') }}">

                @if ($errors->has('receipt_type'))
            <div class="text-danger">{{ $errors->first('receipt_type') }}</div>
        @endif
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="receipt_series" class="col-sm-2 col-form-label">Serie comprobante</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_series" id="receipt_series" placeholder="Ingresa la serie comprobante" value="{{ old('receipt_series') }}">

                @if ($errors->has('receipt_series'))
            <div class="text-danger">{{ $errors->first('receipt_series') }}</div>
        @endif
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="receipt_number" class="col-sm-2 col-form-label">Numero comprobante</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="receipt_number" id="receipt_number" placeholder="Ingresa el numero comprobante" value="{{ old('receipt_number') }}">

                @if ($errors->has('receipt_number'))
            <div class="text-danger">{{ $errors->first('receipt_number') }}</div>
        @endif
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Fecha</label>
            <div class="col-sm-10">
                <input type="datetime-local" class="form-control" name="date" id="date" value="{{ old('date') }}">

                @if ($errors->has('date'))
            <div class="text-danger">{{ $errors->first('date') }}</div>
        @endif
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="tax" class="col-sm-2 col-form-label">Porcentaje</label>
            <div class="col-sm-10">
                <input type="number" step="0.01" class="form-control" name="tax" id="tax" placeholder="Ingresa el porcentaje" value="{{ old('tax') }}">

                @if ($errors->has('tax'))
            <div class="text-danger">{{ $errors->first('tax') }}</div>
        @endif
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="total" class="col-sm-2 col-form-label">Total</label>
            <div class="col-sm-10">
                <input type="number" step="0.01" class="form-control" name="total" id="total" placeholder="Ingresa el total" value="{{ old('total') }}">

                @if ($errors->has('total'))
            <div class="text-danger">{{ $errors->first('total') }}</div>
        @endif
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="state">Estado</label>
            <div class="col-sm-10">
                <select class="form-control" name="state" id="state">
                    <option value="1">Cancelado</option>
                    <option value="0">Pendiente</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Registrar</button>
                <a href="{{url('dashboard/income')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection