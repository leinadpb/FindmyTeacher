@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel de control</div>

                <div class="panel-body">
                    <p>Esta es la sesión administrativa. Desde aquí podrás agregar, modificar y eliminar profesores de la base de datos.</p>
                </div>
                <div class="panel-body">
                    <a href="{{ route('add.teacher') }}">Agregar profesor(a)</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
