@extends('layouts.app')

@section('content')

<h1>Documentos{{session('apodo')}}</h1>
<table class="table table-hover table-dark offset-3 col-6">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Usuario ID</th>
      <th scope="col">Fecha Recibido</th>
      <th scope="col">Dirigido a</th>
      <th scope="col">No. Oficio</th>
      <th scope="col">Fecha Oficio</th>
      <th scope="col">Envia</th>
    </tr>
  </thead>
  <tbody>
    @foreach($docs as $doc)
      <tr>
        <td>{{$doc->id}}</td>
        <td>{{$doc->user_id}}</td>
        <td>{{$doc->fecha_recibido}}</td>
        <td>{{$doc->dirigido}}</td>
        <td>{{$doc->no_oficio}}</td>
        <td>{{$doc->fecha_oficio}}</td>
        <td>{{$doc->envia}}</td>
      </tr>

    @endforeach
  </tbody>
</table>


@endsection