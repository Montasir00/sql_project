<?php
// This file is for testing the connection to the database.
if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'Dont have mysqli!!!';
} else {
    echo 'have it!';
}
?>
