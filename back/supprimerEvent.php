<?PHP
	include "../controller/EventC.php";

	$EventC=new EventC();
	
	if (isset($_POST["id"])){
		$EventC->supprimerEvent($_POST["id"]);
		header('Location:afficherEvent.php');
	}

?>