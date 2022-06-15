<?php require_once('connexion.php');
session_start();
if(!$_SESSION['login']){
	header("location:login.php");
}else{

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ajouter une Voiture</title>
<link rel="stylesheet" href="loccar_style.css">

</head>

<body style="background-color: #F30;">
<div id="container">
	
	<form name="formadd" action="" method="post" class="formulaire" enctype="multipart/form-data">
		<h2 style="align=center">Ajouter Nouvelle Voiture...</h2>
                
                <label><b>Immatriculation</b></label>
                <input class="zonetext" type="text" placeholder="Entrer Immatriculation" name="txtImm" style="border-radius: 20px;" required>

                <label><b>Marque</b></label>
                <input class="zonetext" type="text" placeholder="Entrer la Marque" name="txtMarque" style="border-radius: 20px;" required>

               <label><b>Prix de Location par jour </b></label>
                <input class="zonetext" type="text" placeholder="Entrer Prix de Location par heure" style="border-radius: 20px;" name="txtPh" required>
                <label><b>Prix de Location par km </b></label>
                <input class="zonetext" type="text" placeholder="Entrer Prix de Location par km " style="border-radius: 20px;" name="txtPk" required>
                
                <label><b>Photo</b></label>
                <input class="zonetext" type="file" placeholder="choisir une photo" name="txtphoto" style="border-radius: 20px;" required>
                
                <input type="submit" id='submit' class="submit" name="btadd" value='Ajouter' style="border-radius: 50px;">
                
		<p><a href="acceuil.php" class="submit" style="border-radius: 50px;">Tableau de Bord</a></p>
                
                <label style="text-align: center;color: #360001;">
                	
                	<?php
	if(isset($_POST['btadd']))
	{
		$imm=$_POST['txtImm'];
		$marque=$_POST['txtMarque'];
		$prixlh=$_POST['txtPh'];
		$prixlk=$_POST['txtPk'];		
  	$image = $_FILES['txtphoto']['tmp_name'];
  	
		//$image_text = mysqli_real_escape_string($cnloccar, $_POST['txtphoto']);

  	$target = "images/".$_FILES['txtphoto']['name'];
//$target = "images/".basename($image);
		if (move_uploaded_file($image,$target)) {
  		$msg = "Image téléchargée avec succès";
  	}else{
  		$msg = "Impossible de télécharger l'image";
  	}
  	$sql = "INSERT INTO automobile (IMM, marque,PRIX_h,PRIX_km,photo) VALUES ('$imm','$marque','$prixlh','$prixlk', '$target')";
		$resultat=mysqli_query($cnloccar,$sql);

if($resultat)
{
	echo "Insertion des données validés";
}else{
	echo "Echec d'insertion des données !";
}
  	
  }
  
		
		
	?>
                	
                	
                	
                </label>
	</form>
	
	
	
</div>


</body>
</html>
<?php  }?>