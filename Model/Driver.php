<?php


class Driver extends Person{
    private $driverID;
    private $driverPassword;
    private $status;
    private $area;
    private $busLine;
    
    function getDriverID() {
        return $this->driverID;
    }

    function getDriverPassword() {
        return $this->driverPassword;
    }

    function getStatus() {
        return $this->status;
    }

    function getArea() {
        return $this->area;
    }

    function getBusLine() {
        return $this->busLine;
    }

    function setDriverID($driverID) {
        $this->driverID = $driverID;
    }

    function setDriverPassword($driverPassword) {
        $this->driverPassword = $driverPassword;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setArea($area) {
        $this->area = $area;
    }

    function setBusLine($busLine) {
        $this->busLine = $busLine;
    }

    function __construct($driverID, $driverPassword, $status, $area, $busLine) {
        $this->driverID = $driverID;
        $this->driverPassword = $driverPassword;
        $this->status = $status;
        $this->area = $area;
        $this->busLine = $busLine;
    }
    

}
