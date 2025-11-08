<?php

namespace adopted_michis;

class cat{

    //definicion de variables
    protected $name;
    protected $date_adopted;
    protected $adopted_by;

    function __construct($name,$date_adopted,$adopted_by)
    {
        // definicion atributos de la clase
        $this->name = $name;
        $this->date_adopted = $date_adopted;
        $this->adopted_by = $adopted_by;
    }

        //definicion de metodos

        public function getName()
    {
        return $this->name;
    }
      public function getDate_adopted()
    {
        return $this->date_adopted;
    }
      public function getAdopted_by()
    {
        return $this->adopted_by;
    }


}