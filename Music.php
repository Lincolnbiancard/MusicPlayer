<?php 

class Music {
    
    private $name;
    private $amountPlay;


    public function __construct($name) {
        $this->name = $name;
        $this->amountPlay = 0;
    }


    public function getName(){
        return $this->name;
    }

    public function getAmountPlay(){
        return $this->amountPlay;
    }

    public function play(){
        echo "Tocando: ". $this->getName() . "<br>";
        $this->amountPlay++;
    }


    public function __toString() {
        return $this->nome;
    }


}
