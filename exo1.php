<?php
session_start();
require_once ("exo1/NimController.php");
if(!isset($_SESSION['nbAllumettes'])){
    $_SESSION['nbAllumettes'] = 13;
    echo($_SESSION['winner']);
    unset($_SESSION['winner']);
}
//liste des allumettes
$tab = array(
    1 => '<input type="checkbox" name="allumette1" value="1">',
    2 => '<input type="checkbox" name="allumette2" value="2">',
    3 => '<input type="checkbox" name="allumette3" value="3">',
    4 => '<input type="checkbox" name="allumette4" value="4">',
    5 => '<input type="checkbox" name="allumette5" value="5">',
    6 => '<input type="checkbox" name="allumette6" value="6">',
    7 => '<input type="checkbox" name="allumette7" value="7">',
    8 => '<input type="checkbox" name="allumette8" value="8">',
    9 => '<input type="checkbox" name="allumette9" value="9">',
    10 => '<input type="checkbox" name="allumette10" value="10">',
    11 => '<input type="checkbox" name="allumette11" value="11">',
    12 => '<input type="checkbox" name="allumette12" value="12">',
    13 => '<input type="checkbox" name="allumette13" value="13">',
);
afficheAllumette($tab);
play();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nim</title>
</head>
<body>

</body>
</html>