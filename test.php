<?php

echo '<a href="almeida.jpg
" download>hi</a>';
$start=0;

if($_SERVER["REQUEST_METHOD"]=='POST')
{ ?>
    <a href="<?php echo $_POST['myfile'];
?>" download>hi</a> 
<?php}

if($start){
header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    

    
</body>
</html>