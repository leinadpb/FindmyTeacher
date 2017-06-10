@extends('layouts.master')

@section('content')

	@if(Session::has('comment'))
		<div class="row">
			<div class="col-md-12">
				<p class="alert alert-info">{{ Session::get('comment') }}</p>
			</div>
		</div>
	@endif
	@if(Session::has('edited'))
		<div class="row">
			<div class="col-md-12">
				<p class="alert alert-info">{{ Session::get('edited') }}</p>
			</div>
		</div>
	@endif

	<div align="center"><h1 class="myTitle">{{ $teacher->name }}</h1></div>
	<hr>
	<div>
		<div class="table-responsive">
			<table class="table table-condensed">
				<tr class="active">
					<th style="text-align: center;">
						Universidad
					</th>
					<th style="text-align: center;">
						Carrera
					</th>
					<th style="text-align: center;">
						Maestria
					</th>
				</tr>
				<tr class="info">
					<td style="text-align: center;">
						{{ $teacher->work }}
					</td>
					<td style="text-align: center;">
						{{ $teacher->career }}
					</td>
					<td style="text-align: center;">
						{{ $teacher->master }}
					</td>
				</tr>
			</table>
		</div>
	</div>
	<br>
	
	<form class="form form-horizontal" method="post" action="{{ route('comment', ['id' => $teacher->id]) }}">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Titulo</label>
			<div class="col-sm-10">
				<input type="text" name="title" class="form-control" id="inputTitle" value="Anónimo">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Contenido</label>
			<div class="col-sm-10">
				<textarea placeholder="Haz un comentario..." name="content" class="form-control" rows="3"></textarea>
			</div>
		</div>
		<input type="hidden" name="id" value="{{$teacher->id}}">
		{{ csrf_field() }}
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Comentar</button>
			</div>
		</div>
	</form>
	
	<hr>
	<div><b>Comentarios</b></div>
	<hr>

	@if(count($comments) == 0)
		<div class="row">
			<div class="col-md-12">
				<p class="alert alert-warning">No hay comentarios. ¡Sé el primero en comentar!</p>
			</div>
		</div>
	@endif

	@foreach($comments as $c)
		<div class="media container-fluid">
			<div class="media-left">
				<a href="#">
					<img class="media-object" width="70px" height="60px" src="{{ URL::to('images/student.ico') }}" alt="">
				</a>
			</div>
			<div class="media-body">
				<h4 class="media-heading">{{ $c->title }}</h4>
				{{ $c->content }}
			</div>
		</div>
		<hr>
	@endforeach

@endsection