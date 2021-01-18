<?php

class Rooms {
    public $floor;
    public $id;
    public $beds;
    public $roomnumber;

    function __construct($letti)
    {
        $this->beds = $letti;
    }
}

 ?>
