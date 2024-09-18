<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../scss/main.css">
    <title>Page de connexion</title>
</head>
<body>
<div class="header-login bg-secondary py-4">
    <div class="logo-section">
        <img src="../../public/images/logo-arcadia.png" class="logo" alt="logo arcadia">
    </div>
</div>
<div class="title-login bg-primary">
        <h1 class="login-title text-center text-secondary pt-5">Page de connexion</h1>
</div>

<div class="container mt-5 mb-5 container-form">
    <h2 class="title-connecter mb-4 text-center">Se connecter</h2>
    <form>
        <div class="mb-3">
          <label for="EmailInput" class="form-label">Email</label>
          <input type="email" class="form-control" id="EmailInput" placeholder="test@mail.fr" name="Email"> 
        </div>
        <div class="mb-3">
          <label for="PasswordInput" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" id="PasswordInput" name="Password">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Connexion</button>
        </div>
    </form>
    <div class="text-center pt-3">
        <a href="/signup">Vous n’avez pas de compte ? Inscrivez-vous ici !</a>
    </div>
</div>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>