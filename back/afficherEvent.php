<?PHP
	include "../controller/EventC.php";


	include "HeaderM.php";
	$EventC=new EventC();
	$listeUsers=$EventC->afficherEvents();

?>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Événnement</a>
            </li>
            <li class="breadcrumb-item active">listes des Evennement</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Liste des Evennement</div>
            <button class="btn-lg btn-primary" onclick="imprimer_page()" value="Imprimer la Page" >impression PDF</button>
            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" name="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>date</th>
                            <th>duree</th>
                            <th>Supression</th>
                            <th>Modification</th>



                        </tr>
                        </thead>

                        <tbody>




				 


			<?PHP
				foreach($listeUsers as $user){
					 
			?>
				<tr>
					<td><?PHP echo $user['id']; ?></td>
					<td><?PHP echo $user['nom']; ?></td>
					<td><?PHP echo $user['dateE']; ?></td>
					<td><?PHP echo $user['duree']; ?></td>
 					<td>
						<form method="POST" action="supprimerEvent.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
						</form>
					</td>
					<td>
						<a href="modifierEvent.php?id=<?PHP echo $user['id']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</div>
</div>
<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
</div>
<?php include 'footer.php' ; ?>
