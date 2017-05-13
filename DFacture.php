<?php

class DFacture{

	//Données membres
	private $_ID;
	private $_Quantite;
	private $_Facture;
	private $_Produit;

	//Fcts membres

	private function initDFacture($mID,$mQuantite){

		$this->_ID=$mID;
		$this->_Quantite=$mQuantite;
	}
	public function __construct($mID,$mQuantite){

		//echo "constructeur <br/>";
		$this->initDFacture($mID,$mQuantite);
	}
	public function __destruct(){

		//echo "<br/> Destroy ".$this->_Quantite;
	}
	public function AfficheDFacture(){

		echo "<h2> Informations Dfactures </h2>";
		echo "<br/> ID : ".$this->_ID;
		echo "<br/> Quantite : ".$this->_Quantite;
		echo "<h3> Informations factures from Dfactures </h3>";
		if ($this->_Facture != NULL){
			echo "<br/> ID Facture : ".$this->_Facture->getFactureID();
		}
		echo "<h3> Informations produit from Dfacture </h3>";
		if ($this->_Produit != NULL){
			echo "<br/>".$this->_Produit->AfficheProduit();
		}
	}
	//Mutateurs
	public function getDFactureID(){

		return $this->_ID;
	}
	public function getDFactureQuantite(){

		return $this->_Quantite;
	}
	public function getDFactureFacture(){

		return $this->_Facture;
	}
	public function getDFactureProduit(){

		return $this->_Produit;
	}
	public function setDFactureID($mID){

		$this->_ID=$mID;
	}
	public function setDFactureQuantite($mQuantite){

		$this->_Quantite=$mQuantite;
	}
	public function setDFactureProduit($mProduit){

		$this->_Produit=$mProduit;
	}
	public function setDFactureFacture($mFacture){

		$this->_Facture=$mFacture;
	}
	
}
?>