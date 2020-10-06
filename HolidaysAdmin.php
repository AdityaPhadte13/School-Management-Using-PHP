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

<h2>Holidays</h2>
<?php
    
    $subject=" ";
    $date=" ";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $subject=$_POST['subject'];
        $date=$_POST['date'];
        $query= "INSERT INTO `holiday`(`Subject`, `date`) VALUES ('$subject','$date')";
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
             header("location:HolidaysAdmin.php");
    }
  
    
    ?>
    
<form method="get" action="Holedit.php">
Id: <input type="number" name="id" value="1" min="1" required><br>
<input type="radio" name="type" value="1" checked>Edit
<input type="radio" name="type" value="0">Delete <br>
<input type="submit">
</form>
 <br>
 <br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Subject: <input type="text" name="subject" required><br>
Date:     <input type="date" name="date" min="2018-01-01" required><br>
<input type="submit">
</form>
  
   
 <table>
  <tr>
    <th>ID</th>
    <th>SUBJECT</th>
    <th>DATE</th>
  </tr>
  <?php
    $query = "SELECT * FROM holiday";
    
    $run = $connection->query($query);
    
    while($result = mysqli_fetch_assoc($run))
    {
    
    ?>
  <tr>
     <td><?php echo $result['id'] ?></td>
     <td><?php echo $result['Subject'] ?></td>
      <td><?php echo $result['date'] ?></td>
  </tr>
<?php }?>

</table>
<br><br>
<a href="AdminloginView.php"><button>GO BACK</button></a>
</body>
</html>