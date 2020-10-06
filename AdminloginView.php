<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>adminview</title>
		<style type="text/css">
			 .options a {
                font-weight: bold;
	            color:blue;
               	text-decoration: none;
                }
            .options a:hover {
          	    color: #A32824;
                }
                .navbox{
                	height: 800px;
	        width: 400px;
	        margin-left: 20px;
            border: 1px solid grey;
            padding: 10px;
            background-color: silver;
            text-align: left;
                }
          .instructions {
          	color: black;
          	font-size: 25px;
          }
          .admin {
          	float: right;
          	height: 400px;
          	width: 880px;
          	border: 1px solid grey;
            margin-top: 0px;
          }
		</style>
</head>
<body>
	<section >
		<img class="admin" src="admin.jpg">
		
	</section >
	<nav class="navbox">
		<div  class="options">
			<p style="font-size: 20px"><strong>What will you like to do?</strong></p>
			click on the option
			<ul>
				<li><h2><a href="StudAdminId.php">STUDENT IDs AND PASSWORD DATABASE</a></h2></li>
				<li><h2><a href="StudentsAdmin.php">STUDENT DETAILS DATBASE</a></h2> </li>
				<li><h2><a href="TeachersAdmin.php">FACULTY AND STAFF DATABASE</a></h2></li>
				<li><h2><a href="HolidaysAdmin.php">HOLIDAYS DATABASE</a></h2></li>
                <li><h2><a href="NoticeAdmin.php">NOTICE DATABASE</a></h2></li>
                <li><h2><a href="AdminPassChange.php">CHANGE YOUR PASSWORD</a></h2></li>
                <li><h2><a href="index.php">LOGOUT</a></h2></li>
			</ul>
		</div>
		</nav>
</body>
</html>