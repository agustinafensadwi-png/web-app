<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5" style="max-width: 600px;">
        <div class="card shadow-sm">
            <div class="card-header bg-warning">
                <h1 class="h5 mb-0">{{ $judul }}</h1>
            </div>
            <div class="card-body">
                <form method="post" action="/admin/{{ $admin->id_admin }}">
                    @method('put')
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">ID Admin</label>
                        <input type="text" class="form-control" value="{{ $admin->id_admin }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" value="{{ $admin->username }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password Baru (Kosongkan jika tidak diubah)</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="/admin" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>