@extends('dashboard.master')
@section('titulo','Personas')
@include('layouts/navigation')
@section('contenido')

<div class='container py-4'>
    <h1>Listado de Personas</h1>
    <br>
    <a href="{{url('dashboard/person/create')}}" class="btn btn-primary btn-sm">Nueva Persona</a>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Tipo</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Tipo de Documento</th>
                <th>Numero de Documento</th>
                <th>Dirreccion</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($person as $person)
            <tr>
                <td scope="row">{{$person->id}}</td>
                <td>{{$person->type}}</td>
                <td>{{$person->first_name}}</td>
                <td>{{$person->last_name}}</td>
                <td>{{$person->document_type}}</td>
                <td>{{$person->document_number}}</td>
                <td>{{$person->address}}</td>
                <td>{{$person->phone}}</td>
                <td>{{$person->email}}</td>
                <td>{{$person->created_at}}</td>
                <td>{{$person->updated_at}}</td>

                <td>
                    <a href="{{url('dashboard/person/'.$person->id.'/edit')}}" class="bi bi-pencil-square"></a></td>
                <td>
                    <form action="{{url('dashboard/person/'.$person->id) }}" method="post">
                        @csrf 
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger"> <i class="bi bi-eraser-fill">Borrar</i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 
</div>
@endsection