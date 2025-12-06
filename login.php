<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SAPA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            background-image: url('polibatam.jpeg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .login-container {
            background-color: #f3f3f3ff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            padding: 30px;
            width: 100%;
            max-width: 400px;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: -1;
        }

        .logo { 
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100px;
        }
        
        .login-header {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        
        .login-title {
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .form-control {
            margin-bottom: 15px;
        }
        .error-message {
            color: red;
            font-size: 14px;
            display: none;
        }
        .btn-login {
            width: 100%;
            margin-top: 10px;
        }
        
        .navigation {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        
        <img src="logosapa1.png" alt="Logo" class="logo mb-3">
        
        <div class="login-header">
            <h2 class="login-title">LOGIN</h2>
        </div>
        
        <form id="loginForm">
            <div class="mb-3">
                <label for="userId" class="form-label">Masukan ID</label>
                <input type="text" class="form-control" id="userId" placeholder="Masukkan ID Anda">
                <div class="error-message" id="usernameError">Nama Tidak Boleh Kosong</div>
            </div>
            
            <div class="mb-3">
                <label for="userPassword" class="form-label">Masukkan Password</label>
                <input type="password" class="form-control" id="userPassword" placeholder="Masukkan password Anda">
                <div class="error-message" id="passwordError">Kata sandi harus minimal 8 karakter</div>
            </div>
            
            <button type="submit" class="btn btn-primary btn-login">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="jslogin.js"></script>
</body>
</html>