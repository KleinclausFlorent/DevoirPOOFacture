<?php

class Facture{

	//Données membres
	private $_ID;
	private $_Date;
	private $_ModeReg;
	private $_Client;
	private $_TabDFacture;

	//Fcts membres

	private function initFacture($mID,$mDate,$mModeReg){

		$this->_ID=$mID;
		$this->_Date=$mDate;
		$this->_ModeReg=$mModeReg;
		$this->_TabDFacture=array();
	}
	public function __construct($mID,$mDate,$mModeReg){

		//echo "constructeur <br/>";
		$this->initFacture($mID,$mDate,$mModeReg);
	}
	public function __destruct(){

		/*
		echo "<br/> Destroy ".$this->_ID;
		echo "<br/> Destroy ".$this->_Date;
		echo "<br/> Destroy ".$this->_ModeReg;
		*/
	}
	public function AfficheFacture(){

		echo "<h2> Informations factures </h2>";
		echo "<br/>ID Facture : ".$this->_ID;
		echo "<br/>Date Facture : ".$this->_Date;
		echo "<br/>ModeReg Facture : ".$this->_ModeReg;
		echo "<h3> Informations Client from Facture </h3>";
		if ($this->_Client != NULL){
			echo "<br/> ID Client : ".$this->_Client->getClientID();
		}
		echo "<h3> Informations Dfactures From Facture </h3>";
		foreach ($this->_TabDFacture as $value){
			$value->AfficheDFacture();
		}

	}
	//Mutateurs
	public function getFactureID(){

		return $this->_ID;
	}
	public function getFactureDate(){

		return $this->_Date;
	}
	public function getFactureModeReg(){

		return $this->_ModeReg;
	}
	public function getFactureClient(){

		return $this->_Client;
	}
	public function getFactureAllDFacture(){

		return $this->_TabDFacture;
	}
	public function getFactureDFacture($mTabID){

		return $this->_TabDFacture[$mTabID];
	}
	public function setFactureID($mID){

		$this->_ID=$mID;
	}
	public function setFactureDate($mDate){

		$this->_Date=$mDate;
	}
	public function setFactureModeReg($mModeReg){

		$this->_ModeReg=$mModeReg;
	}
	public function setFactureClient($mClient){

		$this->_Client=$mClient;
	}
	public function setFactureAllDFacture($mTabDFacture){

		$this->_TabDFacture=$mTabDFacture;
	}
	public function setFactureDFacture($mDFacture,$mTabID){

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


