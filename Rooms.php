<?php

class Rooms {
    public $floor;
    public $id;
    public $beds;
    public $roomnumber;

    function __construct($numeroStanza)
    {
        $this->roomnumber = $numeroStanza;
    }
    public function getRoom() {
        return $this->roomnumber;
    }

    public function setRoom($numeroStanza) {

        $this->roomnumber = $numeroStanza;
    }
}

 ?>
