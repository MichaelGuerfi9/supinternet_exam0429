<?php
require_once ('config/dbconf.php');
global $config;
$pdo = new PDO($config['host'], $config['user'], $config['password']);
class info{
    public function getInfo($pdo){
        $req = $pdo->prepare('SELECT * FROM infos');
        $req->execute();
        return $getInfo = $req->fetchAll();
    }
}