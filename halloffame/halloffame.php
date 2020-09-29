<?php

$db = new PDO('mysql:host=db; dbname=halloffame', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT `name`, `age`,`nationality`,`goal` FROM `Players`;');
$query->execute();
$fame = $query->fetchAll();
echo '<pre>';

echo '</pre>';






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="halloffame.css">

    <title>halloffame</title>
</head>
<body>
<h1> FOOTBALLERS HALL OF FAME  </h1>
<div id="container"

<div class="Players">
    <h3> PLAYERS</h3>

    <?php foreach ($fame as $player) {
      echo "<div> {$player['name']} <br> </div>";
      echo "<div> {$player['age']} <br> </div>";
      echo "<div> {$player['nationality']} <br> </div>";
      echo "<div> {$player['goal']} <br> </div>";
    }?>

</div>
</body>
<div class="add-player-btn-container">
    <div class="add-player-btn-box-placement">
        <a href="add.php" class="active">Add Player</a>
    </div>
</div>