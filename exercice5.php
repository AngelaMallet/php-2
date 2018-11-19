<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 5 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <p><?php
            $gender = 'homme';
            if ($gender != 'homme') {
                echo 'C\'est une développeuse !!!';
            } else {
                echo 'C\'est un développeur !!!';
            }
            ?></p>
    </body>
</html>

