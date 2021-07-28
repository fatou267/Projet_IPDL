<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/login.css" type="text/css">
    <link rel="apple-touch-icon" sizes="180x180" href="/public/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/public/images/favicon/">
    <link rel="manifest" href="/site.webmanifest">
    <title>EDMI-Se connecter</title>
</head>

<body>
    <header class="header">

        <?php
        require('templates/partials/navbar.php');
        ?>
    </header>

    <div class="container">

        <div class="form">
            <h2 class="form-heading">Se connecter</h2>
            <form action="/login" method="POST">
                <label for="email"><span>Email</span><input type="email" class="input-field" name="email" value="<?= $email ?>" required></label>
                <label for="password"><span>Mot de passe</span><input type="password" class="input-field" name="password" required></label>
                <span class="error">
                    <?= $error ?>
                </span>
                <button type="submit">Login</button>
            </form>
            <div class="signup">
                Pas encore de compte?
                <a href="/signup">Créer mon compte</a>
            </div>
        </div>
    </div>

</body>

</html>