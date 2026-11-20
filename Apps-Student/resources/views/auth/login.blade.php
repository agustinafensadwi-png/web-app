<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Apps-Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #fff9e6 0%, #e0fbfc 50%, #ffe8e5 100%);
            min-height: 100vh;
            color: #1e293b;
        }
        .login-card {
            background: #ffffff;
            border: 2px solid #90e0ef;
            border-radius: 22px;
            box-shadow: 0 12px 30px rgba(0, 180, 216, 0.12);
        }
        .badge-cheerful {
            background-color: #fff3b0;
            color: #9c6615;
            font-weight: 600;
            border-radius: 999px;
            padding: 5px 12px;
            font-size: 0.78rem;
        }
        .form-control {
            border-radius: 12px;
            border: 1.5px solid #caf0f8;
            padding: 10px 14px;
        }
        .form-control:focus {
            border-color: #00b4d8;
            box-shadow: 0 0 0 0.2rem rgba(0, 180, 216, 0.2);
        }
        .btn-cheerful-login {
            background-color: #ff6b6b;
            border-color: #ff6b6b;
            color: #ffffff;
            font-weight: 700;
            border-radius: 12px;
            padding: 10px 16px;
        }
        .btn-cheerful-login:hover {
            background-color: #ee5253;
            border-color: #ee5253;
            color: #ffffff;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center p-3">
    <div class="login-card p-4 p-md-5 w-100" style="max-width: 410px;">
        <div class="text-center mb-4">
            <span class="badge-cheerful d-inline-block mb-2">Apps-Student</span>
            <h3 class="fw-bold mb-1" style="color: #0096c7;">Login Admin</h3>
            <small class="text-muted">Masuk untuk mengelola data mahasiswa</small>
        </div>

        @if (session('error'))
            <div class="alert alert-danger border-0 rounded-3">{{ session('error') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger border-0 rounded-3">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="admin@mail.com" required autofocus>
            </div>

            <div class="mb-4">
                <label for="password" class="form-label fw-semibold">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="••••••••" required>
            </div>

            <button type="submit" class="btn btn-cheerful-login w-100">Masuk</button>
        </form>
    </div>
</body>
</html>