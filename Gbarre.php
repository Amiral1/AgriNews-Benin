<?php 
try 
{ 
 $bdd = new PDO("mysql:host=localhost;dbname=memoire", "root", ""); 
 $bdd ->setAttribute(PDO::ATTR_ERRMODE, 
PDO::ERRMODE_EXCEPTION); 
} 
catch(Exception $e) 
{ 
 die("Une érreur a été trouvé : " . $e->getMessage()); 
} 
$bdd->query("SET NAMES UTF8"); 
if (isset($_POST["s"]) ) 
{ 
 $result = $_POST['depart'];
 $sql='SELECT localite.nom_Localite AS commune, localite.long_Localite AS lng, localite.lat_Localite AS lat, produit.nom_Produit AS produit, cultiver.quantite AS description FROM cultiver INNER JOIN produit ON cultiver.id_Produit = produit.id_Produit INNER JOIN  localite ON localite.id_Localite = cultiver.id_Localite;';
 $req=$bdd->query($sql);
 $reponse = $req->fetch();
 while ($reponse) {
 	echo $reponse['commune']. '</br>';
 }
 $reponse->closeCursor();
} 
?> 
















































































































































































<!--$_GET["terme"] = htmlspecialchars($_GET["terme"]); //pour sécuriser le formulaire contre les intrusions html
 $terme = $_GET["terme"]; 
 $terme = trim($terme); //pour supprimer les espaces dans la requête de l'internaute
 $terme = strip_tags($terme); //pour supprimer les balises html dans la requête
 if (isset($terme)) 
 { 
 $terme = ucwords($terme); 
 $select_terme = $bdd->prepare("SELECT id_Produit, id_Localite FROM cultiver 
WHERE id_Produit LIKE ? OR id_Localite LIKE ?"); 
 $select_terme->execute(array("%".$terme."%", "%".$terme."%")); 
 } 
 else
 { 
 $message = "Vous devez entrer votre requete dans la barre de recherche"; 
 } 
 <!DOCTYPE html> 
<html> 
 <head> 
 <meta charset = "utf-8" > 
 <title>Les résultats de recherche</title> 
 </head> 
 <body> 
 <?php 
 while($terme_trouve = $select_terme->fetch()) 
 { 
 echo "<div><h2>".$terme_trouve['id_Produit']."</h2><p> 
".$terme_trouve['id_Localite']."</p>"; 
 } 
 $select_terme->closeCursor(); 
 ?> 
 </body> 
</html-->
