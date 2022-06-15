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

#container{
  display: flex;
  flex-direction: column;
justify-content: center;
align-items:center;
width: 1200px;
background-color:white;
border-radius:15px;
}
	</style>

</head>

<body style=" background-color: #F30;">
<div id="container">
<p ><h1 style="text-align:center;"><b >Liste des RESERVATIONS ...</b></h1>
 <?php
	
		
	$reqselect="SELECT * from clients";

	$resultat=mysqli_query($cnloccar,$reqselect);
	
	$nbr=mysqli_num_rows($resultat);
	echo "<p>Total <b> ".$nbr."</b> clients</p>";
	  ?>
      <table style="display:flex; justify-content:center; align-items:center;">
  <tbody>
    <tr>
      <th>CIN</th>
      <th>EMAIL</th>
      <th>numéro de téléphone</th>
      <th>type de reservation</th>
      <th>date de départ</th>
      <th>date fin</th>
      <th>ville de départ</th>
      <th>ville de fin</th>
      <th>reservation</th>
     <th>action 1</th>
     <th>action 2</th>
     <th>etat de reservation</th>
    </tr>
    
   
	<?php
	while($ligne=mysqli_fetch_assoc($resultat))
	{
	?>
	   
    <tr>
      <td><img class="photocar" src="<?php echo $ligne['CIN']; ?>"></td>
      <td><?php echo $ligne['email']; ?></td>
      <td><?php echo $ligne['numero_de_telephone']; ?></td>
      <td><?php echo $ligne['type_reservation']; ?></td>
      <td><?php echo $ligne['date_depart']; ?></td>
      <td><?php echo $ligne['date_fin']; ?></td>
      <td><?php echo $ligne['ville_depart']; ?></td>
      <td><?php echo $ligne['ville_fin']; ?></td>
      <td><?php echo $ligne['resservation']; ?></td>
     <td><span id="accepter" ><a href="accepter.php?accepter=<?php echo $ligne['email'];?>" style="color: white;" >Accepter</a></span></td>
     <td><span id="refuser" ><a href="refuser.php?refuser=<?php echo $ligne['email'];?>" style="color: white;">Refuser</a></span></td>
     <td><?php echo $ligne['etat']; ?></td>
    
    </tr>
    <?php } ?>
  </tbody>
</table>
<p><a href="acceuil.php" class="submit" style="border-radius: 50px;">Tableau de Bord</a></p>
  </div>

</body>
</html>