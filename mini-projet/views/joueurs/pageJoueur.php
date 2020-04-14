<?php  
    session_start();
    include('../../src/fonctions.php');
    
    if (isset($_POST['disconnec'])) {
       unset($_SESSION['user']);
    }
    if (!isset($_SESSION['user'])) {
        header('location:../../index.php');
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="../../asset/css/page.css?<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="../../asset/css/joueur.css?<?php echo time();?>">

</head>

<body>
    <div class="header">
        <img src="../../images/logo-QuizzSA.png" alt="logo">
        <h2>Le plaisir de jouer</h2>
    </div>
    <div class='corps'>
        <div class='entete'>
        	    <div class="photoj">
                    <?php $tof = $_SESSION['user']['img']; ?>
                    <img id="image_profil" src="<?php echo $tof ?>" alt="image_profil">
                    <div class="descriptionj">
                        <em id="nom"><?php echo $_SESSION['user']['prenom'];?></em>
                        <em id="prenom"> <?php echo $_SESSION['user']['nom'];?></em>
                </div>
                </div>
            <h2>BIENVENUE SUR LA PLATEFORME DE JEU DE QUIZZ JOUER ET TESTER VOTRE NIVEAU DE CULTURE GÉNÉRALE </h2>
            <form action="" method="post"><input type="submit" id='discon' name="disconnec" value="Déconnexion"></form>
        </div>

        
        </div>  
        
   
</body>
</html>