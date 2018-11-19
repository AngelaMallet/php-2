<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 8 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <p><?php
            $isOk = 'isOkNot';
            if ($isOk != 'isOk') {
                echo 'c\'est pas bon !!!';
            } else {
                echo 'c\'est ok !!';
            }
            ?></p>
    </body>
</html>

