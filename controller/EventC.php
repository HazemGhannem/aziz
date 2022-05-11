<?PHP
	include "../config.php";
	require_once '../Model/Event.php';

	class EventC {
		
		function ajouterEvent($Event){
			$sql="INSERT INTO event (id, nom, dateE, duree ) 
			VALUES (:id,:nom,:dateE,:duree )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'id'=> $Event->getId(),
					'nom' => $Event->getNom(),
					'dateE' => $Event->getdateE(),
					'duree' => $Event->getduree()
					 
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherEvents(){
			
			$sql="SELECT * FROM event";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerEvent($id){
			$sql="DELETE FROM event WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierEvent($Event, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE event SET 
						nom = :nom, 
						dateE = :datE,
						duree = :duree
						 
					WHERE id = :id'
				);
				$query->execute([
					'nom' => $Event->getNom(),
					'datE' => $Event->getdateE(),
					'duree' => $Event->getduree(),
					 
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererEvent($id){
			$sql="SELECT * from Event where id=$id";
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

		function recupererEvent1($id){
			$sql="SELECT * from Event where id=$id";
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