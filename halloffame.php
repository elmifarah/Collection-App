<?php

$db = new PDO('mysql:host=db; dbname=halloffame', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT `name`, `age`,`nationality`,`goal` FROM `Players`;');
$query->execute();
$fame = $query->fetchAll();
echo '<pre>';
var_dump($fame);
echo '</pre>';










?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="halloffame.css.css">
    <title>halloffame</title>
</head>
<body>
<h1> Footballers HALL OF FAME  </h1>
<div id="container"

<div class="MyPlayer1">
    <h4> PLAYER 1</h4>
    <p> <?php echo "ronaldo"; ?></p>
    <p> <?php echo "van persie"; ?></p>
    <p> <?php echo "evra"; ?></p>
    <p> <?php echo "rooney"; ?></p>
</div>
</body>
