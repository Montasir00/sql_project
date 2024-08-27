<?php
    $con = new mysqli('mysql_db', 'monty', '1234', 'gym');
    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
?>