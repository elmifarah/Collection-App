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
      <div class="<img src="halloffame.png"></div>
  <div class="title">
  </div>
  </div>

  <h3>Add A Professional Player to the collection:</h3>
    <div class="header">
        <div class="page-container">
            <div class="layout">
                <div class="container">

                    <form method="post">
                        <fieldset><input type="text" name="name" placeholder="Name" required=""> <br> </fieldset>
                        <fieldset><input type="number" name="age" placeholder="Age" required=""> <br> </fieldset>
                        <fieldset><input type="text" name="nationality" placeholder="Nationality" required=""> <br></fieldset>
                        <fieldset><input type="text" name="Career-goal" placeholder="Goal" required=""> <br> </fieldset
                        <fieldset><input type="text" name="images" placeholder="image" required=""> <br> </fieldset
                        <fieldset><input class="submit-btn" type="submit" name="submit"> <br> </fieldset>
                    </form>
                    <div class="btn">
                    <div class="form-Hall-of-fame-btn">
                        <a href="halloffame.php" class="back-to-hall-of-fame">Hall Of Fame</a>
                    </div>


                </div>
            </div>
        </div>
    </div>