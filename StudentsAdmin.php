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

<h2>Students info</h2>
<?php
    
?>
<a href="StudentRegister.php"><button>ADD STUDENT</button></a>
<br><br>  
<a href="StudAdminId.php"><button>EDIT LOGIN DETAILS</button></a>
<br><br> 
<form method="get" action="stuedit1.php">
Id: <input type="number" name="id" value="1" min="1" required><br>
<input type="radio" name="type" value="1" checked>Edit
<input type="radio" name="type" value="0">Delete <br>
<input type="submit">
</form>
 <br>

<table>
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>STANDARD</th>
    <th>DIVISION</th>
    <th>ROLL NO</th>
    <th>BIRTH DATE</th>
    <th>ADDRESS</th>
  </tr>
  <?php
    include('dbconnection.php');
    $query = "SELECT * FROM `student_info`";
    
    $run = $connection->query($query);
    
    while($result = mysqli_fetch_assoc($run))
    {
    
    ?>
  <tr>
     <td><?php echo $result['student_id'] ?></td>
     <td><?php echo $result['name'] ?></td>
      <td><?php echo $result['standard'] ?></td>
      <td><?php echo $result['division'] ?></td>
      <td><?php echo $result['roll_no'] ?></td>
      <td><?php echo $result['birth_date'] ?></td>
      <td><?php echo $result['address'] ?></td>
  </tr>
<?php }?>

</table>
<br><br>
<a href="AdminloginView.php"><button>GO BACK</button></a>
</body>
</html>