@extends("layouts.master")

@section("content")

	@if(Session::has('not-logged-in'))
		<div class="row">
			<div class="col-md-12">
				<p class="alert alert-danger ">{{ Session::get('not-logged-in') }}</p>
			</div>
		</div>
	@endif

	@if(!$results)
    	<h1 class="myTitle">Todos los profesores</h1>
	@else
		<h1 class="myTitle">Resultados</h1>
	@endif
	@if(Session::has('info'))
		<div class="row">
			<div class="col-md-12">
				<p class="alert alert-info">{{ Session::get('info') }}</p>
			</div>
		</div>
	@endif

	<!-- Search Box -->
	<form class="navbar-form" method="post" action="{{ route('search') }}">
		<div class="row">
			<div class="col-lg-6">
				<div class="input-group">
					<input type="text" name="byText" class="form-control" placeholder="Buscar por...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit">Buscar</button>
					</span>
				</div><!-- /input-group -->
				<br>
				<div class="radio">
					<label>
						<input type="radio" name="option" id="inlineRadio3" value="byWork" checked> Por universidad
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="option" id="inlineRadio3" value="byName"> Por nombre
					</label>
				</div>
			</div><!-- /.col-lg-6 -->
		</div>
		{{ csrf_field() }}
	</form>

	<br>

	<div>
		@if(!$teachersFound == 0)
			<p>{{ $teachersFound }} profesores encontrados.</p>
		@else
			<p>No hay profesores que tengan los criterios seleccionados..</p>
		@endif
	</div>
	<hr>

	<!-- BEGIN -->
	@if(count($teachers) == 0)
		<div class="row">
			<div class="col-md-12">
				<p class="alert alert-warning">No se encontraron profesores.</p>
			</div>
		</div>
	@endif
	@foreach($teachers as $t)
	<div class="media">
	  <div class="media-left">
		<a href="#">
		  <img class="media-object" width="80px" height="60px" src="{{ URL::to('images/photo.jpg') }}" alt="{{ $t->name }}">
		</a>
	  </div>
	  <div class="media-body">
		<h4 class="media-heading">{{ $t->name }}<span class='work'> - {{ $t->work }}</span></h4>
		<p>
			@if(strlen($t->description) > 70)
				{{ Str::limit($t->description, 70)}}
			@else
				{{ $t->description }}
			@endif
		</p>
		<br>
	  	<a type="button" class="btn btn-info btn-sm" href="{{ route('teacher', ['id' => $t->id]) }}" class="each-teacher">Ver detalles</a>
	  	@if(\Illuminate\Support\Facades\Auth::check())
			<a type="button" class="btn btn-info btn-sm" href="{{ route('edit', ['id' => $t->id]) }}">Editar</a>
		  	<a type="button" class="btn btn-info btn-sm" href="{{ route('delete-teacher', ['id' => $t->id]) }}">Eliminar</a>
		@endif
	  </div>
	</div>
	<hr>
	@endforeach
	<!-- END -->

	<script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js">
        $(".alert-info").fadeTo(2000, 500).slideUp(500, function(){
            $("#success-alert").slideUp(500);
        });
	</script>

@endsection

