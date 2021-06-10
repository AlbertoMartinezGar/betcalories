<!DOCTYPE html>
<html lang="en">
<head>
    @include('Plantillas.head', ['titulo' => 'Tu recuento'])
</head>
<body>
    @include('Plantillas.navbar')

    <div class="container">
        <div class="row m-0 p-0 mt-5 justify-content-center">
            <h1 class="text-primary text-center">Bienvenido <b class="text-capitalize">{{ Auth::user()->name }}</b></h1>
        </div>
        @php
               //dd($foods);
            @endphp
        @if (!$foods->isEmpty())
            <?php $total = 0 ?>
            @foreach ($foods as $food)
                <?php $total += $food->totalCalories ?>
            @endforeach
            <div class="row m-0 p-0 mt-5">
                <h2 class="text-primary textos">
                    El dia de hoy has consumido: 
                    <b>
                        {{ $total }}
                    </b> 
                    calorias.
                </h2>
            </div>
            <div class="row m-0 p-0 mt-5">
                <h2 class="text-primary textos">
                    Tus alimentos de hoy:
                </h2>
            </div>
            @foreach ( $foods as $food )
            <div class="row m-0 p-0 mt-3">
                <div class="card w-100">
                    <div class="card-header text-center">
                        <span class="titTxt">
                            {{ $food->name }}
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="row">
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
                        <div class="row mt-5 justify-content-center">
                            <div class="col-md-6 d-flex justify-content-center">
                                <form action="/borraralimento/{{$food->id}}" method="post" class="d-flex justify-content-center w-100">
                                    @csrf
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
            <div class="row m-0 p-0 mt-5 justify-content-center">
                <a href="/addfood">
                    <button class="btn btn-primary">
                        Agrega un alimento
                    </button>
                </a>
            </div>
        
        @else
        <div class="row m-0 p-0 mt-5">
            <h2 class="text-primary textos">
                El dia de hoy no has registrado ningun alimento. ¡Hazlo ahora!
            </h2>
        </div>
        <div class="row m-0 p-0 mt-5">
            <a href="/addfood">
                <button class="btn btn-primary">
                    Registra un alimento
                </button>
            </a>
        </div>
        @endif
    </div>

</body>
</html>