<?php 
include "../Class/evenement.class.php";
$E=new Evenement();
$E->suppEvenement($_GET['id']);
header('location:../view/admin/evenement.php');
?>
