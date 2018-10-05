<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Person
 *
 * @author Alex Ng
 */
class Person {
    private $email;
    private $contactNo;
    private $name;
    
    function getEmail() {
        return $this->email;
    }

    function getContactNo() {
        return $this->contactNo;
    }

    function getName() {
        return $this->name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setContactNo($contactNo) {
        $this->contactNo = $contactNo;
    }

    function setName($name) {
        $this->name = $name;
    }

    function __construct($email, $contactNo, $name) {
        $this->email = $email;
        $this->contactNo = $contactNo;
        $this->name = $name;
    }

}
