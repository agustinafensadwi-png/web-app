<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 mb-0">{{ $judul }}</h1>
            <a href="/admin/create" class="btn btn-primary">+ Tambah Admin</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>ID Admin</th>
                                <th>Username</th>
                                <th>Dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($admins as $row)
                                <tr>
                                    <td>{{ $row->id_admin }}</td>
                                    <td>{{ $row->username }}</td>
                                    <td>{{ $row->created_at }}</td>
                                    <td>
                                        <a href="/admin/edit/{{ $row->id_admin }}" class="btn btn-warning btn-sm">
                                            Edit
                                        </a>
                                        <form method="post" action="/admin/{{ $row->id_admin }}" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted py-3">Belum ada data admin.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>