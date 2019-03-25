<?php 
require 'playMusic.php';

$musics = new SplFixedArray(4); //Array tamanho fixo

$musics [0] = "Poesia Acústica 6";

$musics [1] = "Love YourSelf";

$musics [2] = "Dormi na Praça";

$musics [3] = "Favela Vive";

$player = new playMusic();

$player->addMusics($musics);

$player->playerMusic();

$player->downloadMusics();