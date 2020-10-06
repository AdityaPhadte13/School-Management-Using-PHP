<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NoticeEdit</title>
</head>
<body>
<?php
    include('dbconnection.php');
   
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $id = $_POST['id'] ;
        $subject=$_POST['subject'];
        $date=$_POST['date'];
        $link=$_POST['file'];
        $query= "UPDATE notice SET `Subject`='$subject',`date`='$date', `link`='$link' WHERE id='$id' ";
        $run_querry = $connection->query($query);
        if($run_querry)
            { $start=1;
              
            ?>   
            <meta http-equiv="refresh" content="0; url=NoticeAdmin.php" />
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
    {   $query = "SELECT * FROM notice WHERE id='$id'";
    
    $run = $connection->query($query);
    $result = mysqli_fetch_assoc($run);
    
    ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Subject: <input type="text" name="subject" value="<?php echo $result['Subject']; ?>" required><br>
Date:     <input type="date" name="date" min="2018-01-01" value="<?php echo $result['date']; ?>" required><br>
File Name: <input type="text" name="file" value="<?php echo $result['link']; ?>" required><br>
<input type="hidden" name="id" value="<?php echo $id ?>">
<input type="submit">
<?php } 
    else 
    {
        $query= "DELETE FROM `notice` WHERE id='$id'";
        $run_querry = $connection->query($query);
        if($run_querry)
            { $start=1;
            
                
           
               ?> 
               <meta http-equiv="refresh" content="0; url=NoticeAdmin.php" />
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

</form>
</body>
</html>