<?php

require_once 'HightWay.php';

final class PedestrianWay extends HightWay
{
    private int $nbWay = 1;
    private int $maxSpeed = 10;

    public function addVehicles(Vehicle $vehicle): void
    {
        if($vehicle instanceof Bicycle){
            $this->currentVehicles[] = $vehicle;
        }else{
            echo 'Forbidden !!!';
        }
    }
}
