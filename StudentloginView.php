<?php
session_start();
include('dbconnection.php');

$id=$_SESSION['student_id'];
$query = "SELECT * FROM `student_info` WHERE student_id='$id'";
    
$run = $connection->query($query);
     
$result = mysqli_fetch_assoc($run);

?>
<!DOCTYPE html>
<html>
<head>
	<title>studentview</title>
	<style type="text/css">
		body{
			background-image:url("Studentimage.jpg");
			background-repeat: repeat;	}
		header {
			height: 60px;
			padding-top: 10px;
			padding-left: 50px;
	        border-bottom: 1px solid gray;
          	background-color: silver;
          	}
		.options {
			float: left;
			height: 800px;
	        width: 300px;
	        margin-top: 25px;
            margin-left: 20px;
            border: 1px solid grey;
            padding: 10px;
            background-color: silver;
            text-align: left;
           }
         .secbox {
         	height: 800px;
		    width: 860px;
	        margin-top: 25px;
            margin-left: 350px;
            border: 1px solid grey;
            padding: 50px;
            background-color: #F1F1F1;
           }
          footer {
        	height: 50px;
          	border-bottom: 1px solid gray ;
	        background-color: #F1F1f1;
	        border-color: black;
	        padding-top: 1px;:  
          }
          .options li {
          	margin-left: 0px;
          }
          .options a {
          		
	font-weight: bold;
	color:blue;
	text-decoration: none;
          }
          .options a:hover {
          	color: #A32824;
          }
          .instructions {
          	color: black;
          	font-size: 25px;
          	font-family: courier;
          }
	</style>
</head>
<body>
	<header>
		<h1 style="color: red; font-family: arial" ><b>Student View</b></h1>
	</header>
	<nav>
		<div class="options">
		<ul>
			<li><h3><a href="MyDetails.php">MY DATABASE DETAILS</a></h3></li>	
            <li><h3><a href="MyAttain.php">MY ATTENDECE DETAILS</a></h3></li> 
            <li><h3><a href="Holidays.php">HOLIDAYS DETAILS</a></h3></li>
            <li><h3><a href="Notice.php">NOTICE DETAILS</a></h3></li>
            <li><h3><a href="Teachers.php">FACULTY AND STAFF DETAILS</a></h3></li>
            <li><h3><a href="StudentPassChange.php">CHANGE YOUR PASSWORD</a></h3></li>
            <li><h3><a href="index.php">LOGOUT</a></h3></li>
		</ul>
		</div>
	 
    </nav>
    <section>
		<div class="secbox">
            <h1 style="font-size: 30px"><b><i> Instructions:</i></b></h1><br>
				<div class="instructions">
					<ul>
						<li>My database details will show all your details</li>
						<li>My attendence datils will show your attendence</li>
						<li>Holidays details will display all the hoilidays of the calender year</li>
						<li>Teaching faculty, non teaching staff information will be disolayed in faculty and staff details</li>
						<li>Notice details will contain all the notices and the results. yo have to download the file in order to view it</li>
						<li>Options for changing your password are available in change your password</li>
					</ul>
				</div>

		</div>
		
	</section>
	
    <br><br>
    <footer >
    	<div>
           <p style="color: red">Made by google</p>
        </div>
    </footer>

</body>
</html>