@extends('layouts.master')

@section("content")
    <div align="center"><h1 class="myTitle">Añadir profesor</h1></div>
    <hr>
    <form class="form-horizontal" method="post" action="{{ route('save-teacher') }}">
        <div class="form-group">
            <label class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" name="name" placeholder="Primer nombre, primer apellido" maxlength="45" minlength="3" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Carrera</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputCareer" name="career" placeholder="Carrera(s) cursada(s) en la universidad" maxlength="120" minlength="5" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Maestria</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputMaster" name="master" placeholder="Maestria(s) realizada(s)" maxlength="120" minlength="5" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Universidad</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputUniversity" name="university" placeholder="Universidad en la que trabaja" maxlength="50" minlength="2" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Descripcion</label>
            <div class="col-sm-10">
                <input type="textarea" class="form-control" id="inputDescription" name="description" placeholder="Breve descripcion: Forma de ser, forma de dar la clase, etc..." maxlength="260" minlength="1" required>
            </div>
        </div>
<!--        <input type="hidden" name="id" value="4">  -->
        {{ csrf_field() }}
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Agregar</button>
            </div>
        </div>
    </form>
@endsection