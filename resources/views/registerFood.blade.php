<!DOCTYPE html>
<html lang="en">
<head>
    @include('Plantillas.head', ['titulo' => 'Registra un producto'])
</head>
<body>
    <div class="row m-0 p-0 justify-content-end mt-3">
        <div class="col-3">
            <a href="/homeadmin">Regresar al inicio</a>
        </div>
    </div>
    <hr>
    <div class="row m-0 p-0 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <p class="titulos"><b>REGISTRA UN NUEVO ALIMENTO</b></p>
            </div>
            <form action="/guardaalimento" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Texto e input para el nombre del alimento --}}
                <div class="row m-0 p-0 mt-3">
                    <div class="col-4 d-flex justify-content-center">
                        <p class="titTxt">Nombre del alimento:</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="txtAlimento" placeholder="Nombre" class="w-100 form-control" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="titTxt">Macronutrientes (Por cada 100 gramos)</p>
                    </div>
                </div>
                <div class="row m-0 p-0 mt-3">
                    {{-- Texto e input para las calorias totales del alimento --}}
                    <div class="col-md-3 d-flex justify-content-center">
                        <span for="txtTotalCal" class="align-self-center titTxt">Calorias totales:</span> 
                    </div>
                    <div class="col-md-3">
                        <input type="number" name="txtTotalCal" placeholder="Calorias totales" class="w-100 form-control" step="any" required>
                    </div>
                    {{-- Texto e input para los carbohidratos del alimento --}}
                    <div class="col-md-3 d-flex justify-content-center">
                        <span for="txtCarbos" class="align-self-center titTxt">Carbohidratos:</span> 
                    </div>
                    <div class="col-md-3">
                        <input type="number" name="txtCarbos" placeholder="Carbohidratos" class="w-100 form-control" step="any" required>
                    </div>
                </div>
                <div class="row m-0 p-0 mt-3">
                    {{-- Texto e input para las proteinas del alimento --}}
                    <div class="col-md-3 d-flex justify-content-center">
                        <span for="txtProte" class="align-self-center titTxt">Proteínas: </span>
                    </div>
                    <div class="col-md-3">
                        <input type="number" name="txtProte" placeholder="Proteína" class="w-100 form-control" step="any" required>
                    </div>
                    {{-- Texto e input para las grasas del alimento --}}
                    <div class="col-md-3 d-flex justify-content-center">
                        <span for="txtGrasas" class="align-self-center titTxt">Grasas:</span>
                    </div> 
                    <div class="col-md-3">
                        <input type="number" name="txtGrasas" placeholder="Grasas" class="w-100 form-control" step="any" required>
                    </div>
                </div>
                {{-- Botón enviar --}}
                <div class="row mt-5 justify-content-center">
                    <input type="submit" value="Enviar" class="btn boton">
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="row m-0 p-0 mt-5 justify-content-center">
        <p class="titulos"><b>ALIMENTOS ACTUALES</b></p>
    </div>
    <div class="container">
        {{-- Aqui se muestran todos los alimentos de la BD en forma de Card --}}
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
                            {{ $food->id }}
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-6 d-flex justify-content-center">
                                <a href="/editaralimento/{{$food->idFood}}" class="btn btn-primary w-50">Editar</a>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center">
                                <form action="/borraralimento/{{ $food->idFood }}" method="post" class="d-flex justify-content-center w-100">
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
    </div>
    
</body>
</html>

