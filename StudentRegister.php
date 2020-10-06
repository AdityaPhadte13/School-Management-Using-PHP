<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Register</title>
</head>
<body>
    <?php
    include('dbconnection.php');
   
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $name=$_POST['Name'];
        $standard=$_POST['standard'];
        $division=$_POST['division'];
        $roll_no=$_POST['roll_no'];
        $address=$_POST['address'];
        $birth_date=$_POST['birth_date'];
        $user_name=$_POST['user_name'];
        $password=$_POST['password'];
        
        $query= "INSERT INTO `student_info`(`name`, `address`, `birth_date`, `roll_no`, `standard`, `division`, `user_name`, `password`) VALUES ('$name','$address','$birth_date','$roll_no','$standard','$division','$user_name','$password')";
        $run_querry = $connection->query($query);
        if($run_querry)
            { 
              
            ?>   
            <meta http-equiv="refresh" content="0; url=StudentsAdmin.php" />
             <script>alert("Succesfully Added");</script>
            
            //header("location:HolidaysAdmin.php");
               
        <?php    }
            else 
            {
                echo"failed  ".mysqli_error($connection);

            }
   
    }
    
    ?>
    
<h2>STUDENT REGISTRATION</h2>
    
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="Name"  required><br>
Standard: <input type="text" name="standard"  required><br>
Division: <input type="text" name="division"  required><br>
Roll NO: <input type="number" name="roll_no"  required><br>
Birth Date:     <input type="date" name="birth_date" max="2011-11-11" min="1958-01-01"  required><br>
Address: <textarea name="address" id="" cols="30" rows="10"></textarea><br>
Login Id: <input type="text" name="user_name"  required><br>
password: <input type="text" name="password"  required><br>
<input type="submit">
</form>
  

    
</body>
</html>