<?php
    include_once '../Model/Event.php';
    include_once '../Controller/EventC.php';

    $error = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <a href="afficherEvent.php">Retour à la liste</a>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='3' colspan='1'>Evenement</td>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="date">date:
                        </label>
                    </td>
                    <td><input type="date" name="datE" id="datE"  ></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="duree">duree:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="duree" id="duree" >
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
    
</html>

<?php

// create user
    $user = null;

    // create an instance of the controller
    $userC = new EventC();
    if (
		isset($_POST["nom"]) && 
        isset($_POST["datE"]) &&
        isset($_POST["duree"])      
	){
		if (
            !empty($_POST["nom"]) && 
            !empty($_POST["datE"]) && 
            !empty($_POST["duree"]) 
             
        ) {
            $user = new Event(
                $_POST['nom'],
                $_POST['datE'], 
                $_POST['duree'],
                 
			);
            $userC->ajouterEvent($user);
            header('Location:afficherEvent.php');
}
        else
            $error = "Missing information";
    }

     
?>
