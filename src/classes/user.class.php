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
}
