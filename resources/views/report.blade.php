<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Los ultimos 3 dias consumiste:</h2>
    {{-- Dia de hoy --}}
    <h2>Hoy</h2>
    <?php 
        $caloriasTotales = 0; 
        $carbosTotales = 0;
        $grasasTotales = 0;
        $protesTotales = 0;
        foreach ($food1 as $food) {
            $caloriasTotales += $food->totalCalories * ($food->quantity/100);
            $carbosTotales += $food->carbs * ($food->quantity/100);
            $grasasTotales += $food->fats * ($food->quantity/100);
            $protesTotales += $food->proteins * ($food->quantity/100);
        }
    ?>
    <p><b>Calorias totales: </b>{{ $caloriasTotales }}</p>
    <p><b>Carbohidratos totales: </b>{{ $carbosTotales }}</p>
    <p><b>Proteinas totales: </b>{{ $grasasTotales }}</p>
    <p><b>Grasas totales: </b>{{ $grasasTotales }}</p>
    <br>
    {{-- Ayer --}}
    <h2>Ayer</h2>
    <?php 
        $caloriasTotales = 0; 
        $carbosTotales = 0;
        $grasasTotales = 0;
        $protesTotales = 0;
        foreach ($food2 as $food) {
            $caloriasTotales += $food->totalCalories * ($food->quantity/100);
            $carbosTotales += $food->carbs * ($food->quantity/100);
            $grasasTotales += $food->fats * ($food->quantity/100);
            $protesTotales += $food->proteins * ($food->quantity/100);
        }
    ?>
    <p><b>Calorias totales: </b>{{ $caloriasTotales }}</p>
    <p><b>Carbohidratos totales: </b>{{ $carbosTotales }}</p>
    <p><b>Proteinas totales: </b>{{ $grasasTotales }}</p>
    <p><b>Grasas totales: </b>{{ $grasasTotales }}</p>
    <br>
    {{-- Antier --}}
    <h2>Antier</h2>
    <?php 
        $caloriasTotales = 0; 
        $carbosTotales = 0;
        $grasasTotales = 0;
        $protesTotales = 0;
        foreach ($food3 as $food) {
            $caloriasTotales += $food->totalCalories * ($food->quantity/100);
            $carbosTotales += $food->carbs * ($food->quantity/100);
            $grasasTotales += $food->fats * ($food->quantity/100);
            $protesTotales += $food->proteins * ($food->quantity/100);
        }
    ?>
    <p><b>Calorias totales: </b>{{ $caloriasTotales }}</p>
    <p><b>Carbohidratos totales: </b>{{ $carbosTotales }}</p>
    <p><b>Proteinas totales: </b>{{ $grasasTotales }}</p>
    <p><b>Grasas totales: </b>{{ $grasasTotales }}</p>
</body>
</html>