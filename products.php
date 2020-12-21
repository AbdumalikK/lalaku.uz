<?php
include_once "core/lang.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LaLaKOO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<meta name="author" content="Abdumalik Karimov">
	<meta name="description" content="Sofgigienik offical sayti">
	<meta name="keywords" content="sofgigienik,lalaku,">
	<link rel="stylesheet" href="style/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/css/products.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="style/bootstrap4/js/bootstrap.min.js"></script>
	<!-- <script src="style/js/index.js"></script> -->
	<link rel="stylesheet" href="style/css/fullpage.css">
	<script src="style/js/easings.min.js"></script>
	<script src="style/js/scrolloverflow.min.js"></script>
	<script src="style/js/fullpage.js"></script>
</head>
<body>
<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
<script>
function changeLang() {
	document.getElementById('form_lang').submit();
}
</script>
<!-- checking, if lang has not choosen  -->
<?php if(!isset($_SESSION['lang'])) { ?>
	<div class="row lang-position">
		<div class="col-12">
			<form method="GET" action="" id="form_lang">
				<div class="lang-card text-center">
					<h1>WELCOME TO THE SOF HYGIENIC INTERNATIONAL WEBSITE</h1>
					<hr>
					<h2>SELECT YOUR LANGUAGE</h2>
					<button type="submit" value="arabic" name="lang" class="btn d-block m-auto" id="lang" <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] === 'arabic'); ?>>
						<p class="lang-size">Arabic</p>
					</button>
					<button type="submit" value="en" name="lang" class="btn d-block m-auto" id="lang" <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] === 'en'); ?>>
						<p class="lang-size">English</p>
					</button>
				</div>
			</form>
		</div>
	</div>
	<div class="shadow">
<? } ?>
<!-- end checking -->


<!-- whole page container -->
	<div id="fullpage">
    <div class="container px-0">
		<header>
			<div class="row">
				<div class="col-6">
					<!-- navbar -->
				   <nav class="navbar fixed-top">
							   <div class="logo">
							   <a href="index.php"><img src="style/logo.svg" width="53" height="53" alt="logo" id="logo"></a>
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
										<a href="index.php"><img src="style/logo.svg" alt="logo"></a>
										</div>
									<!-- </div> -->
                                    <li class="nav-links">
                                        <a href="index.php"><?= _HOME ?></a>
                                    </li>
									<li class="nav-links">
									<a href="products.php" class="nested-links"><?= _PRODUCT ?></a>
									<ul class="nested-nav mt-4">
										<li>
											<a href="products.php#firstPage" class="nested-links">LALAKU PANTS</a>
										</li>
										<li>
											<a href="products.php#secondPage" class="nested-links">LALAKU DIAPERS</a>
										</li>
										<li>
											<a href="products.php#thirdPage" class="nested-links">LALAKU MAMA POSTPARTUM PADS</a>
										</li>
										<li>
											<a href="products.php#forthPage" class="nested-links">LALAKU MAMA SANITARY NAOKINS</a>
										</li>
										<li>
											<a href="products.php#fifthPage" class="nested-links">LALAKU KN 95 MASKS</a>
										</li>
									</ul>
									</li>
									<li class="nav-links">
									<a href="contact.php" class="nested-links"><?= _CONTACT ?></a>
									</li>
									<!-- <li class="nav-links">
									<a href="contact.php" class="nested-links"><?= _ABOUT ?></a>
									</li> -->
								</ul>
				   <!-- end burger menu -->

				</div>
				
			</div>
			
			
		</div>
	</header>
	<div id="menu-shadow" class="">
	<!-- section 0 -->
	<div class="sct0 section bg-white">

<div class="item-carousel">

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <!-- <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> -->
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="style/images/products/product-1.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="style/images/products/product-2.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="style/images/products/product-3.jpg">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a> -->
</div>

