<!DOCTYPE html>
<html lang="en">
<head>
    @include('Plantillas.head', ['titulo' => 'Home Admin'])
</head>
<body>
    @include('Plantillas.navbar')
    <div class="container">
        <h2 class="text-primary text-center mt-4">Administra los alimentos o agrega nuevos</h2>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <img src="{{ asset('search.png') }}" class="img-fluid">
                        </div>
                        <div class="row justify-content-center mt-5">
                            <a href="/registerfood" class="btn btn-primary">Administrar alimentos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>