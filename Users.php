<?php

class Users {
    public $name;
    public $lastname;
    public $age;
    public $id;

    function __construct($nome,$eta) {
        $this->age = $eta;
        $this->name = $nome;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($nome) {
        $nome .= '-test';
        $this->name = $nome;
    }
}


?>
