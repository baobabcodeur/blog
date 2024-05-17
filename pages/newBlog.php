<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <!-- <link rel="stylesheet" href="../assets/summernote/summernote-lite.css"> -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

    <title>blog PHP</title>
</head>

<body>

    <?php
    require_once '../includes/menu.php';

    ?>
    <div class="article">
        <form action="" enctype="multipart/form-data">
            <label for="title">Saisir le titre de l'article</label>
            <input type="text" name="title" id="title" required>

            <label for="short_description">Saisir une bref description de l'article</label>
            <textarea name="short_description" id="short_description" placeholder="Saisir une brève description..."></textarea>

            <label for="long_description">Saisir une longue description de l'article</label>
            <textarea name="long_description" id="long_description" placeholder="Saisir une longue description..."></textarea>

            <label for="file">Joindre le fichier a votre article</label>
            <input type="file" name="file" id="file">

            <button type="submit"> Soumettre</button>

            <button type="rest">Annuler</button>
        </form>
    </div>
    <!-- include libraries(jQuery, bootstrap) -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#long_description').summernote({
                height: 400,
            });


        });
    </script>
</body>