<?php 


session_start();

if (isset($_SESSION['uname'])) {
	echo "<h1> Welcome ".$_SESSION['uname']."</h1>";
	echo "<a href='dashboard.php'>Dashboard</a><br>";
	echo "<a href='viewprofile.php'>View Profile</a><br>";
	echo "<a href='editprofile.php'>Edit Profile</a><br>";
	echo "<a href='changeprofilepicture.php'>Change Profile Picture</a><br>";
	echo "<a href='changepassword.php'>Change Password</a><br>";
	echo "<br><a href='logout.php'>Logout</a><br>";

}
else{
		header("location:login.php");
		echo "<script>location.href='login.php'</script>";
	}

 ?>