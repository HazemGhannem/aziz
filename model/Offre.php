<?PHP
	class Offre{
		private  $ref = null;
		private  $ide = null;
		private  $datedeb = null;
		private  $datefin = null;
		private  $pourcentage = null;
		
		
		function __construct( $ide, $datedeb,$datefin,$pourcentage){
			

			$this->ide=$ide;
			$this->datedeb=$datedeb;
			$this->datefin=$datefin;
			$this->pourcentage=$pourcentage;
			
		}
		
		function getref(){
			return $this->ref;
		}
		function getide(){
			return $this->ide;
		}
		function getdatedeb() {
			return $this->datedeb;
		}
		function getdatefin() {
			return $this->datefin;
		}
		function getpourcentage(){
			return $this->pourcentage;
		}
		

		function setide($ide){
			$this->ide=$ide;
		}
		function setref($ref){
			$this->ref=$ref;
		}
		function setdatedeb($datedeb){
			$this->datedeb=$datedeb;
		}
		function setdatefin($datefin){
			$this->datefin;
		}
		function setpourcentage($pourcentage){
			$this->pourcentage;
		}
		
		
	}
?>