<?php

//query database

//this is the model class

class Signup extends Dbh {

    protected function doesUserExists($uid, $email) {
        $sql = "SELECT users_userid FROM users WHERE users_userid = ? OR users_email = ?";
        $stmt = $this->connect()->prepare($sql);
        if (!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location: ../app.login.php?error=stmtfailed");
            exit();
        }
        $userExists = false;
        if ($stmt->rowCount() > 0) {
            $userExists = true;
        } else {
            $userExists = false;
        }
        return $userExists;
    }

    protected function setUser($theUser, $thePwd, $theEmail) {
        $sql = "INSERT INTO users (users_userid, users_pwd, users_email) VALUES (?,?,?)";
        $hashedPwd = password_hash($thePwd, PASSWORD_DEFAULT);
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($theUser, $hashedPwd, $theEmail))) {
            $stmt = null;
            header('location: ../app.login.php?error=stmtfailed');
            exit();
        }
    }
}
