<?php 

class Ranking extends SplHeap {

    public function compare(Music $music1, Music $music2) {

        if ($music1->getAmountPlay() === $music2->getAmountPlay()) {
            return 0 ;
        }

        if ($music1->getAmountPlay() < $music2->getAmountPlay()) {
            return -1 ;
        }

        if ($music1->getAmountPlay() > $music2->getAmountPlay()) {
            return 1 ;
        }

    }


}