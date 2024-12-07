@extends('dashboard.master')
@section('titulo', 'Editar Detalle de Ingreso')
@include('layouts.navigation')

@section('contenido')
<div class="container py-4">
    <h1>Editar Detalle de Ingreso</h1>

    <form action="{{ route('income-detail.update', $incomeDetail->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="income_id">ID de Ingreso</label>
            <input type="number" class="form-control" id="income_id" name="income_id" value="{{ old('income_id', $incomeDetail->income_id) }}">
            @error('income_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="article_id">ID de Artículo</label>
            <input type="number" class="form-control" id="article_id" name="article_id" value="{{ old('article_id', $incomeDetail->article_id) }}">
            @error('article_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="quantity">Cantidad</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity', $incomeDetail->quantity) }}">
            @error('quantity')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Precio</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $incomeDetail->price) }}">
            @error('price')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
