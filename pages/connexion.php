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
    <div class="login">
        <?php
        if (isset($_GET['user']) && $_GET['user'] == 'unknown') {
            echo '<h2> les identifiants saisis sont incorrects. Veuillez les vérifier et réesseyez ! <h2> ';
        }
        ?>
        <form action="/blog/pprocessing/login.php" method="post">

            <label for="username"> Nom d'utilisateur</label>
            <input type="text" name="username" id="username" placeholder="saisir le nom d'utilisateur ici" minlength="4" maxlength="20" required>
            <br> <label for="password"> Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="saisir votre mot de passe ici" minlength="5" maxlength="20" required>

            <br> <button type="submit">
                Se connecter
            </button>

            <p>pas encore de compte? Inscrivez-vous en cliquant <a href="/blog/pages/connexion.php?page=connexion">ici</a></p>

        </form>
    </div>
</body>

</html>