<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bus
 *
 * @author Alex Ng
 */
class Bus {
    private $busID;
    private $plateNumber;
    private $status;
    private $dateJoined;
    private $lastMaintained;
    
    function __construct($busID, $plateNumber, $status, $dateJoined, $lastMaintained) {
        $this->busID = $busID;
        $this->plateNumber = $plateNumber;
        $this->status = $status;
        $this->dateJoined = $dateJoined;
        $this->lastMaintained = $lastMaintained;
    }
    function getBusID() {
        return $this->busID;
    }

    function getPlateNumber() {
        return $this->plateNumber;
    }

    function getStatus() {
        return $this->status;
    }

    function getDateJoined() {
        return $this->dateJoined;
    }

    function getLastMaintained() {
        return $this->lastMaintained;
    }

    function setBusID($busID) {
        $this->busID = $busID;
    }

    function setPlateNumber($plateNumber) {
        $this->plateNumber = $plateNumber;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setDateJoined($dateJoined) {
        $this->dateJoined = $dateJoined;
    }

    function setLastMaintained($lastMaintained) {
        $this->lastMaintained = $lastMaintained;
    }


}
