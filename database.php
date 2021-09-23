<?php
class Database
{
    public $db;

    public function getConnection()
    {
        $this->db = null;

        // try {

        //     $this->db = new mysqli('localhost', 'root', '', 'food');
        // } catch (Exception $e) {
        //     echo "Database could not be connected:  " . $e->getMessage();
        // }

        try {
            $this->db = mysqli_connect("localhost", "root", "", "food");

            // Check connection
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                exit();
            }
        } catch (Exception $e) {
            echo "Database could not be connected:  " . $e->getMessage();
        }


        return $this->db;
    }
}