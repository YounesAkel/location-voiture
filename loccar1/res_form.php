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
    height: 423px;
    width: 800px;
    margin-top: 216px;
    position:relative;
    font-size:large;
    border-radius: 65px;
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

if(isset($_POST['btres'])){
                $fichier=$_FILES['cin']['tmp_name'];
                $reserv=htmlspecialchars($_POST['reserv']);
                $email=htmlspecialchars($_POST['email']);
                $num=htmlspecialchars($_POST['num']);
                $rsfrom=htmlspecialchars($_POST['res_from']);
                $rsto=htmlspecialchars($_POST['res_to']);
                $vdep=htmlspecialchars($_POST['vdep']);
                $var=htmlspecialchars($_POST['var']);
                $nbrj=htmlspecialchars($_POST['nbrj']);
               $target="CIN/".$_FILES['cin']['name'];
               $res=$_GET['cmd'];

                $lres=ltrim($res,"images/");
                $rres=rtrim($lres,".jpg");
               
               if(preg_match("#^0[67][0-9]{8}$#", $num)){
                if(move_uploaded_file($fichier,$target)){//télécharger la carte nationnal dans le fichier CIN
                    echo 'la carte a bien ete envoyé'.'<br>';
                }else{
                    echo 'opération failed'.'<br>';
                }
             
                $sql="INSERT into clients (CIN,email,numero_de_telephone,type_reservation,date_depart,date_fin,ville_depart,ville_fin,resservation)
                /**pour inserer, modifier un fichier ou une images dans la base de donnée on passe le chemin dans la requéte SQL */
                                    values('$target','$email','$num','$reserv','$rsfrom','$rsto','$vdep','$var','$rres')";//insrer la carte nationnal dans la base de donnée
                $resultat=mysqli_query($cnloccar,$sql);

if($resultat){
    echo 'la reservation a bien été effectuer'.'<br>'.
     'vous pouvez nous rendre visite pour là récupérer '.'<br>'.
     'merci pour votre confiance,'.'<br>'.
     ' notre equipe vous souhaite bon route'.'<br>';
     echo 'le prix total est:'.$nbrj * 200;
}else{
    echo 'une erreure est survenue'.'<br>';
}
}else{
    echo 'erreure:numero de telephone doit commencer par 06 ou 07 suivi par 8 chiffres';
}
               /* echo $reserv.'<br>';
                echo $rsfrom.'<br>';
                echo $email.'<br>';
                echo $num.'<br>';
                echo $rsto.'<br>';
                echo $vdep.'<br>';
                echo $var.'<br>';
                echo $execcres.'<br>';*/
}               
  
                ?>
</div>

<p><a href="index.php" class="submit" id="sub" style="border-radius: 50px;">HOME</a></p>
</div>
</div>
</body>
</html>