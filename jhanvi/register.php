
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="regis.css">
   
    <title>Document</title>
</head>
<body>
<form method="POST">
    <center>

    <div class="res">
       <img src="ap.jpeg" width="200px">
       
            <br>
      username:<input type="username" name="txt-uname" placeholder="kavan"/>
        <br></br>
      emailid:<input type="email" name="txt-email" placeholder="123@gmail.com"/>
        <br></br>
        password:<input type="pass" name="txt-pass"placeholder="password"/>
        <br>
      <button type="submit" >submit</button>
        <a href="login.php">LOGIN</a>
</center>
    </div>
    
</body>
</html>
<?php
include "connection.php";
if(isset($_POST["submit"]))

$uname=$_POST['txt-uname'];
$email=$_POST['txt-email'];
$password=$_POST['txt-pass'];
$sql="INSERT INTO  `login`(`uname`, `email`, `password`) VALUES ('$uname','$email','$password')";
   
    $s=mysqli_query($con,$sql);
    if($s){
        echo"data inserted";
    }
    else{
        echo"data not inserted";
    }

?>

?>