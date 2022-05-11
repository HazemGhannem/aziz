<?php
include "../controller/EventC.php";


include_once "header.php";

   

 ?>
   <!-- Page Header Start -->
   
   <div class="page-header">
        <div class="container">
            <div class="row">
              
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
           

            <div class="row blog-page">

<?PHP
$EventC=new EventC();
$listeUsers=$EventC->afficherEvents(); //selim//
foreach($listeUsers as $user){

    ?>
                <div class="col-lg-6 col-md-6 blog-item">
                    <img src="img/download.png" alt="Blog">
                    <h3>nom:<?PHP echo $user['nom']; ?></h3>
                    <div class="meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">prix:<?PHP echo $user['duree']; ?></a><br>
                        <i class="fa fa-calendar-alt"></i>
                        <p>date:<?PHP echo $user['dateE']; ?></p>
                    </div>


                </div>
    <?PHP
}
?>


<?php include "footer.php"; ?>