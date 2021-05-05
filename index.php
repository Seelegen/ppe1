<?php
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");
include("vues/v_entete.php") ;
session_start();
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");break;
	}
	case 'gererFrais' :{
		include("controleurs/c_gererFrais.php");break;
	}
	case 'etatFrais' :{
		include("controleurs/c_etatFrais.php");break; 
	}
	case 'rembourserFicheFrais':{
		include("controleurs/c_rembourserFicheFrais.php");break; 
	}
	case 'validerFicheFrais':{
		include("controleurs/c_validerFicheFrais.php");break; 
	}
	case 'ajoutcrendu':{
		include("controleurs/c_ajoutcrendu.php");break; 
	}
	case 'mescrendu':{
		include("controleurs/c_mescrendu.php");break; 
	}
}
include("vues/v_pied.php") ;
?>

