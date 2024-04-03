<?php 
$server ="localhost";
$username ="";
$password = " ";
$dbname = "login_db";

$coon =mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
    echo "not connected";
}
 else{
    echo"connected ";
 }

?>