<?php
session_start();
session_unset();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="set.css" rel="stylesheet">
	<title>index</title>
</head>
<body>
	<header>
		<h1>A. J. De Almeida High school</h1>
	</header>
	<nav >
		<form action="student.php" method="post" >
			<div class="student_login"><br>
			<h2> <b><i> login as :</i></b></h2><br>
			<fieldset><legend style="background-color: yellow; color: red">Student</legend>
			<input type="text" name="id" placeholder="login id"  required="" autofocus><br><br>
			<input type="password" name="pass" placeholder="password" required=""><br><br>
	        <button onclick="logged in">submit</button><br>
		    </fieldset>
		    </div>
	    </form>
	</nav>
	<nav >
		<form action="admin.php" method="post">
			<div class="admin_login">
			<fieldset><legend style="background-color: yellow; color: red">admin</legend>
			<input type="text" name="login_id" placeholder="login id"required=""><br><br>
			<input type="password" name="password" placeholder="password" required=""><br><br>
	        <button onclick="logged in">submit</button><br>
		    </fieldset>
		    </div>
	    </form>
		
	</nav>
	<nav class="open">
		<h2><a href="#">about</a></h2>
		<h2><a href="history.html">history</a></h2>
	</nav>
	<section class="welcome">
		<about>
		<h3 style="color: red; text-align: center; font-weight: bold; font-size: 2em">greetings</h3><br>
		A. J. de Almeida High School is centrally located near Ponda Bus Stand. For more than hundred years this school is known for its curricular as well as co-curricular achievements. The students in and around Ponda are attracted towards this school for their all-round development. We in this school not only impart quality education but also strive to make them good citizens of this country. Due to the hard work of the students and dedicated teachers, students have brought laurels to the school for which they are timely rewarded. We are very proud that our alumnae are well employed & are on good position not only in India but across the globe.
		</about>
		<br><br><br>
	</section>
	<footer>
		<p>contact us at</p>
		<a href="#">gec web development@gmail.com</a>
	</footer>

</body>
</html>