<!DOCTYPE html>
<html lang="en">
<head>
    @include('Plantillas.head', ['titulo' => 'BetCalories'])
</head>
<body>
    
    {{-- <div class="row m-0 p-0 align-items-center nav">
        <div class="col-5 text-center">
            <a href="/">
                <img src="{{ asset('LogoBetCalories.png') }}" class="image">
            </a>
        </div>
        <div class="col-7">
            <div class="row justify-content-end">
                <div class="col-3 text-center">
                    <a href="/" class="navLink">Recetas</a>
                </div>
                <div class="col-3 text-center">
                    <a href="/login" class="navLink">Inicia Sesión</a>
                </div>
                <div class="col-3 text-center">
                    <a href="/" class="navLink">Registrate</a>
                </div>
            </div>
        </div>
    </div> --}}

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary justify-content-between">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('LogoBetCalories.png') }}" class="image">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/login">Iniciar Sesión<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
          </ul>
        </div>
      </nav>
    
</body>
</html>