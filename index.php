<?php

class Lift {
    public $floor = 1;
    public $door = 'closed';

    private function move($onFloor){
        while($onFloor != $this->floor){
            if ($onFloor > $this->floor){
                $this->floor++;
                echo "The lift is on $this->floor floor <br/>";
            }else {
                $this->floor--;
                echo "The lift is on $this->floor floor <br/>";
            }
        }
    }
    public function pickUp($onFloor){
        $floor = $this->floor;
        $door = $this->door;
        $this->move($onFloor);

        if ($onFloor == $floor){
            $door = 'open';
            echo "Door status: $door <br/>";
            echo "Come inside <br/>";

            $door = 'closed';
            echo "Door status: $door <br/>";
        }
        return  $this->floor = $floor;
        }

    public function go($onFloor){
    $floor = $this->floor;
    $door = $this->door;
    $this->move($onFloor);

    if ($onFloor == $floor) {
        $door = 'open';
        echo 'You rich your destination. Go out, please';
        $door = 'closed';
    }
    return $this->floor = $floor;
    }

}

$person = array(9, 2, 1000kg )
    person.lift()

$lift = new Lift();
$lift->pickUp(9);
$lift->go(3);

$lift->go(9,3);

3 5 8

7 9



