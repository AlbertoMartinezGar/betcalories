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
                <div class="">
                    <div class="row">
                        <div class="col-4">
                            <p>Nombre del alimento:</p>
                        </div>
                        <div class="col-8">
                            <input type="text" name="txtAlimento" placeholder="nombre" class="w-100">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            Macronutrientes (Por cada 100 gramos)
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-2">
                            <label for="txtCarbos">Carbohidratos:</label> 
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="txtCarbos" placeholder="Carbos" class="w-50">
                        </div>
                        <div class="col-md-2">
                            <label for="txtProte">Proteinas:</label>
                        </div>
                        <div class="col-md-2">
                           <input type="text" name="txtProte" placeholder="Prote">
                        </div>
                        <div class="col-md-2">
                            <label for="txtGrasas">Grasas</label>
                        </div> 
                        <div class="col-md-2">
                            <input type="text" name="txtGrasas" placeholder="Grasas">
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Enviar">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row m-0 p-0 justify-content-center">
        <p class="titulos"><b>ALIMENTOS ACTUALES</b></p>
    </div>
    <div class="container">
        @foreach($foods as $food)
            <div class="row m-0 p-0 mt-3 foodCont bg-danger">
                <div class="col-2 bg-dark d-flex">
                    <span class="bg-success justify-content-center align-self-center">Nombre: {{ $food->name }}</span>
                </div>
                <div class="col-2">
                    Proteinas: {{ $food->proteins }}
                </div>
                <div class="col-2">
                    Carbohidratos: {{ $food->cabrs }}
                </div>
                <div class="col-2">
                    Grasas: {{ $food->fats }}
                </div>
            </div>  
        @endforeach
    </div>
    
</body>
</html>

