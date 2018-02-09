<?php 
class Session{
	public $nom;
	public $email;
	public $mdp;
	public $tel;
	public $type;

	public function __construct(){
		session_start();
	}
	public function Rechsession($email, $mdp, $type){
		require_once('../Config/config.php');
		$cnx = new connexion();
		$bdc = $cnx->cnxbase();
		$req="SELECT count(*) from users where email='$email' and mdp='$mdp' and type='$type'";
		$res=$bdc->query($req) or print_r($bdc->errorInfo());
		return $res;
	}
	public function insertSession(){
		require_once('../Config/config.php');
		$cnx = new connexion();
		$bdc = $cnx->cnxbase();
		$req = "insert into users values('$this->nom', '$this->email', '$this->mdp', '$this->tel',  '$this->type', '')";
		$bdc->exec($req) or print_r($bdc->errorInfo());;
	}
	public function suppression(){
		require_once('../Config/config.php');
		$cnx=new connexion();
		$bdc=$cnx->cnxbase();
		$req="delete from users where nom='$this->nom' and email='$this->email' and mdp='$this->mdp' and tel='$this->tel' and type='$this->type'";
		$bdc->exec($req);
	}
	function __destruct(){
		session_unset();
	}
}
?>

