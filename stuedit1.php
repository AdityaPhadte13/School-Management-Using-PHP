<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>StudentEdit</title>
</head>
<body>
<?php
    include('dbconnection.php');
   
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $id=$_POST['id'];
        $name=$_POST['Name'];
        $standard=$_POST['standard'];
        $division=$_POST['division'];
        $roll_no=$_POST['roll_no'];
        $address=$_POST['address'];
        $birth_date=$_POST['birth_date'];
        $query= "UPDATE `student_info` SET `name`='$name',`address`='$address',`birth_date`='$birth_date',`roll_no`='$roll_no',`standard`='$standard',`division`='$division' WHERE student_id='$id'";
        $run_querry = $connection->query($query);
        if($run_querry)
            { $start=1;
              
            ?>   
            <meta http-equiv="refresh" content="0; url=StudentsAdmin.php" />
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
    
    ?>
    
<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "GET") 
    
    { 
        $id= $_GET['id'];
    if($_GET['type'])
    {   $query = "SELECT * FROM `student_info` WHERE student_id='$id'";
    
    $run = $connection->query($query);
     
    $result = mysqli_fetch_assoc($run);
    
    ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="Name" value="<?php echo $result['name'] ?>" required><br>
Standard: <input type="text" name="standard" value="<?php echo $result['standard'] ?>" required><br>
Division: <input type="text" name="division" value="<?php echo $result['division'] ?>" required><br>
Roll NO: <input type="number" name="roll_no" value="<?php echo $result['roll_no'] ?>" required><br>
Birth Date:     <input type="date" name="birth_date" max="2011-11-11" min="1958-01-01" value="<?php echo $result['birth_date'] ?>" required><br>
Address: <textarea name="address" id="" cols="30" rows="10"><?php echo $result['address'] ?></textarea><br>
<input type="hidden" name="id" value="<?php echo $id ?>">
<input type="submit">
</form>
  
   <?php }
     else 
    {
        $query= "DELETE FROM `student_info` WHERE student_id='$id'";
        $run_querry = $connection->query($query);
        if($run_querry)
            { $start=1;
            
                
           
               ?> 
               <meta http-equiv="refresh" content="0; url=StudentsAdmin.php" />
               <script>alert("Succesfully deleted");</script>
                
          <?php  }
            else
            {
                echo"failed  ".mysqli_error($connection);

            }
         if($start){   
        //header("location:HolidaysAdmin.php");
        }
    }
    
    }
    
    ?>

</body>
</html>