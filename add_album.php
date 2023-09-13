<?php
session_start();

$_SESSION['titoloAlbum'] = $_GET['titoloAlbum'];
$_SESSION['titoloCanzone'] = $_GET['titoloCanzone'];
$_SESSION['annoAlbum'] = $_GET['annoAlbum'];

if (!is_numeric($_GET['annoAlbum'])) {
    echo ('Anno richiesto');
}
if ($_GET['titoloCanzone'] === '' || $_GET['titoloAlbum'] === '') {
    echo ('titolo album richiesto');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container  pt-5">
        <div class="card" style="width: 36rem;">
            <div class="card-body">
                <form action=" ">
                    <label for="">Titolo Album</label>
                    <input class="form-control" type="text" name="titoloAlbum" placeholder="Inserisci Titolo Album">
                    <label for="">Titolo Canzone</label>
                    <input class="form-control" type="text" name="titoloCanzone" placeholder="Inserisci Titolo Canzone">
                    <label for="">Anno di Uscita </label>
                    <input class="form-control" type="number" name="annoAlbum" placeholder="Inserisci Titolo Anno">
                    <button type="submit" class="btn btn-success"> salva i dati</button>
                    <a href="Home.html">Torna alla home</a>
                </form>
            </div>
        </div>

    </div>
</body>

</html>