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
<a href="StudentsAdmin.php"><button>EDIT STUDENT DETAILS</button></a>
<br>
<?php
     include('dbconnection.php');
?>
    
<h4>Edit</h4>
<form method="get" action="stuedit2.php">
Id: <input type="number" name="id" value="1" min="1" required><br>
<input type="hidden" name="type" value="1" >
<input type="submit">
</form>
 <br>
 <br>


<table>
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>LOGIN ID</th>
    <th>PASSWORD</th>

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
      <td><?php echo $result['user_name'] ?></td>
      <td><?php echo $result['password'] ?></td>
    
  </tr>
<?php }?>

</table>
<br><br>
<a href="AdminloginView.php"><button>GO BACK</button></a>
</body>
</html>