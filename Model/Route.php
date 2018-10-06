<?php

class Route {
    private $routeID;
    private $name;
    private $startingLocation;
    private $endingLocation;
    private $numberOfStation;
    
    function __construct($routeID, $name, $startingLocation, $endingLocation, $numberOfStation) {
        $this->routeID = $routeID;
        $this->name = $name;
        $this->startingLocation = $startingLocation;
        $this->endingLocation = $endingLocation;
        $this->numberOfStation = $numberOfStation;
    }

    function getRouteID() {
        return $this->routeID;
    }

    function getName() {
        return $this->name;
    }

    function getStartingLocation() {
        return $this->startingLocation;
    }

    function getEndingLocation() {
        return $this->endingLocation;
    }

    function getNumberOfStation() {
        return $this->numberOfStation;
    }

    function setRouteID($routeID) {
        $this->routeID = $routeID;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setStartingLocation($startingLocation) {
        $this->startingLocation = $startingLocation;
    }

    function setEndingLocation($endingLocation) {
        $this->endingLocation = $endingLocation;
    }

    function setNumberOfStation($numberOfStation) {
        $this->numberOfStation = $numberOfStation;
    }


}
