<?php

class Person 
{
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

$person = new Person('foo', 'bar', 0);

$person->dump();