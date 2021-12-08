<?php
session_start();

if (!isset($_SESSION['admin']) || $_SESSION['admin'] == false) {
    header('Location: login.php');
}

?>
<?php require("../models/database.php"); ?>
<?php require("../controllers/apartments-controller.php"); ?>
<?php require("../controllers/appointments-controller.php"); ?>

<?php include("../includes/dashboard_header.php"); ?>
<?php include("../includes/dashboard_nav.php"); ?>


<div class="mainContent">

    <div class="row dashBoardmain d-flex justify-content-center">
        <div class="col-5 d-flex justify-content-center text-wrap mb-3">
            <a href="add-appointment.php" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Ajouter un RDV</a>
        </div>
        <div class="col-lg-11 col-xs-12 mt-2">
            <h1 class="taglineDashboard"><i class="fs-4 bi bi-calendar-date"></i> Vos rendez-vous</h1>
            <div class="row m-3 d-flex justify-content-evenly">
                <?php
                foreach ($allAppointments as $appointments) {
                ?>
                    <div class="col-lg-5 col-sm-6 text-center text-wrap mt-2 mb-4">
                        <div class="neumorphismBordercards p-3">
                            <p><i class="fs-3 bi bi-person-circle"></i></p>
                            <p class="text-wrap"><?= $appointments['lastname'] ?></p>
                            <p class="text-wrap"><?= $appointments['firstname'] ?></p>
                            <p class="text-wrap"><?= $appointments['phoneNumber'] ?></p>
                            <p class="text-wrap"><?= $appointments['email'] ?></p>
                            <p class="fw-bold"><?= strftime('%d-%m-%Y', strtotime($appointments['date'])) ?></p>
                            <p class="fw-bold"><?= strftime('%H:%M', strtotime($appointments['date'])) ?></p>
                            <p class="text-wrap"><?= $appointments['neighborhood'] ?></p>
                            <p class="text-wrap"><?= $appointments['floor'] ?></p>
                            <a href="modify-appointment.php?idAppointment=<?= $appointments['id'] ?>" class="btn btn-outline-success"><i class="far fa-edit"></i> Modifier</a>
                            <div class="btn btn-outline-danger deletebtn" id="deletebtn" data-bs-toggle="modal" data-bs-target="#deleteModal" data-appointment-id="<?= $appointments['id'] ?>"><i class="far fa-trash-alt"></i> Supprimer</div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="modal fade" id="deleteModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-white" id="exampleModalLabel"><i class="bi bi-exclamation-triangle-fill"></i> Suppression d'un rendez-vous</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <p><b>Êtes-vous sûr de vouloir supprimer ce rendez-vous ?</b></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn btn-outline-dark" data-bs-dismiss="modal">Annuler</button>
                        <form action="" method="POST">
                            <!-- <input type="hidden" id="appointmentId" name="appointmentId"> -->
                            <button id="deleteAppointment" name="deleteAppointment" type="submit" class="btn btn-outline-danger">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center text-wrap mt-3">
            <a href="dashboard.php" class="btn btn-primary">Accueil</a>
        </div>
    </div>


</div>
<?php include("../includes/dashboard_footer.php"); ?>