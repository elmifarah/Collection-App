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

<!--    <link rel="stylesheet" type="text/css" href="normalize.css">-->
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,600;1,700&family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="halloffame.css">
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
<div id="container">
    <div class="players">
        <?php foreach ($fame as $player) {
            echo "<div class='image'>";
            echo "<img src='" . $player['image'] . "'/>";
            echo "</div>";
            echo "<div class='player'>";
            echo "<div> Name: {$player['name']}  </div>";
            echo "<div> Age: {$player['age']} </div>";
            echo "<div> Nationality: {$player['nationality']}  </div>";
            echo "<div> Career Goals: {$player['goal']}  </div>";
            echo "<a href='https://www.theguardian.com/football/ng-interactive/2017/dec/19/the-100-best-footballers-in-the-world-2017-interactive'>Get a Better insight here....</a>";
            echo "</div>";
        }
        ?>
    </div>
    </div>
<div class="links">
<div class="add-player-btn-container">
    <div class="add-player-btn-box-placement">
        <a href='addplayer.php' class="active">Add Player</a>
    </div>
</div>
</div
</body>