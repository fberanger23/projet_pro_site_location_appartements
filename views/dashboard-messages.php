<?php
session_start();

if(!isset($_SESSION['admin']) || $_SESSION['admin'] == false ) {
    header('Location: login.php');
}

?>
<?php require("../models/database.php"); ?>
<?php require("../controllers/contact-controller.php"); ?>

<?php include("../includes/dashboard_header.php"); ?>
<?php include("../includes/dashboard_nav.php"); ?>

<div class="mainContent">

    <div class="row dashBoardmain d-flex justify-content-center">
        <div class="col-lg-11 col-xs-12 mt-2">
            <h1 class="taglineDashboard"><i class="fs-4 bi bi-envelope"></i> Vos messages</h1>
            <div class="row m-3 justify-content-evenly">
            <?php
                    foreach ($allMessages as $messages) {
                    ?>
                <div class="col-lg-5 col-sm-12 text-center text-wrap mt-2 mb-4">
                        <div class="userAppointment neumorphismBordercards pt-4 ps-1 pe-3">
                            <p class="text-start ps-3"><span class="fw-bold">Destinataire : </span><?= $messages['firstname'] ?> <?= $messages['lastname'] ?></p>
                            <p class="text-start ps-3"><span class="fw-bold">Email : </span><?= $messages['email'] ?></p>
                            <p class="text-start ps-3"><span class="fw-bold">Numéro de téléphone : </span><?= $messages['phoneNumber'] ?></p>
                            <p class="text-start ps-3 fw-bold">Message :</p>
                            <p class="text-start ps-3"><?= $messages['message'] ?></p>
                            <div class="btn btn-outline-danger deletebtn mb-3" id="deletebtn" data-bs-toggle="modal" data-bs-target="#deleteModal" data-message-id="<?= $messages['id'] ?>"><i class="far fa-trash-alt"></i> Supprimer</div>
                        </div>
                </div>
            <?php } ?>
            </div>
        </div>
        <div class="modal fade" id="deleteModal" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-white" id="exampleModalLabel"><i class="bi bi-exclamation-triangle-fill"></i> Suppression d'un message</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <p><b>Êtes-vous sûr de vouloir supprimer ce message ?</b></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn btn-outline-dark" data-bs-dismiss="modal">Annuler</button>
                            <form action="" method="POST">
                                <!-- <input type="hidden" id="messageId" name="messageId"> -->
                                <button id="deleteMessage" name="deleteMessage" type="submit" class="btn btn-outline-danger">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center text-wrap mt-3">
        <a href="dashboard.php" class="btn btn-primary">Accueil</a>
    </div>
    </div>




<?php include("../includes/dashboard_footer.php"); ?>