<?php 
class Evenement{
	public $activite;
	public $descr;
	public $dateevent;
	public $nbrmax;
	public $event;

	public function __construct(){

	}
	public function __get($att){
		return $this->$att;
	}
	public function __set($att ,$val){
		$this->$att=$val;
	}
	public function insertEvenement(){
		require_once('../Config/config.php');
		$cnx=new connexion();
		$bdc=$cnx->cnxbase();
		$req="insert into activitee values('', '$this->activite', '$this->descr', '$this->dateevent', '$this->nbrmax')";
		$bdc->exec($req) or print_r($bdc->errorInfo());

	}
	public function insertEvenementmembre($id){
		require_once('../Config/config.php');
		$cnx=new connexion();
		$bdc=$cnx->cnxbase();
		
		$req="UPDATE users u1, activitee a1 SET u1.event=a1.activite WHERE u1.id='$id' and a1.id='$id'";
		$bdc->exec($req) or print_r($bdc->errorInfo());

	}
	function modifEvenement($id){
		require_once('../Config/config.php');
		$cnx=new connexion();
		$bdc=$cnx->cnxbase();
		$req="UPDATE activitee SET activite='$this->activite', descr='$this->descr', dateevent='$this->dateevent', nbrmax='$this->nbrmax' WHERE id='$id'";
		$bdc->exec($req) or print_r($bdc->errorInfo());
	}

	public function selectEvenement(){
		include_once("../../Config/config.php");
		$c=new connexion;
		$pdo = $c->cnxbase();
		$req="select * from activitee";
		$res=$pdo->query($req);
		$row=$res->fetchAll();
		return $row;
	}
	public function suppEvenement($id){
		include_once("../Config/config.php");
		$c=new connexion;
		$pdc = $c->cnxbase();
		$req="delete from activitee where id='$id'";
		$pdc->exec($req) or print_r($bdc->errorInfo());
	}
	public function affEvenementId($id){
		include_once("../../Config/config.php");
		$c=new connexion;
		$pdo = $c->cnxbase();
		$req="select * from activitee where id='$id'";
		$res=$pdo->query($req);
		$row=$res->fetch();
		return $row;
	}
}
?>

