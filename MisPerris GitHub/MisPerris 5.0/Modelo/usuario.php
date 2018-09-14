<?php

class usuario {
    private $id_user;
    private $user;
    private $pass;
    
    function __construct() {
        return $this->id_user;
    }
    
    function getId_user() {
        return $this->id_user;
    }

    function getUser() {
        return $this->user;
    }

    function getPass() {
        return $this->pass;
    }

    function setId_user($id_user) {
        $this->id_user = $id_user;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }
}
