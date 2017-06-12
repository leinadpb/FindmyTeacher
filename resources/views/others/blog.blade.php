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

	<div class="">
		@foreach($posts as $p)
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object" width="50px" height="40px" src="{{ URL::to('images/post.png') }}" alt="">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">{{ $p->title }}</h4>
					{{ $p->content }}
					<!-- Nested comments -->
					<div class="container">
						@if(\Illuminate\Support\Facades\Auth::check())
							<a type="button" class="btn btn-info btn-sm" href="">Eliminar</a>
						@endif
						<br>
						<div class="list-inline">
							<ul class="commentList list-group">
								@foreach($p->commentblogs()->orderBy('created_at', 'asc')->get() as $c)
								<li class="list-group-item">
									<div class="commenterImage">
									  <img src="{{URL::to('images/comment.ico')}}" />
									</div>
									<div class="commentText">
										<p class="">{{ $c->content }}</p> <span class="date sub-text">On {{ $c->created_at }}</span>
									</div>
								</li>
								@endforeach
							</ul>
						</div>

					</div>
					<!-- prueba --><br>
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
			</div>
			<hr>
		@endforeach
	</div>

@endsection