</div>

        <!-- main text -->
        <div class="row product-contact-top-first">
            <div class="col-12 col-md-12 text-center">
                <a href="contact.php">
                    <button type="button" class="col-5 col-md-3 col-lg-2 btn btn-black px-5 textColor-left">
                <?= _CONTACT ?>
                </button>
                </a>
            </div>
        </div>
        <div class="text-center down pt-3">
        <a href="#secondPage">	
           <img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
        </a>
        </div>

<div class="container-fluid">
		<div class="row">
			<div class="col-12 pt-120 text-center z-index title">
                <div class="row align-items-end mobile-item-spec">

                    <div class="col-lg-6 col-12">
                        <div class="description-content">
                            <h1 class="text-bold pt-0 d-flex justify-content-end">LALAKU PANTS</h1>
                            <p>Baby diapers "LALAKU" panties are specially created from natural materials using advanced technologies to provide maximum comfort for Your child. Baby diapers "LALAKU" contain: a special top layer with the addition of aloe Vera lotion; special materials that provide "breathing" of the delicate skin of the baby; specially absorbing system that perfectly distributes the liquid inside and protects against leakage up to 10 hours. Baby diapers "LALAKU" will provide reliable protection for Your baby!</p>
                        </div>
                        
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="col-7 my-0 mx-auto">
                            <table class="table table-condensed">
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">3</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">54</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">MIDI</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">4-9 KG</p>
                                    </th>
                                </tr>
    
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">4</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">46</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">MAXI</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">7-18 KG</p>
                                    </th>
                                </tr>
    
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">5</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">40</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">JUNIOR</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">11-25 KG</p>
                                    </th>
                                </tr>
    
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">6</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">36</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">EXTRA LARGE</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">16+ KG</p>
                                    </th>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
                
			</div>
		</div>
		<!-- end main text -->
</div>

</div>

<!-- section 0 mobile -->
<section class="section sct-mobile" id="section-mobile">


  <!-- main text -->
  <!-- <div class="row product-contact-top">
            <div class="col-12 col-md-12 text-center">
                <a href="contact.php">
                    <button type="button" class="col-5 col-md-3 col-lg-2 btn btn-black px-5 textColor-left">
                <?//= _CONTACT ?>
                </button>
                </a>
            </div>
        </div>
        <div class="text-center down pt-3">
        <a href="#secondPage">	
           <img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
        </a>
        </div> -->

<div class="container">
		<div class="row">
			<div class="col-12 text-center">
                <div class="row align-items-start px-4">

                    <div class="col-lg-6 col-12">
                        <!-- <div class="pt-120"> -->
                            <h1 class="text-bold pt-0">LALAKU PANTS</h1>
                            <p>Baby diapers "LALAKU" panties are specially created from natural materials using advanced technologies to provide maximum comfort for Your child. Baby diapers "LALAKU" contain: a special top layer with the addition of aloe Vera lotion; special materials that provide "breathing" of the delicate skin of the baby; specially absorbing system that perfectly distributes the liquid inside and protects against leakage up to 10 hours. Baby diapers "LALAKU" will provide reliable protection for Your baby!</p>
                        <!-- </div> -->
                    </div>

                    <div class="col-lg-6 col-12 mt-5">
                        <div class="col-12 my-0 mx-auto">
                            <table class="table table-condensed">
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">3</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">54</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">MIDI</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">4-9 KG</p>
                                    </th>
                                </tr>
    
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">4</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">46</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">MAXI</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">7-18 KG</p>
                                    </th>
                                </tr>
    
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">5</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">40</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">JUNIOR</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">11-25 KG</p>
                                    </th>
                                </tr>
    
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">6</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">36</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">EXTRA LARGE</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">16+ KG</p>
                                    </th>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
                
			</div>
		</div>
		<!-- end main text -->
</div>
    </section>


