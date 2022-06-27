<?php

$conn = mysqli_connect("localhost","root","","agriculture");  // database connection

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>