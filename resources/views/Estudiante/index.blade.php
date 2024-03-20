<!doctype html>
<html lang="en">

<head>
  <title></title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">

  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Lilita+One&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body >
  <header>
    <nav class="navbar navbar-expand-lg bg fixed-top"id="tu">
      <div class="container-fluid" >
        <a id="letra" class="navbar-brand" href="#inicio">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-amd" viewBox="0 0 16 16">
            <path d="m.334 0 4.358 4.359h7.15v7.15l4.358 4.358V0H.334ZM.2 9.72l4.487-4.488v6.281h6.28L6.48 16H.2V9.72Z"/>
          </svg>  
          LA RATA
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a id="letra"class="nav-link active" aria-current="page" href="{{ url('Estudiante/create') }}">Registro</a>
            </li>
            <li class="nav-item">
              <a id="letra"class="nav-link active" aria-current="page" href="#sobreestudiante">Indice</a>
            </li>
            <li class="nav-item">
              <a id="letra" class="nav-link active" aria-current="page" href="{{ url('Estudiante/edit') }}">Nosotros</a>
            </li>
            <li class="nav-item">
              <a id="letra" class="nav-link active" aria-current="page" href="{{ url('Estudiante/form') }}">Contactos</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
              </a>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <section id="inicio" style="background:url('assets/img/fondo3.gif')no-repeat;background-size:1400px  800px">
    <div class="contenidor">
      <div class="presentacionr">
        <p class="bienvenidar">Bienvenidos</p>
        <h2>¡Hola! soy <span>Sergio </span>, Presentando Mi Trabajo de Taller de programacion</h2>
        <p class="descripcionr">muestra de servicios y skill personal lo mejor para tu empresa</p>
      </div>
    </div>
  </section>
  <section id="sobreestudiante">
    <div class="card " id="contr">
      <br>
      <br>
      <br>
      <br>
      <div class="card-title" id="ltff">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-columns-gap" viewBox="0 0 16 16">
          <path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
        </svg>
        COMTROL GENERAL DE UNIVERSITARIOS || TALLER DE PROGRAMACION
      </div>
      <div class="card-body" id="ltf">
        <h5 class="card-title">.</h5>
        <p class="card-text">.</p>
      </div>
      @if(Session::has('mensaje'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('mensaje') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">

        </button>
      </div>
      @endif 
      <!-- place footer here -->
      <div class="container">
        <table class="table" id="wq">
          <thead class="thead" id="wqq">
            <tr >
              <th>Foto</th>
              <th>Nombre</th>
              <th>Apellido Paterno</th>
              <th>Apellido Materno</th>
              <th>Correo</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody >
            @foreach( $estudiante as $estudiante )
            <tr id="wqqq">
              <td>
                <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$estudiante->Foto }}" width="100"alt="">
              </td>
              <td>{{ $estudiante->nombre }}</td>
              <td>{{ $estudiante->ApellidoPaterno }}</td>
              <td>{{ $estudiante->ApellidoMaterno }}</td>
              <td>{{ $estudiante->Correo }}</td>
              <td> 
                <a href="{{ url('/Estudiante/' .$estudiante->id. '/edit') }}" class="btn btn-warning"> 
                  Editar
                </a>  
                | 
                <form method="post" class="d-inline" action="{{ url('/Estudiante/' .$estudiante->id) }}">
                  @csrf 
                  {{ method_field('DELETE') }}
                  <input type="submit" onclick="return confirm('¿Quieres  borrar?') " class="btn btn-danger" value="Borrar">
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <br>
      <br>
      <br>
    </div>
    <br>
  </section>
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>