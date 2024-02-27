<?php 

class User extends databaseHandler {
    function insertUser($name, $email, $password) {
        $conn = $this->connect();
        // the users password is encrypted to not go into the database
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO users
                (name, email, password_hash)
                VALUES (?,?,?)";
        $stmt = $conn->prepare($sql);
        // binds params to stop SQL injections
        $stmt->bind_param("sss", $name, $email, $password_hash);

        // executes the statement
        if(!$stmt->execute()) {
            // if the statement was not executed
            $stmt->close();
            echo "Error putting you into our database, please try again";
        }
    }

    function logIn($email, $password) {
        // checks the password is correct
        if ($this->checkPassword($email, $password)) {
            echo "password correct";
        } else {
            echo "incorrect password";
        }
    }

    function checkPassword($email, $password) {
        $conn = $this->connect();
        // gets password hash stored from the user
        $sql = "SELECT password_hash FROM users 
                WHERE email = ?";
        // protects from SQL injection
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);

        // tries executing SQL statement
        if (!$stmt->execute()) {
            $stmt->close();
            echo("Error checking your password. Try again");
            die();
        }

        // gets the number of rows with that hash
        $result = $stmt->get_result();
        $numRows = $result->num_rows;

        // if that hash does not exist in the db
        if ($numRows == 0) {
            $stmt->close();
            // this will become a redirect
            echo "That user does not exist";
            exit();
        }

        $row = $result->fetch_assoc();
        $stmt->close();

        // put the hash into a variable
        $password_hash = $row["password_hash"];
        // checks the plaintext from user logging in to the 
        // saved hash
        $check_password = password_verify($password, $password_hash);

        // return true if password matches, false if not.
        return $check_password;
    }
}