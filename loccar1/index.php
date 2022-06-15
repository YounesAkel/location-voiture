<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Location CAR...</title>
<link rel="stylesheet" href="loccar_style.css">
<style>
	header{height: 70px ; }
nav{height: 50px; width: 740px; position: relative; left: 760px;}
ul{height: 40px; display: flex; justify-content: center;}
nav ul li a{text-decoration: none; display: block; }
nav ul li{float:left;  list-style: none;   margin-left: 50px; padding-top: 5px;}
#contact_us{border: 1px solid black;  font-size: 15px;  border-radius: 5px;  height: 30px;  width: 100px; }
#contact_us>a{padding: 5px; padding-left: 15px;}
#logo{  width: 200px; position: absolute;}/*les styles ici sont appliqué juste sur la balise div*/
#logo img{  width: 30%;  margin-left: 39px; border-radius:50px;}/*les styles ici sont appliqué sur l'image*/
#A a{color: black;}/*on peut donné aussi le méme id au differents balises*/
</style>


</head>

<body>
<div id="entete">
<!-- ----------------------------------------------------Login ---------------------->

<!--<a href="type_conn.html" class="login" >Login</a>-->
<header id="header">
        <div id="logo"><img src="images/logo.jpg" alt="logo"></div>
        <nav>
            <ul>
                <li  id="contact_us"><a href="ABOUT-US/about-us.html">About Us</a></li>
                <li  id="contact_us"><a href="type_conn.html">login</a></li>
                <li id="contact_us"><a href="contac-us/contact form.html">Contact Us</a></li>
            </ul>
        </nav>
    </header>

 <!-- ----------------------------------------------------------------------------------------------->


	<video class="video_entete" autoplay loop >
		<source   src="images/car.mp4" type="video/mp4">
	</video>
	<p class="nomsite">Location CAR</p>
	<div id="formauto">
		<form name="formauto" action="" method="post">
			<input type="text" name="motcle" placeholder="Recherche par Marque" id="motcle">
			<input type="submit" name="btsubmit" value="Recherche" class="btfind">
		</form>
		
	</div>	
</div>


<div id="articles">
	
<?php
	$conn=mysqli_connect("localhost","root","","LOCCAR");
	echo '<h1 style="text-align:center; text-decoration:underline; color: #F30;">'.
	'la liste des automobiles disponible:'.'</h1>';
	$reqselect="SELECT * from automobile";
	$resultat=mysqli_query($conn,$reqselect);
	if (isset($_POST['btsubmit']))
	{
		if(!empty($_POST['motcle'])){
		$mc=$_POST['motcle'];
		$reqselect="SELECT * from automobile where MARQUE like '%$mc%'";
		$resultat=mysqli_query($conn,$reqselect);
	$nbr=mysqli_num_rows($resultat);
	echo "<p><b> ".$nbr."</b> Resultat de votre Recherche...</p>";}
	else{
		
		
		$reqselect="SELECT * from automobile";
		$resultat=mysqli_query($conn,$reqselect);
	}
}
	
	while($ligne=mysqli_fetch_array($resultat))
	{
	?>
	<div id="auto" style="width: 250px;">
		<img src="<?php echo $ligne['photo']; ?>"><br>
		<?php echo '<b style="color: #F30;">'.'MATRICULATION:'.'</b>'.'&nbsp;&nbsp;'.$ligne['IMM']; ?><br>
		<?php echo '<b style="color: #F30;">'.'MARQUE:   '.'</b>'.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ligne['marque']; ?><br>
		<?php echo '<b style="color: #F30;">'.'prix par jour:    '.'</b>'.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ligne['prix_h']; ?><br>
		<?php echo '<b style="color: #F30;">'.'prix  par kilométre:   '.'</b>'.'&nbsp;&nbsp;&nbsp;'.$ligne['prix_km']; ?><br>
		<p ><a class="reserver" href="reserver.php?res=<?php echo $ligne['photo']?>">reserver</a></p>
	</div>
	
	
<?php } ?>
	
</div>




</body>
</html>