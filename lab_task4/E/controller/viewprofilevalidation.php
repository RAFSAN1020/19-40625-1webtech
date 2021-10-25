<?php 

session_start();

if (isset($_SESSION['uname'])) {
	echo "<h1> Welcome ".$_SESSION['uname']."</h1>";
	echo "<h2>Profile</h2>";
	echo "<br><a href='editprofileload.php'>View Profile</a>";
	echo "<br><a href='editprofilestore.php'>Edit Profile</a>";
	echo "<br><a href='welcome.php'>back to welcome</a>";
}

else{
	header("location:login.php");
}

 ?>