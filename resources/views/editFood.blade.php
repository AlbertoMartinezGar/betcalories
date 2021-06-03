<!DOCTYPE html>
<html lang="en">
<head>
    @include('Plantillas.head', ['titulo' => 'Edita un producto'])
</head>
<body>
    <div class="row m-0 p-0 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <p class="titulos text-uppercase"><b>Edita los valores de un alimento</b></p>
            </div>
            <form action="/editaralimento/{{ $food->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Texto e input para el nombre del alimento --}}
                <input type="hidden" name="txtID" value="{{ $food->id }}">
                <div class="row m-0 p-0 mt-3">
                    <div class="col-4 d-flex justify-content-center">
                        <p class="titTxt">Nombre del alimento:</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="txtAlimento" placeholder="Nombre" class="w-100 form-control" value="{{ $food->name }}">
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
                        <input type="text" name="txtCarbos" placeholder="Carbohidratos" class="w-100 form-control" value="{{ $food->carbs }}">
                    </div>
                    {{-- Texto e input para las proteinas del alimento --}}
                    <div class="col-md-2 d-flex justify-content-end">
                        <span for="txtProte" class="align-self-center titTxt">Proteínas:</span>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="txtProte" placeholder="Proteína" class="w-100 form-control" value="{{ $food->proteins }}">
                    </div>
                    {{-- Texto e input para las grasas del alimento --}}
                    <div class="col-md-2 d-flex justify-content-end">
                        <span for="txtGrasas" class="align-self-center titTxt">Grasas:</span>
                    </div> 
                    <div class="col-md-2">
                        <input type="text" name="txtGrasas" placeholder="Grasas" class="w-100 form-control" value="{{ $food->fats }}">
                    </div>
                </div>
                {{-- Botón enviar --}}
                <div class="row mt-5 justify-content-center">
                    <input type="submit" value="Editar" class="btn boton">
                </div>
            </form>
        </div>
    </div>
</body>
</html>