<?php
session_start();

if(isset($_GET['lang']) && !empty($_GET['lang'])){
	$_SESSION['lang'] = $_GET['lang'];

	if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
		echo "<script type='text/javascript'>location.reload();</script>";
	}
}

if(isset($_SESSION['lang'])){
	include "lang/lang_".$_SESSION['lang'].".php";
} else {
	include "lang/lang_en.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="style/bootstrap4/js/bootstrap.min.js"></script>
</head>
<body class="bg-lalaku">

    <div class="container-fluid px-0">

			<div class="row">
				<div class="col-6">
					<!-- navbar -->
				   <nav class="navbar fixed-top">
							   <div class="logo">
								   <img src="style/logo.svg" width="70" height="70" alt="logo" id="logo">
							   </div>
			
							<button type="button" class="btn burger">	
								<div class="line1"></div>
								<div class="line2"></div>
								<div class="line3"></div>
							</button>
					</nav>
					<!-- end navbar -->
				</div>

				<div class="col-6">
					<!-- burger menu -->
								<ul class="main-nav">
									<!-- <div class="row mr-0"> -->
										<div class="my-4 px-0 logo">
											<img src="style/logo.svg" alt="logo">
										</div>
									<!-- </div> -->
					
									<li class="nav-links">
									<a href="#" class="nested-links"><?= _PRODUCT ?></a>
									<ul class="nested-nav mt-4">
										<li>
											<a href="#" class="nested-links">LALAKU PANTS</a>
										</li>
										<li>
											<a href="#" class="nested-links">LALAKU DIAPERS</a>
										</li>
										<li>
											<a href="#" class="nested-links">LALAKU MAMA POSTPARTUM PADS</a>
										</li>
										<li>
											<a href="#" class="nested-links">LALAKU MAMA SANITARY NAOKINS</a>
										</li>
										<li>
											<a href="#" class="nested-links">LALAKU KN 95 MASKS</a>
										</li>
									</ul>
									</li>
									<li class="nav-links">
									<a href="#" class="nested-links"><?= _CONTACT ?></a>
									</li>
									<li class="nav-links">
									<a href="#" class="nested-links"><?= _ABOUT ?></a>
									</li>
								</ul>
				   <!-- end burger menu -->

				</div>
			</div>
        </div>
        
        
    </div>
    <div class="container pt-120">
        <div class="col-12 text-center">
            <h1 class="contact-main-title">WE'RE HERE TO HELP</h1>
        </div>
    
        <div class="row mt-contact text-center">
        
            <div class="col-lg-3">
                <h3 class="contact-title">call</h3>
                <hr>
                <p>+998 90 000 00 00</p>
                <p>+998 90 000 00 00</p>
                <p>+998 90 000 00 00</p>
            </div>
            <div class="col-lg-3">
                <h3 class="contact-title mt-4 mt-lg-0">e-mail</h3>
                <hr>
                <p>info@sofgigienik.com</p>
                <p>import@sofgigienik.com</p>
                <p>export@sofgigienik.com</p>
            </div>
            <div class="col-lg-3">
                <h3 class="contact-title mt-4 mt-lg-0">address</h3>
                <hr>
                <p>48 Khirmontepa 2-th Passage
Tashkent, Uzbekistan</p>
            </div>
            <div class="col-lg-3">
                <h3 class="contact-title mt-4 mt-lg-0">web</h3>
                <hr>
                <p>@lalaku.uzbekistan</p>
            </div>
        </div>    
    </div>
<form action="">
    <div class="container mt-contact">
        <div class="row">
            <div class="col-lg-12">
                <input type="text" placeholder="E-mail:" class="form-control input-border">
            </div>
            <div class="col-lg-12 mt-4">
                <textarea name="comment" class="form-control input-border" placeholder="Text" id="comment" cols="30" rows="10"></textarea>
            </div>
        </div>

            <div class="text-center py-5">
                <button type="submit" class="btn btn-dark contact-submit">Submit</button>
            </div>
    </div>

</form>

<script src="style/js/index.js"></script>
</body>
</html>