<?php

abstract class Vehicle
 {
     /**
      * @var string
      */
     protected $color;




     public function __construct(string $color)
     {
         $this->color = $color;
     }
 }

class Car extends Vehicle{




    public function __construct($color)
    {
        parent::__construct($color);

    }

}


class Truck extends Vehicle{


    public function __construct($color)
    {
        parent::__construct($color);
    }
}

class Bike extends Vehicle
{


    public function __construct($color)
    {
        parent::__construct($color);
    }
}
class Skatboard extends Vehicle
{

    public function __construct($color)
    {
        parent::__construct($color);
    }
}






