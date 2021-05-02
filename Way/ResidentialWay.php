<?php
require_once 'HightWay.php';

final class ResidentialWay extends HightWay
{
    private int $nbWay = 2;
    private int $maxSpeed = 50;

    public function addVehicles(Vehicle $vehicle)
    {
        if($vehicle instanceof Vehicle){
            $this->currentVehicles[] = $vehicle;
        }else{
            echo 'Forbidden !!!';
        }
    }

}
