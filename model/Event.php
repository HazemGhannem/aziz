	<?PHP
	class Event{
		private  $id = null;
		private  $nom = null;
		private  $dateE = null;
		private  $duree = null;
		
		
		function __construct( $nom, $dateE, $duree){
			
			$this->nom=$nom;
			$this->dateE=$dateE;
			$this->duree=$duree;
			
		}
		
		function getId(){
			return $this->id;
		}
		function getNom(){
			return $this->nom;
		}
		function getdateE() {
			return $this->dateE;
		}
		function getduree(){
			return $this->duree;
		}
		

		function setNom($nom){
			$this->nom=$nom;
		}
		function setdateE($dateE){
			$this->dateE;
		}
		function setduree($duree){
			$this->duree=$duree;
		}
		
	}
?>