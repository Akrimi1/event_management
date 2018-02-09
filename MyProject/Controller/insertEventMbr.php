<?php
include "../class/evenement.class.php";
$E=new Evenement();

$E->insertEvenementmembre($_GET['id']);
echo "Ajout Effectuée avec Succes";
header('location:../View/admin/evenement_mbr.php');
?>