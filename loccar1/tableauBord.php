<?php require_once('connexion.php');?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Tableau de Bord...</title>
<link rel="stylesheet" href="loccar_style.css">
<style>
	

.photocar{
	width: 130px;height: 100px;border-radius: 5%;border: 1px solid;
}

	</style>
</head>

<body>

<p><h1><b>Liste des Voiture ...</b></h1>
 <?php
	
		
	$reqselect="SELECT * from automobile";

	$resultat=mysqli_query($cnloccar,$reqselect);
	
	$nbr=mysqli_num_rows($resultat);
	echo "<p>Total <b> ".$nbr."</b> Voitures</p>";
	  ?>
	</p>
	<p><a href="Ajouter.php"><img src="images/ajouter.png" width="50px" height="50px"></a></p>
<table width="100%" style=" border:1">
  <tbody>
    <tr>
      <th>Immatriculation</th>
      <th>Marque</th>
      <th>Prix par jour</th>
      <th>Prix par kilométre</th>
      <th>Photo</th>
      <th>Supprimer</th>
      <th>Modifier</th>
    </tr>
    
   
	<?php
	while($ligne=mysqli_fetch_assoc($resultat))
	{
	?>
	   
    <tr>
      <td><?php echo $ligne['IMM']; ?></td>
      <td><?php echo $ligne['marque']; ?></td>
      <td><?php echo $ligne['prix_h']; ?></td>
      <td><?php echo $ligne['prix_km']; ?></td>
      <td><img class="photocar" src="<?php echo $ligne['photo']; ?>"></td>
      <td><a href="supprimer.php?supCar=<?php echo $ligne['IMM']; ?>"><img src="images/supprimer.png" width="50px" height="50px"></a></td>
      <td><a href="modifier.php?mod=<?php echo $ligne['IMM']; ?>"><img src="images/modifier.png" width="50px" height="50px"></a></td>

    </tr>
    <?php } ?>
  </tbody>
</table>



</body>
</html>