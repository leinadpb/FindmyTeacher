@extends('layouts.master')

@section('content')
@if(Session::has('edited'))
		<div class="row">
			<div class="col-md-12">
				<p class="alert alert-info">{{ Session::get('edited') }}</p>
			</div>
		</div>
	@endif

	<div align="center"><h1 class="myTitle">Editar profesor: <span style="color:black;">{{ $teacher->name }}</span></h1></div>
	<hr>
	
	<form class="form-horizontal" method="post" action="{{ route('edit-teacher', ['id' => $teacher->id]) }}">
        <div class="form-group">
            <label class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" name="name" placeholder="Nombre..." maxlength="45" minlength="3" value="{{ $teacher->name }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Carrera</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputCareer" name="career" placeholder="Carrera..." maxlength="120" minlength="5" value="{{ $teacher->career }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Maestria</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputMaster" name="master" placeholder="Maestria..." maxlength="120" minlength="5" value="{{ $teacher->master }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Universidad</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputUniversity" name="work" placeholder="Lugar de trabajo..." maxlength="50" minlength="2" value="{{ $teacher->work }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Descripcion</label>
            <div class="col-sm-10">
                <input type="textarea" class="form-control" id="inputDescription" name="description" placeholder="Breve descripcion..." maxlength="260" minlength="1" value="{{ $teacher->description }}" required>
            </div>
        </div>
<!--        <input type="hidden" name="id" value="4">  -->
        {{ csrf_field() }}
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Guardar cambios</button>
            </div>
        </div>
    </form>

@endsection