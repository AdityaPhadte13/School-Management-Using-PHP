<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TeacherEdit</title>
</head>
<body>
<?php
    include('dbconnection.php');
   
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $id=$_POST['id'];
        $name=$_POST['Name'];
        $birth_date=$_POST['birth_date'];
        $qualification=$_POST['qualification'];
        $contactno=$_POST['contact_no'];
        $query= "UPDATE `teachers_info` SET `name`='$name',`qualification`='$qualification',`birth_date`='$birth_date',`contact_no`='$contactno' WHERE id='$id'";
        $run_querry = $connection->query($query);
        if($run_querry)
            { $start=1;
              
            ?>   
            <meta http-equiv="refresh" content="0; url=TeachersAdmin.php" />
             <script>alert("Succesfully Updated");</script>
            
            //header("location:HolidaysAdmin.php");
               
        <?php    }
            else 
            {
                echo"failed  ".mysqli_error($connection);

            }
        if($start){   
        //header("location:HolidaysAdmin.php");
        }
    }
    
    ?>
    
<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "GET") 
    
    { 
        $id= $_GET['id'];
    if($_GET['type'])
    {   $query = "SELECT * FROM `teachers_info` WHERE id='$id'";
    
    $run = $connection->query($query);
    $result = mysqli_fetch_assoc($run);
    
    ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="Name" value="<?php echo $result['name'] ?>" required><br>
Qualification: <input type="text" name="qualification" value="<?php echo $result['qualification'] ?>" required><br>
Birth Date:     <input type="date" name="birth_date" max="2000-11-11" min="1958-01-01" value="<?php echo $result['birth_date'] ?>" required><br>
Contact No: <input type="number" name="contact_no" min="1" value="<?php echo $result['contact_no'] ?>" required><br>
<input type="hidden" name="id" value="<?php echo $id ?>">
<input type="submit">
</form>
  
   <?php }
     else 
    {
        $query= "DELETE FROM `teachers_info` WHERE id='$id'";
        $run_querry = $connection->query($query);
        if($run_querry)
            { $start=1;
            
                
           
               ?> 
               <meta http-equiv="refresh" content="0; url=TeachersAdmin.php" />
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