<?php require('connexion.php');
session_start();
if(!$_SESSION['login']){

	header("location:login.php");
}
    else{
    
    ?>
<!doctype html>
<link rel="stylesheet" href="loccar_style.css">
<div id="container">
    <form name="formdelet" class="formulaire">
    <p><a href="acceuil.php" class="submit" style="border-radius: 50px;">Tableau de Bord</a></p>
<?php
 
if (isset($_GET['supCar'])) {

	$sup=(int) ($_GET["supCar"]);
	
    $reqDelete="DELETE FROM automobile WHERE IMM ='".$_GET["supCar"]."'";
	$resultat=mysqli_query($cnloccar,$reqDelete);
	
    }
 
  if($resultat)
  {
    echo "<label style='text-align: center;color: #360001;'>La suppression a été correctement effectuée" ;
  }
  else
  {
    echo "<label style='text-align: center;color: #360001;'>La suppression à échouée </label>" ;
  }
?>
</form>
</div>
<?php
} ?>