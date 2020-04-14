<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="asset/css/auth.css?<?php echo time();?>">
    <link rel="stylesheet"  href="asset/css/css1024.css?<?php echo time();?>" type="text/css" />
</head>
<body style="background-image: url('asset/img/Images/img-bg.jpg');">

	<header  style=" width: 100%;background-color: black;height: 70px;display: flex;">
		<div id="log" ><img style="width: 100%;" src="asset/img/Images/logo-QuizzSA.png">
		</div>        
        <div style="width: 90%; color: white;text-align: center;">
        	<h3  style="margin-top: 20px;">Le plaisir de jouer</h3>
        </div>
	</header>
	<div id="container">
		<div style="width: 100%;height: 50px;padding-top: 20px;color: white;">
			<h1 style="margin-left: 10px;color:#2F4F4F ;" >S’INSCRIRE</h1>
			<h3 style="margin-left: 10px;color:#A9A9A9;">Pour tester votre niveau de culture général</h3>
		</div>
		<div style="width: 100%;padding-top: 20px;">
			<form style="width: 100%;margin-left: 10px; display: flex;">
                <div style="width:70% ">
                <div style="width: 100%;  margin-top: 30px;">
                	<label style="color:#A9A9A9;">Prenom</label><br>
					<input type="text" name="log" style="padding-left: 10px;width: 80%; margin-top: 10px;height: 40px;background-color:#F5F5F5">
                </div>
                <div style="width: 100%;  margin-top: 30px;">
                	<label style="color:#A9A9A9;">Nom</label><br>
					<input type="text" name="log" style="padding-left: 10px;width: 80%; margin-top: 10px;height: 40px;background-color:#F5F5F5">
                </div>

                <div style="width: 100%;  margin-top: 30px;">
                	<label style="color:#A9A9A9;">Login</label><br>
					<input type="text" name="log" style="padding-left: 10px;width: 80%; margin-top: 10px;height: 40px;background-color:#F5F5F5">
                </div>

                <div style="width: 100%;  margin-top: 30px;">
                	<label style="color:#A9A9A9;">Password</label><br>
					<input type="text" name="log" style="padding-left: 10px;width: 80%; margin-top: 10px;height: 40px;background-color:#F5F5F5">
                </div>

                <div style="width: 100%;  margin-top: 30px;">
                	<label style="color:#A9A9A9;">Confirmer Password</label><br>
                	
					<input type="text" name="log" style="padding-left: 10px;width: 80%;margin-top: 10px;height: 40px;background-color:#F5F5F5">
                </div>                                                                         	
                <div style="width: 70%;margin-top: 30px;margin-left:3%;display: flex;">
                	<input style="width: 20%;height: 50px;background-color:#00BFFF; color: white;" type="submit" name="cnx" value="Connexion">
                	<a href="" style="text-decoration: none;margin-top: 15px;margin-left: 30px;color:#A9A9A9;">S’inscrire pour jouer</a>
                </div>
             </div>
              <div id="block-img">
              	  <img  src="asset/img/Images/bg-interface-admin.jpg"><br>
              	  <h3 style="margin-left:20%;margin-top: 20px;">Avatar du joueu</h3>
              </div>

			</form>
		</div>
	</div>
</body>
</html>