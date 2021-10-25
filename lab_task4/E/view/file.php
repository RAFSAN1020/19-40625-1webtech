<!DOCTYPE html>
<html>
<body>
	<?php 
		require "head.php";
		require "../controller/upload.php";
	 ?>

<form action="upload.php" method="post" enctype="multipart/form-data">
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Submit" name="submit">
</form>

</body>
</html>