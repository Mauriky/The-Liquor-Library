@extends('layouts.app')

@section('contenido')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Información</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Información del sistema.
                </div>
            </div>
        </div>
    </div>
</div>
    <h1>Información del sistema</h1>
    <p>Gestor de Productos</p>


@endsection