<!DOCTYPE html>
<html lang="en">
<head>
    @include('Plantillas.head', ['titulo' => 'Home'])
</head>
<body>
    @include('Plantillas.navbar')
    <?php
        $dateToBD = date('Y-m-d');
    ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row m-0 p-0">
                            <img src="{{ asset('Add_files.png') }}" class="img-fluid">
                        </div>
                        <div class="row mt-5 justify-content-center">
                            <a href="/mycalories/{{ $dateToBD }}" class="btn btn-primary">Tus calorias diarias</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row m-0 p-0">
                            <img src="{{ asset('data_reports.png') }}" class="img-fluid">
                        </div>
                        <div class="row mt-5 justify-content-center">
                            <form action="/getreport" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">
                                    Obten un reporte de tus últimos días
                                </button>
                            </form>
                        </div>
                        {{-- <div class="row mt-5 justify-content-center">
                            <a href="" class="btn btn-primary">Reportes</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>