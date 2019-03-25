<?php 
require 'playMusic.php';

$musics = new SplFixedArray(4); //Array tamanho fixo

$musics [0] = "Poesia Acústica 6";

$musics [1] = "Love YourSelf";

$musics [2] = "Dormi na Praça";

$musics [3] = "Favela Vive";

$player = new playMusic();

$player->addMusic($musics);

$player->playerMusic();

$player->nextMusic();

$player->playerMusic();

$player->nextMusic();
var_dump($player->playerMusic());


var_dump($player->lastMusicPlayedHistoric());

