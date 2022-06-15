<?php
/******connection vers phpmyadmin */
$conn=mysqli_connect("localhost","root","");
if(!$conn){

    echo 'failed connection:'.mysqli_connect_error();
}else{
    echo 'la premiére connection est bien faite'.'<br>';
}
/**----creation de la base de donnée */
$reqdb='CREATE DATABASE LOCCAR';
$execdb=mysqli_query($conn,$reqdb);
if($execdb){
echo 'la base de donnée LOCCAR est créer'.'<br>';
}
/**---------connexion vers la base de donnée */
$conn1=mysqli_connect("localhost","root","","LOCCAR");
/*--------------creation et insertion dans la table automobile*/
$reqtab1='CREATE TABLE automobile (

        IMM varchar(50)  primary key,
        marque varchar(50),
        prix_h INTEGER ,
        prix_km INTEGER ,
        photo varchar(50)

)';
$exectab1=mysqli_query($conn1,$reqtab1);
if($exectab1){
    echo'la table automobile est crée'.'<br>';
}

$reqins1='INSERT INTO automobile values("111B26","FIAT500",300,500,"images/fiat500.jpg"),
                                      ("222D45","TIGUAN",200,600,"images/Tiguan.jpg"),
                                      ("333S67","nissane",400,700,"images/nissane.jpg"),
                                      ("444G55","AUDI",400,700,"images/AUDI-A2.jpg"),
                                      ("555D89","volswagen",400,700,"images/volkswagen.jpg"),
                                      ("666Y77","Peugeot",400,700,"images/Peugeot3008.jpg")';
$execins1=mysqli_query($conn1,$reqins1);
if($execins1){
    echo 'les voiture ont bien été inserer'.'<br>';
}
/*--------------creation et nsertion dans la table utilisateur*/
$reqtab2='CREATE TABLE utilisateur (
    logine varchar(50 )primary key,
    motPasse varchar(50),
    my_photo varchar(50) 
)';
$exectab2=mysqli_query($conn1,$reqtab2);
if($reqtab2){
    echo'la table utilisateur est crée'.'<br>';
}
$reqins2='INSERT INTO utilisateur values("younes","22222","images/user.png")';
$execins2=mysqli_query($conn1,$reqins2);
if($execins2){
    echo 'l utilisateur  a bien été inserer'.'<br>';
}
/*--------------creation et nsertion dans la table clients*/
$reqtab3='CREATE TABLE clients (
    CIN varchar(50 ) primary key,
    email varchar(50),
    numero_de_telephone integer,
    type_reservation varchar(50),
    date_depart datetime,
    date_fin datetime,
    ville_depart varchar(50),
    ville_fin varchar(50)
)';
$exectab3=mysqli_query($conn1,$reqtab3);
if($reqtab3){
    echo'la table client est crée'.'<br>';
}
/*$reqins3='INSERT INTO clients values("CIN/user.png","younes.akel@e-polytechnique.ma",0655443322,"par_h","2022-05-08T15:07","2022-05-10T19:10","agadir","agadir")';
$execins3=mysqli_query($conn1,$reqins3);
if($execins3){
    echo 'le client  a bien été inserer'.'<br>';
}*/
$addcol= 'ALTER TABLE clients ADD etat varchar(50)';
$execaddcol=mysqli_query($conn1,$addcol);

if($execaddcol){
    echo "la colonne reservation a bien ete ajoutr a la table clients";
}else{
    echo "colonne non ajouter";
}
/*$addcol1= 'ALTER TABLE clients ADD date_de_resservation varchar(50)';
$execaddcol1=mysqli_query($conn1,$addcol1);

if($execaddcol1){
    echo "la colonne date de reservation a bien ete ajoutr a la table clients";
}else{
    echo "colonne non ajouter";
}*/


?>













