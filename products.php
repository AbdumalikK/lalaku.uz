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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="style/bootstrap4/js/bootstrap.min.js"></script>
	<!-- <script src="style/js/index.js"></script> -->
	<link rel="stylesheet" href="style/css/fullpage.css">
	<script src="style/js/easings.min.js"></script>
	<script src="style/js/scrolloverflow.min.js"></script>
	<script src="style/js/fullpage.js"></script>
</head>

<body>
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
    <div class="container-fluid px-0">
		<header>
			<div class="row">
				<div class="col-6">
					<!-- navbar -->
				   <nav class="navbar fixed-top">
							   <div class="logo">
							   <a href="index.php"><img src="style/logo.svg" width="53" height="52" alt="logo" id="logo"></a>
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
									<a href="contact.php" class="nested-links"><?= _PRODUCT ?></a>
									<ul class="nested-nav mt-4">
										<li>
											<a href="contact.php" class="nested-links">LALAKU PANTS</a>
										</li>
										<li>
											<a href="contact.php" class="nested-links">LALAKU DIAPERS</a>
										</li>
										<li>
											<a href="contact.php" class="nested-links">LALAKU MAMA POSTPARTUM PADS</a>
										</li>
										<li>
											<a href="contact.php" class="nested-links">LALAKU MAMA SANITARY NAOKINS</a>
										</li>
										<li>
											<a href="contact.php" class="nested-links">LALAKU KN 95 MASKS</a>
										</li>
									</ul>
									</li>
									<li class="nav-links">
									<a href="contact.php" class="nested-links"><?= _CONTACT ?></a>
									</li>
									<li class="nav-links">
									<a href="contact.php" class="nested-links"><?= _ABOUT ?></a>
									</li>
								</ul>
				   <!-- end burger menu -->

				</div>
				
			</div>
			
			
		</div>
	</header>
	<div id="menu-shadow" class="">
	<!-- section 0 -->
	<div class="sct0 section bg-white">
        <!-- main text -->
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
        <a href="#secondPage">	
           <img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
        </a>
        </div>

		<div class="row">
			<div class="col-12 pt-120 text-center z-index title">
                <div class="row">
                    <div class="col-6">
                        <div class="description-content">
                            <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus et explicabo minima voluptatum consequuntur voluptate iste sed. Quos, cum ab debitis est iure sunt aspernatur commodi fugiat, labore, voluptatibus voluptatum. consetetur sadipscing elitr. Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <h1 class="text-bold pt-0">LALAKU PANTS</h1>
                    </div>
                </div>
                
			</div>
		</div>
		<!-- end main text -->
	</div>
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

		<div class="row">
			<div class="col-12 pt-120 text-center z-index title">
                <div class="row">
                    <div class="col-6">
                        <div class="description-content">
                            <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus et explicabo minima voluptatum consequuntur voluptate iste sed. Quos, cum ab debitis est iure sunt aspernatur commodi fugiat, labore, voluptatibus voluptatum. consetetur sadipscing elitr. Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <h1 class="text-bold pt-0">LALAKU DIAPERS</h1>
                    </div>
                </div>
                
			</div>
		</div>

</section>

<!-- section 5 col-md-2 -->
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

		<div class="row">
			<div class="col-12 pt-120 text-center z-index title">
                <div class="row">
                    <div class="col-6">
                        <div class="description-content">
                            <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus et explicabo minima voluptatum consequuntur voluptate iste sed. Quos, cum ab debitis est iure sunt aspernatur commodi fugiat, labore, voluptatibus voluptatum. consetetur sadipscing elitr. Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <h1 class="text-bold pt-0">LALAKU MAMA POSTPARTUM PADS</h1>
                    </div>
                </div>
                
			</div>
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

		<div class="row">
			<div class="col-12 pt-120 text-center z-index title">
                <div class="row">
                    <div class="col-6">
                        <div class="description-content">
                            <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus et explicabo minima voluptatum consequuntur voluptate iste sed. Quos, cum ab debitis est iure sunt aspernatur commodi fugiat, labore, voluptatibus voluptatum. consetetur sadipscing elitr. Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <h1 class="text-bold pt-0">LALAKU MAMA SANITARY NAPKINS</h1>
                    </div>
                </div>
                
			</div>
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

		<div class="row">
			<div class="col-12 pt-120 text-center z-index title">
                <div class="row">
                    <div class="col-6">
                        <div class="description-content">
                            <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus et explicabo minima voluptatum consequuntur voluptate iste sed. Quos, cum ab debitis est iure sunt aspernatur commodi fugiat, labore, voluptatibus voluptatum. consetetur sadipscing elitr. Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <h1 class="text-bold pt-0">LALAKU KN 95 MASKS</h1>
                    </div>
                </div>
                
			</div>
		</div>
</section>

<!-- section 5 -->
<section class="sct5 section">
<div class="row product-contact-top">
    
    <div class="text-center down pt-3">
    <!-- <a href="#firstPage">	
       <img class="arrow-down animate-arrow" src="style/icons/arrow-top.svg" alt="down">
    </a> -->
    </div>

        </div>

		<div class="row">
			<div class="col-12 pt-120 text-center z-index title">
                <div class="row">
                    <div class="col-6">
                        <div class="description-content">
                            <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus et explicabo minima voluptatum consequuntur voluptate iste sed. Quos, cum ab debitis est iure sunt aspernatur commodi fugiat, labore, voluptatibus voluptatum. consetetur sadipscing elitr. Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <h1 class="text-bold pt-0">LALAKU KN 95 MASKS</h1>
                    </div>
                </div>
                
			</div>
		</div>



	<div class="row">
		<div class="col-12 text-center">
			<h1 class="text-bold pt-120">SOF HYGIENIC</h1>
			<p class="wd-1020 p-3">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
			</p>
		</div>
	</div>
		<div class="row mt-footer footer">
		
		</div>
		<div class="text-center mb-5">
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
</body>

</html>