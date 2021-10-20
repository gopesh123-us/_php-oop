<?php
//this is the model class. This is the only class that interacts with the database.
//this class will have one specific query
//there will be two more files a view - usersview.class.php and controller and usercontr.class.php
//there is a smililar class  test.class.php - don't get confused

class Users extends Dbh {
    //get connection
    protected function getUser($firstName) {
        $sql = 'SELECT * FROM users WHERE user_firstname = ?';

        //prepare statmeent
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName]);
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setUser($firstName, $lastName, $dob) {
        $sql = "INSERT INTO users(user_firstname, user_lastname, users_dateofbirth) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $dob]);
    }



    //below the methods are just written earlier, so did not delete. The above methods are being used
    protected function getUsersStmt($firstName, $lastName) {
        $sql = "SELECT * FROM users WHERE user_firstname = ? AND user_lastname = ?";
        //prepare statement next
        $stmt = $this->connect()->prepare($sql);

        //execute statement next
        $stmt->execute([$firstName, $lastName]);
        $names = $stmt->fetchAll();

        //this should go in the view class
        foreach ($names as $name) {
            echo $name['user_firstname'] . ' ' . $name['user_lastname'] . '<br>';
        }
    }

    protected function setUsersStmt($firstName, $lastName, $dateOfBirth) {
        $sql = "INSERT INTO users(user_firstname, user_lastname, users_dateofbirth) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);

        //this should go in the controller class
        $stmt->execute([$firstName, $lastName, $dateOfBirth]);
    }
}
