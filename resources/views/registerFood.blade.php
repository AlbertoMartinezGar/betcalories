<!DOCTYPE html>
<html lang="en">
<head>
    @include('Plantillas.head', ['titulo' => 'Registra un producto'])
</head>
<body>
    <div class="row m-0 p-0 justify-content-end mt-2">
        <div class="col-3">
            <a href="/">Regresar al inicio</a>
        </div>
    </div>
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
                        <input type="text" name="txtAlimento" placeholder="Nombre" class="w-100">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="titTxt">Macronutrientes (Por cada 100 gramos)</p>
                    </div>
                </div>
                <div class="row m-0 p-0 mt-3">
                    {{-- Texto e input para los carbohidratos del alimento --}}
                    <div class="col-md-2 d-flex justify-content-end">
                        <span for="txtCarbos" class="align-self-center titTxt">Carbohidratos:</span> 
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="txtCarbos" placeholder="Carbohidratos" class="w-100">
                    </div>
                    {{-- Texto e input para las proteinas del alimento --}}
                    <div class="col-md-2 d-flex justify-content-end">
                        <span for="txtProte" class="align-self-center titTxt">Proteínas:</span>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="txtProte" placeholder="Proteína" class="w-100">
                    </div>
                    {{-- Texto e input para las grasas del alimento --}}
                    <div class="col-md-2 d-flex justify-content-end">
                        <span for="txtGrasas" class="align-self-center titTxt">Grasas:</span>
                    </div> 
                    <div class="col-md-2">
                        <input type="text" name="txtGrasas" placeholder="Grasas" class="w-100">
                    </div>
                </div>
                {{-- Botón enviar --}}
                <div class="row mt-5 justify-content-center">
                    <input type="submit" value="Enviar" class="btn boton">
                </div>
            </form>
        </div>
    </div>
    <div class="row m-0 p-0 mt-5 justify-content-center">
        <p class="titulos"><b>ALIMENTOS ACTUALES</b></p>
    </div>
    <div class="container">
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
                            <div class="col-md-4 text-center">
                                <span class="titTxt">Proteinas: </span>
                                <span class="contTxt">{{ $food->proteins }}</span>
                            </div>
                            <div class="col-md-4 text-center">
                                <span class="titTxt">Carbohidratos: </span>
                                <span class="contTxt">{{ $food->carbs }}</span>
                            </div>
                            <div class="col-md-4 text-center">
                                <span class="titTxt">Grasas: </span>
                                <span class="contTxt">{{ $food->fats }}</span>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-6 d-flex justify-content-center">
                                <a href="#" class="btn btn-primary w-50">Editar</a>
                            </div>
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
    </div>
    
</body>
</html>

