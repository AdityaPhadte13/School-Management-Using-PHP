<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HolidayEdit</title>
</head>
<body>
<?php
    include('dbconnection.php');
   
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $id=$_POST['id'];
        $month=$_POST['month'];
        $year=$_POST['Year'];
        $days_present=$_POST['days_present'];
        $query= "UPDATE `student_attain` SET `year`='$year',`month`='$month',`days_present`='$days_present' WHERE id='$id' ";
        $run_querry = $connection->query($query);
        if($run_querry)
            { $start=1;
              
            ?>   
            <meta http-equiv="refresh" content="0; url=AttainAdmin.php" />
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
    {   $query = "SELECT * FROM student_attain WHERE id='$id'";
    
    $run = $connection->query($query);
    $result = mysqli_fetch_assoc($run);
    
    ?>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Month: <input type="text" name="month" value="<?php echo $result['month']?>" required><br>
Year: <input type="number" name="Year" value="<?php echo $result['year']?>" required><br>
No Of Days Present:<input type="number" name="days_present" max="30" min="0" value="<?php echo $result['days_present']?>" required><br>
<input type="hidden" name="id" value="<?php echo $result['id']?>">
<input type="submit">
<?php } 
    
    }
    ?>

</form>
</body>
</html>