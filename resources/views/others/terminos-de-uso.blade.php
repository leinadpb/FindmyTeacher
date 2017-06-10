@extends('layouts.master')

@section('content')
	
	<div align="center"><h1 class="myTitle">Términos de uso</h1></div>
	<hr>
	<div class='container myText'>
		<p>&nbsp;</p><p>
			Los presentes términos de uso definen el uso adecaudo de esta aplicación web. Como se ha establecido en nuestras políticas de privacidad, <a href="{{ route('homeapp') }}">Find My Teacher</a> no se hace responsable de su mal uso por parte del usuario final.
		</p>

		<p><strong>Comentarios y/o Preguntas en el blog</strong></p>
		<p>
			Cualquiera puede hacer un comentario sobre un profesor. Para esto, primero lo busca en la página de inicio (en el bsucador) ya sea por el nombre o por la universidad donde trabaja. Una vez obtenido el profesor, el usuario podrá 'ver sus detalles', allí hay información sobre el profesor y podrá hacer su crítica sobre el mismo.
		</p>
		<p>
			Las preguntas que se hagan en el blog deben de tener un título o nombre y un cuerpo (la pregunta). En la parte del título debe identificarse con un nombre o con algún sobrenombre. En la parte del cuerpo debe de redactar de forma detallada la pregunta.
		</p>
		<p>
			Los usuarios NO deben publicar comentarios ofensivos hacia otros usuarios (tampoco hacia los porfesores).
		</p>
	</div>	
@endsection