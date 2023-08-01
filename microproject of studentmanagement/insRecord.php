<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<center>
<body>
    <h1 style="color: lightcoral; text-decoration:underline;">Student Registration</h1>
    <div>
        <form method="POST">
        <table class="form">
            <div>
            <tr> 
                <td>First Name: 
                <td><input type = "text" name = "txtfname"/></td></td>
            </tr>
            <tr>
                <td>Last Name: 
                <td><input type = "text" name = "txtlname"/></td></td>
            </tr>
            <tr>
                <td>Enrollment NO.: 
                <td><input type = "number" name = "enrollment"/></td></td>
            </tr>
            <tr>
                <td>DOB: 
                <td><input type = "date" name = "dob" class="date"/></td></td>
            </tr>
            <tr>
                <td>Gender: 
                <td class="gender">
                    <div style="color:lightcoral">
                    <input type = "radio" name = "gender" value="male" checked/>Male
                    <!-- <div style="color:lightcoral"> -->
                        <input type = "radio" name = "gender" value="female"/>Female</div></td></td>
            </tr>
            <tr>
                <td>Address: 
                <td><input type = "text" name = "txtadd"/></td></td>
            </tr>
            <tr>
                <td>Department: 
                <td><select name="dept" class="select">
                    <option value="CE">CE</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="ME">ME</option>
                    <option value="EE">EE</option>
                    <option value="EC">EC</option>
                </select></td></td> 
            </tr>
            <tr>
                <td>Contact No.: 
                <td> <input type= "number" name = "txtcontact"/></td></td>
            </tr>
            <tr>
                <td>Email: 
                <td><input type = "email" name = "txtemail"/></td></td>
            </tr>
            <tr> 
                <td><input type = "submit" name = "btnSave" class="btnSave" value="Save Data"/></td>    

                <td><input type="submit" value = "Show Data" name="mngdata" class="btnmng"/></td>
            </tr>
        </table>
            <table>
                <center>
                <tr>
                    <td class="script">
                    <?php
                        if(isset($_POST['btnSave'])){

                            $servername="localhost";
                            $user="root";
                            $pass="";
                            $dbname="studentinfo";
                            $conn=mysqli_connect($servername,$user,$pass,$dbname);

                            $fname=$_POST['txtfname'];
                            $lname=$_POST['txtlname'];
                            $enrollment=$_POST['enrollment'];
                            $dob=$_POST['dob'];
                            $gender=$_POST['gender'];
                            $address=$_POST['txtadd'];
                            $dept=$_POST['dept'];
                            $contact=$_POST['txtcontact'];
                            $email=$_POST['txtemail'];

                            if (!empty($fname) && !empty($lname) && !empty($enrollment) && !empty($dob) && !empty($gender) && !empty($address) && !empty($dept) && !empty($contact) && !empty($email)) {
                                    
                                $sql = "INSERT INTO `student` VALUES('$fname','$lname','$enrollment','$dob','$gender','$address','$dept','$contact','$email')";
                                $res=mysqli_query($conn,$sql);
                                        
                                if($res){
                                    echo "<h1 style='color:lightcoral; border:2px solid;'>Record Inserted Successfully </h1>";
                                }
                                else{
                                    echo"<h1 style='color:red;'>Something went Wrong</h1>";
                                }
                            }
                            else{
                                echo "<h1 style='color:red;'>The fields cannot left EMPTY</h1>";
                            }
                                
                        }
                        if(isset($_POST['mngdata'])){
                            header("Location: http://localhost/project/showdata.php",true,301);
                        }
                    ?>
                    </td>
                </tr>
                </center>
            </table>
        </form>
    </div>
</body>
</center>

</html>
