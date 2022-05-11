<?php
	include "../controller/EventC.php";
	include_once '../Model/Event.php';
    

	$EventC = new EventC();
	$error = "";
	
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
                $_POST['duree']
                 
			);
            $EventC->modifierEvent($user, $_GET['id']);
            header('Location: afficherEvent.php');
        }
        else
            $error = "Missing information";
	}
    include "HeaderM.php";

?>   
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id'])){
				$user = $EventC->recupererEvent($_GET['id']);
				
		?>


                <div class="content-wrapper">
                    <div class="container-fluid">
                        <!-- Breadcrumbs-->
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#"></a>
                            </li>
                            <li class="breadcrumb-item active">Modifier Event</li>
                        </ol>
                        <!-- Example DataTables Card-->
                        <div class="card card-register mx-auto mt-5">
                            <div class="card-header">Modifier Event</div>
                            <div class="card-body">
                                <form action="" method="POST">
                                    <table align="center">
                                        <tr>
                                            <td rowspan='4' colspan='1'>

                                            </td>
                                            <td>
                                                <label for="id">id:
                                                </label>
                                            </td>
                                            <td>
                                                <input type="text" name="id" id="id" class="form-control" value = "<?php echo $user['id']; ?>" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="nom">nom:
                                                </label>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="nom" id="nom" maxlength="20" value = "<?php echo $user['nom']; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="date">date:
                                                </label>
                                            </td>
                                            <td><input type="date" class="form-control" name="datE" id="datE" maxlength="20" value = "<?php echo $user['dateE']; ?>"></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label for="duree">duree:
                                                </label>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" name="duree" id="duree" value = "<?php echo $user['duree']; ?>" >
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>
                                                <input class="form-control" type="submit" value="modifier" name = "modifier">
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
		}
			include "footer.php";
		?>