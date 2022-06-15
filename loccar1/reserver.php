<?php require('connexion.php');?>
<!doctype html>
<html>
    <head>
        <title>reservation</title>
<link rel="stylesheet" href="loccar_style.css">
<script>

function reserver(x){
   
    if(x==0){
        document.getElementById('res_h').style.display="block";
        document.getElementById('res_k').style.display="none";
            
    }else{
        document.getElementById('res_h').style.display="none";
        document.getElementById('res_k').style.display="block";
    }
    return;
}


    </script>
    

</head>
<body style="background-color: #F30;">


<div id="container" style="margin-top:50px; width:30%;">
<form name="formadd" action="res_form.php?cmd=<?php echo $_GET['res'];?>" method="post" class="formulaire" enctype="multipart/form-data">
<h2 style="align=center">Reserver votre Voiture...</h2>
<?php
if(isset($_GET['res'])){
    $reserv=(int) $_GET['res'];
    $reqserv="SELECT photo from automobile where IMM='".$_GET['res']."'";
    $exeecres=mysqli_query($cnloccar,$reqserv);

   
}
if($exeecres){
    
    echo "<img class='car_res' style='	width: 412px; height: 300px;margin: 5px;' src= '".$_GET['res']."'";
}else{
    echo 'impossible d afficher l image';
}


?>
<br><br><br>
		

                <label><b>Introduit votre carte nationale ici:</b></label>
                <input class="zonetext" type="file" placeholder="Entrer votre carte nationnal" name="cin" style="border-radius: 20px;" required>
         
                <br><br>

                <label><b>entrer vote nom d'utilisateur:</b></label>
                <input class="zonetext" type="text" placeholder="votre adresse mail" name="email" style="border-radius: 20px;" required>
         si vous ne disposer pas d'un vous pouvez <a href="crer_compt_client.php">creer un compt</a>
                <br><br>

                <label><b>entrer votre numéro de telephone:</b></label>
                <input class="zonetext" type="text" placeholder="votre numéro de telephone" name="num" style="border-radius: 20px;" required>
         
                <br><br>
                <label><b>s'il vous plait choisi le type de reservation</b></label>
                <label for="heure"><br><br>
			<input type="radio" name="reserv" value="par_jour" id="heure" onclick="reserver(0)" >
			reservation par jour
		 </label>
         <label for="km">
			<input type="radio" name="reserv" value="par_KM" id="km" onclick="reserver(1)" >
			reservation par KM
		 </label> <br><br><br>


            <div  id="res_h" style="display:none;" >
            <input type="texte" placeholder="nbr de jour" class="zonetext" name="nbrj"><br><br><br>
         <label for="res_h">
         from &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input  type="datetime-local" name="res_from" id='nbrh'value="2017-06-01T08:30" ><br><br><br>
         to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input  type="datetime-local" name="res_to" id='nbrh' value="2017-06-01T08:30" ><br><br><br>
       
         </label><br>
            </div>

            <div id="res_k" style="display:none;" >
         <label for="res_k">
         spécifier la ville de départ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <!--<input  type="text" name="res_h" id='nbrh' style=" height: 24px; border-radius: 20px;" ><br><br><br>-->
         <select name="vdep" id="vdep" style="border-radius: 20px; width: 143px; height: 30px; text-align:center;">
             <option value="agadir">agadir
             <option value="marrakech">marrakech
             <option value="tanger">tanger
             <option value="titouan">titouan
             <option value="chefchaoun">chefchaoun
             <option value="nador">nador
             <option value="rabat">rabat
             <option value="casa">casa blanca
             <option value="taza">taza
             <option value="kenitra">kenitre
             <option value="warzazat">warzazat
             <option value="dakhla">dakhla
             <option value="fas">fas
             <option value="tiznite">tiznite
         </select><br><br><br>


         spécifier le ville de destination:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <!--<input  type="text" name="res_h" id='nbrh' style=" height: 24px; border-radius: 20px;" ><br><br><br>-->
         <select name="var" id="var" style="border-radius: 20px; width: 143px; height: 30px; text-align:center;">
         <option value="agadir">agadir
             <option value="marrakech">marrakech
             <option value="tanger">tanger
             <option value="titouan">titouan
             <option value="chefchaoun">chefchaoun
             <option value="nador">nador
             <option value="rabat">rabat
             <option value="casa">casa blanca
             <option value="taza">taza
             <option value="kenitra">kenitre
             <option value="warzazat">warzazat
             <option value="dakhla">dakhla
             <option value="fas">fas
             <option value="tiznite">tiznite
         </select><br><br><br>
         </label>
            </div>
                
            
        <input type="submit" id='submit' class="submit"  name="btres" value='Reserver' style="border-radius: 50px;">
                
		<p><a href="index.php" class="submit" style="border-radius: 50px;">HOME</a></p>
      <!--  <label style="text-align: center;color: #360001;">-->
        <?php
        /*
if(isset($_POST['btres'])){
                $fichier=$_FILES['cin']['tmp_name'];
                $reserv=htmlspecialchars($_POST['reserv']);
                $email=htmlspecialchars($_POST['email']);
                $num=htmlspecialchars($_POST['num']);
                $rsfrom=htmlspecialchars($_POST['res_from']);
                $rsto=htmlspecialchars($_POST['res_to']);
                $vdep=htmlspecialchars($_POST['vdep']);
                $var=htmlspecialchars($_POST['var']);
               $target="CIN/".$_FILES['cin']['name'];
                $cmd=$_GET['res'];
               
               if(preg_match("#^0[67][0-9]{8}$#", $num)){
                if(move_uploaded_file($fichier,$target)){//télécharger la carte nationnal dans le fichier CIN
                    echo 'la carte a bien ete envoyé'.'<br>';
                }else{
                    echo 'opération failed'.'<br>';
                }
                
                $sql="INSERT into clients (CIN,email,numero_de_telephone,type_reservation,date_depart,date_fin,ville_depart,ville_fin,resservation)*/
                /**pour inserer, modifier un fichier ou une images dans la base de donnée on passe le chemin dans la requéte SQL */
                                   /* values('$target','$email','$num','$reserv','$rsfrom','$rsto','$vdep','$var','$cmd')";
                $resultat=mysqli_query($cnloccar,$sql);
if($resultat){
    echo 'la reservation a bien été effectuer'.'<br>'.
     'vous pouvez nous rendre visite pour là récupérer '.'<br>'.
     'merci pour votre confiance,'.'<br>'.
     ' notre equipe vous souhaite bon route';
}else{
    echo 'une erreure est survenue'.'<br>';
}
}else{
    echo 'erreure:numero de telephone doit commencer par 06 ou 07 suivi par 8 chiffres';
}*/
              /*  echo $reserv.'<br>';
                echo $rsfrom.'<br>';
                echo $email.'<br>';
                echo $num.'<br>';
                echo $rsto.'<br>';
                echo $vdep.'<br>';
                echo $var.'<br>';
                echo $cmd.'<br>';*/
//}               
  
                ?>

    <!--    </label>-->
</form>

</div>
<body>
<html>
