<?php
$server="localhost";
$username="root";
$password="";
$database="job_portal";
$port="4306";

$conn = mysqli_connect($server, $username, $password, $database,$port);
// if($conn){
//     echo"success";
// }
// else {
//     die("Error". mysqli_connect_error());
// }
?>