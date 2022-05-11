<?PHP
	include "../controller/OffreC.php";
    include "HeaderM.php";

	$PromoC=new OffreC();
	$listeUsers=$PromoC->afficherPromos();

?>
<div class="content-wrapper">
                            <div class="container-fluid">
                                <!-- Breadcrumbs-->
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">promotion</a>
                                    </li>
                                    <li class="breadcrumb-item active">listes des offres</li>
                                </ol>
                                <!-- Example DataTables Card-->
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <i class="fa fa-table"></i> Liste des offres</div>
                                    <button class="btn-lg btn-primary" onclick="imprimer_page()" value="Imprimer la Page" >impression PDF</button>
                                    <div class="card-body">

                                        <div class="table-responsive">

                                            <table class="table table-bordered" id="dataTable" name="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                <tr>
                                                    <th>Référence</th>
                                                    <th>idE</th>
                                                    <th>date debut</th>
                                                    <th>date fin</th>
                                                    <th>prix</th>
                                                    <th>Supression</th>
                                                    <th>Modification</th>
								                     <th>Qr Code</th>



                                                </tr>
                                                </thead>

                                                <tbody>

                                                <?PHP
				foreach($listeUsers as $user){
					 
			?>
				<tr>
					<td><?PHP echo $user['ref']; ?></td>
					<td><?PHP echo $user['ide']; ?></td>
					<td><?PHP echo $user['datedeb']; ?></td>
					<td><?PHP echo $user['datefin']; ?></td>
					<td><?PHP echo $user['pourcentage']; ?> </td>
 					<td>
						<form method="POST" action="SupprimerOffre.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input class="form-control" type="hidden" value=<?PHP echo $user['ref']; ?> name="ref">
						</form>
					</td>
					<!-- <td>
						<a href="ModifierOffre.php?ref=<?PHP echo $user['ref']; ?>"> Modifier </a>
					</td> -->
                    <td>
                    <form method="POST" action="ModifierOffre.php">
                        <input type="submit" name="Modifier" value="Modifier">
                        <input type="hidden" value=<?php echo $user['ref']; ?> name="ref">
                    </form>
                </td>
		    <td>
				 <img src=
"https://chart.googleapis.com/chart?cht=qr&chl=<?php echo 'Reference: '.$user['ref'].' Ide: '.$user['ide'].' Prix: '.$user['pourcentage']; ?>&chs=160x160&chld=L|0"
        class="qr-code img-thumbnail img-responsive" />
		    </td>
				</tr>
			<?PHP
				}
			?>
                        </tbody>
		</table>
	</body>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>

<?PHP
include"footer.php";
?>