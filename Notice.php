<?php
session_start();
 include('dbconnection.php');
$start=1;
$id1=$_SESSION['student_id'];
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

<h2>Notice and Results</h2>

<table>
  <tr>
    <th>ID</th>
    <th>SUBJECT</th>
    <th>DATE</th>
    <th>FILE</th>
  </tr>
  <?php
    include('dbconnection.php');
    $query = "SELECT * FROM notice";
    
    $run = $connection->query($query);
    
    while($result = mysqli_fetch_assoc($run))
    {
    
    ?>
  <tr>
     <td><?php echo $result['id'] ?></td>
     <td><?php echo $result['Subject'] ?></td>
      <td><?php echo $result['date'] ?></td>
      <td><a href="<?php echo 'files/'.$result['link'] ?>" download>download</a></td>
  </tr>
<?php }?>

</table>
<br><br>
<a href="StudentloginView.php"><button>GO BACK</button></a>
</body>
</html>