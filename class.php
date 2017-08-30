<?php

class Person 
{
    public function __construct($name, $position, $rating, $list) {
        $this->name = $name;
        $this->position = $position;
        $this->rating = $rating;
        $this->list = $list;
    }

    public function dump() {
        echo 'My name is ' . $this->name . '<br/>';
        echo 'My postion is ' . $this->position . '<br/>';
        echo 'My rating is ' . $this->rating . '<br/>';
    }

    public function seperate() {
        echo '<hr/>';
        foreach ($this->list as $items) {
            echo "$items <br/>";
        }
    }
}

$person = new Person('foo', 'bar', 0, array('hello','this','is','an','array'));

$person->dump();
$person->seperate();