<!-- section 1 -->
<section class="sct1 section">
        <div class="row product-contact-top">
            <div class="col-12 col-md-12 text-center">
                <a href="contact.php">
                    <button type="button" class="col-5 col-md-3 col-lg-2 btn btn-black px-5 textColor-left">
                <?= _CONTACT ?>
                </button>
                </a>
            </div>
        </div>
        <div class="text-center down pt-3">
        <a href="#thirdPage">	
           <img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
        </a>
        </div>
<div class="container-fluid">
<div class="row">
			<div class="col-12 pt-120 text-center z-index title">

                <div class="row align-items-end">
                    
                    <div class="col-6">
                        <div class="col-7 my-0 mb-4 mx-auto">
                            <table class="table table-condensed">
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">1</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">86</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">NEW BORN</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">2-5 KG</p>
                                    </th>
                                </tr>
    
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">2</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">82</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">MINI</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">3-6 KG</p>
                                    </th>
                                </tr>
                                
                            </table>
                            
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="description-content spec-item-left">
                            <h1 class="text-bold pt-0 d-flex justify-content-start pl-4">LALAKU DIAPERS</h1>
                            <p>Baby diapers "LALAKU" are specially created from natural materials using advanced technologies to provide maximum comfort for Your child. Baby diapers "LALAKU" contain: a special top layer with the addition of aloe Vera lotion; special materials that provide "breathing" of the delicate skin of the baby; specially absorbing system that perfectly distributes the liquid inside and protects against leakage up to 10 hours. Baby diapers "LALAKU" will provide reliable protection for Your baby!</p>
                        </div>
                    </div>

                </div>
            </div>
</div>
</div>
</section>



<!-- section 1 mobile -->
<section class="section sct-mobile" id="section-mobile">


  <!-- main text -->
  <!-- <div class="row product-contact-top">
            <div class="col-12 col-md-12 text-center">
                <a href="contact.php">
                    <button type="button" class="col-5 col-md-3 col-lg-2 btn btn-black px-5 textColor-left">
                <?//= _CONTACT ?>
                </button>
                </a>
            </div>
        </div>
        <div class="text-center down pt-3">
        <a href="#secondPage">	
           <img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
        </a>
        </div> -->

<div class="container">
<div class="row">
			<div class="col-12 text-center">

                <div class="row align-items-end px-4">
                    
                    <div class="col-lg-6 col-12">
                        <!-- <div class="spec-item-left"> -->
                            <h1 class="text-bold pt-0">LALAKU DIAPERS</h1>
                            <p>Baby diapers "LALAKU" are specially created from natural materials using advanced technologies to provide maximum comfort for Your child. Baby diapers "LALAKU" contain: a special top layer with the addition of aloe Vera lotion; special materials that provide "breathing" of the delicate skin of the baby; specially absorbing system that perfectly distributes the liquid inside and protects against leakage up to 10 hours. Baby diapers "LALAKU" will provide reliable protection for Your baby!</p>
                        <!-- </div> -->
                    </div>

                    <div class="col-lg-6 col-12 mt-5">
                            <table class="table table-condensed">
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">1</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">86</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">NEW BORN</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">2-5 KG</p>
                                    </th>
                                </tr>
    
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">2</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">82</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">MINI</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">3-6 KG</p>
                                    </th>
                                </tr>
                                
                            </table>
                            
                    </div>


                </div>
            </div>
</div>
		<!-- end main text -->
</div>
    </section>




<!-- section 2 -->
<section class="sct2 section">
<div class="row product-contact-top">
            <div class="col-12 col-md-12 text-center">
                <a href="contact.php">
                    <button type="button" class="col-5 col-md-3 col-lg-2 btn btn-black px-5 textColor-left">
                <?= _CONTACT ?>
                </button>
                </a>
            </div>
        </div>
        <div class="text-center down pt-3">
        <a href="#forthPage">	
           <img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
        </a>
        </div>
<div class="container-fluid">
<div class="row">
			<div class="col-12 pt-120 text-center z-index title">
                <div class="row align-items-end">
                    <div class="col-6">
                        <div class="description-content mr-top-265">
                            <h1 class="text-bold pt-0 d-flex justify-content-end">LALAKU MAMA
