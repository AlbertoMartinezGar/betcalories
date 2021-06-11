<!DOCTYPE html>
<html lang="en">
<head>
    @include('Plantillas.head', ['titulo' => 'Tu recuento'])
</head>
<body>
    @include('Plantillas.navbar')
    <div class="row m-0 p-0 justify-content-end mt-3">
        <div class="col-3">
            <a href="/home">Regresar al inicio</a>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row m-0 p-0 mt-5 justify-content-center">
            <h1 class="text-primary text-center">Bienvenido <b class="text-capitalize">{{ Auth::user()->name }}</b></h1>
        </div>
        <div class="row m-0 p-0 mt-3 justify-content-center">
            <?php
                $actualDate = date("Y-m-d");
                $dateToBDMenos = date("Y-m-d", strtotime($date."- 1 days"));
                $dateToBDMas = date("Y-m-d", strtotime($date."+ 1 days"));
            ?>
            <div class="col-3 d-flex justify-content-center">
                <h2 class="text-primary">
                    <a href="/mycalories/{{ $dateToBDMenos }}" class="fas fa-arrow-left flecha"></a>
                    {{ $date }}
                    @if ($date == $actualDate)
                        <a href="" class="fas fa-arrow-right flecha"></a>
                    @else
                        <a href="/mycalories/{{ $dateToBDMas }}" class="fas fa-arrow-right flecha"></a>
                    @endif
                    
                </h2>
            </div>
            
        </div>
        @if (!$foods->isEmpty())            
            <?php 
                $caloriasTotales = 0; 
                $carbosTotales = 0;
                $grasasTotales = 0;
                $protesTotales = 0;
            ?>
            @foreach ($foods as $food)
                <?php 
                    $caloriasTotales += $food->totalCalories * ($food->quantity/100);
                    $carbosTotales += $food->carbs * ($food->quantity/100);
                    $grasasTotales += $food->fats * ($food->quantity/100);
                    $protesTotales += $food->proteins * ($food->quantity/100);
                ?>
            @endforeach
            <div class="row m-0 p-0 mt-5">
                <h2 class="text-primary textos">
                    El dia de hoy has consumido: <b>{{ $caloriasTotales }}</b> calorias.<br>
                    De los cuales:<br>
                    - Carbohidratos: <b>{{ $carbosTotales }}</b> gramos.<br>
                    - Proteínas: <b>{{ $protesTotales }}</b> gramos.<br>
                    - Grasas: <b>{{ $grasasTotales }}</b> gramos.<br>
                </h2>
            </div>
            <div class="row m-0 p-0 mt-5 justify-content-center">
                <a href="/addfood/{{ $date }}">
                    <button class="btn btn-primary">
                        Agrega un alimento
                    </button>
                </a>
            </div>
            <div class="row m-0 p-0 mt-5">
                <h2 class="text-primary textos">
                    Tus alimentos de hoy:
                </h2>
            </div>
            {{-- Buscador --}}
            <div class="row justify-content-center mb-5 mt-5">
                <form action="/mycalories/{{ $date }}" method="POST" class="d-flex justify-content-center w-100">
                    @csrf                
                        <input type="text" name="busqueda" class="form-control w-50 mr-2" placeholder="Busca un alimento">
                        <button type="submit" class="btn btn-outline-primary w-25">
                            Buscar
                        </button>
                </form>
            </div>
            {{-- Fin buscador --}}
            @foreach ( $foods as $food )
            <div class="row m-0 p-0 mt-3">
                <div class="card w-100">
                    <div class="card-header text-center">
                        <span class="titTxt">
                            {{ $food->name }}
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <span class="titTxt textos">Información nutrimental por cada 100 gramos.</span>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6 text-center">
                                <span class="titTxt textos">Calorias totales: </span>
                                <span class="contTxt textos">{{ $food->totalCalories }}</span>
                            </div>
                            <div class="col-md-6 text-center">
                                <span class="titTxt textos">Proteinas: </span>
                                <span class="contTxt textos">{{ $food->proteins }}</span>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6 text-center">
                                <span class="titTxt textos">Carbohidratos: </span>
                                <span class="contTxt textos">{{ $food->carbs }}</span>
                            </div>
                            <div class="col-md-6 text-center">
                                <span class="titTxt textos">Grasas: </span>
                                <span class="contTxt textos">{{ $food->fats }}</span>
                            </div>
                        </div>
                        <div class="row mt-2 justify-content-center">
                            <div class="col-md-6 text-center">
                                <span class="titTxt textos">Tu comiste: </span>
                                <span class="contTxt textos">{{ $food->quantity }} gramos</span>
                            </div>
                        </div>
                        <div class="row mt-5 justify-content-center">
                            <div class="col-md-6 d-flex justify-content-center">
                                <form action="/deletefood/{{$food->id}}" method="post" class="d-flex justify-content-center w-100">
                                    @csrf
                                    <input type="hidden" name="fecha" value="{{ $date }}">
                                    <button type="submit" class="btn btn-danger w-50">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            @endforeach        
        @else
        <div class="row m-0 p-0 mt-5">
            <h2 class="text-primary textos">
                El dia de hoy no has registrado ningun alimento. ¡Hazlo ahora!
            </h2>
        </div>
        <div class="row m-0 p-0 mt-5">
            <a href="/addfood/{{ $date }}">
                <button class="btn btn-primary">
                    Registra un alimento
                </button>
            </a>
        </div>
        @endif
    </div>

</body>
</html>