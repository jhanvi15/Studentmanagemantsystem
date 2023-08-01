<html>
    <head>

    </head>
<body>
<?php

    $servername="localhost";
    $user="root";
    $pass="";
    $dbname="studentinfo";
    $conn=mysqli_connect($servername,$user,$pass,$dbname);
    
    $sql = "SELECT * FROM `student`";
    $result = mysqli_query($conn,$sql);
    $num=0;

    echo "<table class='form'>
    <td>";
    // <form method='POST' action='delRecord.php'>
            echo"<a href='http://localhost/project/delRecord.php' style='text-decoration:underline; color:lightcoral; margin:45px;'>Delete Records?</a>";
            // <input type='submit' name='btndel' value='Delete Record' class='btnDelete'/>
        echo"</form></td></table>";

    echo "<div>
    <table class='form'>
    <tr style='text-weight:bold; color:lightcoral;'>
        <td>FNAME</td>
        <td>LNAME</td>
        <td>ENROLLMENT NO.</td>
        <td style='width:10px;padding: 10px 90px;'>DOB</td>
        <td>GENDER</td>
        <td>ADDERESS</td>
        <td>DEPARTMENT</td>
        <td>CONTACT NO.</td>
        <td>EMAIL</td>
    </tr>";
    // $new = 1;
    $num = mysqli_num_rows($result);
    if($num>0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
                echo "<td>";
                    $fname = array($row['fname']);
                        foreach($fname as $val){
                            echo "$val";
                        }
                echo "</td>
                <td>";
                    $lname = array($row['lname']);
                    foreach($lname as $val){
                        echo "$val";
                    }
                echo "</td>
                <td>";
                    $enrollment = array($row['enrollment']);
                    foreach($enrollment as $val){
                        echo "$val";
                    }
                echo "</td>
                <td>";
                    $dob = array($row['dob']);
                    foreach($dob as $val){
                        echo "$val";
                    }
                echo "</td>
                <td>";
                    $gender = array($row['gender']);
                    foreach($gender as $val){
                        echo "$val";
                    }
                echo "</td>
                <td style='width:10px; padding: 1px 5px; font-size: 20px; align: left;'>";
                    $address = array($row['address']);
                    foreach($address as $val){
                        echo "$val";
                    }
                echo "</td>
                <td>";
                    $dept = array($row['dept']);
                    foreach($dept as $val){
                        echo "$val";
                    }
                echo "</td>
                <td>";
                    $contact = array($row['contact']);
                    foreach($contact as $val){
                        echo "$val";
                    }
                echo "</td>
                <td>";
                    $email = array($row['email']);
                    foreach($email as $val){
                        echo "$val";
                    }
                echo"</td>";
            }
            echo "</tr></table>";           
    }

?>
</body>
</html>