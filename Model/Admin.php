<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author Alex Ng
 */
class Admin extends Person{
    private $adminID;
    private $adminPassword;
    private $area;
    
    function __construct($adminID, $adminPassword, $area) {
        $this->adminID = $adminID;
        $this->adminPassword = $adminPassword;
        $this->area = $area;
    }
    
    function getAdminID() {
        return $this->adminID;
    }

    function getAdminPassword() {
        return $this->adminPassword;
    }

    function getArea() {
        return $this->area;
    }

    function setAdminID($adminID) {
        $this->adminID = $adminID;
    }

    function setAdminPassword($adminPassword) {
        $this->adminPassword = $adminPassword;
    }

    function setArea($area) {
        $this->area = $area;
    }



}
