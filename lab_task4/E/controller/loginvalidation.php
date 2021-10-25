<?php 

session_start();

$username="admin";
$password="admin";

if (isset($_POST['uname'])) {
	if ($_POST['uname']==$username && $_POST['pass']==$password) {
		$_SESSION['uname'] = $username;
		header("location:welcome.php");
	}
	else{
		$msg="username or password invalid";
		echo "<script>alert('uname or pass incorrect!')</script>";
	}

}

 ?>
 <?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  

 	  if(empty($_POST["un"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      }  
      else if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
       
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(   
                     'username'     =>     $_POST["un"]   
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>LOGIN COMPLETED</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>
