<?php


$servername="localhost";
$username="root";
$password="";
$dbname="logininfo";
$con=mysqli_connect($servername,$username,$password,$dbname);
if($con){
    echo"data base connected";
    }
    else{
        echo"database not connected";
    }
    


?>