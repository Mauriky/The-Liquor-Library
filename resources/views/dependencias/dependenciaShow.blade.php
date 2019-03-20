@extends('layouts.app')

@section('content')

<h1>Detalle de dependencia</h1>


<table class="table table-hover table-dark offset-3 col-6">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
      <tr>
        <td>{{$dependencia->id}}</td>
        <td>{{$dependencia->nombre}}</td>
        <td>
            <a href="{{ route('dependencias.edit', $dependencia->id) }}" class="btn btn-sm btn-warning">Editar</a>
            <form action="{{ route('dependencias.destroy', $dependencia->id ) }}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
            </form>
            
        </td>
      </tr>
  </tbody>
</table>

@endsection