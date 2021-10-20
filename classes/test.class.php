<?php
//this class 
class Test extends Dbh {
    public function getUsers() {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        //this is without prepared statements
        while ($row = $stmt->fetch()) {
            echo $row['user_firstname'] . ' ' . $row['user_lastname'] . '<br>';
        }
    }


    public function getUsersStmt($firstName, $lastName) {
        $sql = "SELECT * FROM users WHERE user_firstname = ? AND user_lastname = ?";
        $stmt = $this->connect()->prepare($sql);
        //prepared statement
        $stmt->execute([$firstName, $lastName]);
        $names = $stmt->fetchAll();

        foreach ($names as $name) {
            echo $name['user_firstname'] . ' ' . $name['user_lastname'] . '<br>';
        }
    }

    public function setUsersStmt($firstName, $lastName, $dateOfBirth) {
        $sql = "INSERT INTO users(user_firstname, user_lastname, users_dateofbirth) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $dateOfBirth]);
    }
}