POSTPARTUM PADS</h1>
                            <p>Feminine hygienic postpartum absorbent pads. Composition: fluff pulp, nonwoven fabric, breathable 
outer layer.

Expire date: 3 years from the date manufacture 
specified on packing.</p>
                        </div>
                        
                    </div>
                    <div class="col-6 mb-5">
                        <div class="col-2 my-0 mx-auto">
                            <table class="table table-condensed">
                                <tr>
                                    <th class="border-bottom-pcs">
                                        <h2 class="d-inline-block item-number mb-0">10</h2>
                                        <p class="d-inline-block line-h mb-0">pcs</p>
                                    </th>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
                
			</div>
        </div>
        
        </div>

</section>



<!-- section 2 mobile -->
<section class="section sct-mobile" id="section-mobile">
  <!-- main text -->
  <!-- <div class="row product-contact-top">
            <div class="col-12 col-md-12 text-center">
                <a href="contact.php">
                    <button type="button" class="col-5 col-md-3 col-lg-2 btn btn-black px-5 textColor-left">
                <?//= _CONTACT ?>
                </button>
                </a>
            </div>
        </div>
        <div class="text-center down pt-3">
        <a href="#secondPage">	
           <img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
        </a>
        </div> -->

<div class="container">
<div class="row">
			<div class="col-12 text-center">

                <div class="row align-items-end px-4">
                    
                    <div class="col-lg-6 col-12">
                    <h1 class="text-bold pt-0 d-flex justify-content-end">LALAKU MAMA
POSTPARTUM PADS</h1>
                            <p>Feminine hygienic postpartum absorbent pads. Composition: fluff pulp, nonwoven fabric, breathable 
outer layer.

Expire date: 3 years from the date manufacture 
specified on packing.</p>
                    </div>

                    <div class="col-lg-6 col-12 mt-5">
                            <table class="table table-condensed">
                                <tr>
                                    <th class="border-bottom-pcs">
                                        <h2 class="d-inline-block item-number mb-0">10</h2>
                                        <p class="d-inline-block line-h mb-0">pcs</p>
                                    </th>
                                </tr>
                                
                            </table>
                            
                    </div>


                </div>
            </div>
</div>
		<!-- end main text -->
</div>
    </section>













<!-- section 3 -->
<section class="sct3 section">
<div class="row product-contact-top">
            <div class="col-12 col-md-12 text-center">
                <a href="contact.php">
                    <button type="button" class="col-5 col-md-3 col-lg-2 btn btn-black px-5 textColor-left">
                <?= _CONTACT ?>
                </button>
                </a>
            </div>
        </div>
        <div class="text-center down pt-3">
        <a href="#fifthPage">	
           <img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
        </a>
        </div>
<div class="container-fluid">
<div class="row">
			<div class="col-12 pt-120 text-center z-index title">

                <div class="row align-items-end">
                    
                    <div class="col-6">
                        <div class="col-5 justify-content-start scr3-item-pcs">
                            <table class="table table-condensed">
                                <tr class="border-bottom-pcs">
                                    <th>
                                        <h6 class="d-inline-block item-size mb-0">CLASSIC</h6>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number mb-0">10</h2>
                                        <p class="d-inline-block line-h mb-0">pcs</p>
                                    </th>
                                </tr>
                            </table>
                            
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="description-content spec-item-left mr-top-265">
                            <h1 class="text-bold pt-0 d-flex justify-content-start pl-4">LALAKU MAMA
SANITARY NAPKINS</h1>
                            <p>Feminine hygienic postpartum absorbent pads. Composition: fluff pulp, nonwoven fabric, breathable 
outer layer.</p>
                         <p>
                        Expire date: 3 years from the date manufacture 
                        specified on packing.</p>
                        </div>
                    </div>

                </div>
            </div>
</div>
</div>
</section>



