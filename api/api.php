<?php
session_start();

// $_SESSION['titoloAlbum'] 
// $_SESSION['titoloCanzone'] $_SESSION['annoAlbum']

$stringList = file_get_contents("../db/Playlis.json");
header('Content-Type: application/json');

if($_SESSION['titoloAlbum'] != null &&  $_SESSION['titoloCanzone'] != null && $_SESSION['annoAlbum'] != null ){
    $newAlbum = [
        "titoloAlbum" => $_SESSION['titoloAlbum'],
        "titoloTrack" => $_SESSION['titoloCanzone'],
        "anno" => $_SESSION['annoAlbum']
    ];
    $newArray = json_decode($stringList, true);
    $newArray[] = $newAlbum;
    $newfile = json_encode($newArray,JSON_PRETTY_PRINT);
    file_put_contents("../db/Playlis.json", $newfile, JSON_PRETTY_PRINT);
    session_destroy();
}

$stringList = file_get_contents("../db/Playlis.json");
header('Content-Type: application/json');
echo ($stringList)
?>