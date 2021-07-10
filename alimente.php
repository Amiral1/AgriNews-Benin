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
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">



				<?php
				try
			    {
			            
			        $connexion = new PDO('mysql:host=localhost; dbname=memoire', 'root','');
			    }
			            
			    catch(Exception $e)
			    {
			            
			       die('Erreur :'.$e->getMessage());
			    }
			    ?>
					<form class="leave-comment" style="margin-left: 50px;" action="alimente1.php" name="contactform" method="POST">
						<h4 class="m-text26 p-b-36 p-t-15">
							De nouvelles données ? Renseignez les.
						</h4>
						<div class="bo4 of-hidden size15 m-b-20">
							<select class="sizefull s-text7 p-l-22 p-r-22" name="produit">
								<?php
									$sql="SELECT nom_Produit from produit order by nom_Produit"; 
							        if($connexion->query($sql)){ 
							             
							            foreach ($connexion->query($sql) as $row){
							    ?>    	
							        <option><?php echo "{$row['nom_Produit']}"; ?></option>
							    <?php
							            	echo "<br/>\n"; 
							            }
								           
								    }else{
								        echo "Problème d'accès a la bdd";
								    }
								?>
							</select> 
						</div>
						<div class="bo4 of-hidden size15 m-b-20">
							<select  class="sizefull s-text7 p-l-22 p-r-22" name="localite" >
								<?php
									$sql="SELECT nom_Localite from localite order by nom_Localite"; 
							        if($connexion->query($sql)){ 
							             
							            foreach ($connexion->query($sql) as $row){
							    ?>    	
							        <option><?php echo "{$row['nom_Localite']}"; ?></option>
							    <?php
							            	echo "<br/>\n"; 
							            }
								           
								    }else{
								        echo "Problème d'accès a la bdd";
								    }
								?>
							</select> 
						</div>
						<div class="bo4 of-hidden size15 m-b-20">
							<select class="sizefull s-text7 p-l-22 p-r-22" name="annee">
								<?php
									$sql="SELECT nom_Annee from annee order by nom_Annee"; 
							        if($connexion->query($sql)){ 
							             
							            foreach ($connexion->query($sql) as $row){
							    ?>    	
							        <option><?php echo "{$row['nom_Annee']}"; ?></option>
							    <?php
							            	echo "<br/>\n"; 
							            }
								           
								    }else{
								        echo "Problème d'accès a la bdd";
								    }
								?>
							</select> 
						</div>
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="amount" placeholder="Quantité Produite" required>
						</div>
						

						<div class="w-size25">
											<!-- Button -->
							<button  type="submit" value="SEND" id="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
									Envoyer
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>


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

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>