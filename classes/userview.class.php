<?php

//include '../includes/autoloader.inc.php';

class UserView extends Users {
    public function showUser($firstName) {
        $results = $this->getUser($firstName);
        foreach ($results as $user) {
            echo 'Full Name: ' . $user['user_firstname'] . ' ' . $user['user_lastname'] . ' ' . $user['users_dateofbirth'] . '<br>';
        }
    }
}
