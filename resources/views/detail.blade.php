<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - Olshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow" style="max-width: 400px;">
            <div class="card-body">
                <h3 class="card-title">Detail Produk</h3>
                <hr>
                <p class="card-text"><strong>Nama Produk:</strong> {{ $namaProduk }}</p>
                <p class="card-text"><strong>Harga:</strong> Rp {{ $harga }}</p>
                <a href="/product" class="btn btn-primary btn-sm">Kembali ke Produk</a>
            </div>
        </div>
    </div>
</body>
</html>