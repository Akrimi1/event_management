<?php
include "../Class/session.class.php";
$sess=new Session();
$nom=$_POST['nom'];
$email=$_POST['email'];
$mdp=$_POST['mdp'];
$tel=$_POST['tel'];
$type=$_POST['type'];
$sess->insertSession();
echo "Inscription terminer";
header('location:../View/accueil/connexion.php#connexion');
?>