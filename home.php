 <?php
ob_start();
include "cek_session.php";
    error_reporting(E_ALL^E_NOTICE);
    include "konek.php";
?>
<!-- hmtl 5 -->
<!DOCTYPE html> 
<html lang="en">
<title>PAPDA</title>
<head><meta charset="utf-8" />
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
        
        
        
<br><br><br>
	<title>Upload Gambar | <?php echo $_GET['aksi'] ?></title>
    <style>
        
     div.gallery {
        border: 0px solid black;
    } /* menambahkan garis (pinggir) border pada gambar */

    div.gallery:hover {
        border: 0px solid #777;
    }/* menambahkan garis (pinggir) border pada gambar dg warna tertentu  */

    div.gallery img {
        width: 100%;
        height: auto;
    }/* ukuran galeri  */

    * {
        box-sizing: border-box;
    }/* table2 gambar  */

    .responsive {
        padding: 0 6px;
        float: left;
        width: 24.99999%;
    }/*  ukuran gambar */
    
    
    </style>
<body style="background-color:#bdc3c7">
	<div align="center" id="HEADER"> <!-- header untuk judul -->
        <br><br>
		<h2>POSTINGAN</h2>
				
	</div>
	<div id="content" align="center">
	
					<table align="left">
                            <tr>
                                <td colspan="4">
                                    <a href=tambah.php> <button type="button">+ Tambah Gambar</button></a>
                                </td>
                                
                            </tr>
                            
                            <?php 
                            $id_posting=$_REQUEST['id_posting'];
                            $image =$_REQUEST['image'];
                            $caption=$_REQUEST['caption'];
                            
                                // menampilkan data yang ada di database
                                $conn=mysqli_connect("localhost","root","");
                                $db=mysqli_select_db( $conn, "instaapp");
                                $query_tampil = mysqli_query($conn,"select * from postingan "); // deklarasi query tampil untuk mnyeleksi keseluruhan field dalam table
                                
                                while ( $fetch_tampil = mysqli_fetch_array($query_tampil)) { // mengambil value dari database dengan array
                                
                                    ?>
                                        <tr>
                                            <td>
                                            <div class="responsive">
                                          <div class="gallery">
                                              <br><br>
                                            <a target="_blank" src="dir_gambar/<?php echo $fetch_tampil[2] ?>">
                                              <img src="dir_gambar/<?php echo $fetch_tampil[2]; ?>" alt="maaf gambar tidak ada" style="width: 300;height: 300">
                                            </a>
                                            <td width="50" ><?php echo $fetch_tampil[1] ?></td>  
                                          
                                    <td > <a href="hapus.php?id_posting=<?php echo $fetch_tampil[0]; ?>"> Hapus</a></td>
                                                </div>
                                        </div>
                                            </td>
                                   
									<?php
								}
							?>
    
						</table>
                </div>
            </body>
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