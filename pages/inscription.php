<?php
if (isset($_COOKIE['username'])) {
    header(('Location: /blog'));
}
?>
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
        <?php
        if (isset($_GET['email']) && $_GET['email'] == 'error') {
            echo "<h2> Email invalide. veuillez saisir entre 5 et 50 caractères. <h2>";
        }

        if (isset($_GET['password']) && $_GET['password'] == 'error') {
            echo "<h2> mot de passe n'est pas conforme <h2>";
        }
        ?>
        <form action="/blog/pprocessing/authentication.php" method="post">
            <label for="email"> Email</label>
            <input type="email" name="email" id="email" placeholder="saisir l'email ici" required>
            <br>
            <label for="username"> Nom d'utilisateur</label>
            <input type="text" name="username" id="username" placeholder="saisir le nom d'utilisateur ici" minlength="4" maxlength="20" required>
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