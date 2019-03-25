<?php 
require 'Album.php';
require 'Music.php';

$albuns = new SplObjectStorage();

$album1 = new Album("The Slim Shady LP");

$albuns->attach($album1); // Adicionar músicas

$album2 = new Album("Encore");

$albuns->attach($album2);

$musicsAlbum1 = new SplFixedArray(4); //Album: The Slim Shady LP
$musicsAlbum1 [0] = new Music("Public Service Announcement");
$musicsAlbum1 [1] = new Music("My Name Is");
$musicsAlbum1 [2] = new Music("Guilty Conscience");
$musicsAlbum1 [3] = new Music("Brain Damage");

$musicsAlbum2 = new SplFixedArray(4); //Album: Encore
$musicsAlbum2 [0] = new Music("Curtains Up");
$musicsAlbum2 [1] = new Music("Evil Deeds");
$musicsAlbum2 [2] = new Music("Never Enough(feat. Nate Dogg, 50 Cent)");
$musicsAlbum2 [3] = new Music("Yellow Brick Road");

$albuns[$album1] = $musicsAlbum1;

$albuns[$album2] = $musicsAlbum2;

$cont = 0;

foreach ($albuns as $album) {
    echo "<br>Album: " . $album->getNameAlbum() . ":<br>";
    foreach ($albuns[$album] as $music) {
        $cont++;
        echo "Música: " . $music->getName() . "<br>";
    }
}


