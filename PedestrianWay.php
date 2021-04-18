<?php 

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    private array $currentVehicles;
    private int $nbLane = 1;
    private int $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle == true || $vehicle instanceof Skateboard == true) {
            $vehicle.array_push($currentVehicles);
        } else {
            return 'Vous ne pouvez pas roulez ici';
        }
    }
}