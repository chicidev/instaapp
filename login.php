<?php

ob_start();
session_start();
require_once('konek.php');
	//phpinfo();
?>


<!DOCTYPE html>
<html>
<head>
    <?php
include "header.php";
?>
    
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
	<div id="main-wrapper">
	<center><h2>LOGIN</h2></center>
			<div class="imgcontainer">

			</div>
		<form action="login.php" method="post">
		
			<center> <div class="inner_container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
                <br>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
                <br>
				<button class="login_button" name="login" type="submit">LOGIN</button>
				<a href="register.php"><button type="button" class="register_btn">REGISTRASI</button></a>
			</div></center>
		</form>
		
		<?php
        include('konek.php');
			if(isset($_POST['login']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				$query = "select * from pengguna where username='$username' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($konek,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					
					header( "Location: logout.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("Data yang ada masukkan tidak valid. periksa username dan password anda")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
			}
		?>
		
	</div>
</body>
</html>
<?php
    
    ob_end_flush();
    ?>