<!-- section 3 mobile -->
<section class="section sct-mobile" id="section-mobile">
  <!-- main text -->
  <!-- <div class="row product-contact-top">
            <div class="col-12 col-md-12 text-center">
                <a href="contact.php">
                    <button type="button" class="col-5 col-md-3 col-lg-2 btn btn-black px-5 textColor-left">
                <?//= _CONTACT ?>
                </button>
                </a>
            </div>
        </div>
        <div class="text-center down pt-3">
        <a href="#secondPage">	
           <img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
        </a>
        </div> -->

<div class="container">
<div class="row">
			<div class="col-12 text-center">

                <div class="row align-items-end px-4">
                    
                    <div class="col-lg-6 col-12">
                    <h1 class="text-bold pt-0 d-flex justify-content-start pl-4">LALAKU MAMA
SANITARY NAPKINS</h1>
                            <p>Feminine hygienic postpartum absorbent pads. Composition: fluff pulp, nonwoven fabric, breathable 
outer layer.</p>
                         <p>
                        Expire date: 3 years from the date manufacture 
                        specified on packing.</p>
                    </div>

                    <div class="col-lg-6 col-12 mt-5">
                            <table class="table table-condensed">
                                <tr class="border-bottom-pcs">
                                    <th>
                                        <h6 class="d-inline-block item-size mb-0">CLASSIC</h6>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number mb-0">10</h2>
                                        <p class="d-inline-block line-h mb-0">pcs</p>
                                    </th>
                                </tr>
                                
                            </table>
                            
                    </div>


                </div>
            </div>
</div>
		<!-- end main text -->
</div>
    </section>






<!-- section 4 -->
<section class="sct4 section">
<div class="row product-contact-top">
            <div class="col-12 col-md-12 text-center">
                <a href="contact.php">
                    <button type="button" class="col-5 col-md-3 col-lg-2 btn btn-black px-5 textColor-left">
                <?= _CONTACT ?>
                </button>
                </a>
            </div>
        </div>
        <div class="text-center down pt-3">
        <a href="#sixthPage">	
           <img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
        </a>
        </div>
<div class="container-fluid">
<div class="row">
			<div class="col-12 pt-120 text-center z-index title">
                <div class="row align-items-end">
                    <div class="col-6">
                        <div class="description-content">
                            <h1 class="text-bold pt-0 d-flex justify-content-end mr-5">LALAKU PANTS</h1>
                            <p class="mr-4">
                            KN95 filter masks (non-sterile respirators) have good air permeability property, without restricting breathing, 
the nasal retainer provides a better fit considering individual features of the shape of the nose, designed for use in personal hygiene and as a means of protection against dust and odors, etc. Composition: Non-woven 
hypoallergenic polypropylene with an additional filtering layer, type of fixative: elastic band (ear loop), store 
at + 15 ° С  + 25 ° С in a dry place protected 
from direct sunlight. 
</p>
<p>
Expire date : 5 years.
                            </p>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="col-6 my-0 mx-auto mask-spec-right">
                            <table class="table table-condensed">
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">4</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">2</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th class="pb-0">
                                        <h6 class="d-inline-block item-size mb-0 text-height-0">WITH VALVE</h6>
                                        <h6 class="item-mask-spec mb-0 text-height-0">WITHOUT VALVE</h6>
                                    </th>
                                </tr>
    
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">5</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">2</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th class="pb-0">
                                        <h6 class="d-inline-block item-size mb-0 text-height-0">WITH VALVE</h6>
                                        <h6 class="item-mask-spec mb-0 text-height-0">WITHOUT VALVE</h6>
                                    </th>
                                </tr>
    
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">6</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">2</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th class="pb-0">
                                        <h6 class="d-inline-block item-size mb-0 text-height-0">WITH VALVE</h6>
                                        <h6 class="item-mask-spec mb-0 text-height-0">WITHOUT VALVE</h6>
                                    </th>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
                
			</div>
		</div>
</div>
</section>






