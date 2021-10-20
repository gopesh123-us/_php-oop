USE ooplogin;

CREATE TABLE users (
users_id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
users_userid TINYTEXT NOT NULL,
users_pwd LONGTEXT NOT NULL,
users_email TINYTEXT NOT NULL 
);

SELECT * FROM users;

SELECT users_pwd FROM users WHERE users_userid = '' OR users_email = '';

DELETE FROM users WHERE users_userid = '';