<?PHP
	include "../controller/OffreC.php";

	$PromoC=new OffreC();
	
	if (isset($_POST["ref"])){
		$PromoC->supprimerPromo($_POST["ref"]);
		header('Location:afficherOffre.php');
	}

?>