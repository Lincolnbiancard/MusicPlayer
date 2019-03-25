<?php 
require 'playMusic.php';
require 'Music.php';
require 'Ranking.php';

$musics = new SplFixedArray(4); //Array tamanho fixo

$musics [0] = new Music("Poesia Acústica 6");

$musics [1] = new Music("Love YourSelf");

$musics [2] = new Music("Dormi na Praça");

$musics [3] = new Music("Favela Vive");

$player = new playMusic();

$player->addMusics($musics);

$player->playerMusic();
$player->playerMusic();
$player->playerMusic();

$player->nextMusic();
$player->playerMusic();
$player->playerMusic();
$player->playerMusic();
$player->playerMusic();

$player->nextMusic();
$player->playerMusic();
$player->playerMusic();
$player->playerMusic();
$player->playerMusic();
$player->playerMusic();

$player->nextMusic();
$player->playerMusic();

$player->viewRanking();