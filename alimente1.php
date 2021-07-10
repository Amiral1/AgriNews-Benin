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

<?php

	try
   	{
          
        $connexion = new PDO('mysql:host=localhost; dbname=memoire', 'root','');
    }
            
    catch(Exception $e)
    {
            
       die('Erreur :'.$e->getMessage());
    }

    $prod = $_POST['produit'];
    $local = $_POST['localite'];
    $annee = $_POST['annee'];
    $quantite = $_POST['amount'];

    $sql="SELECT id_Produit from produit where nom_Produit= '$prod' "; 
        if($connexion->query($sql)){ 
             
            foreach ($connexion->query($sql) as $row){
                $produit = "{$row['id_Produit']}";  
            }
               
        }else{
            echo "Problème d'accès a la bdd";
        }
    //var_dump($produit);
    $sql="SELECT id_Localite from localite where nom_Localite= '$local' "; 
        if($connexion->query($sql)){ 
             
            foreach ($connexion->query($sql) as $row){
                $localite = "{$row['id_Localite']}";  
            }
               
        }else{
            echo "Problème d'accès a la bdd";
        }
    //var_dump($localite);
	$pdoconnect = $connexion->prepare('INSERT INTO cultiver(id_Produit, id_Localite, id_Annee, quantite) VALUES ( :id_Produit, :id_Localite, :id_Annee, :quantite)');
            
        $pdoconnect->execute(array('id_Produit'=>$produit, 'id_Localite'=>$localite, 'id_Annee'=>$annee, 'quantite'=>$quantite,));
        
    $insertIsOk = $pdoconnect;


    if ($insertIsOk)
        {
            header('Location: merci1.html');
            //$message = 'Les nouvelles données ont été bien enregistrer';
        }
   

?>


    <p>
        <?php
            echo $message;
        ?>
    </p>


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