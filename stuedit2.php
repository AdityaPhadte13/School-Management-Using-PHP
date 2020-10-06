<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>StudentIDEdit</title>
</head>
<body>
<?php
    include('dbconnection.php');
   
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $id=$_POST['id'];
        $user_name=$_POST['user_name'];
        $password=$_POST['password'];
        
        $query= "UPDATE `student_info` SET `user_name`='$user_name',`password`='$password' WHERE student_id='$id'";
        $run_querry = $connection->query($query);
        if($run_querry)
            { 
              
            ?>   
            <meta http-equiv="refresh" content="0; url=StudAdminId.php" />
             <script>alert("Succesfully Updated");</script>
            
            //header("location:HolidaysAdmin.php");
               
        <?php    }
            else 
            {
                echo"failed  ".mysqli_error($connection);

            }
    }
    
    ?>
    
<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "GET") 
    
    { 
        $id= $_GET['id'];
    
      $query = "SELECT * FROM `student_info` WHERE student_id='$id'";
    
    $run = $connection->query($query);
     
    $result = mysqli_fetch_assoc($run);
    
    }?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
Login Id: <input type="text" name="user_name" value="<?php echo $result['user_name'] ?>" required><br>
password: <input type="text" name="password" value="<?php echo $result['password'] ?>" required><br>
<input type="hidden" name="id" value="<?php echo $id ?>">
<input type="submit">
</form>
  

</body>
</html>