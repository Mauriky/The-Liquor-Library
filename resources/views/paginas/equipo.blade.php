@extends('layouts.app')

@section('contenido')

<table class="table table-hover table-dark offset-3 col-6">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mauricio</td>
      <td>Romero</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Bryan</td>
      <td>Naveja</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Adrian</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


@endsection