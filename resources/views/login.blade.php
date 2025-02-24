<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Orçamento Mensal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-green: #008000;
            --dark-bg: #1e1e1e;
            --box-bg: #2a2a2a;
            --text-light: #ffffff;
        }
        body {
            background-color: var(--dark-bg);
            color: var(--text-light);
        }
        .login-container {
            height: 100vh;
            display: flex;
            flex-wrap: wrap;
        }
        .login-box {
            background-color: var(--box-bg);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            max-width: 400px;
            width: 100%;
        }
        .image-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .image-container img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }
        .form-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body class="bg-[var(--dark-bg)] flex h-screen">

<!-- Lado esquerdo com imagem -->
<div class="login-container">
    <!-- Lado esquerdo com imagem -->
    <div class="image-container d-none d-md-block">
        <img src="https://images.pexels.com/photos/4386321/pexels-photo-4386321.jpeg" alt="Imagem de orçamento mensal">
    </div>
    
    <!-- Lado direito com box de login -->
    <div class="form-container">
        <div class="login-box">
            <h2 class="text-center" style="color: var(--primary-green);">Orçamento Mensal</h2>
            
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form method="POST" action="/login">
                @csrf
                
                <div class="mb-3">
                    <label class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control bg-dark text-white border-secondary" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <input type="senha" name="senha" class="form-control bg-dark text-white border-secondary" required>
                </div>
                
                <button type="submit" class="btn w-100" style="background-color: var(--primary-green); color: white;">Entrar</button>
            </form>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>