<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 1 PHP</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
    <p><?php 
$age = 20;

if ($age < 18) {
    echo 'Vous êtes mineur';
}
else {
    echo 'Vous êtes majeur';
}
  ?></p>
</body>
</html>