<!-- section 4 mobile -->
<section class="section sct-mobile" id="section-mobile">
  <!-- main text -->
  <!-- <div class="row product-contact-top">
            <div class="col-12 col-md-12 text-center">
                <a href="contact.php">
                    <button type="button" class="col-5 col-md-3 col-lg-2 btn btn-black px-5 textColor-left">
                <?//= _CONTACT ?>
                </button>
                </a>
            </div>
        </div>
        <div class="text-center down pt-3">
        <a href="#secondPage">	
           <img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
        </a>
        </div> -->

<div class="container">
<div class="row">
			<div class="col-12 text-center">

                <div class="row align-items-end px-4">
                    
                    <div class="col-lg-6 col-12">
                    <h1 class="text-bold pt-0 d-flex justify-content-end mr-5">LALAKU PANTS</h1>
                            <p class="mr-4">
                            KN95 filter masks (non-sterile respirators) have good air permeability property, without restricting breathing, 
the nasal retainer provides a better fit considering individual features of the shape of the nose, designed for use in personal hygiene and as a means of protection against dust and odors, etc. Composition: Non-woven 
hypoallergenic polypropylene with an additional filtering layer, type of fixative: elastic band (ear loop), store 
at + 15 ° С  + 25 ° С in a dry place protected 
from direct sunlight. 
</p>
<p>
Expire date : 5 years.
                            </p>
                    </div>

                    <div class="col-lg-6 col-12 mt-5">
                            <table class="table table-condensed">
                                <tr class="border-bottom-pcs">
                                <th>
                                        <h2 class="d-inline-block item-number">4</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">2</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th class="pb-0">
                                        <h6 class="d-inline-block item-size mb-0 text-height-0">WITH VALVE</h6>
                                        <h6 class="item-mask-spec mb-0 text-height-0">WITHOUT VALVE</h6>
                                    </th>
                                </tr>
    
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">5</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">2</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th class="pb-0">
                                        <h6 class="d-inline-block item-size mb-0 text-height-0">WITH VALVE</h6>
                                        <h6 class="item-mask-spec mb-0 text-height-0">WITHOUT VALVE</h6>
                                    </th>
                                </tr>
    
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">6</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">2</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th class="pb-0">
                                        <h6 class="d-inline-block item-size mb-0 text-height-0">WITH VALVE</h6>
                                        <h6 class="item-mask-spec mb-0 text-height-0">WITHOUT VALVE</h6>
                                    </th>
                                </tr>
                                
                            </table>
                            
                    </div>


                </div>
            </div>
</div>
		<!-- end main text -->
</div>
    </section>






<!-- footer -->
<section class="sct5 section">
	<div class="row">
        <div class="col-4 text-center social-media">
        <i class="fab fa-instagram social-icon"></i>
        </div>
        <div class="col-4 text-center social-media">
        <i class="fab fa-facebook-f social-icon"></i>
        </div>
        <div class="col-4 text-center social-media">
        <i class="fab fa-youtube social-icon"></i>
        </div>
    </div>
        
<div class="row">
    <div class="col-md-6 col-12 d-flex justify-content-center">
        <i class="fas fa-map-marker-alt footer-icon mr-2"></i>
        <p>Toshkent sh., Mirzo Ulug‘bek tumani, Xirmontepa 2-tor, 48</p>
    </div>
    <div class="col-md-6 col-12 mt-4 mt-md-0 mt-lg-0 d-flex justify-content-center">
        <i class="fas fa-phone-alt footer-icon mr-2"></i>
        <p>+998 94 480 00 77</p>
    </div>
</div>
		
		<div class="text-center">
		<a href="#firstPage">	
			<img class="arrow-up animate-arrow" src="style/icons/arrow-up.svg" alt="up">
        </a>
        </div>
</section>



	</div>
</div>
<!-- end whole page container -->
	<script src="style/js/index.js"></script>
	<script src="style/js/config-scrolling.js"></script>
    <script src="style/js/mobile-product.js"></script>
</body>

</html>