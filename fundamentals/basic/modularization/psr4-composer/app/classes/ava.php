<?php

namespace App\classes; 

class ava{
    protected $name;
    protected $color;
    protected $age;

    function __construct($name,$color,$age)
    {
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }

    public function GetName()
    {
        return $this->name;
    }
      public function GetColor()
    {
        return $this->color;
    }
      public function GetAge()
    {
        return $this->age;
    }

    public function meow(){
        return "meowwwwwww";
    }
}

?>

