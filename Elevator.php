<?php

require_once "Transportable.php";

abstract class Elevator implements Transportable {
    //protected function move;

    protected $maxWeight;

    protected function letOut(){
        $door = 'open';
        echo 'You rich your destination. Go out, please';
        $door = 'closed';
    }
    protected function invite(){
        $door = 'open';
        echo "Door status: $door <br/>";
        echo "Come inside <br/>";
        $door = 'closed';
        echo "Door status: $door <br/>";
    }

}