@extends('home')
@section('content')



<div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br>
            <h1>Lista de Usuarios de agua potable</h1>
<br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
  Nuevo
</button>


<table class="table">
    <thead>
        <tr>
            <th scope="col">id_medidor</th>
            <th scope="col">Nombre</th>
            <th scope="col">Cedula</th>
            <th scope="col">direccion</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contactos as $contacto)
        <tr>
            <th>{{$contacto->id_medidor}}</th>
            <td>{{$contacto->nombre}}</td>
            <td>{{$contacto->cedula}}</td>
            <td>{{$contacto->direccion}}</td>
        <td>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit {{$contacto->id_medidor}}">
          Editar
        </button>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete {{$contacto->id_medidor}}">
         Eliminar
        </button>
        </td>
</tr>
        @include('contacto.modal-info')
        @endforeach
    
       
    </tbody>
</table>
</div>
@include('contacto.modal-create')
</div>

        <div class="col-md-2"></div>
</div>





@endsection