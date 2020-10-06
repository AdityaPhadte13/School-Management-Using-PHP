<?php
session_start();

include('dbconnection.php');

$_SESSION['user_name'] = $_POST['id'] ;
$_SESSION['password'] = $_POST['pass'];
$id = $_SESSION['user_name'] ;
$pass = $_SESSION['password'];

    $query = "SELECT * FROM `student_info` WHERE  `user_name`= '$id' and `password`= '$pass'";
    
    $run = $connection->query($query);

    $result = mysqli_fetch_assoc($run);

$_SESSION['student_id']=$result['student_id'];

   echo $result['password'].mysqli_error($connection);

//$num_rows= mysqli_num_rows($result);

    if(isset($result['student_id'])&& $result['student_id'])
    {?>
       
        <meta http-equiv="refresh" content="0; url=StudentloginView.php" />
        <script>alert("login Successfull")</script>
    <?php 
}

    else
    { ?>
       <meta http-equiv="refresh" content="0; url=index.php" />
        <script>alert("incorrect login_id/Password")</script>
<?php    }
?>