<?php

class cat{
    protected $name;
    protected $color;
    protected $age;

    function __construct($name,$color,$age)
    {
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }

    public function getname()
    {
        return $this->name;
    }
      public function getcolor()
    {
        return $this->name;
    }
      public function getage()
    {
        return $this->name;
    }

    public function meow(){
        return "meowwwwwww";
    }
}