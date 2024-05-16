<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    require_once '../includes/menu.php';

    ?>

    <div>
        <form action="">
            <label for="username"> Nom d'utilisateur</label>
            <input type="text" name="username" id="username" placeholder="saisir le nom d'utilisateur ici" minlength="5" maxlength="20" required>
            <br> <label for="password"> Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="saisir votre mot de passe ici" minlength="5" maxlength="20" required>
            <br> <label for="confirmation"> Confirmation de mot de passe</label>
            <input type="password" name="confirmation" id="confirmation" placeholder="confirmez votre mot de passe  ici" minlength="5" maxlength="20" required>

            <br> <button type="submit">
                S'inscrire
            </button>

            <p>Déja un compte? Connectez-vous en cliquant <a href="/blog/pages/connexion.php?page=connexion">ici</a></p>

        </form>
    </div>
</body>

</html>