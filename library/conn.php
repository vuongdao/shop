<?php
$host="localhost";
$sqluser="root";
$sqlpass="root";
$dbname="nhap5";
$conn=mysqli_connect($host,$sqluser,$sqlpass,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>