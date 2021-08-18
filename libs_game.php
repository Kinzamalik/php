<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
</head>
<body>
    

<form action="libs_game.php" method="get">
   Color: <input type="text" name='color'>
   Plural Noun: <input type="text" name='pluralNoun'>
   Celebrity: <input type="text" name='celebrity'>
   <input type="submit">
</form>

<?php


$color = $_GET['color'];
$pluralNoun = $_GET['pluralNoun'];
$celebrity = $_GET['celebrity'];

echo "Roses are $color <br>";
echo "$pluralNoun are blue <br>";
echo "I Love $celebrity <br>";



?>
</body>
</html>