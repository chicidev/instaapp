<?php
session_start();

include "cek_session.php";
?>
<!doctype html>
<html lang="en">
<title>InstaApp</title>
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
              <a class="navbar-brand navbar-brand-logo" href="http://www.creative-tim.com">
                   
                    <img src="images/Hoplogo.png" width="180px" height="90px">
                    
                    <div class="brand"> </div>
              </a>
            </div>
			
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			
			
		
              <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php" class="hidden-xs">
                            <i class="pe-7s-home"></i>
                            <p>Home</p>
                        </a>
                    </li>

                    <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="pe-7s-study"></i>
                                <p>Pengelolaan<b class="caret"></b></p>
                            </a>
                          <ul class="dropdown-menu">
                            <li><a href="#" onclick='myFunction()'>Pengeluaran</a></li>
                            <li><a href="#" onclick='myFunction()'>Pendapatan</a></li>
                            <li><a href="#" onclick='myFunction()'>Tingkat kesejahteraan</a></li>
								<script>
function myFunction() {
    alert("login dulu");
}
</script>
                          </ul>
                    </li>

                    <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="pe-7s-disk"></i>
                                <p>Arsip <b class="caret"></b></p>
                            </a>
                          <ul class="dropdown-menu">
                            <li><a href="#" onclick='myFunction()'>Riwayat Pertanian</a></li>
                            <li><a href="#"onclick='myFunction()'>Penyuluhan</a></li>
                            <li><a href="#"onclick='myFunction()'>Laporan</a></li>
								<script>
function myFunction() {
    alert("login dulu");
}
</script>
                          </ul>
                    </li>

                    <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="pe-7s-disk"></i>
                                <p>Pupuk <b class="caret"></b></p>
                            </a>
                          <ul class="dropdown-menu">
                            <li><a href="#" onclick='myFunction()'>Info Tanaman</a></li>
                            <li><a href="#"onclick='myFunction()'>Info Pupuk</a></li>
                            <li><a href="#"onclick='myFunction()'>Info Penjual</a></li>
                <script>
function myFunction() {
    alert("login dulu");
}
</script>
                          </ul>
                    </li>

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
                                <p>About Us <b class="label"></b></p>
                            </a>
							
                    </li>
                    <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="pe-7s-user"></i>
                                <p>Account<b class="caret"></b></p>
                            </a>
                          <ul class="dropdown-menu">
                            <li><!--<a href="edit.php">edit</a>  -->
                              <a href="register.php" >Register</a>
                              </li>
							<li><a href="awal.php">Log-in</a></li>
                          </ul>
                    </li>
               </ul>
              
            </div>
          </div>
        </nav>
       <div class="blurred-container">
            <div class="img-src" style="background-image: url('images/bg.jpg')" size:"cover"></div>;
        </div>
    </div>
</div> 
</body>

