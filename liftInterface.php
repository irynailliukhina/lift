<?php

interface lift {
    public $floor;
    public $door;
    public function move();
    public function pickUp($onFloor, $toFloor);
}