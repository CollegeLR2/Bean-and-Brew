<?php

// reused class from previous project
class databaseHandler {

    function connect() {

        try {
            $username = "root";
            $password = "";
            $database = "bean-brew";
            $host = "localhost";

            $databaseHandler = new mysqli($host, $username, $password, $database);
            return $databaseHandler;
        } catch(Exception $e) {
            echo("Connection Failed: " . $e->getMessage());
            exit();
        }
    }

    function disconnect($databaseHandler) {
        $databaseHandler->close();
    }
}