<body><link href="style.css" rel="stylesheet" />
</section>
</div><style>
#wrapper-white{overflow:hidden;padding:11% 0}
.content-home-1  {overflow:hidden;width:1024px;margin:0 auto 20px auto}
.content-home-1-left-thumb {width:auto;height:100%}
.content-home-1-left-image{overflow:hidden;float:left;position:relative;width:510px;height:433px;margin:1px}
.content-home-1-left-text a{position:absolute;bottom:0;left:0;width:100%;color:#ffffff;display:block;background:linear-gradient(to bottom, rgba(0, 0, 0, 0) 10%, rgba(0, 0, 0, 0.9) 95%);background:-moz-linear-gradient(top, rgba(0, 0, 0, 0) 10%, rgba(0, 0, 0, 0.9) 90%);background:-webkit-linear-gradient(top, rgba(0, 0, 0, 0) 10%, rgba(0, 0, 0, 0.9) 90%)}
.content-home-1-left-text a:hover{text-decoration:none;display:block;background-color:rgba(0, 0, 0, 0.5);position:absolute;bottom:0;left:0;top:0;width:100%;}
.content-home-1-left-text h1{clear:both;padding:10px 30px;font-size:1.4em;letter-spacing:-1px;color:#87ffa9}
.content-home-1-left-text h3{clear:both;float:left;width:auto;padding:10px 30px;font-size:1em;letter-spacing:-1px;text-transform:uppercase;background:#e33e2b;color:#ffffff}
.content-home-1-left-text p {font-size:1em;font-weight:300;padding:0 30px 30px 30px}
.content-home-1-right-thumb {width:100%;height:auto}
.content-home-1-right-image{overflow:hidden;float:left;position:relative;width:254px;height:143px;margin:1px}
.content-home-1-right-text a{position:absolute;bottom:0;left:0;width:100%;color:#ffffff;display:block;background:linear-gradient(to bottom, rgba(0, 0, 0, 0) 5%, rgba(0, 0, 0, 0.7) 95%);background:-moz-linear-gradient(top, rgba(0, 0, 0, 0) 5%, rgba(0, 0, 0, 0.7) 90%);background:-webkit-linear-gradient(top, rgba(0, 0, 0, 0) 5%, rgba(0, 0, 0, 0.7) 90%)}
.content-home-1-right-text a:hover{text-decoration:none;display:block;background-color:rgba(0, 0, 0, 0.6);position:absolute;bottom:0;left:0;top:0;width:100%;}
.content-home-1-right-text h2{clear:both;padding:10px 15px 15px 15px;font-size:1em;line-height:1.2em;color:#ffffff}
.content-home-1-right-text h3{clear:both;float:left;width:auto;padding:5px 15px;font-size:0.6em;text-transform:uppercase;background:#399e47;color:#ffffff}
.adshome{width:1024px;height:auto;margin:0 auto}
#wrapper-green{overflow:hidden;padding:2.5% 0;background:#eaf7ec}
.content-home-2{overflow:hidden;width:1064px;margin:0 auto}
.content-home-2 h2 {font-size:1em;text-align:center;margin:10px 0;}
.content-home-2 h2  a{font-weight:normal;color:#333333}
.content-home-2 h2  a:hover{text-decoration:none;color:#399e47}
.content-home-2 h3 {font-size:1.2em;text-align:center;letter-spacing:-1px;color:#399e47;margin:0 0 20px 0}
.content-home-2 img {width:100%;height:auto}
.content-home-2-section-left{float:left;width:28%;margin:0 2.5%}
.content-home-2-section-middle{float:left;width:28%;padding:0 2.5%;border-left:1px solid #c4ecca;border-right:1px solid #c4ecca}
.content-home-2-section-right{float:left;width:28%;margin:0 2.5%}
.content-home-2-section-box{width:100%;height:220px;padding:0 0 10px 0;margin:0 0 20px 0;border-bottom:1px dotted #c4ecca}
.content-home-2-read-index {font-size:0.8em;text-align:center}
.content-home-2-read-index a {display:block;font-weight:bold;width:120px;background:#999999;color:#ffffff;padding:3px 0;margin:0 auto;-moz-border-radius:5px;border-radius:5px}
.content-home-2-read-index a:hover {display:block;color:#ffffff;background:#399e47;text-decoration:none;width:120px;padding:3px 0;margin:0 auto;-moz-border-radius:5px;border-radius:5px}
#wrapper-video{overflow:hidden;background:#ffffff;padding:2.5% 0}
.content-home-3{overflow:hidden;width:1024px;margin:0 auto}
.content-home-3 img{width:100%;height:auto;display:block}
.content-home-3 h5 {font-size:1.2em;letter-spacing:-1px;color:#399e47;margin:0 0 0 1%}
.content-home-3-image{overflow:hidden;float:left;position:relative;width:31%;height:auto;margin:1%}
.content-home-3-image a{color:#ffffff}
.content-home-3-image a:hover{color:#CD0000;text-decoration:none}
.content-home-3-bg{position:absolute;display:block;top:0;bottom:0;left:0;width:100%;background: rgba(0, 0, 0, 0.5)}
.content-home-3-text{position:absolute;display:block;bottom:0;left:0;width:90%;padding:5%}
.content-home-3-text h2{clear:both;font-size:1.1em;font-weight:normal;margin:0 0 10px 0;color:#ffffff}
.content-home-3-text h3{font-size:0.7em;font-weight:normal;font-style:italic;color:#dddddd;margin:0 0 5px 0}
.content-home-3-text-play{font-size:0.6em;float:left;width:auto;background:#CD0000;color:#ffffff;padding:3px 10px;margin:0 0 5px 0;-moz-border-radius:5px;border-radius:5px}
#wrapper-black{overflow:hidden;padding:5% 0;background:#ffffff}
.content-home-4{overflow:hidden;width:1024px;margin: 0 auto}
.content-home-4 h2{font-size:1em;line-height:1.2em;margin:0 0 10px 0}
.content-home-4 h2 a{font-weight:normal;color:#000000}
.content-home-4 h3{font-size:1em;margin: 0 0 10px 0;color:#c03d0c}
.content-home-4 ul li{margin:0 20px;color:#c03d0c}
.content-home-4-left{overflow:hidden;float:left;width:30%;margin:0 1.5%}
.content-home-4-right{overflow:hidden;float:right;width:31%;margin:0}
#wrapper-sosmed{overflow:hidden;padding:5% 0;background:#399e47}
.content-home-4-box{float:left;width:300px;height:350px;margin:20px;background:#eeeeee}
/* Responsive */
@media screen and (max-width:1278px){
#wrapper-white{padding:5%}
.content-home-1{width:100%;margin:0 auto}
.content-home-1-left-text h1{font-size:3em}
.content-home-1-left-text h3{font-size:1.2em}
.content-home-1-left-text p {font-size:1.2em}
.content-home-1-left-thumb {width:100%;height:auto}
.content-home-1-left-image{width:99.4%;height:auto;margin:0.3%}
.content-home-1-left-text{margin:-7px 0 0 0}
.content-home-1-right-thumb {width:100%;height:auto}
.content-home-1-right-image{width:32.73%;height:auto;margin:0.3%}
.content-home-1-right-text{margin:-7px 0 0 0}
.adshome{width:100%}
}
@media screen and (max-width:1100px){
#wrapper-grey,#wrapper-video,#wrapper-black{padding:5%}
.content-home-2,.content-home-3,.content-home-4{width:100%}
}
@media screen and (max-width:890px){
.content-home-1-left-text h1{font-size:1em}
.content-home-1-left-text h3 {font-size:1em}
.content-home-1-left-text p {font-size:1em}
.content-home-2-section-box{height:190px}
.content-home-3-image{width:48%;margin:1%}
}
@media screen and (max-width:680px){
.content-home-1-left-image{width:99.5%;margin:0 0.25% 0.25% 0.25%}
.content-home-1-left-text h1{font-size:1.2em;letter-spacing:-1px;padding:10px 15px 0 15px;}
.content-home-1-left-text h3{padding:5px 15px;font-size:0.8em;letter-spacing:0;}
.content-home-1-left-text p {font-size:1em;line-height:1.2em;padding:0 15px 15px 15px}
.content-home-1-right-image{width:49.5%;margin:0.25%}
.content-home-2-section-box{height:170px}
.content-home-4-right,.content-home-4-left{width:100%;margin:0 0 20px 0}
}
@media screen and (max-width:480px){
.content-home-1-left-image{width:100%;margin:0 0 5% 0}
.content-home-1-left-text h1{font-size:0.9em}
.content-home-1-left-text h3{font-size:0.6em}
.content-home-1-left-text p {font-size:0.8em}
.content-home-1-right-image{width:100%;margin:0 0 5% 0}
.content-home-2-section-left{width:90%;height:auto;margin:20px 5%}
.content-home-2-section-middle{width:90%;height:auto;padding:0;margin:20px 5%;border:none}
.content-home-2-section-right{width:90%;height:auto;margin:20px 5%}
.content-home-2-section-box{height:auto}
.content-home-3 h5 {margin:0 0 10px 0}
.content-home-3-image{width:100%;height:auto;padding:0;margin:0 0 20px 0}
}
@media screen and (max-width:360px){
.content-home-1-left-text h1{padding:10px 15px 15px 15px}
.content-home-1-left-text p {display:none}
}
</style>
<div id="wrapper-white">
  <div class="content-home-1">
  <div class="content-home-1-left">
              
 
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
	
	<script src="js/ct-navbar.js"></script>
  <div class="container">
  <div id="modal" class="popupContainer" style="display:none;">
    <header class="popupHeader">
      <span class="header_title">Masuk</span>
      <span class="modal_close"><i class="fa fa-times"></i></span>
    </header>
    
    <section class="popupBody">
      <div><img src="images/hoplogo.png" width="100%" height="100px"></div>

        <div class="centeredText">
          <span>LOGIN / DAFTAR</span>
        </div>

        <div class="action_btns">
          <div class="one_half"><a href="awal.php" class="btn">Masuk</a></div>
          <div class="one_half last"><a href="register.php" class="btn">Daftar</a></div>
        </div>
      </section>
      </div>
      </div>

<script type="text/javascript">
  $("#modal_trigger").leanModal({top : 150, overlay : 0.6, closeButton: ".modal_close" });

  $(function(){
    // Calling Login Form
    $("#login_form").click(function(){
      $(".social_login").hide();
      $(".user_login").show();
      return false;
    });

    // Calling Register Form
    $("#register_form").click(function(){
      $(".social_login").hide();
      $(".user_register").show();
      $(".header_title").text('Register');
      return false;
    });

    // Going back to Social Forms
    $(".back_btn").click(function(){
      $(".user_login").hide();
      $(".user_register").hide();
      $(".social_login").show();
      $(".header_title").text('Login');
      return false;
    });

  })
</script>
<footer class="text-center">
<div class="main">
    <div class="navbar-ct-blue" style="width:100%; padding-top:90px">
      <div class="footer-above">
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-4">
              <h3>Location</h3>
              <p>POLITEKNIK NEGERI JEMBER
                <br>JLN. MASTRIP NO.3, JEMBER</p>
            </div>
            <div class="footer-col col-md-4">
              <h3>Around the Web</h3>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="https://www.facebook.com/">
                    <i class="fa fa-fw fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="https://www.google.com/gmail/about/#">
                    <i class="fa fa-fw fa-google-plus"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="https://twitter.com/login?lang=id">
                    <i class="fa fa-fw fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="https://www.linkedin.com/uas/login">
                    <i class="fa fa-fw fa-linkedin"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="https://dribbble.com/">
                    <i class="fa fa-fw fa-dribbble"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer-col col-md-4">
              <h3>About Freelancer</h3>
              <p>Freelance is a free to use, open source Bootstrap theme created by
                <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; Your Website 2017
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="indexawal.php?aksi=indexawal" >
        <i class="fa fa-chevron-up" ></i>
      </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Project Title</h2>
                  <hr class="star-primary">
                  <img class="img-fluid img-centered" src="img/portfolio/cabin.png" alt="">
                  <p>Use this area of the page to describe your project. The icon above is part of a free icon set by
                    <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                  <ul class="list-inline item-details">
                    <li>Client:
                      <strong>
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                      </strong>
                    </li>
                    <li>Date:
                      <strong>
                        <a href="http://startbootstrap.com">April 2014</a>
                      </strong>
                    </li>
                    <li>Service:
                      <strong>
                        <a href="http://startbootstrap.com">Web Development</a>
                      </strong>
                    </li>
                  </ul>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Project Title</h2>
                  <hr class="star-primary">
                  <img class="img-fluid img-centered" src="img/portfolio/cake.png" alt="">
                  <p>Use this area of the page to describe your project. The icon above is part of a free icon set by
                    <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                  <ul class="list-inline item-details">
                    <li>Client:
                      <strong>
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                      </strong>
                    </li>
                    <li>Date:
                      <strong>
                        <a href="http://startbootstrap.com">April 2014</a>
                      </strong>
                    </li>
                    <li>Service:
                      <strong>
                        <a href="http://startbootstrap.com">Web Development</a>
                      </strong>
                    </li>
                  </ul>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Project Title</h2>
                  <hr class="star-primary">
                  <img class="img-fluid img-centered" src="img/portfolio/circus.png" alt="">
                  <p>Use this area of the page to describe your project. The icon above is part of a free icon set by
                    <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                  <ul class="list-inline item-details">
                    <li>Client:
                      <strong>
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                      </strong>
                    </li>
                    <li>Date:
                      <strong>
                        <a href="http://startbootstrap.com">April 2014</a>
                      </strong>
                    </li>
                    <li>Service:
                      <strong>
                        <a href="http://startbootstrap.com">Web Development</a>
                      </strong>
                    </li>
                  </ul>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Project Title</h2>
                  <hr class="star-primary">
                  <img class="img-fluid img-centered" src="img/portfolio/game.png" alt="">
                  <p>Use this area of the page to describe your project. The icon above is part of a free icon set by
                    <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                  <ul class="list-inline item-details">
                    <li>Client:
                      <strong>
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                      </strong>
                    </li>
                    <li>Date:
                      <strong>
                        <a href="http://startbootstrap.com">April 2014</a>
                      </strong>
                    </li>
                    <li>Service:
                      <strong>
                        <a href="http://startbootstrap.com">Web Development</a>
                      </strong>
                    </li>
                  </ul>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Project Title</h2>
                  <hr class="star-primary">
                  <img class="img-fluid img-centered" src="img/portfolio/safe.png" alt="">
                  <p>Use this area of the page to describe your project. The icon above is part of a free icon set by
                    <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                  <ul class="list-inline item-details">
                    <li>Client:
                      <strong>
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                      </strong>
                    </li>
                    <li>Date:
                      <strong>
                        <a href="http://startbootstrap.com">April 2014</a>
                      </strong>
                    </li>
                    <li>Service:
                      <strong>
                        <a href="http://startbootstrap.com">Web Development</a>
                      </strong>
                    </li>
                  </ul>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Project Title</h2>
                  <hr class="star-primary">
                  <img class="img-fluid img-centered" src="img/portfolio/submarine.png" alt="">
                  <p>Use this area of the page to describe your project. The icon above is part of a free icon set by
                    <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                  <ul class="list-inline item-details">
                    <li>Client:
                      <strong>
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                      </strong>
                    </li>
                    <li>Date:
                      <strong>
                        <a href="http://startbootstrap.com">April 2014</a>
                      </strong>
                    </li>
                    <li>Service:
                      <strong>
                        <a href="http://startbootstrap.com">Web Development</a>
                      </strong>
                    </li>
                  </ul>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

 
	

</html>