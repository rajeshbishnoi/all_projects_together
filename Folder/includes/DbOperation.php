<?php

class DbOperation

{

    private $conn;

    //Constructor

    function __construct()

    {

        require_once dirname(__FILE__) . '/Config.php';

        require_once dirname(__FILE__) . '/DbConnect.php';

        // opening db connection

        $db = new DbConnect();

        $this->conn = $db->connect();

    }

    //Function to create a new user

    public function createTeam($name, $memberCount)

    {

        $stmt = "INSERT INTO team(name, member) values('$name','$memberCount')";

        // $stmt->bind_param("si", $name, $memberCount);

        // $result = $stmt->execute();

        // $stmt->close();


        if ($this->conn->query($stmt)) {

            return true;

        } else {

            return false;

        }

    }

}