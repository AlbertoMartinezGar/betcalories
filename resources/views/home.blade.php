<!DOCTYPE html>
<html lang="en">
<head>
    @include('Plantillas.head', ['titulo' => 'Home'])
</head>
<body>
    @include('Plantillas.navbar')

    <div class="container">
        <div class="row">
            <a href="/mycalories">Tus calorias diarias</a>
        </div>
        <div class="row">
            <a href="">Reportes</a>
        </div>
        
    </div>
</body>
</html>