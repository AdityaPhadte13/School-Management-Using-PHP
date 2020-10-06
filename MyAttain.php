<?php 
session_start();
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

<?php
     include('dbconnection.php');
    $id=$_SESSION['student_id'];

    ?>
  

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
    $query = "SELECT * FROM `student_attain` WHERE student_id='$id' ";
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
<br><br>
<a href="StudentloginView.php"><button>GO BACK</button></a>
</body>
</html>