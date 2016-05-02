<?php
require_once ('exo3/InfoController.php');
$display = new info();
$informations = $display->getInfo($pdo);
foreach ($informations as $information){
    echo('title: '.$information[1].'<br>'.'Date: '.$information[2].'<br>'.'Type: '.$information[3].'<br>'.'Parution: '.$information[4].'<br>'.'Abonnees: '.$information[5].'<br>'.'Age Moyen : '.$information[6].'<br><br>');
}