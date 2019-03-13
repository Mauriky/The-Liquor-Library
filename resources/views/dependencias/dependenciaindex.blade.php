@extends('layouts.app')

@section('content')

<h1>Listado de Dependencias</h1>

@foreach($dependencias as $dep)
<tr>
<td>{{$dep->id}}</td>

<td>{{$dep->nombre}}</td>
</tr>
@endforeach
@endsection