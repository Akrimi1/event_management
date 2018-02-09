<?php
class connexion
{
	public function cnxbase(){
		$dbc= new PDO('mysql:host=localhost; dbname=evenement','root', '');
			return $dbc;

	}
}
?>