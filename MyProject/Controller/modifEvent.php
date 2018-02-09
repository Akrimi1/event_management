<?php 
include "../Class/evenement.class.php";
$E=new Evenement();
$E->activite=$_POST['activite'];
$E->descr=$_POST['descr'];
$E->dateevent=$_POST['dateevent'];
$E->nbrmax=$_POST['nbrmax'];
$id=$_POST['id'];
$E->modifEvenement($id);
header('location:../View/admin/evenement.php')
?>