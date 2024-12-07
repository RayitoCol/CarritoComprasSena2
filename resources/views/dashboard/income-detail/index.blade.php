@extends('dashboard.master')
@section('titulo', 'Detalles de Ingresos')
@include('layouts.navigation')

@section('contenido')
<div class="container py-4">
    <h1>Detalles de Ingresos</h1>

    <a href="{{url('dashboard/income-detail/create')}}" class="btn btn-primary btn-sm">Crear Nuevo Detalle</a>

    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ingreso ID</th>
                <th>Artículo ID</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($incomeDetails as $incomeDetail)
                <tr>
                    <td>{{ $incomeDetail->id }}</td>
                    <td>{{ $incomeDetail->income_id }}</td>
                    <td>{{ $incomeDetail->article_id }}</td>
                    <td>{{ $incomeDetail->quantity }}</td>
                    <td>{{ $incomeDetail->price }}</td>
                    <td>
                        <a href="{{ route('dashboard.income-detail.edit', $incomeDetail->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Editar</a>

                        <form action="{{ route('dashboard.income-detail.destroy', $incomeDetail->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if(session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif
</div>
@endsection
