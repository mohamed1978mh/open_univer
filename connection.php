<?php
function db_connect()
{
    try {
        require "config.php"; 
        $connection = mysqli_connect($host,$username,"",$dbname);
        //$connection = new PDO($dsn, $username, $password, $options);
        return $connection;
    } catch (PDOxception $e) {
        die($e->getMessage());
    }
}
?>