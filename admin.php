<?php
session_start();

include('dbconnection.php');

$_SESSION['admin_id'] = $_POST['login_id'] ;
$_SESSION['password'] = $_POST['password'];
$id = $_SESSION['admin_id'] ;
$pass = $_SESSION['password'];

    $query = "SELECT * FROM `admin` WHERE  `admin_id`= '$id' and `password`= '$pass'";
    
    $run = $connection->query($query);

    $result = mysqli_fetch_assoc($run);

  // echo $result['password'];

//$num_rows= mysqli_num_rows($result);
$_SESSION['id']=$result['id'];

    if(isset($result['id'])&& $result['id'])
    {
       
        echo '<script>alert("login Successfull")</script><meta http-equiv="refresh" content="0; url=AdminloginView.php" />'; 
}

    else
    { ?>
       <meta http-equiv="refresh" content="0; url=index.php" />
        <script>alert("incorrect login_id/Password")</script>
<?php    }
?>