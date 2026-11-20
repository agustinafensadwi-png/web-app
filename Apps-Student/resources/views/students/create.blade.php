<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Student - Apps-Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #fff9e6 0%, #e0fbfc 50%, #ffe8e5 100%);
            min-height: 100vh;
            color: #1e293b;
        }
        .form-card {
            background: #ffffff;
            border: 2px solid #90e0ef;
            border-radius: 18px;
        }
        .btn-simpan {
            background-color: #00b4d8;
            border-color: #00b4d8;
            color: #ffffff;
            font-weight: 600;
            border-radius: 10px;
        }
        .btn-simpan:hover {
            background-color: #0096c7;
            border-color: #0096c7;
            color: #ffffff;
        }
    </style>
</head>
<body class="py-4">
    <div class="container" style="max-width: 600px;">
        <div class="form-card shadow-sm p-4">
            <h4 class="mb-3 fw-bold" style="color: #ff6b6b;">Tambah Data Student</h4>

            @if ($errors->any())
                <div class="alert alert-danger rounded-3">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nim" class="form-label fw-semibold">NIM</label>
                    <input type="text" name="nim" id="nim" class="form-control" value="{{ old('nim') }}" required>
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" required>
                </div>

                <div class="mb-3">
                    <label for="prodi" class="form-label fw-semibold">Program Studi</label>
                    <input type="text" name="prodi" id="prodi" class="form-control" value="{{ old('prodi') }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-simpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>