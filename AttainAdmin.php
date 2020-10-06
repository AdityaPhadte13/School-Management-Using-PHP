<?php
session_start();
 include('dbconnection.php');
$start=1;
$id1=$_SESSION['id'];
if(isset($id1) && $id1)
{$start=0;}
if($start)
{?>
       <meta http-equiv="refresh" content="0; url=index.php" />
        <script>alert("incorrect login_id/Password")</script>
        <?php }
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Students Login Data</h2>
<a href="StudentsAdmin.php"><button>STUDENT DETAILS</button></a>
<br><br> 

<?php
     
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $month=$_POST['month'];
        $year=$_POST['Year'];
        $days_present=$_POST['days_present'];
        $student_id=$_POST['student_id'];
        $query= "INSERT INTO `student_attain`(`year`, `month`, `student_id`, `days_present`) VALUES ('$year','$month','$student_id','$days_present')";
        $run_querry = $connection->query($query);
        if($run_querry)
            {
            
                echo '<script>alert("Succesfully Added")</script>';
            //header("location:HolidaysAdmin.php");
               
            }
            else 
            {
                echo"failed  ".mysqli_error($connection);

            }
             header("location:AttainAdmin.php");
    }
  
    
    ?>
    
<form method="get" action="attedit.php">
Id: <input type="number" name="id" value="1" min="1" required><br>
<input type="hidden" name="type" value="1">
<input type="submit">
</form>
 <br>
 <br>
 
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Month: <input type="text" name="month" required><br>
Year: <input type="number" name="Year" required><br>
No Of Days Present:<input type="number" name="days_present" max="30" min="0"  required><br>
Student id: <input type="number" name="student_id" min="1" required><br>
<input type="submit">
</form>
  

<table>
  <tr>
    <th>ID</th>
    <th>STUDENT ID</th>
    <th>NAME</th>
    <th>NO OF DAYS PRESENT</th>
    <th>MONTH</th>
    <th>YEAR</th>

  <?php
    include('dbconnection.php');
    $query = "SELECT * FROM `student_attain`";
    $run = $connection->query($query);
    
      
    while($result = mysqli_fetch_assoc($run))
    {
    
    ?>
  <tr>
     <td><?php echo $result['id'] ?></td>
     <td><?php echo $result['student_id'] ?></td>
      <td><?php 
        $id=$result['student_id'];
        $query1 = "SELECT * FROM `student_info` WHERE student_id='$id'";
        $run1 = $connection->query($query1);
        $result1 = mysqli_fetch_assoc($run1);
        echo $result1['name']; ?></td>
      <td><?php echo $result['days_present'] ?></td>
      <td><?php echo $result['month'] ?></td>
      <td><?php echo $result['year'] ?></td>
    
  </tr>
<?php }?>

</table>

</body>
</html>