<?php
include_once '../Model/Event.php';
include_once '../Controller/EventC.php';
include "HeaderM.php";


?>






<div class="content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Gestion des event</a>
            </li>
            <li class="breadcrumb-item active">Ajouter event</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Ajouter event</div>
            <div class="card-body">
                <form action="" method="POST">
                    <table align="center">

                        <tr>
                            <td>
                                <label for="nom">nom:
                                </label>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="nom" id="nom" maxlength="20" required><p id="errorNom" style="color:orange;"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="date">date:
                                </label>
                            </td>
                            <td><input type="date" class="form-control" name="datE" id="datE" maxlength="20"required ></td>
                        </tr>

                        <tr>
                            <td>
                                <label for="duree">duree:
                                </label>
                            </td>
                            <td>
                                <input type="number" class="form-control" name="duree" id="duree" required ><p id="errorDuree" style="color:orange;"></p>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="ajouter" name = "ajouter" id="submit">
                            </td>
                            <td>
                                <input type="reset" value="Annuler" >
                            </td>
                        </tr>
                    </table>
                </form>
            </div>


        </div>
    </div>

</div>

<?php


// create user
$user = null;

// create an instance of the controller
$userC = new EventC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["datE"]) &&
    isset($_POST["duree"])
) {
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["datE"]) &&
        !empty($_POST["duree"])

    ) {
        $user = new Event(
            $_POST['nom'],
            $_POST['datE'],
            $_POST['duree']

			);
        $userC->ajouterEvent($user);
        //header('Location: afficherEvent.php');
    } else
        $error = "Missing information";
}

include"footer.php";
?>
<script src="js/controleSaisieEvent.js"></script>