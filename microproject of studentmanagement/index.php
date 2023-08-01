<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>

</head>
<body>
    <center>
        <table class="form">
            <form method="POST" class="form">
            <h1>Login Here</h1>
            <div>
                <center>
                    <tr>
                        <td>
                            Email: <td><input type="email" placeholder="Enter your Email" name="txtemail"></td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password: <td><input type="password" placeholder="Enter your Password" name="txtpass"></td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="login" name = "btnLogin" class="btnLogin">
                        </td>
                        <td>
                            <a href="http://localhost/project/forgotpwd.php">Forgot Password?</a> 
                        </td>
                    </tr>
                </center>
                <table class="form" style="border:none;">
                <tr>
                <td>
                <?php
                    if(isset($_POST['btnLogin'])){
                        $servername="localhost";
                        $user="root";
                        $pass="";
                        $dbname="studentinfo";
                        $conn=mysqli_connect($servername,$user,$pass,$dbname);

                        $email=$_POST['txtemail'];
                        $pass=$_POST['txtpass'];

                        if(!empty($email) && !empty($pass)){
                            $sql = "SELECT `email` `pass` FROM `login` WHERE `email`='$email' AND `pass`='$pass'";
                            $res = mysqli_query($conn,$sql);  
                            // if($email=$rows['email'] && $pass=$rows['pass']){
                            //     header("Location: http://localhost/project/insRecord.php",true,302);
                            // }
                            if(mysqli_num_rows($res)==1){
                                header("Location: http://localhost/project/insRecord.php",301);
                            }
                            else{
                                echo"<h1 style='color:red;'>INVALID EMAIL OR PASSWORD</h1>";
                            }
                        }
                        else{
                            echo "<h1 style='color:red;'>The fields cannot left EMPTY</h1>";
                        }
                    }
                ?>
                </td>
                </tr>
                </table>
            </div>
        </form>
    </center>
</body>


</html>