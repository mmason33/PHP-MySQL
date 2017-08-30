<?php

class Person 
{

    public $name;

    public $position;

    public $rating;

    public function __construct($name, $position, $rating) {
        $this->name = $name;
        $this->position = $position;
        $this->rating = $rating;
    }

    public function dump() {
        echo 'My name is ' . $this->name . '<br/>';
        echo 'My postion is ' . $this->position . '<br/>';
        echo 'My rating is ' . $this->rating . '<br/>';
    }
}

