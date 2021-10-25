<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		require "head.php";
		require "../controller/passwordvalidation.php";
 	?>
	<form>
		<table>
			<tr>
				<td>
					Current Password :
				</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td>
					New Password :
				</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td>
					Retype New Password :
				</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
		</table>
		<hr size="8" width="25%" color= "gray" text align="left">
		<input type="submit" name="submit" value="submit">
	</form>
	<?php 
		echo $password;
		echo "<br>";
		echo $cpassword;
		echo "<br>";
		echo $npassword;

	 ?>
</body>
</html>