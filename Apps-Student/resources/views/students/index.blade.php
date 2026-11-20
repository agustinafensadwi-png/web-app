<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Student - Apps-Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #fff9e6 0%, #e0fbfc 50%, #ffe8e5 100%);
            min-height: 100vh;
            color: #1e293b;
        }
        .topbar-card {
            background: #ffffff;
            border: 2px solid #90e0ef;
            border-radius: 18px;
        }
        .btn-cheerful-add {
            background-color: #00b4d8;
            border-color: #00b4d8;
            color: #ffffff;
            font-weight: 600;
            border-radius: 10px;
        }
        .btn-cheerful-add:hover {
            background-color: #0096c7;
            border-color: #0096c7;
            color: #ffffff;
        }
        .btn-cheerful-edit {
            background-color: #ffd166;
            border-color: #ffd166;
            color: #1e293b;
            font-weight: 600;
            border-radius: 8px;
        }
        .btn-cheerful-delete {
            background-color: #ff6b6b;
            border-color: #ff6b6b;
            color: #ffffff;
            font-weight: 600;
            border-radius: 8px;
        }
        .table-card {
            background: #ffffff;
            border: 2px solid #ffd166;
            border-radius: 18px;
            overflow: hidden;
        }
        .table thead th {
            background-color: #00b4d8;
            color: #ffffff;
            border-color: #0096c7;
        }
        .aksi-col {
            white-space: nowrap;
        }
        .table td, .table th {
            vertical-align: middle;
        }
    </style>
</head>
<body class="py-4">
    <div class="container">
        <div class="topbar-card shadow-sm p-4 mb-4 d-flex flex-wrap justify-content-between align-items-center gap-3">
            <div>
                <h3 class="mb-1 fw-bold" style="color: #ff6b6b;">Data Student</h3>
                <small class="text-muted">Login sebagai: <strong>{{ session('admin_nama') ?? 'Admin' }}</strong></small>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ route('students.create') }}" class="btn btn-cheerful-add">+ Tambah Student</a>
                <form action="{{ route('logout') }}" method="POST" class="m-0">
                    @csrf
                    <button type="submit" class="btn btn-cheerful-delete">Logout</button>
                </form>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success border-0 shadow-sm rounded-3">{{ session('success') }}</div>
        @endif

        <div class="table-card shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead>
                            <tr>
                                <th width="60" class="text-center text-nowrap">No</th>
                                <th class="text-nowrap">NIM</th>
                                <th>Nama</th>
                                <th class="text-nowrap">Prodi</th>
                                <th>Email</th>
                                <th class="text-center aksi-col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($students as $index => $student)
                                <tr>
                                    <td class="text-center fw-semibold">{{ $index + 1 }}</td>
                                    <td class="text-nowrap">{{ $student->nim }}</td>
                                    <td class="fw-semibold">{{ $student->nama }}</td>
                                    <td class="text-nowrap">
                                        <span class="badge rounded-pill" style="background-color: #ffe8e5; color: #d62828;">
                                            {{ $student->prodi }}
                                        </span>
                                    </td>
                                    <td>{{ $student->email }}</td>
                                    <td class="text-center aksi-col">
                                        <div class="d-flex justify-content-center align-items-center gap-1 flex-nowrap">
                                            <a href="{{ route('students.edit', $student) }}" class="btn btn-sm btn-cheerful-edit">Edit</a>
                                            <form action="{{ route('students.destroy', $student) }}" method="POST" class="d-inline m-0" onsubmit="return confirm('Yakin ingin menghapus data student ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-cheerful-delete">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted py-4">Belum ada data student.</td>
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