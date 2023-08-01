<html>

<head>
    <title>Delete Record</title>

</head>
<body style="background-color:darkslategray;">
<center>
    <h1 style="color:lightcoral;">Delete Record</h1>
    <div>
        <table class="form">
            <!-- <center> -->
                <form method="POST" class="form">
                    <tr><td>Enrollment No.: <td><input type="number" name="enrollment"></td></td></tr>
                    <tr><td><input type="submit" name="delbtn" value="Delete" class="btnDelete">
                        <td><a href="http://localhost/project/showdata.php">Show Data?</a></td></td></tr></table>
                    <table class="form" style="border:none;">
                    <tr><td>
                    <?php
                        if(isset($_POST['delbtn'])){
                            
                            $servername="localhost";
                            $user="root";
                            $pass="";
                            $dbname="studentinfo";
                            $conn=mysqli_connect($servername,$user,$pass,$dbname);
                            $enrollment=$_POST['enrollment'];

                            if(!empty($enrollment)){
                                $result=mysqli_query($conn,"SELECT `enrollment` FROM `student` WHERE `enrollment`=$enrollment;");
                                $row=mysqli_fetch_assoc($result);
                                if($row!=NULL){
                                        if($row['enrollment']==$enrollment){
                                            $sql = "DELETE FROM `student` WHERE `enrollment`=$enrollment;";
                                            $result = mysqli_query($conn,$sql);
                                            echo"<h3>Record Deleted Successfully<h3>";
                                        }
                                }
                                else{
                                    echo "<h1 style='color:red;'>No Record found</h1>";
                                }
                            }
                            else{
                                echo"<h1 style='color:red;'>Field cannot Left Empty<h1>";
                            }
                            mysqli_close($conn);
                        }
                    ?>
                    </tr></td>
                </form>
            <!-- </center> -->
        </table>
    </div>
</center>
</body>

</html>

