@extends('layouts.app')

@section('content')

<h1>Clientes</h1>
<table class="table table-hover table-dark offset-3 col-6">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">RFC</th>
      <th scope="col">Dirección</th>
      <th scope="col">e-Mail</th>
    </tr>
  </thead>
  <tbody>
    @foreach($docs as $doc)
      <tr>
        <td>{{$doc->id}}</td>
        <td>{{$doc->nombre}}</td>
        <td>{{$doc->apellido}}</td>
        <td>{{$doc->rfc}}</td>
        <td>{{$doc->direccion}}</td>
        <td>{{$doc->e_mail}}</td>
      </tr>

    @endforeach
  </tbody>
</table>


@endsection