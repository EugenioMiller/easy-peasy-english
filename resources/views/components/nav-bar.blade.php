<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><img class="logo" src="{{URL::asset('img/logo.png')}}" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Funlingo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about-us">Sobre Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cursos</a>
          </li>

        @if(Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="/logout">Cerrar sesión</a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="/login">Ingresar</a>
            </li>
        @endif

        </ul>
      </div>
    </div>
  </nav>
