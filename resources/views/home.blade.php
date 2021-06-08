<!DOCTYPE html>
<html lang="en">
<head>
    @include('Plantillas.head', ['titulo' => 'Home'])
</head>
<body>
    @include('Plantillas.navbar')

    <div class="container">
        <div class="row m-0 p-0 mt-5 justify-content-center">
            <h1 class="text-primary text-center">Bienvenido <b class="text-capitalize">{{ Auth::user()->name }}</b></h1>
        </div>
        <div class="row m-0 p-0 mt-5">
            <h2 class="text-primary textos">
                El dia de hoy has consumido: <b></b> calorias.
            </h2>
        </div>
        <div class="row m-0 p-0 mt-3">
            <h2 class="text-primary textos">
                Desayuno.
            </h2>
        </div>
        <div class="row m-0 p-0 mt-3">
            <h2 class="text-primary textos">
                Comida.
            </h2>
        </div>
        <div class="row m-0 p-0 mt-3">
            <h2 class="text-primary textos">
                Cena.
            </h2>
        </div>

    </div>
</body>
</html>