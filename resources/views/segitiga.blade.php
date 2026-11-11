<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Luas Segitiga</title>
    <!-- Bootstrap 5 CSS CDN untuk mempercantik tampilan -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Perhitungan Luas Segitiga</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item"><strong>Panjang Alas:</strong> {{ $alas }} cm</li>
                            <li class="list-group-item"><strong>Tinggi Segitiga:</strong> {{ $tinggi }} cm</li>
                        </ul>
                        <div class="alert alert-info text-center">
                            <h5 class="mb-0">Luas Segitiga = {{ $luas }} cm²</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>