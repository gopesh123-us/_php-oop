<?php
ini_set('memory_limit', '-1');
if (isset($_POST['submit'])) {

    //Grabbing the data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    //instantiate controller class
    require_once '../classes/dbh.class.php';
    require_once '../classes/login.class.php';
    require_once '../classes/login-contr.class.php';


    $login = new LoginContr($uid, $pwd);
    //Running error handlers and user sign up
    $login->loginUser();
    //header('Location: ../app.login.php?error=none');
    header('Location: ../app.login.php?error=none');
    //Going back to front page
}
