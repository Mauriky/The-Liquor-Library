@extends('layouts.app')

@section('content')

@if(isset($dependencia))
<h1>Actualización de dependencia</h1>
  <form action="{{ route('dependencias.update', $dependencia->id) }}" method="POST">
  <input type="hidden" name="_method" value="PATCH">
@else
  <h1>Creación de dependencia</h1>
  <form action="{{route('dependencias.store')}}" method="POST">
  
@endif  
    @csrf
  <div class="form-group">
    <label for="nombre">Nombre</label>
   
    <input type="text" class="form-control" id="nombre" placeholder="Enter name" name="nombre" value="{{ $dependencia->nombre ?? ''}} {{old('nombre')}}"> 
    @if ($errors->has('nombre'))
        <span class="alert alert-danger" role="alert">
            <strong>{{ $errors->first('nombre') }}</strong>
        </span>
    @endif          
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection