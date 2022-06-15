<?php require_once('connexion.php');
session_start();
if(!$_SESSION['login']){
	header("location:login.php");}
	else{
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modifier Car</title>
<link rel="stylesheet" href="loccar_style.css">

</head>

<body style="background-color: #F30;">


<div id="container">
	
	<form name="formadd" action="" method="post" class="formulaire" enctype="multipart/form-data">
		<h2 style="align:center">Mettre a Jour une  Voiture...</h2>
                
                <label><b>Immatriculation</b></label>
                <input class="zonetext" type="text" name="txtImm" value="<?php echo $_GET['mod'] ?>" >

                <label><b>Marque</b></label>
                <input class="zonetext" type="text" placeholder="Entrer la Marque" name="txtMarque" required>

               <label><b>Prix de Location par jour </b></label>
                <input class="zonetext" type="text" placeholder="Entrer Prix de Location par heure" name="txtPl1" required>

                <label><b>Prix de Location par KM </b></label>
                <input class="zonetext" type="text" placeholder="Entrer Prix de Location par KM" name="txtPl2" required>
                
                <label><b>Photo</b></label>
                <input class="zonetext" type="file" placeholder="choisir une photo" name="txtphoto" required>
                
                <input type="submit" id='submit' class="submit" name="btmod" value='Mettre a Jour' >
                
		<p><a href="acceuil.php" class="submit" >Tableau de Bord</a></p>
                
                <label style="text-align: center;color: #360001;">
                	
                	<?php
	if(isset($_POST['btmod']))
	{
		$imm=$_POST['txtImm'];
		$marque=$_POST['txtMarque'];
		$prixlh=$_POST['txtPl1'];
		$prixlk=$_POST['txtPl2'];
		$modifier=(int) ($_GET["mod"]);
		
  	$image = $_FILES['txtphoto']['tmp_name'];
  	
		
  	$target = "images/".$_FILES['txtphoto']['name'];

		if (move_uploaded_file($image,$target)) {
  		$msg = "Image téléchargée avec succès";
  	}else{
  		$msg = "Impossible de télécharger l'image";
  	}
  	$sql = "UPDATE automobile SET marque = '$marque', prix_h = '$prixlh' ,prix_km = '$prixlk' , photo ='$target' WHERE IMM ='".$_GET["mod"]."'";
		$resultat=mysqli_query($cnloccar,$sql);

if($resultat)
{
	echo "Mise a jour des données validés";
}else{
	echo "Echec de modification des données !";
}
  	
  }
  
	
	?>
          	
                </label>
	</form>
	
	
	
</div>



   
 
</body>
</html>
<?php
}
?>