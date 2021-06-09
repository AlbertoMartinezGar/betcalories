<!DOCTYPE html>
<html lang="en">
<head>
    @include('Plantillas.head', ['titulo' => 'Agrega a tus comidas'])
</head>
<body>
    @include('Plantillas.navbar')

    <div class="container">
        <div class="row m-0 p-0 mt-5 justify-content-center">
            <h1 class="text-primary text-center">Agrega un alimento a tus comidas</h1>
        </div>
        <hr>
        {{-- Buscador --}}
        <div class="row justify-content-center mb-5 mt-5">
            <form action="/addfood/{{ Auth::user()->id }}" method="POST" class="d-flex justify-content-center w-100">
                @csrf                
                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
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
                            <div class="col-md-6 d-flex justify-content-center">
                                <form action="" method="post" class="d-flex justify-content-center w-100">
                                    @csrf
                                    <input type="hidden" value="{{ Auth::user()->id }}">
                                    <button type="submit" class="btn btn-primary w-100">
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