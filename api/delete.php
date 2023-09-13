<?php

$index_delete = $_GET["id"]  ;
var_dump($index_delete);

$string =file_get_contents("../db/Playlis.json");
header('Content-Type: application/json');
$newArray = json_decode($string, true);

for($i=0;$i< count($newArray);$i++){
    $album = $newArray[$i];
    if($album['id'] === $index_delete){
        echo($album . 'eeeeeeeeee');
    }
    }

// $stringList = file_get_contents("../db/Playlis.json");
// $newArray = json_decode($stringList, true);
?>