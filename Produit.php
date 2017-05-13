<?php

class Produit{

	//Données membres
	private $_ID;
	private $_Libelle;
	private $_PUHT;
	private $_TabDFacture;

	//Fcts membres

	private function initProduit($mID,$mLibelle,$mPUHT){

		$this->_ID=$mID;
		$this->_Libelle=$mLibelle;
		$this->_PUHT=$mPUHT;
		$this->_TabDFacture=array();
	}
	public function __construct($mID,$mLibelle,$mPUHT){

		//echo "constructeur <br/>";
		$this->initProduit($mID,$mLibelle,$mPUHT);
	}
	public function __destruct(){
		/*
		echo "<br/> Destroy ".$this->_ID;
		echo "<br/> Destroy ".$this->_Libelle;
		echo "<br/> Destroy ".$this->_PUHT;
		*/
	}
	public function AfficheProduit(){

		echo "<h2> Informations Produit </h2>";
		echo "<br/>ID Produit : ".$this->_ID;
		echo "<br/>Libelle Produit : ".$this->_Libelle;
		echo "<br/>PUHT Produit : ".$this->_PUHT;
		echo "<h3> Informations Dfactures from Produit </h3>";
		foreach ($this->_TabDFacture as $value){
			echo "<br/> ID DFacture : ".$value->getDFactureID();
		}
	}
	//Mutateurs
	public function getProduitID(){

		return $this->_ID;
	}
	public function getProduitLibelle(){

		return $this->_Libelle;
	}
	public function getProduitPUHT(){

		return $this->_PUHT;
	}
	public function getProduitAllDFacture(){

		return $this->_TabDFacture;
	}
	public function getProduitDFacture($mTabID){

		return $this->_TabDFacture[$mTabID];
	}
	public function setProduitID($mID){

		$this->_ID=$mID;
	}
	public function setProduitLibelle($mLibelle){

		$this->_Libelle=$mLibelle;
	}
	public function setProduitPUHT($mPUHT){

		$this->_PUHT=$mPUHT;
	}
	public function setProduitAllDFacture(){

		$this->_TabDFacture;
	}
	public function setProduitDFacture($mDFacture,$mTabID){

		If ($mDFacture==NULL)
		{
			unset($this->_TabDFacture[$mTabID]);
		} else
		{
			$this->_TabDFacture[$mTabID]=$mDFacture;
		}
	}
}
?>
