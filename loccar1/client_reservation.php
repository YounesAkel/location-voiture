<?php require_once('connexion.php');?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Tableau des clients</title>
<link rel="stylesheet" href="loccar_style.css">
<style>
	

.photocar{
	width: 130px;height: 100px;border-radius: 5%;border: 1px solid;
}
#accepter{
  background-color:green;
  border-radius: 15px;
  padding: 10px;px;
}
#refuser{
  background-color:red;
  border-radius: 15px;
  padding: 10px;
}
td{
  text-align: center;
}
	</style>

</head>

<body>

<p ><h1 style="text-align:center;"><b >Mes RESERVATIONS ...</b></h1>

 <?php
	
		
	$reqselect="SELECT * from clients where email ='".$_POST['txtlogin']."'";

	$resultat=mysqli_query($cnloccar,$reqselect);
	/*
	$nbr=mysqli_num_rows($resultat);
	echo "<p>Total <b> ".$nbr."</b> clients</p>";-->*/
	  ?>
      <table style="display:flex; justify-content:center; align-items:center;">
  <tbody>
    <tr>
      <th>EMAIL</th>
      <th>numéro de téléphone</th>
      <th>type de reservation</th>
      <th>date de départ</th>
      <th>date fin</th>
      <th>ville de départ</th>
      <th>ville de fin</th>
     <!-- <th>reservation</th>-->

     <th>etat de reservation</th>
    </tr>
    
   
	<?php
	while($ligne=mysqli_fetch_assoc($resultat))
	{
	?>
	   
    <tr>
      <td><?php echo $ligne['email']; ?></td>
      <td><?php echo $ligne['numero_de_telephone']; ?></td>
      <td><?php echo $ligne['type_reservation']; ?></td>
      <td><?php echo $ligne['date_depart']; ?></td>
      <td><?php echo $ligne['date_fin']; ?></td>
      <td><?php echo $ligne['ville_depart']; ?></td>
      <td><?php echo $ligne['ville_fin']; ?></td>
     <td><?php echo $ligne['etat']; ?></td>
    
    </tr>
    <?php } ?>
  </tbody>
</table>
<p><a href="index.php" class="submit" style="border-radius: 50px;">Home</a></p>


</body>
</html>