<?php
TODO: //fix email login
class Login extends Dbh {
    protected function getUser($theUser, $thePwd) {
        //create sql
        $sql = "SELECT users_pwd FROM users WHERE users_userid = ? OR users_email = ?";

        //prepare sql
        $stmt = $this->connect()->prepare($sql);

        //execute sql
        if (!$stmt->execute([$theUser, $thePwd])) {
            $stmt = null;
            header("Location: ../app.login.php?error=stmtfailed");
            exit();
        }


        if ($stmt->rowCount() == 0) {

            $stmt = null;
            header("Location: ../app.login.php?error=usernotfound");
            exit();
        }

        $pwdhashed = $stmt->fetchAll();
        $checkedPwd = password_verify($thePwd, $pwdhashed[0]["users_pwd"]);

        if ($checkedPwd == false) {

            $stmt = null;
            header("Location: ../app.login.php?error=wrongpassword");
            exit();
        } else if ($checkedPwd == true) {

            //1. start login in the user
            //2. create a new prepared statement
            $sql = "SELECT * FROM users WHERE users_userid = ? OR users_email = ? AND users_pwd = ?";
            $stmt = $this->connect()->prepare($sql);

            if (!$stmt->execute([$theUser, $theUser, $thePwd])) {
                $stmt = null;
                header("Location: ../app.login.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount() == 0) {

                $stmt = null;
                header("Location: ../app.login.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll();
            session_start();
            $_SESSION["userid"] = $user[0]["users_id"];
            $_SESSION["useruid"] = $user[0]["users_userid"];
            $stmt = null;
        }
    }

    // protected function doesUserExists($uid, $email) {
    //     $sql = "SELECT users_userid FROM users WHERE users_userid = ? OR users_email = ?";
    //     $stmt = $this->connect()->prepare($sql);
    //     if (!$stmt->execute(array($uid, $email))) {
    //         $stmt = null;
    //         header("Location: ../app.login.php?error=stmtfailed");
    //         exit();
    //     }
    //     $userExists = false;
    //     if ($stmt->rowCount() > 0) {
    //         $userExists = true;
    //     } else {
    //         $userExists = false;
    //     }
    //     return $userExists;
    // }

    // protected function setUser($theUser, $thePwd, $theEmail) {
    //     $sql = "INSERT INTO users (users_userid, users_pwd, users_email) VALUES (?,?,?)";
    //     $hashedPwd = password_hash($thePwd, PASSWORD_DEFAULT);
    //     $stmt = $this->connect()->prepare($sql);

    //     if (!$stmt->execute(array($theUser, $hashedPwd, $theEmail))) {
    //         $stmt = null;
    //         header('Location: ../app.login.php?error=stmtfailed');
    //         exit();
    //     }
    // }
}
