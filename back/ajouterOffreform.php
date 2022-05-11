<?php
include_once '../Model/Offre.php';
include_once '../Controller/OffreC.php';
include "HeaderM.php";
// Import PHPMailer classes into the global namespace

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';









?>






<div class="content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Gestion des offre</a>
            </li>
            <li class="breadcrumb-item active">Ajouter offre</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Ajouter offre</div>
            <div class="card-body">
                <form action="" method="POST">
                    <table align="center">

                        <tr>
                            <td>
                                <label for="ide">ide:
                                </label>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="ide" id="ide" maxlength="20" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="datedeb">datedeb:
                                </label>
                            </td>
                            <td><input type="date" class="form-control" name="datedeb" id="datedeb" maxlength="20"required ></td>
                        </tr>

                        <tr>
                            <td>
                                <label for="datefin">datefin:
                                </label>
                            </td>
                            <td>
                                <input type="date" class="form-control" name="datefin" id="datefin" required >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="pourcentage">prix:
                                </label>
                            </td>
                            <td>
                                <input type="number" class="form-control" name="pourcentage" id="pourcentage"required >
                            </td>
                        </tr>

                        <tr>

                            <td>
                                <input type="submit" class="form-control" value="Ajouter" name ="ajouter">
                            </td>
                            <td>
                                <input type="reset" class="form-control" value="Annuler" >
                            </td>
                        </tr>
                    </table>
                </form>
            </div>


        </div>
    </div>

</div>

<?php

// create user
$user = null;

// create an instance of the controller
$userC = new OffreC();
if (

    isset($_POST["ide"]) &&
    isset($_POST["datedeb"]) &&
    isset($_POST["datefin"]) &&
    isset($_POST["pourcentage"])
) {
    if (

        !empty($_POST["ide"]) &&
        !empty($_POST["datedeb"])&&
        !empty($_POST["datefin"])&&
        !empty($_POST["pourcentage"])

    ) {

        $user = new Offre(
            $_POST['ide'],
            $_POST['datedeb'],
            $_POST['datefin'],
            $_POST["pourcentage"]

			);
        $userC->ajouterPromo($user);
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth = 1;                                   // Enable SMTP authentication
            $mail->Username = 'mohamed.bedoui@esprit.tn';                     // SMTP username
            $mail->Password = '191JMT2142 ';                               // SMTP password
            $mail->SMTPSecure="ssl";
            // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port = 465;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('mohamed.bedoui@esprit','admin projet');
            $mail->addAddress('mohamed.bedoui@esprit.tn');     // Add a recipient





            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'offre ajouté';
            $mail->Body = 'votre offre a été ajouté avec <b>succes!</b> <br> Merci pour votre confiance. ';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        //header('Location: AfficherOffre.php');
    } else
        $error = "Missing information";
}

include"footer.php";
?>