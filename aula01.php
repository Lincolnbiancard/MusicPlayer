<?php
require 'playMusic.php';

$musics = new SplFixedArray(2); //Array tamanho fixo

$musics [0] = "Poesia Acústica 6";

$musics [1] = "Love YourSelf";

$musics->setSize(4); //Novo tamanho do array 

$musics [2] = "Dormi na Praça";

$musics [3] = "Favela Vive";

// echo $musics->getSize(); //Tamanho do array

$player = new playMusic();

$player->addMusic($musics);

$player->addOneMusic("Havana");

$player->viewMusics();

$player->removeMusicFinalPlaylist();

$player->viewMusics();

$player->addMusicStartPlaylist("O Que Tiver Que Ser Vai Ser");

$player->viewMusics();
$player->viewMusics();






