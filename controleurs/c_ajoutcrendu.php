<?php
include("vues/v_sommaire.php");

if(isset($_POST['okCR'])){
    $extract($_GET);
        $idVisiteur = $_SESSION['idVisiteur'];
		$dateCr = $_REQUEST['dateCr'];
		$titreCr = $_REQUEST['titreCr'];
		$descriptionCr = $_REQUEST['descriptionCr'];
		valideInfosCR($dateCr,$titreCr,$descriptionCr);
		if (nbErreurs() != 0 ){
			include("vues/v_erreurs.php");
		}
		else{
			$pdo->creeNouveauCompteRendu($idVisiteur,$dateCr,$titreCr,$descriptionCr);
		}
	}
include("vues/v_ajoutcrendu.php")
?>