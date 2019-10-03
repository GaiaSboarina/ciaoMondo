<?php
//require "controller.php";

//$colori = getAllColors();

//$userLoggedIn = getLoggedInUser();

//if ($userLoggedIn != null) {
    //$colori = [
        //[
            //"name" => "Rossi Paolo";
            //"code" => "#aabbcc";
            //"red" => "100";
            //"green" => "100";
            //"blue" => "100";
        //];
    //];
//}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="stile.css">
        <title>Colori</title>
    </head>
    <body>
        <h1>I COLORI</h1>
        <div class="login"><a href="login.php"><h2>Login</h2></a></div>
        <div class="colori">
            <div id="rosso">
                <a href="rosso.php">Rosso</a>
            </div>
            <div id="blu">
                <a href="blu.php">Blu</a>
            </div>
            <div id="giallo">
                <a href="giallo.php">Giallo</a>
            </div>
            <div id="verde">
                <a href="verde.php">Verde</a>
            </div>
            <div id="acqua">
                <a href="acqua.php">Acqua</a>
            </div>
            <div id="marrone">
                <a href="marrone.php">Marrone</a>
            </div>
            <div id="turchese">
                <a href="turchese.php">Turchese</a>
            </div>
        </div>
    </body>
</html>