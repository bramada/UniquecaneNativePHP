<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="img/ico.png">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alef&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flags.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/lightbox.css">
	  <link rel="stylesheet" media="screen, projection" href="css/drift-basic.css">

    <title>UNIQUECANE | <?php echo $title;?> </title>
  </head>
  <body>


<!-- NAVIGATION -->
    <nav class="navbar fixed-top navbar-expand-lg shadow my-0 py-0" id="nav">
      <div class="container">
        <a class="navbar-brand my-0 py-2" href="index">
          <img src="img/logo-2.png" style="height:70px;" class="d-inline-block align-mid" id="logo" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler border rounded-0" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars" style="font-size:33px;"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-end" id="navbarNavAltMarkup">
          <div class="navbar-nav" id="navbar">
            <div class="nav-item">  
              <a class="nav-link <?php echo !isset($_GET['page'])? 'active' :''?>" href="index">Home</a>
            </div>
            <div class="nav-item">  
              <a class="nav-link <?php  if(isset($_GET['page'])) { if($_GET['page']=='about'){ echo 'active'; }else{ echo ''; }}  ?>" href="index?page=about">About</a>
            </div>
            <div class="nav-item dropdown">     
              <a class="nav-item nav-link 
                <?php 
                $p=$_GET['page'];
                if(isset($p)) { 
                  if($p=='living'|$p=='dining'|$p=='occasional'|$p=='barstool'|$p=='cabinet'|$p=='console'|$p=='basket'|$p=='decor'|$p=='outdoor'|$p=='accessory'){ 
                    echo 'active'; //tambah class active saat tiap page product dibuka
                  }else{ 
                    echo ''; 
                  }
                } ?>" 
              href="#" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products <span class="fa fa-caret-down" style="font-size:14px;"></span></a>
              <div class="dropdown-menu dropdown-menu-center border-0 rounded-0 mt-2" aria-labelledby="dropdown10">
                <div class="bayangan-dropdown">
                  <a class="dropdown-item py-2" href="index?page=living">Living</a>
                  <a class="dropdown-item py-2" href="index?page=dining">Dining</a>
                  <a class="dropdown-item py-2" href="index?page=occasional">Occasional</a>
                  <a class="dropdown-item py-2" href="index?page=barstool">Barstool & Counterstools</a>
                  <a class="dropdown-item py-2" href="index?page=cabinet">Cabinets & Storage</a>
                  <a class="dropdown-item py-2" href="index?page=console">Console Table</a>
                  <a class="dropdown-item py-2" href="index?page=basket">Baskets</a>
                  <a class="dropdown-item py-2" href="index?page=decor">Home Decor</a>
                  <a class="dropdown-item py-2" href="index?page=outdoor">Outdoors</a>
                  <a class="dropdown-item py-2" href="index?page=accessory">Accessories</a>
                </div>
              </div>
            </div> 
            <div class="nav-item">  
              <a class="nav-link <?php if(isset($_GET['page'])) { if($_GET['page']=='gallery'){ echo 'active'; }else{ echo ''; }} ?>" href="index?page=gallery">Gallery</a>
            </div>  
            <div class="nav-item">  
              <a class="nav-link <?php if(isset($_GET['page'])) { if($_GET['page']=='faq'){ echo 'active'; }else{ echo ''; }} ?>" href="index?page=faq">FAQ</a>
            </div>
            <div class="nav-item">  
              <a class="nav-link <?php if(isset($_GET['page'])) { if($_GET['page']=='contact'){ echo 'active'; }else{ echo ''; }} ?>" href="index?page=contact">Contact Us</a>
            </div>

            <div class="nav-item">  
              <div id="google_translate_element"></div>
            </div>

          </div> 

          <form action="SearchResult" method="get" name="fSearch" class="form-inline my-2 my-lg-0" id="mySeIn" style="display:none; width:70%;">
            <div class="input-group input-group-lg rounded-0">
              <input id="inSearch" name="cari" class="form-control fcari border-0 rounded-0" type="text" placeholder=" Type to search.." aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-light cari border-0 rounded-0 mr-0" type="submit"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form> 

          <a class="cari m-2 p-2" href="##" onclick="mySearch()"><span id="icSearch" class="fa fa-search" style="font-size:18px;"></span></a>

        </div>
      </div>
    </nav>
<!-- END NAVIGATION -->

<!-- CONTENT -->
    <div class="content mt-2 pt-1">
      <?php
        require_once $content;
      ?>  
    </div>
<!-- END CONTENT -->

<!-- FOOTER -->
    <footer id="footer" class="footer py-1">
      <div class="container">
        <div class="row">
          <div class="col-8 mt-3">
            <p>Copyright 2020 © Uniquecane | Rattan, Wooden and Metal Furniture Manufacturer</p>
          </div>
          <div class="col-4 mt-1">
            <div class="row justify-content-end">
            <a class="btn btn-primary rounded-circle sosmed"><span class="fa fa-facebook"></span></a>
            <a class="btn btn-danger rounded-circle sosmed"><span class="fa fa-instagram"></span></a>
            <a class="btn btn-info rounded-circle sosmed"><span class="fa fa-twitter"></span></a>
            <a class="btn btn-danger rounded-circle sosmed"><span class="fa fa-pinterest"></span></a>
            </div>
          </div>
        </div>
      </div>      
      <button onclick="topFunction()" id="myBtnSc" title="Go to top"><span class="fa fa-caret-up" style="font-size:20px;"></span></button>
    </footer>
<!-- END FOOTER -->

<!-- SCRIPT -->
    <script src="js/aos.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
	  <script src="js/drift.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/javascript.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
<!-- END SCRIPT -->

  </body>
</html>