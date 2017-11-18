<?php

class DbConnect

{

    private $conn;

    function __construct()

    {

    }

    /**

     * Establishing database connection

     * @return database connection handler

     */

    function connect()

    {
        $DBhost = "localhost";
        $DBuser = "root";
        $DBpass = "";
        $DBname = "Team";

        // require_once 'Config.php';

        // Connecting to mysql database

        $this->conn = new MySQLi($DBhost, $DBuser, $DBpass, $DBname);

        // Check for database connection error

        if (mysqli_connect_errno()) {

            echo "Failed to connect to MySQL: " . mysqli_connect_error();

        }

        // returing connection resource

        return $this->conn;

    }

}