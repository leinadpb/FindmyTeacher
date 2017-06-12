<!-- HEADER -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header" align='center'>
      <a class="navbar-brand" href="{{ route('homeapp') }}">Find my Teacher</a>
    </div>
    <ul class="nav navbar-nav">
      	<li><a href="{{ route('blog') }}">Blog</a></li>
	    <li><a href="{{ route('about') }}">Acerca de</a></li>
        @if (!Auth::guest())
        <li>
            <a href="{{ route('home') }}">Panel de control</a>
        </li>
        <li>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Cerrar sesión
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
        @else

        @endif
    </ul>
  </div>
</nav>
