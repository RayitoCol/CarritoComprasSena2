@extends('dashboard.master')
@section('titulo','Articulos')
@include('layouts/navigation')
@section('contenido')

<div class='container py-4'>
    <h1>Listado de articulo</h1>
    <br>
    <a href="{{url('dashboard/article/create')}}" class='btn btn-primary btn-sm'>Nuevo Articulo</a>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Id Producto</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Precio de Venta</th>
                <th>Stock</th>
                <th>Descripcion</th>
                <th>Estado</th>
                <th>Categoria</th>
                <th>Fecha de Creacion</th>
                <th>Fecha de Actualizacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($article as $article)
            <tr>
                <td scope="row">{{$article->id}}</td>
                <td>{{$article->code}}</td>
                <td>{{$article->name}}</td>
                <td>{{$article->Sale_Price}}</td>
                <td>{{$article->stock}}</td>
                <td>{{$article->description}}</td>
                <td>{{$article->state ? _('activo') : _('inactivo')}}</td>
                <td>{{$article->category->name}}</td>
                <td>{{$article->created_at}}</td>
                <td>{{$article->updated_at}}</td>
                <td>
                    <a href="{{ url('dashboard/article/'.$article->id.'/edit')}}" class="bi bi-pencil-square"></a>
                </td>
                <td>
                    <form action="{{ url('dashboard/article/'.$article->id) }}" method="post">
                        @method("DELETE")
                        @csrf
                        <button class="bi bi-eraser-fill" type="submit"></button>
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
@endsection