<?php
session_start();
if(isset($_POST['SEND']))
    {
	
   try {
		$db = new PDO('mysql:host=localhost; dbname=memoire','root', '');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//return $db
		
	   } 
	catch (PDOException $e)
	{
		echo 'Connexion échouée : ' .$e->getMessage();
		return $e;	
	}
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	$check = $db->prepare('SELECT username,mot_de_passe FROM admin WHERE username =? AND mot_de_passe =?');
	$check->execute(array($username,$password));
	$data = $check->fetch();
	$row = $check->rowCount();
	if ($row == 1) 
	{
		if($data['mot_de_passe'] == $password AND $data['username'] = $username)
		{
			header('Location: alimente.php');
		}
		else
			{ echo "<p style = 'color : red'> Utilisateur ou mot de passe incorrect </p>";}
	}	
}
else
   {
			header('Location: admin.html');
	}
?>

