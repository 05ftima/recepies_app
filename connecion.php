<?php
   // Establishing a new MySQLi connection
   $conn = new mysqli("localhost", "root", "", "project2");
   
   // Checking if the connection was successful
   if ($conn->connect_error) {
        // If connection failed, terminate script execution and display an error message
        die("Connection failed: " . $conn->connect_error);
    }
?>