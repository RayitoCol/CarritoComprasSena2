@extends('dashboard.master')
@section('titulo', 'Ingresos')
@include('layouts/navigation')
@section('contenido')
<main>
    <div class='container py-4'>
        <h1>Listado de Ingresos</h1>
        <br>
        <a href="{{url('dashboard/income/create')}}" class="btn btn-primary btn-sm">Nuevo Ingreso</a>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Id_proveedor</th>
                    <th>Id_usuario</th>
                    <th>Tipo_recibo</th>
                    <th>Serie_recibo</th>
                    <th>Número_recibo</th>
                    <th>Fecha</th>
                    <th>Impuesto</th>
                    <th>Total</th>
                    <th>Estado</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($income as $income)
                <tr>
                    <td scope="row">{{$income->id}}</td>
                    <td>{{$income->person->type}}</td>
                    <td>{{$income->User->name}}</td>
                    <td>{{$income->receipt_type}}</td>
                    <td>{{$income->receipt_series}}</td>
                    <td>{{$income->receipt_number}}</td>
                    <td>{{$income->date}}</td>
                    <td>{{$income->tax}}</td>
                    <td>{{$income->total}}</td>
                    <td>{{$income->status}}</td>
                    <td>
                        <a href="{{ url('dashboard/income/'.$income->id.'/edit') }}" class="bi bi-pencil"></a>
                    </td>
                    <td>
                        <form action="{{ url('dashboard/income/'.$income->id) }}" method="post">
                            @method("DELETE")
                            @csrf
                            <button class="bi bi-eraser-fill" type="submit" ></button>                                
                        </form>
                    </td>
    
                </tr>
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
    
        </div>
    
    </main>
    @endsection