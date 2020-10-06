<?php
session_start();
include('dbconnection.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>StudentEdit</title>
</head>
<body>
<?php
    include('dbconnection.php');
   $error1="";
    $error2="";
    $id=$_SESSION['student_id'];
$query = "SELECT * FROM `student_info` WHERE student_id='$id'";
    
$run = $connection->query($query);
     
$result = mysqli_fetch_assoc($run);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if($_POST['Opass']!=$result['password'])
        {
                 $error1="Incorrect Password"; 
        }
        else{
       if($_POST['Npass']!=$_POST['CNpass'])
       {  $error2="Incorrect Password";   }
            else
            {
                $id=$result['student_id'];
        $password=$_POST['CNpass'];    
        $query1= "UPDATE `student_info` SET `password`='$password' WHERE student_id='$id'";
        $run_querry = $connection->query($query1);
        if($run_querry)
            { $start=1;
              
            ?>   

            <meta http-equiv="refresh" content="0; url=StudentloginView.php" />
             <script>alert("Succesfully Updated");</script>

            
            //header("location:HolidaysAdmin.php");
               
        <?php    }
            else 
            {
                echo"failed  ".mysqli_error($connection);

            }
       // if($start){   
        //header("location:HolidaysAdmin.php");
        //}
    }
           
    }
           }
    ?>
    

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Original Password: <input type="password" name="Opass"  required><?php echo $error1 ?><br>
New Password <input type="password" name="Npass"  required><br>
Confirm Password <input type="password" name="CNpass" required><?php echo $error2 ?><br>
<input type="submit">
</form>
  
 

</body>
</html>