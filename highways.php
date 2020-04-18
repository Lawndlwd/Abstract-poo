<?php
    abstract class HighWay{

        protected $currentVehicles=array();
        protected $nbLane;
        protected $maxSpeed;

         public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

        abstract public function addVehicle($vehicle);


        public function getCurrentVehicles(){
        return $this->currentVehicles;
        }
        public function setCurrentVehicles($currentVehicles) {
        $this->currentVehicles =$currentVehicles;
        }


        public function getNbLane(){
        return $this->nbLane;
        }
        public function setNbLane($nbLane){
        $this->nbLane =$nbLane;
        }


        public function getMaxSpeed(){
        return $this->maxSpeed;
        }
        public function setMaxSpeed($maxSpeed){
        $this->maxSpeed= $maxSpeed;
        }
    }


final class MotorWay extends HighWay{

    public function __construct()
    {
        parent::__construct(4,130);
    }
        public function addVehicle($vehicle){
            if($vehicle instanceof Car){
             parent::setCurrentVehicles($vehicle);
                return "your vehicle has been added";
            }else{
                return "can't be added";
            }
}
}



final class PedestrianWay extends HighWay{

    public function __construct()
    {
        parent::__construct(1,10);
    }   
    public function addVehicle($vehicle){
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard) {
            parent::setCurrentVehicles($vehicle);
            return "your vehicle has been added";
        }else{
            return "can't be added";
        }
    }
}



final class ResidentialWay extends HighWay{
    public function __construct()
    {
        parent::__construct(2,50);
    }

    public function addVehicle($vehicle){
        $this->currentVehicles=$vehicle;
        return "your vehicle has been added";

    }
}

