<?php
$censored_word = $_GET['censored_word'];
$string = $_GET['string'];
$string_length = strlen($string);
$censored_word = trim($censored_word);
$censored_string = str_replace($censored_word, '***', $string);
$censored_string_length = strlen($censored_string)
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Censored string</title>
</head>

<body>
  <div>

    <h3>La frase che hai inserito è</h3>
    <p> '<strong><?= $string ?></strong>'</p>
    <p>La lungezza della frase è di: <?= $string_length ?> lettere</p>
  </div>
  <div>
    <h3>La parola da censurare è</h3>
    <p>'<strong><?= $censored_word ?></strong>'</p>
  </div>
  <div>
    <h3>La frase censurata è</h3>
    <p>'<strong><?= $censored_string ?></strong>'</p>
    <p>La lungezza della frase è di: <?= $censored_string_length ?> lettere</p>
  </div>
</body>

</html>