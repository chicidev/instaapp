<?php
ob_start();
	session_start();
	include('konek.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
    
    <?php
    include "header.php"
    ?>
    
<style>
        .button{
            background-color:aquamarine;
            color: black;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%
        }
        .backbtn,.signbtn{
            float: left;
            width: 50%;
        }
        .buttonnn:after{
            
            content: "";
            clear: both;
            display: table;
            
        }
    </style>
    <!--script
    document.getElementById("ttl").innerHTML=new Date("yyyy-mm-dd");
    /script>-->
<title>PAPDA</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7 ">
	<div id="main-wrapper">
	<center><h2>REGISTRASI</h2></center>
		<form action="register.php" method="post">
			<div class="imgcontainer">
				
			</div>
			<div class="inner_container">
				<table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">
				<tr>
				<td height="27" align="right" valign="middle">Username</td>
                <td align="center" valign="top">:</td>
				 <td valign="middle">
				<input type="text" placeholder="Enter Username" name="username" required></td></tr>
               
                <td height="27" align="right" valign="middle">Tanggal</td>
                <td align="center" valign="top">:</td>
				 <td valign="middle">
				<input type="date" placeholder="yyyy-mm-dd" name="ttl" required></td></tr>
                
                <td height="27" align="right" valign="middle">Alamat</td>
                <td align="center" valign="top">:</td>
				 <td valign="middle">
				<input type="text" placeholder="Enter Alamat" name="alamat" required></td></tr>
               
                <td height="27" align="right" valign="middle">Telepon</td>
                <td align="center" valign="top">:</td>
				 <td valign="middle">
				<input type="text" placeholder="Enter Telepon" name="no_hp" required></td></tr>
                
                <td height="27" align="right" valign="middle">Email</td>
                <td align="center" valign="top">:</td>
				 <td valign="middle">
				<input type="text" placeholder="Enter Email" name="email" required></td></tr>
                
                <td height="27" align="right" valign="middle">Jenis Kelamin</td>
                <td align="center" valign="top">:</td>
				 <td valign="middle">
                	<select name="jeniskelamin">
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option></select></label></td></tr>
                
				<td height="27" align="right" valign="middle">Password</td>
                <td align="center" valign="top">:</td>
				 <td valign="middle">
				<input type="password" placeholder="Enter Password" name="password" required></td></tr>
              
				<td height="27" align="right" valign="middle">Confrim Password</td>
                <td align="center" valign="top">:</td>
				 <td valign="middle">
				<input type="password" placeholder="Enter Password" name="cpassword" required></td></tr>
              
              <tr>
    <td height="42"> </td>
    <td> </td>
    <div class="buttonnn">
    <td><input type="submit" name="register" value="Sign Up">
   <a href="login.php"><button type="button" >Login</button></a></td>
  	</tr>
   	</div>
   		</div>
		</table>
		</form>
		
		<?php
			if(isset($_POST['register']))
			{
				$username=$_POST['username'];
                $ttl=$_POST['ttl'];
                $alamat=$_POST['alamat'];
                $no_hp=$_POST['no_hp'];
                $email=$_POST['email'];
                $jeniskelamin=$_POST['jeniskelamin'];
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
			
				
				if($password==$cpassword)
				{
					$query = "select * from pengguna where username='$username'";
					//echo $query;
				$query_run = mysqli_query($konek,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
                           $query = 'insert into pengguna (username,ttl,alamat,no_hp,email,password,jeniskelamin) values ("'.$username.'","'.$ttl.'","'.$alamat.'","'.$no_hp.'","'.$email.'","'.$password.'","'.$jeniskelamin.'")';
							$query_run = mysqli_query($konek,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								$_SESSION['username'] = $username;
                                $_SESSION['ttl'] = $ttl;
                                $_SESSION['alamat'] = $alamat;
                                $_SESSION['no_hp'] = $no_hp;
                                $_SESSION['email'] = $email;
                                $_SESSION['jeniskelamin'] = $jeniskelamin;
								$_SESSION['password'] = $password;
								
								header( "Location: login.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
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