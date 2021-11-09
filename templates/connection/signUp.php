<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../../public/css/signup.css" type="text/css">
    <link rel="apple-touch-icon" sizes="180x180" href="/../../public/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/../../public/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/../../public/images/favicon/">
    <link rel="manifest" href="/site.webmanifest">
    <title>EDMI-Se connecter</title>
</head>

<body>
   
    <div class="container">
        <div class="form">
            <h1>Création de compte</h1>

            <form action="/signup" method="post">
                <fieldset>
                    <legend><span class="number">1</span> Informations personnelles</legend>
                    <input type="text" name="lastname" placeholder="Nom *" value="<?= $lastname ?>" required>
                    <input type="text" name="firstname" placeholder="Prénoms *" value="<?= $firstname ?>" required>
                    <input type="text" name="address" placeholder="Adresse de domicile *" value="<?= $address ?>" required></input>
                    <input type="text" name="phoneNumber" placeholder="Numéro de téléphone *" value="<?= $phoneNumber ?>" required></input>
                    <input type="date" name="birthDate" placeholder="Date de naissance *" value="<?= $birthDate ?>" required></input>
                    <input type="text" name="birthPlace" placeholder="Lieu de naissance *" value="<?= $birthPlace ?>" required></input>

                </fieldset>
                <fieldset>
                    <legend><span class="number">2</span> Informations de connection</legend>
                    <input type="email" name="email" placeholder="Adresse email *" value="<?= $email ?>" required></input>
                    <input type="password" name="password" placeholder="Mot de passe *" required></input>
                </fieldset>
                <span class="error">
                    <?= $error ?>
                </span><br>
                <input type="submit" value="Enregistrer" />
            </form>
            <div class="signup">
                Vous avez déjà un compte?
                <a href="/login">Se connecter</a>
                <p><a href="../home/home.php">Retour a l'Accueil</a></p>
            </div>
        </div>

    </div>

</body>

</html>