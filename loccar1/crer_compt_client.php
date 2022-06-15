<?php require_once('connexion.php');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
<link rel="stylesheet" href="loccar_style.css">
<style>
	body{
    background: #F30;
}

	</style>
</head>

<body>

<div id="container">
            <!-- zone de connexion -->
            
            <form action="" method="post" class="formulaire" style="border-radius: 10px;">
                <h2>Creer un compt Client</h2>
                
                <label><b>Nom d'utilisateur</b></label>
                <input class="zonetext" type="text" placeholder="Entrer le nom d'utilisateur" name="txtlogin"  style="border-radius: 10px;" required>

                <label><b>Mot de passe</b></label>
                <input class="zonetext" type="password" placeholder="Entrer le mot de passe" name="txtpw"  style="border-radius: 10px;" required>


                <input type="submit" id='submit' class="submit" name="btcrer" value='creer compte' style="border-radius: 50px;" >
               
                <p><a href="index.php" class="submit" style="border-radius: 50px;">HOME</a></p>
                <?php
	if(isset($_POST['btcrer']))
	{
		$login=$_POST['txtlogin'];
		$pw=$_POST['txtpw'];

  	$sql = "INSERT INTO clients_login (login_client,password_client) VALUES ('$login','$pw')";
		$resultat=mysqli_query($cnloccar,$sql);

if($resultat)
{
	echo "votre compt est crer";
}else{
	echo "Echec de creation du compt !";
}
  	
  }
  
		
		
	?>
                	
                	
                	
                </label>
            </form>
        </div>
</body>
</html>