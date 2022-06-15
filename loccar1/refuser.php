<?php require('connexion.php');?>
<!doctype html>
<html>
<head>
    <title>reservation</title>
    <link rel="stylesheet" href="loccar_style.css">
    <style>

#cadre{
	border: 2px solid black;
    background-color: antiquewhite;
    height: 100px;
    width: 800px;
    margin-top: 216px;
    position:relative;
    font-size:large;
    border-radius: 65px;
    display:flex;
   line-height:50px;

}
#container{
    display:flex;
    justify-content:center;
    align-items:center;
    height:573px;
    width: 100%;
    margin-top: 0;
}
#sub{
    position:absolute;
    bottom:0;
    width: 120px;
    margin-left: -76px;
}
#message{
    margin-left: 73px;
    color: coral;
    font-family: cursive;
    margin-top: 20px;
}
    </style>
</hrad>
<body style="background-color: #F30;">
<div id="container">
<div id="cadre">
    <div id="message">
<?php

require_once('connexion.php');
if(isset($_GET['refuser'])){
   $txt='Refuser';
 $sql="UPDATE clients SET etat ='$txt' WHERE email ='".$_GET['refuser']."'";
 $resultat=mysqli_query($cnloccar,$sql);
 if($resultat){
   echo 'la reservation a été refuser';
 }else {
   echo 'requete invalide';   
 }
}
?>
</div>
<p style=" margin-left: 221px;"><a href="clients.php" class="submit" style="border-radius: 50px;">table de reservations</a></p>
</div>
</div>
</body>
</html>