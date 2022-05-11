<?PHP
	include "../config.php";
	require_once '../Model/Offre.php';

	class OffreC {
		
		function ajouterPromo($Promo){
			$sql="INSERT INTO promo ( ide, datedeb, datefin,pourcentage ) 
			VALUES (:ide,:datedeb,:datefin,:pourcentage )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([

					'ide' => $Promo->getide(),
					'datedeb' => $Promo->getdatedeb(),
					'datefin' => $Promo->getdatefin(),
					'pourcentage' => $Promo->getpourcentage()
					 
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherPromos(){
			
			$sql="SELECT * FROM promo";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerPromo($ref){
			$sql="DELETE FROM promo WHERE ref= :ref";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':ref',$ref);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierPromo($Promo, $ref){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE promo SET 
						ref = :ref, 
						ide = :ide,
						datedeb = :datedeb,
                        datefin = :datefin,
                        pourcentage = :pourcentage
						 
					WHERE ref = :ref'
				);
				$query->execute([
					
					'ide' => $Promo->getide(),
					'datedeb' => $Promo->getdatedeb(),
					'datefin' => $Promo->getdatefin(),
					'pourcentage' => $Promo->getpourcentage(),
					 
					'ref' => $ref
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererPromo($ref){
			$sql="SELECT * from promo where ref=$ref";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererPromo1($ref){
			$sql="SELECT * from promo where ref=$ref";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>