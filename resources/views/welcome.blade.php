<!DOCTYPE html>
<html lang="en">
<head>
    @include('Plantillas.head', ['titulo' => 'BetCalories'])
</head>
<body>
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
      <div class="container mt-5">
        {{-- Información de la página --}}
        <div class="row m-0 p-0 justify-content-center">
          <h1 class="text-primary text-center"><b><u>Acerca de la página</u></b></h1>
        </div>
        {{-- Parrafo superior --}}
        <div class="row m-0 p-0 mt-3">
          <div class="col-md-8 d-flex align-items-center">
            <span class="text-primary text-center textoInicio">BetCalories es una plataforma para las personas que desean llevar una cuenta de las calorias ingeridas durante el día. Ayudando a las personas a lograr su objetivo ya sea: bajar de peso, conservar su peso actual o aumentar su peso.</span>
          </div>
          <div class="col-md-4 d-flex justify-content-center">
            <img src="{{ asset('comida.jpg') }}" height="200px">
          </div>
        </div>
        {{-- Parrafo inferior --}}
        <div class="row m-0 p-0 mt-3">
          <div class="col-md-4 d-flex justify-content-center">
            <img src="{{ asset('BobEsponja.jpg') }}" height="150px">
          </div>
          <div class="col-md-8 d-flex align-items-center">
            <span class="text-primary text-center textoInicio">Mantener un registro de comidas te ayudar a comprender tus hábitos y aumenta la probabilidad de que alcances tus objetivos.</span>
          </div>
        </div>
        <hr>
        {{-- Información personal --}}
        <div class="row m-0 p-0 mt-5 justify-content-center">
          <h1 class="text-primary text-center"><b><u>Información personal</u></b></h1>
        </div>
        <div class="row m-0 p-0 mt-3 justify-content-left">
          <span class="text-primary textoInicio"><b>Nombre: </b>Alberto Enrique Martínez García</span>
        </div>
        <div class="row m-0 p-0 justify-content-left">
          <span class="text-primary textoInicio"><b>Clave única: </b>278603</span>
        </div>
        <div class="row m-0 p-0 justify-content-left">
          <span class="text-primary textoInicio"><b>Carrera: </b>Ingeniería en Sistemas Inteligentes</span>
        </div>
        <div class="row m-0 p-0 justify-content-left">
          <span class="text-primary textoInicio"><b>Semestre: </b>2020-2021/II</span>
        </div>
        <div class="row m-0 p-0 justify-content-left">
          <span class="text-primary textoInicio"><b>Materia: </b>Aplicaciones web interactivas</span>
        </div>
      </div>
</body>
</html>