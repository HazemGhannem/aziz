<?php
include_once '../Model/Offre.php';
include_once '../Controller/OffreC.php';



// create user
$user = null;

// create an instance of the controller
$userC = new EventC();
if (
    isset($_POST["ref"]) &&
    isset($_POST["ide"]) &&
    isset($_POST["datedeb"]) &&
isset($_POST["datefin"]) &&
    isset($_POST["pourcentage"])
) {
    if (
        !empty($_POST["ref"]) &&
        !empty($_POST["ide"]) &&
        !empty($_POST["duree"])

    ) {
        echo"here i am";
        $user = new Event(
            $_POST['nom'],
            $_POST['datE'],
            $_POST['duree'],

			);
        $userC->ajouterEvent($user);
        header('Location: afficherEvent.php');
    } else
        $error = "Missing information";
}
?>