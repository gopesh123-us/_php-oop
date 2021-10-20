<?php
ini_set('memory_limit', '-1');
if (isset($_POST['submit'])) {

    //Grabbing the data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdRepeat'];
    $email = $_POST['email'];

    //Instantiate controller class
    require_once '../classes/dbh.class.php';
    require_once '../classes/signup.class.php';
    require_once '../classes/signup-contr.class.php';


    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);
    //Running error handlers and user sign up
    $signup->signupUser();
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header('location:../app.login.php?error=none');
    //Going back to front page
}
