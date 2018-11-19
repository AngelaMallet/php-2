<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 6 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <p><?php
            $age = 3;
            if ($age >= 18) {
                echo 'Tu es majeur';
            } else {
                echo 'Tu n\'es pas majeur';
            }
            ?></p>
    </body>
</html>

