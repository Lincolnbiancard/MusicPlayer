<?php 

class PlayMusic { 

    private $musicas;
    private $historic;
    private $queueDownloads;

    public function __construct() {
        $this->musicas = new SplDoublyLinkedList();
        $this->historic = new SplStack(); //Stack pilha
        $this->queueDownloads = new SplQueue();
        $this->musicas->rewind(); //voltar para posição inicial 
        $this->ranking = new Ranking();
    }

    public function addMusics(SplFixedArray $musicas) {

        for ( $musicas->rewind() ; $musicas->valid() ; $musicas->next() ) {
            $this->musicas->push($musicas->current());
        }

        $this->musicas->rewind(); //voltar para posição inicial 
    }


    public function voidCondition() {
        $this->musicas->count() === 0;
    }

    //Tocador
    public function playerMusic() {

        if ($this->voidCondition()) {
            echo "Sem músicas no tocador";
        } else {
            $this->historic->push($this->musicas->current()); //Adicionar ao final da pilha
            $this->musicas->current()->play(); //Armazenar x tocadas
        }
    }


    public function addOneMusic ($musica){
        $this->musicas->push($musica); //Adicionar uma música
    }   

    //Verificar se a musica é valida, senão volta pro inicio do array
    private function musicIsValid() {
        
        if(!$this->musicas->valid()) {
            $this->musicas->rewind();
        }
    }

    public function nextMusic() {
        $this->musicas->next(); //Avança a musica

        $this->musicIsValid();
        
    }

    public function backMusic() {
        
        $this->musicas->prev();

        $this->musicIsValid();
        
    }


    // LISTAGEM DE MUSICAS
    public function viewMusics (){
        echo "<br> ---------------- Lista de músicas ------------------- <br>";
        
        for ($this->musicas ; $this->musicas->valid() ; $this->musicas->next()) {
            echo "<br> Música: ". $this->musicas->current() . "<br>";
        }
    
        $this->amountMusic();

        $this->musicIsValid();
        
    }

    private function amountMusic() {
        echo "<br> Tem " . $this->musicas->count() . " músicas nesta lista. <br>";
    }

    public function addMusicStartPlaylist($musica) {
        $this->musicas->unshift($musica);
    }

    public function removeMusicStartPlaylist() {
        $this->musicas->shift();
    }

    public function removeMusicFinalPlaylist() {
        $this->musicas->pop();
    }

    public function lastMusicPlayedHistoric() {
        echo "<br> Tocando do histórico: ". $this->historic->pop() . "<br>";
    }



    //Fila de download
    public function downloadMusics() {
        
        if ($this->musicas->count() > 0){
            
            for ($this->musicas->rewind() ; $this->musicas->valid() ; $this->musicas->next()) { 
                $this->queueDownloads->push($this->musicas->current());
            }
    
            for ($this->queueDownloads->rewind() ; $this->queueDownloads->valid() ; $this->queueDownloads->next()) { 
                echo "<br> Baixando: " . $this->queueDownloads->current() . "... <br>";
            } 
        }else {
                echo "Nenhuma música disponível para download!";

        }
    }

    public function viewRanking() {

        echo "<br>==================================  ";
        echo "Ranking de músicas tocadas";
        echo "  ==================================<br>";

        foreach ($this->musicas as $musica) {
            $this->ranking->insert($musica);
        }

        
        foreach ($this->ranking as $musica) {
            echo "<br>" .$musica->getName() . " \ Tocada: " . $musica->getAmountPlay() . " vezes. <br>";
        }

    }
    
}

        





