<?php
include "../controller/OffreC.php";


include "header.php";



?>
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
       
    </div>
</div>
<!-- Page Header End -->

<!-- Blog Start -->
<div class="blog">
    <div class="container">
       

        <div class="row blog-page">

            <?PHP
            $EventC=new OffreC();
            $listeUsers=$EventC->afficherPromos();
            foreach($listeUsers as $user){

                ?>
                <div class="col-lg-5 col-md-8 blog-item" >
                    <img src="img/offre.jpg" alt="Blog">

                    <div class="meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">ref : <?PHP echo $user['ref']; ?></a><br>
                        <i class="fa fa-calendar-alt"></i>
                        <p>date-debut : <?PHP echo $user['datedeb']; ?></p>
                        <br>
                        <i class="fa fa-calendar-alt"></i>
                        <p>date-fin : <?PHP echo $user['datefin']; ?></p>
                    </div>


                </div>
                <?PHP
            }
            ?>
        </div>

    </div>
</div>
    <!-- Blog End -->

<?php include "footer.php"; ?>








