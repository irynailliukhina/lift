<?php

require_once "liftInterface.php";

class Lift implements elevator {

    public $maxWeight;

    public $floor = 1;
    public $door = "closed";
    public $info = "The lift is on floor ";

    private function move($onFloor){
        while($onFloor != $this->floor){
            if ($onFloor > $this->floor){
                $this->floor++;
                echo $this->info.$this->floor."<br/>";
            }else {
                $this->floor--;
                echo $this->info.$this->floor."<br/>";
            }
        }
    }
    private function invite(){
        $door = 'open';
        echo "Door status: $door <br/>";
        echo "Come inside <br/>";
        $door = 'closed';
        echo "Door status: $door <br/>";
    }

    private function letOut(){
        $door = 'open';
        echo 'You rich your destination. Go out, please';
        $door = 'closed';
    }

    public function pickUp($onFloor, $toFloor){
        $floor = $this->floor;
        $door = $this->door;
        $this->move($onFloor);
        $floor = $onFloor;
        $this->invite();
        $this->move($toFloor);
        $floor = $toFloor;
        $this->letOut();
    }
}