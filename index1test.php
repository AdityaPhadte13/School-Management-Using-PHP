<?php

include('dbconnection.php');

$query= "insert into admin(name,admin_id,password) values ('omkar','admin4','omkar@123')" ;
var_dump($query);


$id=5;

//$query="UPDATE admin SET name = 'Aditya', admin_id = 'myid' , password = 'mypassword' WHERE id = 6";
//$query="DELETE admin SET name = 'Aditya', admin_id = 'myid' , password = 'mypassword' WHERE id = 6";
//$query="DELETE FROM admin WHERE id = $id";

$run_querry=$connection->query($query);

/*$query_select = "SELECT * FROM admin WHERE id=2";


$run_querry=$connection->query($query_select);*/

//$result = mysqli_fetch_array($run_querry,MYSQLI_ASSOC);



if($run_querry)
{
//    echo $result['password'];
    echo "DELETED";
}
else 
{
    echo"failed".mysqli_error($connection);
    
}

/* login function check mysqli_num_rows()*/

/*
$query_select = "SELECT * FROM admin";

$run_querry=$connection->query($query_select);

//$result = mysqli_fetch_row($run_querry);

while($result = mysqli_fetch_assoc($run_querry))
{
    echo $result['name'];
};*/




//$run_querry=$connection->query($query_select);




    
mysqli_close($connection);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
    <a href="tables.php">tables.php</a>
</body>
</html>