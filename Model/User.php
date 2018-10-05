<?php


class User extends Person{
    private $userID;
    private $userPassword;
    private $dateJoined;
    
    function getUserID() {
        return $this->userID;
    }

    function getUserPassword() {
        return $this->userPassword;
    }

    function getDateJoined() {
        return $this->dateJoined;
    }

    function setUserID($userID) {
        $this->userID = $userID;
    }

    function setUserPassword($userPassword) {
        $this->userPassword = $userPassword;
    }

    function setDateJoined($dateJoined) {
        $this->dateJoined = $dateJoined;
    }

    function __construct($userID, $userPassword, $dateJoined) {
        $this->userID = $userID;
        $this->userPassword = $userPassword;
        $this->dateJoined = $dateJoined;
    }

}
