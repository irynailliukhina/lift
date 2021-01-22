<?php

require_once "Elevator.php";

class Lift extends Elevator {

    protected $maxWeight = 1000;

    private $floor = 1;
    private $door = "closed";
    protected $info = "The lift is on floor ";

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

    public function moveFromTo($onFloor, $toFloor){
        $floor = $this->floor;
        $door = $this->door;
        $this->move($onFloor);
        $this->invite();
        $this->move($toFloor);
        $this->letOut();
    }
    public function getMaxWeight(){
        return $this->maxWeight;
    }

}
