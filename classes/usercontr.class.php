<?php

class UserContr extends Users {

    //insert update delete will go here
    public function  createUser($firstName, $lastName, $dob) {
        $this->setUser($firstName, $lastName, $dob);
    }
}
