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

<h2>DATABASE Table</h2>

<table>
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>Admin ID</th>
    <th>PASSWORD</th>
  </tr>
  <?php
    include('dbconnection.php');
    $query = "SELECT * FROM admin";
    
    $run = $connection->query($query);
    
    while($result = mysqli_fetch_assoc($run))
    {
    
    ?>
  <tr>
     <td><?php echo $result['id'] ?></td>
     <td><?php echo $result['name'] ?></td>
     <td><?php echo $result['admin_id'] ?></td>
     <td><?php echo $result['password'] ?></td>
  </tr>
<?php }?>

</table>

</body>
</html>