<?php
require_once 'HightWay.php';

final class MotorWay extends HightWay
{
    private int $nbWay = 4;
    private int $maxSpeed = 130;
    public function addVehicles(Vehicle $vehicle)
    {
      if($vehicle instanceof Car){
          $this->currentVehicles[] = $vehicle;
      }else{
          echo 'Forbidden !!!';
      }
    }
}