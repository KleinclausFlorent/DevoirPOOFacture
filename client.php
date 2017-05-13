<?php

class Client{

	//Données membres
	private $_ID;
	private $_Nom;
	private $_Prenom;
	private $_CP;
	private $_Ville;
	private $_Adresse;
	private $_TabFact;

	//Fcts membres

	private function initClient($mID,$mNom,$mPrenom,$mCP,$mVille,$mAdresse){

		$this->_ID=$mID;
		$this->_Nom=$mNom;
		$this->_Prenom=$mPrenom;
		$this->_CP=$mCP;
		$this->_Ville=$mVille;
		$this->_Adresse=$mAdresse;
		$this->_TabFact=array();
	}
	public function __construct($mID,$mNom,$mPrenom,$mCP,$mVille,$mAdresse){

		//echo "constructeur <br/>";
		$this->initClient($mID,$mNom,$mPrenom,$mCP,$mVille,$mAdresse);
	}
	public function __destruct(){

		/*
		echo "<br/> Destroy ".$this->_ID;
		echo "<br/> Destroy ".$this->_Nom;
		echo "<br/> Destroy ".$this->_Prenom;
		echo "<br/> Destroy ".$this->_CP;
		echo "<br/> Destroy ".$this->_Ville;
		echo "<br/> Destroy ".$this->_Adresse;
		foreach ($this->_TabFact as $value){
			$value->afficheFacture;

		}
		*/
	}
	public function AfficheClient(){

		echo "<h2> Informations client </h2>";
		echo "<br/>ID Client : ".$this->_ID;
		echo "<br/>Nom Client : ".$this->_Nom;
		echo "<br/>Prenom Client : ".$this->_Prenom;
		echo "<br/>CP Client : ".$this->_CP;
		echo "<br/>Ville Client : ".$this->_Ville;
		echo "<br/>Adresse Client : ".$this->_Adresse;
		echo "<h3> Informations factures From Client</h3>";
		foreach ($this->_TabFact as $value){
			$value->afficheFacture();
		}
		
	}
	//Mutateurs
	public function getClientID(){

		return $this->_ID;
	}
	public function getClientNom(){

		return $this->_Nom;
	}
	public function getClientPrenom(){

		return $this->_Prenom;
	}
	public function getClientCP(){

		return $this->_CP;
	}
	public function getClientVille(){

		return $this->_Ville;
	}
	public function getClientAdresse(){

		return $this->_Adresse;
	}
	public function getClientTabFact(){

		return $this->_TabFact;
	}
	public function getClientFact($mTabID){

		return $this->_TabFact[$mTabID];
	}
	public function setClientID($mID){

		$this->_ID=$mID;
	}
	public function setClientNom($mNom){

		$this->_Nom=$mNom;
	}
	public function setClientPrenom($mPrenom){

		$this->_Prenom=$mPrenom;
	}
	public function setClientCP($mCP){

		$this->_CP=$mCP;
	}
	public function setClientVille($mVille){

		$this->_Ville=$mVille;
	}
	public function setClientAdresse($mAdresse){

		$this->_Adresse=$mAdresse;
	}
	public function setClientTabFact($mTabFact){

		$this->_TabFact=$mTabFact;
	}
	public function setClientFact($mFact,$mTabID){
		If ($mFact==NULL)
		{
			unset($this->_TabFact[$mTabID]);
		} else
		{
			$this->_TabFact[$mTabID]=$mFact;
		}
		
	}
}
?>
