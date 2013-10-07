<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Class for connecting to database, manipulating user data
 * Initializes the $connection object
 *
 * @author Emrys
 */

include("config.php");

class MySQL {
       var $connection;         //The MySQL database connection
       
       //Class Constructor
       function dbconnect(){
       $this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS) or die(mysqli_error());
       mysqli_select_db(DB_NAME, $this->connection) or die(mysqli_error());
       }
}


$database = new MySQL;

?>
