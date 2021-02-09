<?php
	
	error_reporting(E_ALL^E_NOTICE);
	session_start();
	require_once('konek.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
<meta charset="UTF-8">
	<title>Upload Gambar | <?php echo $_GET['aksi'] ?></title>
    <style>
.button {
  padding: 15px 25px;

  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: white;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
    
</head>
<body style="text-align:center">
	<div id="main-wrapper">
		<h2>HOME PAGE</h2>
        
        
        <img src="images/Welcome.jpg" height="500" width="500">
        <br>
        <br>
        <a href="home.php"><button class="button"> Welcome <?php echo $_SESSION['username']; ?></button></a>
		</div>
	
    
</body>
</html>