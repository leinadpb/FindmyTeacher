@extends("layouts.master")

@section("content")

	@if(\Illuminate\Support\Facades\Session::has('post-blog'))
		<div class="row">
			<div class="col-md-12">
				<p class="alert alert-info">{{ Session::get('post-blog') }}</p>
			</div>
		</div>
	@endif

	<div align="center"><h1 class="myTitle">Preguntas y respuestas</h1></div>
	<div align="center"><i>¿Necesitas saber algo? ¡Pregúntalo ahora a todos los miembros de esta comunidad!</i></div>
	<hr>

	<div class="container-fluid">
		<h3>Preguntar</h3>
		<form class="form form-horizontal" method="post" action="{{ route('add-post-blog') }}">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
				<div class="col-sm-10">
					<input type="text" minlength="3" name="title" class="form-control" id="inputTitle" placeholder="Nombre..." required>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Pregunta</label>
				<div class="col-sm-10">
					<textarea placeholder="Descripción de la pregunta..." name="content" class="form-control" rows="3" minlength="5" required></textarea>
				</div>
			</div>
			{{ csrf_field() }}
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Preguntar</button>
				</div>
			</div>
		</form>
	</div>

	<br>
	<hr>

	@if(count($posts) == 0)
		<div><p class="alert alert-warning">Aún no hay preguntas. ¡Sé el primero en agregar una!</p></div>
	@else
		<div>{{ count($posts) }} preguntas realizadas.</div>
	@endif

	@foreach($posts as $p)
		<div class="media">
			<div class="media-left">
				<a href="#">
					<img class="media-object" width="70px" height="60px" src="{{ URL::to('images/post.png') }}" alt="">
				</a>
			</div>
			<div class="media-body">
				<h4 class="media-heading">{{ $p->title }}</h4>
				{{ $p->content }}
				<div>
					@if(\Illuminate\Support\Facades\Auth::check())
						<a type="button" class="btn btn-info btn-sm" href="">Eliminar</a>
					@endif
					<br>
						@foreach($p->commentblogs()->orderBy('created_at', 'desc')->get() as $c)
							<div class="media">
								<div class="media-body">
									<br>
									<div class="container-fluid myAnswerBox">
										{{ $c->content }}
									</div>
								</div>
							</div>
						@endforeach
						<br>
					<div class="container-fluid myAnswerBox">
						<form action="{{ route('respond-toPost', ['id' => $p->id]) }}" method="post" class="form-horizontal">
							<input type="hidden" name="title" value="Anónimo">
							<input class="form-control" type="text" placeholder="Responder..." name="answer" required>
							<input type="hidden" name="id" value="{{ $p->id }}">
							{{ csrf_field() }}
							<div align="right"><button type="submit" class="btn btn-primary btn-sm">Responder</button></div>
						</form>
					</div>
				</div>
				<!-- Nested comments -->


			</div>

		</div>
		<hr>
	@endforeach


@endsection