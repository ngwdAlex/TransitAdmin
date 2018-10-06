<?php

class Schedule {
    private $scheduleID;
    private $time;
    private $date;
    private $status;
    
    function getScheduleID() {
        return $this->scheduleID;
    }

    function getTime() {
        return $this->time;
    }

    function getDate() {
        return $this->date;
    }

    function getStatus() {
        return $this->status;
    }

    function setScheduleID($scheduleID) {
        $this->scheduleID = $scheduleID;
    }

    function setTime($time) {
        $this->time = $time;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function __construct($scheduleID, $time, $date, $status) {
        $this->scheduleID = $scheduleID;
        $this->time = $time;
        $this->date = $date;
        $this->status = $status;
    }

}
