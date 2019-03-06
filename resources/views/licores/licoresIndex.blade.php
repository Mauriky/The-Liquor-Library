@extends('layouts.app')

@section('contenido')

<h1>Licores</h1>
<table class="table table-hover table-dark offset-3 col-6">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">País de origen</th>
      <th scope="col">Sabor</th>
      <th scope="col">Color</th>
      <th scope="col">% de alcohol</th>
      <th scope="col">Existencia</th>
    </tr>
  </thead>
  <tbody>
    @foreach($docs as $doc)
      <tr>
        <td>{{$doc->id}}</td>
        <td>{{$doc->nombre}}</td>
        <td>{{$doc->pais_origen}}</td>
        <td>{{$doc->sabor}}</td>
        <td>{{$doc->color}}</td>
        <td>{{$doc->porcentaje_alcohol}}</td>
        <td>{{$doc->existencia}}</td>
      </tr>
    @endforeach
  </tbody>
</table>


@endsection