<?php 
     session_start();

     // variables pour affichage des messages d'erreurs si l'utilisateur ne donne pas de bonne valeurs 
     $msgLoginErreur = '';
     $msgPasswordErreur = '';
     $login ='';
     $password = '';
     
     include('src/fonctions.php');
     

     if (isset($_POST['cnx'])) {
     	if (!empty($_POST['log'])) {
     		$login =$_POST['log'];
     		if (!empty($_POST['pass'])) {
     		   $password = $_POST['pass'];
			   $file = 'asset/json/jsonUsers.json';
		       $contenu = file_get_contents($file);
		       $contenu = json_decode($contenu,true);
		       foreach ($contenu as $key => $value) {
		       	  if ($value['login']==$login) {

		       	  	if ($value['password']==$password) {
		       	  	   if ($value['profile']=='admin') {
		       	  	   	$_SESSION['user'] = $value;
		       	  	   	header('location:views/admins/pageAdmin.php');
		       	  	   }elseif ($value['profile']=='joueur') {
		       	  	   	$_SESSION['user'] = $value;
		       	  	   	header('location:views/joueurs/pageJoueur.php');
		       	  	   }
		       	    }else{
		       	    	$msgPasswordErreur = "Mots de passe incorecte !!!";
		       	    	break;
		       	    }
		       	  }else{
		       	  	$msgLoginErreur = 'Login incorecte !!!';
		       	  	$password = $_POST['pass'];
		       	  }
		       }
     		}else{
			$msgPasswordErreur = 'Ce champ est obligatoire !!!';
   	  	    $login = $_POST['log'];
     	}
     	}else{
			$msgLoginErreur = 'Ce champ est obligatoire !!!';
   	  	    $password = $_POST['pass'];
     	}


     }

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="asset/css/auth.css">
</head>
<body style="background-image: url('asset/img/Images/img-bg.jpg');">

	<header  style=" width: 100%;background-color: black;height: 70px;display: flex;">
		<div style="width: 4%;"><img style="width: 100%;" src="asset/img/Images/logo-QuizzSA.png">
		</div>
        
        <div style="width: 90%; color: white;text-align: center;">
        	<h3  style="margin-top: 20px;">Le plaisir de jouer</h3>
        </div>
	</header>

	<div id="container">
		<div style="width: 100%;height: 50px;background-color: #00BFFF; padding-top: 20px;color: white;">
			<h3 style="margin-left: 10px;" >Login Form</h3>
		</div>

		<div style="width: 100%;padding-top: 20px;">
			<form action="" method="post" style="width: 100%;margin-left: 10px;">
                <div style="width: 100%;  margin-top: 30px;">
                	<img src="asset/img/Images/Icones/ic-login.png" style="position: relative;left: 80%;">
					<input type="text" name="log" placeholder="Login" value="<?php echo $login; ?>" style="padding-left: 10px;width: 80%;height: 50px;background-color:#F5F5F5">
					<br><label style="width: 80%;height: 30px;color:red;margin-left: 3%;"><?php echo $msgLoginErreur ; ?></label>
                </div>
                <div style="width: 100%;  margin-top: 30px;">
                	<img src="asset/img/Images/Icones/ic-password.png" style="position: relative;left: 80%;">
					<input type="text" name="pass" placeholder="Password" value="<?php echo $password; ?>" style="padding-left: 10px;width: 80%;height: 50px;background-color:#F5F5F5">
					<br><label style="width: 80%;height: 30px;color:red;margin-left: 3%;"><?php echo $msgPasswordErreur; ?></label>
                </div>

                <div style="width: 100%;margin-top: 30px;margin-left:3%;display: flex;">
                	<input style="width: 20%;height: 50px;background-color:#00BFFF; color: white;" type="submit" name="cnx" value="Connexion">
                	<a href="views/nouveaus/inscrip.php" style="text-decoration: none;margin-top: 15px;margin-left: 30px;color:#A9A9A9;">S’inscrire pour jouer</a>
                </div>
				
			</form>
			
		</div>


		
	</div>

</body>
</html>