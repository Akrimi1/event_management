<?php
require_once('../Class/session.class.php');
$sess=new Session();
$email=$_POST['email'];
$mdp=$_POST['mdp'];
$type=$_POST['type'];

$row=$sess->Rechsession($email, $mdp, $type);
$n=$row->fetchColumn(0);
if($n==0)
	header('location:../View/accueil/index.php');
else{
	$_SESSION['email']=$email;
	$_SESSION['mdp']=$mdp;
	$_SESSION['type']=$type;
	header('location:../View/menu.php');
}

?>