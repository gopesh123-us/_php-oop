<?php

//insert update delete
class LoginContr extends login {

    private $uid;
    private $pwd;


    //constructor
    public function __construct($theUid, $thePwd) {
        $this->uid = $theUid;
        $this->pwd = $thePwd;
    }

    public function loginUser() {
        if ($this->isEmptyInput() == false) {
            //echo empty input
            header('Location: ../app.login.php?error=emptyinput');
            exit();
        }
        $this->getUser($this->uid, $this->pwd);
    }

    //Check for empty Input
    private function isEmptyInput() {
        $result = false;
        if (empty($this->uid) || empty($this->pwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
