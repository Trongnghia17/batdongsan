<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: #f5f5f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
        }
        .login-box {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 40px 35px;
        }
        .login-title {
            text-align: center;
            margin-bottom: 30px;
        }
        .login-title h2 {
            color: #333;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 5px;
        }
        .login-title p {
            color: #666;
            font-size: 14px;
        }
        .form-label {
            color: #333;
            font-weight: 500;
            font-size: 14px;
            margin-bottom: 8px;
        }
        .form-control {
            height: 45px;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 10px 15px;
            font-size: 14px;
            transition: all 0.3s;
        }
        .form-control:focus {
            border-color: #1a237e;
            box-shadow: 0 0 0 3px rgba(26, 35, 126, 0.1);
            outline: none;
        }
        .btn-login {
            width: 100%;
            height: 45px;
            background: #1a237e;
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            font-size: 15px;
            transition: all 0.3s;
            margin-top: 10px;
        }
        .btn-login:hover {
            background: #0d1642;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(26, 35, 126, 0.3);
        }
        .form-check-label {
            font-size: 14px;
            color: #666;
        }
        .back-link {
            text-align: center;
            margin-top: 20px;
        }
        .back-link a {
            color: #666;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }
        .back-link a:hover {
            color: #1a237e;
        }
        .alert {
            font-size: 14px;
            border-radius: 6px;
            padding: 12px 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <div class="login-title">
                <h2>Đăng nhập Admin</h2>
                <p>Quản trị Bất Động Sản</p>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" 
                           class="form-control @error('email') is-invalid @enderror" 
                           id="email" 
                           name="email" 
                           value="{{ old('email') }}" 
                           placeholder="admin@example.com"
                           required 
                           autofocus>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" 
                           class="form-control @error('password') is-invalid @enderror" 
                           id="password" 
                           name="password" 
                           placeholder="Nhập mật khẩu"
                           required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">
                        Ghi nhớ đăng nhập
                    </label>
                </div>

                <button type="submit" class="btn btn-login">
                    Đăng Nhập
                </button>
            </form>

            <div class="back-link">
                <a href="{{ route('home') }}">
                    ← Quay lại trang chủ
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
