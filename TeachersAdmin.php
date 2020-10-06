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

<h2>Teachers and Faculty info</h2>
<?php
   
    $subject=" ";
    $date=" ";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $name=$_POST['Name'];
        $birth_date=$_POST['birth_date'];
        $qualification=$_POST['qualification'];
        $contactno=$_POST['contact_no'];
        $query= "INSERT INTO `teachers_info`(`name`, `qualification`, `birth_date`, `contact_no`) VALUES ('$name','$qualification','$birth_date','$contactno')";
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
             header("location:TeachersAdmin.php");
    }
  
    
    ?>
    
<form method="get" action="teaedit.php">
Id: <input type="number" name="id" value="1" min="1" required><br>
<input type="radio" name="type" value="1" checked>Edit
<input type="radio" name="type" value="0">Delete <br>
<input type="submit">
</form>
 <br>
 <br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="Name" required><br>
Qualification: <input type="text" name="qualification" required><br>
Birth Date:     <input type="date" name="birth_date" max="2000-11-11" min="1958-01-01"  required><br>
Contact No: <input type="number" name="contact_no" min="1" required><br>
<input type="submit">
</form>
  
   
<table>
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>QUALIFICATION</th>
    <th>BIRTH DATE</th>
    <th>CONTACT NO.</th>
  </tr>
  <?php
    include('dbconnection.php');
    $query = "SELECT * FROM `teachers_info`";
    
    $run = $connection->query($query);
    
    while($result = mysqli_fetch_assoc($run))
    {
    
    ?>
  <tr>
     <td><?php echo $result['id'] ?></td>
     <td><?php echo $result['name'] ?></td>
      <td><?php echo $result['qualification'] ?></td>
      <td><?php echo $result['birth_date'] ?></td>
      <td><?php echo $result['contact_no'] ?></td>
  </tr>
<?php }?>

</table>
<br><br>
<a href="AdminloginView.php"><button>GO BACK</button></a>

</body>
</html>