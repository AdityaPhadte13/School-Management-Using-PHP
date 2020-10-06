<?php
$server = "localhost";
$username = "root";
$password= "";
$database ="school_management";
$connection=mysqli_connect($server,$username,$password,$database);

if($connection)
{
    //echo "database connecton sucessfull";
}
else
{
    echo"connection failed";
    die($connection);
}



?>