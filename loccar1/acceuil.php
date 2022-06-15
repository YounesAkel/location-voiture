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
<title>Tableau de Bord...</title>
<link rel="stylesheet" href="loccar_style.css" type="text/css">
<meta name="viewport" content="width=width-devise,initial-scale=1.8">
        <meta charset="utf-8">
        <!--CSS car ental-->
        <link rel="stylesheet" href="car_rental.css" type="text/css">
        <!--SCRIPT et CSS des fonts awesomes (les icons)-->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap" rel="stylesheet">
     
<style>
	.myphoto{
		width: 50px;height: 50px;border-radius: 50%;border: 1px solid;
	}
	.navigation{
		background-color:#ff3300de;
	}
	.navigation ul li a:hover{
		background-color:#ff3300;
	}
	</style>
</head>

<body>
<!--************************side barre***************************-->
<div class="navigation" >

<ul>

    <!----liste item1-->
    <li>
        <a href="index.php" target="_blank">
            <span class="icon">
                <ion-icon name="home-outline"></ion-icon>
            </span>
            <span class="titre">Home</span>
        </a>

    </li>
    <!----liste item2-->
    <li>
        <a href="Ajouter.php" >
            <span class="icon">
                <ion-icon name="car-sport-sharp"></ion-icon>
            </span>
            <span class="titre">add car</span>
        </a>

    </li>
   
    
    <li>
        <a href="clients.php">
            <span class="icon">
                <ion-icon name="chatbubble-outline"></ion-icon>
            </span>
            <span class="titre">reservations liste</span>
        </a>

    </li>
    <!--liste item5-->
    <li>
        <a href="admins.php" >
            <span class="icon">
                <ion-icon name="help-outline"></ion-icon>
            </span>
            <span class="titre">Add Admin</span>
        </a>

    </li>
  

</ul>

</div>
<!--*********************main*********************************-->

<div class="topbar">
    <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
    </div>
</div>
   <!--*******************ici integration de javascript************-->
   <script src="car_rental.js" type="text/javascript"> </script>
   <!--************************************************************-->
<!--********************************************-->
<div id="global">

<div id="profil">
<?php
	
	$req="SELECT * from utilisateur where logine='".$_SESSION['login']."'";
	$resultat=mysqli_query($cnloccar,$req);
	$ligne=mysqli_fetch_assoc($resultat);
	?>
	<img class="myphoto" src="<?php echo $ligne['my_photo'];?>"><br><br>
	<?php echo "Bonjour et Bienvenue ".$_SESSION['login']."<br>";?>
<br>	

</div>
<div class="deconexion" style="height: 100px; margin-top: 20px;">
    <a href="deconnexion.php" class="deconnexion">Se Deconnecter</a>
</div>
</div>

	<div id="tableaubord" style="margin-left: 210px;">

	<?php include("tableauBord.php");	?>
    </div> 

</body>
</html>
<?php  }?>