<?php

require_once 'HighWay.php';


final class MotorWay extends HighWay {

    private int $nbLane = 4;
    
    private int $maxSpeed = 130;
    
    private array $currentVehicles;
    
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car == true) {
            $vehicle.array_push($currentVehicles);
        } else {
            return 'Vous ne pouvez pas rouler ici';
        }
    }


}