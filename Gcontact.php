 <?php
  if($_SERVER["REQUEST_METHOD"] == "POST")
    {
	
 function verifyInput($input)
 	{
        $input = trim($input);      //La fonction trim enleve tous ce qui est espace supplementaire, le faite d'aller a la ligne, les tabulations
        $input = stripslashes($input);  //enleve tous les antislache
        $input = htmlspecialchars($input); // permet d'enlever tous les caracteres HTML pour éviter l'injection de code
    }

  
    $email = filter_input(INPUT_POST , 'email' , FILTER_VALIDATE_EMAIL);
    
    if($email)
    	{
        echo ("Email  valide");
    	}
    
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
	$sth=$db->prepare("INSERT INTO avis(nom,email,message)VALUES(:nom, :email, :comments)");
	$sth->execute(array(
			'nom'=>$_POST['nom'],
            'email'=>$_POST['email'],
            'comments'=>$_POST['comments'],));
	
		header("Location:merci.html");
}
		
	if(!$_POST) exit;
	    $nom = $email = $comments = "";
   
?>



