<!DOCTYPE html>
<html lang="en">
<head>
    @include('Plantillas.head', ['titulo' => 'BetCalories'])
</head>
<body>
    
    <div class="row m-0 p-0 align-items-center nav">
        <div class="col-5 text-center">
            <a href="/">
                <img src="{{ asset('LogoBetCalories.png') }}" class="image">
            </a>
        </div>
        <div class="col-7">
            <div class="row justify-content-end">
                <div class="col-3 text-center">
                    <a href="/" class="navLink">Recetas</a>
                </div>
                <div class="col-3 text-center">
                    <a href="/login" class="navLink">Inicia Sesión</a>
                </div>
                <div class="col-3 text-center">
                    <a href="/" class="navLink">Registrate</a>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>