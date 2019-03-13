@extends('layouts.app')

@section('content')

<h1>Creación de dependencia</h1>
<form action="{{route('dependencias.store')}}" method=POST>
    @csrf
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" placeholder="Enter name" name="nombre">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection