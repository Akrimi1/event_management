<?php
require_once '../Class/session.class.php';
$sess = new session();
if(isset($_SESSION['email'] ) and isset($_SESSION['mdp']) and isset( $_SESSION['type']=="Admin"))
	header('location:View/admin/index.php');
	
else
	if(isset($_SESSION['email'] ) and isset($_SESSION['mdp']) and isset( $_SESSION['type']=="Membre"))
		header('location:View/membre/membre.php');
	else
		header('location:View/accueil/index.php');
	?>