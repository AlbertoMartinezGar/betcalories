<!DOCTYPE html>
<html lang="en">
<head>
    @include('Plantillas.head', ['titulo' => 'Agrega a tus comidas'])
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
            <h1 class="text-primary text-center">Agrega un alimento a tus comidas</h1>
        </div>
        <hr>
        {{-- Buscador --}}
        <div class="row justify-content-center mb-5 mt-5">
            <form action="/addfood/{{ $date }}" method="POST" class="d-flex justify-content-center w-100">
                @csrf                
                    <input type="text" name="busqueda" class="form-control w-50 mr-2" placeholder="Busca un alimento">
                    <button type="submit" class="btn btn-outline-primary w-25">
                        Buscar
                    </button>
            </form>
        </div>
        {{-- Fin buscador --}}
        {{-- Se muestran todas los alimentos registrados --}}
        @foreach($foods as $food)
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
                            <div class="col-md-12 d-flex justify-content-center">
                                <form action="/savefood/{{ $food->idFood }}" method="post" class="d-flex justify-content-center w-100">
                                    @csrf
                                    <input type="hidden" name="fecha" value="{{ $date }}">
                                    <label for="cantidad" class="titTxt textos h-100 w-25 mr-2 d-flex align-items-center justify-content-center">Cantidad ingerida:</label>
                                    <input type="number" name="cantidad" class="form-control w-25 mr-2" placeholder="Cantidad" required step="any">
                                    <button type="submit" class="btn btn-primary">
                                        Agregar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        @endforeach
        {{-- Fin del ciclo --}}
    </div>
</body>
</html>