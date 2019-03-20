@extends('layouts.app')

@section('content')

<h1>Listado de Dependencias</h1>


<table class="table table-hover table-dark offset-3 col-6">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($dependencias as $dep)
      <tr>
        <td>{{$dep->id}}</td>
        <td>{{$dep->nombre}}</td>
        <td>
            <a href="{{ route('dependencias.show',$dep->id) }}">Detalle</a>
        </td>
      </tr>

    @endforeach
  </tbody>
</table>

@endsection