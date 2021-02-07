   <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <a class="navbar-brand" href="#">Biblioteca</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">

      <ul class="navbar-nav">

        <li class="{{ setActivo('inicio') }} nav-item">
          <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
        </li>

        <li class="{{ setActivo('libros.index') }} nav-item">
          <a class="nav-link" href="{{ route('libros.index') }}">Listado de libros</a>
        </li>

        <li class="{{ setActivo('libros.create') }} nav-item">
            <a class="nav-link" href="{{ route('libros.create') }}">
            Nuevo libro</a>
        </li>

      </ul>

    </div>

  </nav>
