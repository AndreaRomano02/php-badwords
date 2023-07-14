<?php
$censored_word = $_GET['censored_word'];
$string = $_GET['string'];
$censored_word = trim($censored_word);
$censored_string = str_replace($censored_word, '***', $string);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censored string</title>
</head>

<body>
    <p>La frase che hai inserito è
    <p> '<strong><?= $string ?></strong>'</p>
    </p>
    <p>La parola da censurare è
    <p>'<strong><?= $censored_word ?></strong>'</p>
    </p>
    <p>La frase censurata è
    <p>'<strong><?= $censored_string ?></strong>'</p>
    </p>
</body>

</html>