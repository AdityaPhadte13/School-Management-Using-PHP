<?php
session_start();
include('dbconnection.php');

$id=$_SESSION['student_id'];
$query = "SELECT * FROM `student_info` WHERE student_id='$id'";
    
$run = $connection->query($query);
     
$result = mysqli_fetch_assoc($run);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student details</title>
</head>
<body>
<h2>Student Details</h2>
 <h3>Student id: <?php echo $result['student_id']?><br>
Name: <?php echo $result['name']?><br>
 Login ID: <?php echo $result['user_name']?><br>
  Standard: <?php echo $result['standard']?><br>
 Division: <?php echo $result['division']?><br>
 Roll no: <?php echo $result['roll_no']?><br>
 Birth Date: <?php echo $result['birth_date']?><br>
 Address: <?php echo $result['address']?><br>
 
 </h3>
    <br><br>
<a href="StudentloginView.php"><button>GO BACK</button></a>
</body>
</html>