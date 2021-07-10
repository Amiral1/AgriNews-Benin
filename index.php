<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
				<div class="topbar">
					<span class="topbar-child1">
						BIENVENUE / WELCOME
					</span>
				</div>
			
			<!-- Menu -->
			<div class="wrap_header">

				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.php">ACCUEIL</a>
							</li>
							<li>
								<a href="index.php">PRESENTATION</a>
							</li>
							<li>
								<a href="contact.php">NOUS-CONTACTER</a>
							</li>
							<li>
								<a href="admin.html">ADMIN</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<span class="linedivide2"></span>
<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							BIENVENUE / WELCOME
					</li>
					<li>
						<a href="index.php">ACCUEIL</a>
					</li>
					<li>
						<a href="index.php">PRESENTATION</a>
					</li>
					<li>
						<a href="contact.php">NOUS-CONTACTER</a>
					</li>
					<li>
						<a href="admin.html">ADMIN</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
<!--========================================= START Slide ======================================================-->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(images/mais.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							BENIN, PAYS D'AGRICULTURE
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							QUE RECHERCHEZ-VOUS ?
						</h2>
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(images/ananas.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
							BENIN, PAYS D'AGRICULTURE
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
							QUE RECHERCHEZ-VOUS ?
						</h2>
					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url(images/coton.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
							BENIN, PAYS D'AGRICULTURE
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
							QUE RECHERCHEZ-VOUS ?
						</h2>
					</div>
				</div>

			</div>
		</div>
	</section>
<!--========================================= END Slide ======================================================-->
	<h4 class="m-text26 p-b-36 p-t-15" style="text-align: center;">
				Quel Produit agricole recherchez-vous ?
	</h4>

	<form class="leave-comment" method="POST" action="NewCarte.php"  style="margin-left: 550px;">
			
			<p><select name="depart" id="Depart" style="width: 450px;">
				<option value="">Sélectionner un produit</option>
				<option value="Ananas">Ananas</option>
				<option value="Palmier a Huile">Noix de palme</option>
				<option value="Mais">Maïs</option>
				<option value="Coton">Coton</option>
				<option value="Riz">Riz</option>
				<option value="Anacarde">Anacarde</option>
				<option value="Manioc">Manioc</option>
			</select></p> <br><br><br><br>
			<input type="submit" name=" s" value="Rechercher" style="margin-left: 175px;">		
	</form>
<br> <br> <br> <br> <br>


<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>