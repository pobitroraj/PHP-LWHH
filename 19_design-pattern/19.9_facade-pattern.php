<?php

class SpaceShuttle{
    function powerOn(){
        echo "Power On \n";
    }
    function checkTemperature(){
        echo "Temparute Okay\n";
    }
    function checkFuel(){
        echo "Fuel is okay\n";
    }
    function startEngine(){
        echo "Engine Started\n";
    }
    function startThrusters (){
        echo "Bye Bye";
    }
}
class SpaceShuttleFacade{
    private $shuttle;
    function __construct(SpaceShuttle $shuttle){
        $this->shuttle = $shuttle;
    }
    function takeOff(){
        $this->shuttle->powerOn();
        $this->shuttle->checkTemperature();
        $this->shuttle->checkFuel();
        $this->shuttle->startEngine();
        $this->shuttle->startThrusters();
    }
}
$ss = new SpaceShuttle();
$ssf = new SpaceShuttleFacade($ss);
$ssf->takeOff();


// $ss->powerOn();
// $ss->checkTemperature();
// $ss->checkFuel();
// $ss->startEngine();
// $ss->startThrusters();