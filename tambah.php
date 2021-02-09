 <?php
ob_start();
include "cek_session.php";
	error_reporting(E_ALL^E_NOTICE);
	include "konek.php"; // menyertakan file koneksi
?>
<html>
<head>
<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
	<link href="css/ct-navbar.css" rel="stylesheet" />  
  
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
	      <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <style>
        .fa-heart{
            color: #F74933;
        }   
        .space-100{
            height: 100px;
            display: block;
        }
        pre.prettyprint{
            background-color: #ffffff;
            border: 1px solid #999;
            margin-top: 20px;
            padding: 20px;
            text-align: left;
        }
        .atv, .str{
            color: #05AE0E;
        }
        .tag, .pln, .kwd{
             color: #3472F7;
        }
        .atn{
          color: #2C93FF;
        }
        .pln{
           color: #333;
        }
        .com{
            color: #999;
        } 
    </style>
</head>
<body>
 <div id="navbar-full">
    <div id="navbar">
        <nav class="navbar navbar-ct-blue navbar-fixed-top " role="navigation" >
          
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand navbar-brand-logo" href="">
                   
                    <img src="images/Hoplogo.png" width="180px" height="90px">
                    
                    <div class="brand"> </div>
              </a>
            </div>
			
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			
			
		
              <ul class="nav navbar-nav navbar-right">

                    <li>
                        <a href="galeriawal.php" >
                            <i class="pe-7s-portfolio">
                                <span class="label"></span>
                            </i>
                            <p>Gallery</p>
                        </a>
                    </li> 

                    <li>
                          <a href="contact.php"  >
                                <i class="pe-7s-like2"></i>
                                <p>AboutUs <b class="label"></b></p>
                            </a>
                            
                    </li>
                    <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="pe-7s-user"></i>
                                <p>Account 
                                <?php 
                                        
                            if(isset($_SESSION['username'])){
                                if($_SESSION['username'] == "kosong"){
                                    echo "<h4>login dulu! </h4>";
                                }
                                echo $_SESSION['username']; 
                            }
                                                    
                                
                            ?><b class="caret"></b></p>
                            </a>
                          <ul class="dropdown-menu">
                            <li><!--<a href="edit.php">edit</a>  -->
                              <a href="edit.php?ni=<?php echo $_SESSION['username'];?>" name="edit">edit</a>
                              </li>
                              <li><a href="galeriawal.php">Log-Out</a></li>
                          </ul>
                    </li>
                  
                </ul>
              
            </div>
          </div>
        </nav>
<br><br><br><br><br><br>
<!-- membuat form untuk Upload gambar  -->
<!-- Agar from erlihat lebih rapi saya menggunakan table  -->
<form action="aksi_simpan.php" method="post" name="fupload" enctype="multipart/form-data">
	<table border=0>
		<tr>
			<td colspan="3">
				<h4>Form Upload Gambar </h4>
				<hr>
			</td>
		</tr>
		<tr>
			<td>Caption</td>
			<td>:</td>
			<td>
				<input type="text" name="caption" id="" placeholder="masukan caption" required>
			</td>
		</tr>
		<tr>
			<td>Pilih gambar</td>
			<td>:</td>
			<td>
				<input type="file" name="image" accept="image/*" id="" required>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<input type="submit" name="simpan" value="Simpan Gambar">
				<button type="button" onclick="history.go(-1)">Batal</button>
			</td>
		</tr>
	</table>
</form>

	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/fliplightbox.min.js"></script>
	<script src="js/functions.js"></script>	
	<script type="text/javascript">$('.portfolio').flipLightBox()</script>
</html>

    <?php
    
    ob_end_flush();
    ?>
   