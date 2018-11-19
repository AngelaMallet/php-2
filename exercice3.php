<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <p><?php
            $gender = 'homme';
            $age = 43;
           
            

            if ($gender === 'femme') {
                if ($age >= 18) {
                    echo 'Vous êtes une femme et vous êtes majeure.';
                } else {
                    echo 'Vous êtes une femme et vous êtes mineure.';
                }
            } else {
                if ($age >= 18) {
                    echo 'Vous êtes un homme et vous êtes majeur.';
                } else {
                    echo 'Vous êtes un homme et vous êtes mineur.';
                }
            }
            ?></p>
    </body>
</html>

