<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 2 PHP</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
    <p><?php 
$isEasy = true;

if ($isEasy = false) {
    echo 'C\'est facile!!';
}
else {
    echo 'C\'est difficile !!!';
}
echo ($isEasy == true) ? 'c\'est facile' : 'c\'est difficile';    //ternaire
  ?></p>
</body>
</html>

