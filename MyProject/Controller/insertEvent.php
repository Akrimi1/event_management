<?php
include "../Class/evenement.class.php";
$E=new Evenement();
$E->activite=$_POST['activite'];
$E->descr=$_POST['descr'];
$E->dateevent=$_POST['dateevent'];
$E->nbrmax=$_POST['nbrmax'];
$E->insertEvenement();
echo "Ajout Effectuée avec Succes";
header('location:../View/admin/evenement.php');
?>