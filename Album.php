<?php 

class Album {

    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getNameAlbum() {
        return $this->name;
    }

}