<?php

$db = new PDO('mysql:host=db; dbname=halloffame', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT `name`, `age`,`nationality`,`goal`,`image` FROM `Players`;');
$query->execute();
$fame = $query->fetchAll();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="halloffame.css">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,600;1,700&family=Raleway:wght@100&display=swap" rel="stylesheet">
    <title>halloffame</title>
</head>
<body>
<div class="navTop">
    <div class="<img src="halloffame.png"></div>
<div class="title">
    <h1> FOOTBALLERS HALL OF FAME </h1>
</div>
</div>
<header>
    <class="logo"> <img src="new.png" alt= "hall of fame logo"/>
</header>
<h3> H.O.F Nominees </h3>
<body id="container">
    <div class="Players">
        <?php foreach ($fame as $player) {
            echo "<div class='image'>";
            echo "<img src='" . $player['image'] . "'/>";
            echo "</div>";
            echo "<div class='player'>";
            echo "<div> Name: {$player['name']} <br> </div>";
            echo "<div> Age: {$player['age']} <br> </div>";
            echo "<div> Nationality: {$player['nationality']} <br> </div>";
            echo "<div> Career Goals: {$player['goal']} <br> </div>";
            echo "</div>";
        }



        ?>
    </div>

<div class="add-player-btn-container">
    <div class="add-player-btn-box-placement">
        <a href="../add.php" class="active">Add Player</a>
    </div>
</div
</body>