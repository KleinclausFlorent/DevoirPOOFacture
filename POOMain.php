<?php 
	//Integration des tables
	include("Facture.php");
	include("DFacture.php");
	include("Produit.php");
	include("Client.php");
 ?>
 <?php
 	//Création Client et test mutateurs
 	echo "<h1> Main Client</h1>";
	$mClient= new Client(1,"Bond","James",67100,"Strasbourg","1, rue de la Chapelle");
	$mClient->AfficheClient();
	$mClient->setClientNom("Michel");
	echo "<br/> Client Nom :".$mClient->getClientNom();

	//Création Facture et test mutateurs
	echo "<h1> Main Facture</h1>";
	$mFacture= new Facture(1,"10/02/2014","Carte");
	$mFacture->AfficheFacture();
	$mFacture->setFactureID(1);
	echo "<br/> Facture ID : ".$mFacture->getFactureID();

	//Création DFacture et test mutateurs
	echo "<h1> Main Dfacture</h1>";
	$mDFacture= new DFacture(1,1);
	$mDFacture->AfficheDFacture();
	$mDFacture->setDFactureQuantite(1);
	echo "<br/> Dfacture Quantite : ".$mDFacture->getDFactureQuantite();

	//Création Produit et test mutateurs
	echo "<h1> Main Produit</h1>";
	$mProduit= new Produit(1,"Pistoler laser",10);
	$mProduit->AfficheProduit();
	$mProduit->setProduitID(1);
	echo "<br/> Produit ID : ".$mProduit->getProduitID();

	//Test liaisons entre les objets et affichage des informations de toutes les objets en passant seulement par le client
	echo "<h1> Tests</h1>";
	$mClient->setClientFact($mFacture,0);
	$mFacture->setFactureClient($mClient);
	$mProduit->setProduitDFacture($mDFacture,0);
	$mDFacture->setDFactureProduit($mProduit);
	$mDFacture->setDFactureFacture($mFacture);
	$mFacture->setFactureDFacture($mDFacture,0);
	$mClient->AfficheClient();
?>