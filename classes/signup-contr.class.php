<?php

//insert update delete
class SignupContr extends Signup {
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    //constructor
    public function __construct($theUid, $thePwd, $thePwdRepeat, $theEmail) {
        $this->uid = $theUid;
        $this->pwd = $thePwd;
        $this->pwdRepeat = $thePwdRepeat;
        $this->email = $theEmail;
    }

    public function signupUser() {
        if ($this->isEmptyInput() == false) {
            //echo empty input
            header('Location:../app.login.php?error=emptyinput');
            exit();
        }

        if ($this->isValidUid() == false) {
            //echo invalid username
            header('Location:../app.login.php?error=invalidusername');
            exit();
        }

        if ($this->isValidEmail() == false) {
            //echo invalid email
            header('Location:../app.login.php?error=invalidemail');
            exit();
        }

        if ($this->doesPassMatch() == false) {
            //echo password does not match
            header('Location:../app.login.php?error=pwdnotmatch');
            exit();
        }

        if ($this->isUserExists() == true) {
            //echo user exists
            header('Location:../app.login.php?error=usertaken');
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    //Check for empty Input
    private function isEmptyInput() {
        $result = false;
        if (empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function isValidUid() {
        $result = false;
        if (!preg_match('/^[a-zA-Z0-9]*$/', $this->uid)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function isValidEmail() {
        $result = false;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function doesPassMatch() {
        $result = false;

        if ($this->pwd !== $this->pwdRepeat) {
            $result == false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function isUserExists() {
        $userExists = false;

        if ($this->doesUserExists($this->uid, $this->email)) {
            $userExists == true;
        } else {
            $userExists = false;
        }
        return $userExists;
    }
}
