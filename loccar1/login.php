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
                <h1>Admin</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input class="zonetext" type="text" placeholder="Entrer le nom d'utilisateur" name="txtlogin" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email'];?>" style="border-radius: 10px;" required>

                <label><b>Mot de passe</b></label>
                <input class="zonetext" type="password" placeholder="Entrer le mot de passe" name="txtpw" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'];?>" style="border-radius: 10px;" required>
               
                <input type="checkbox" name="check" id="check" >
        		<label for="check">se souvenir de moi</label><br><br>

                <input type="submit" id='submit' class="submit" name="btlogin" value='LOGIN' style="border-radius: 50px;" >
                <p><a href="index.php" class="submit" style="border-radius: 50px;">HOME</a></p>
                 <?php 
  if(isset($_POST['btlogin'])){
$req="SELECT * from utilisateur where logine='".$_POST['txtlogin']."' and motPasse='".$_POST['txtpw']."'";
if($resultat=mysqli_query($cnloccar,$req)){
$ligne=mysqli_fetch_assoc($resultat);//tester la requete sur la table utilisateur
if($ligne!=0)
{
session_start();
$_SESSION['login']= $_POST['txtlogin'];
//echo "Bienvenue".$_SESSION['login'];
if(isset($_POST['check'])){
	setcookie('email', $_SESSION['login'], time() + 365*24*3600, null, null, false, true);//cette cookies sera expirer dans un ans
	//setcookie(name, value, expire, path, domain, secure, httponly);
	setcookie('password', $_POST['txtpw'], time() + 365*24*3600, null, null, false, true);
}
	header("location:acceuil.php");
}
else {
echo "<font color='#F0001D'>Login ou mot des passe est invalide !!!!</font>";
} } }
?>
            </form>
        </div>
</body>
</html>