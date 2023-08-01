<html>

    <head>
        <title>Forgot Password</title>

    </head>

    <body>
        <center>
            <h1>Change Password</h1>
            <table class="form">
            <form method="POST" class="form">
                <div>
                    <tr>
                        <td>Email: <td><input type="email" name="email"/></td></td>
                    </tr>
                    <tr>
                        <td>Last Password: <td><input type="password" name="oldpwd"/></td></td>
                    </tr>
                    <tr>
                        <td>New Password: <td><input type="password" name="newpwd"/></td></td>
                    </tr>
                    <tr>
                        <td>Confirm Password: <td><input type="password" name="conpwd"/></td></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Change Password" class="submit"></td>
                        <td><br><br><a href="http://localhost/project/index.php">Back to Login?</a></td>
                    </tr>
                </div>
            </form>
            </table>
            <table style="border:none;">
                <tr><td>
                    <?php
                        if(isset($_POST['submit'])){
                            $servername="localhost";
                            $user="root";
                            $pass="";
                            $db="studentinfo";
                            $conn=mysqli_connect($servername,$user,$pass,$db);

                            $email=$_POST['email'];
                            $opass=$_POST['oldpwd'];
                            $npass=$_POST['newpwd'];
                            $cpass=$_POST['conpwd'];

                            $sql="SELECT `email` FROM `login` WHERE `email` = '$email'";
                            $res=mysqli_query($conn,$sql);
                            $row=mysqli_fetch_assoc($res);
                            if(!empty($email)&&!empty($opass)&&!empty($npass)&&!empty($cpass)){
                                if($row!=NULL){
                                    if($row['email']==$email){
                                        if($opass!=$npass && $npass==$cpass){
                                            $sql="UPDATE `login` SET `pass` = '$npass' WHERE `email` = '$email';";
                                            $res=mysqli_query($conn,$sql);
                                            echo"<h1 style='color:lightcoral;'>Password Updated Successfully.</h1>";
                                        }
                                        else{
                                            echo "<h1 style='color:red;'> Something Went Wrong. Please Try Again.</h1>";
                                        }
                                    }
                                }
                            }
                            else{
                                echo"<h1 style='color:red;'>Fields cannot left empty</h1>";
                            }
                            mysqli_close($conn);
                        }   
                    ?>
                </tr></td>
        </center>
    </body>

</html>