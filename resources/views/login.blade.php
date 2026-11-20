<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #fff8e7;
        }

        h2 {
            text-align: center;
            color: #ff5e5b;
            font-weight: bolder;
        }

        .form-login {
            border: 2px solid #00bbf9;
            background-color: #ffffff;
            width: 30%;
            border-radius: 30px;
            box-shadow: 5px 8px 3px 2px navy;
            margin: 0 auto;
            padding: 20px;
        }

        .input {
            width: 80%;
            height: 40px;
            border-radius: 20px solid #00f5d4;
            font-size: 15px;
            color: #3d405b;
            padding: 2px 12px;
        }

        .tombol {
            width: 50%;
            height: 50px;
            border-radius: 20px;
            background-color: #ff9f1c;
            color: white;
            font-weight: bolder;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2 class="judul">Login Users</h2>

    @if ($errors->any())
    <div style="width: 30%; margin: 10px auto; color: crimson; text-align: center;">
        {{ $errors->first() }}
    </div>
@endif

    <form method="POST" action="/login">
        @csrf
        <div class="form-login">
            <p>
                <input type="email" class="input" name="email" placeholder="Masukkan Email" required>
            </p>
            <p>
                <input type="password" class="input" name="password" placeholder="Password Anda" required>
            </p>
            <p>
                <button class="tombol" type="submit">LOGIN</button>
            </p>
        </div>
    </form>
</body>
</html>