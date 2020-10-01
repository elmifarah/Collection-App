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
    <link rel="stylesheet" type="text/css" href="addplayer.css">
</head>
<body>
<div class="navTop">
    <div class="pictures"> </div>
    <h1>who is entering hof</h1>
</div>

<div class="title"></div>
<h3>Which Player Deserves to enter the Hall Of Fame? :</h3>
<div class="header">
    <div class="page-container">
        <div class="layout">
            <div class="container">
                <form method="post">
                    <fieldset><input type="text" name="name" placeholder="Name" required=""> <br> </fieldset>
                    <fieldset><input type="number" name="age" placeholder="Age" required=""> <br> </fieldset>
                    <fieldset><input type="text" name="nationality" placeholder="Nationality" required=""> <br></fieldset>
                    <fieldset><input type="number" name="goal" placeholder="Goal" required=""> <br> </fieldset>
                    <fieldset><input type="text" name="image" placeholder="image" required=""> <br> </fieldset>
                    <input class="submit-btn" type="submit" name="submit"> <br>
                </form>
                <?php

                $post = $db->prepare('INSERT INTO `Players` (`name`, `age`,`nationality`,`goal`, `image`) VALUES (:player,:age,:nationality,:goal,:image);');
                $post->bindParam(':player',$_POST["name"]);
                $post->bindParam(':age',$_POST["age"]);
                $post->bindParam(':nationality',$_POST["nationality"]);
                $post->bindParam(':goal',$_POST["goal"]);
                $post->bindParam(':image',$_POST["image"]);
                $post->execute();

                ?>
            </div>

            <div class="btn">
                <div class="form-Hall-of-fame-btn">
                    <a href="halloffame.php" class="back-to-hall-of-fame">Hall Of Fame</a>
                </div>
            </div>
        </div>
    </div>
    <div class="imagess">
        <div class="ballon">
        </div>
        <div class="manu">
        </div>
    </div>
</div>
</body>
</html>