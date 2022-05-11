<?php
	include "../controller/OffreC.php";
	include_once '../Model/Offre.php';
	

	$PromoC = new OffreC();
	$error = "";
	
	if (
		isset($_POST["ref"]) && 
        isset($_POST["ide"]) &&
        isset($_POST["datedeb"])   &&   
        isset($_POST["datefin"])     && 
        isset($_POST["pourcentage"])      
	){
		if (
            !empty($_POST["ref"]) && 
            !empty($_POST["ide"]) && 
            !empty($_POST["datedeb"]) &&
            !empty($_POST["datefin"]) &&
            !empty($_POST["pourcentage"]) 
             
        ) {
            $user = new Offre(

                $_POST['ide'], 
                $_POST['datedeb'],
                $_POST['datefin'],
                $_POST['pourcentage']
                 
			);
             $PromoC->modifierPromo($user, $_POST['ref']);
             header('Location:afficherOffre.php',false);

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
			if (isset($_POST['ref'])){
				$user = $PromoC->recupererPromo($_POST['ref']);
				
		?>
                <!-- <head>
                    <script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
                </head> -->
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <!-- Breadcrumbs-->
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#"></a>
                            </li>
                            <li class="breadcrumb-item active">Modifier Offre</li>
                        </ol>
                        <!-- Example DataTables Card-->
                        <div class="card card-register mx-auto mt-5">
                            <div class="card-header">Modifier Offre</div>
                            <div class="card-body">
                                <form action="" method="POST">
                                    <table align="center">
                                        <tr>

                                            <td>
                                                <label for="ref">ref:
                                                </label>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="ref" id="ref"  value = "<?php echo $user['ref']; ?>" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="ide">ide:
                                                </label>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="ide" id="ide" maxlength="20" value = "<?php echo $user['ide']; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="datedeb">datedeb:
                                                </label>
                                            </td>
                                            <td><input type="date" class="form-control" name="datedeb" id="datedeb" maxlength="20" value = "<?php echo $user['datedeb']; ?>"></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label for="datefin">datefin:
                                                </label>
                                            </td>
                                            <td>
                                                <input type="date" name="datefin" id="datefin"  value = "<?php echo $user['datefin']; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="pourcentage">prix:
                                                </label>
                                            </td>
                                            <td>
                                                <input type="number" name="pourcentage" id="pourcentage"  value = "<?php echo $user['pourcentage']; ?>">
                                            </td>
                                        </tr>

                                        <tr>

                                            <td>
                                                <input type="submit" value="Modifier" name = "modifer">
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
