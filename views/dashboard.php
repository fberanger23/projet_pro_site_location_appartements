<?php
session_start();

if (!isset($_SESSION['admin']) || $_SESSION['admin'] == false) {
    header('Location: login.php');
}

?>
<?php require "../models/database.php" ?>
<?php require "../controllers/apartments-controller.php"; ?>
<?php require "../controllers/appointments-controller.php"; ?>
<?php require "../controllers/contact-controller.php"; ?>
<?php require "../controllers/login-controller.php"; ?>

<?php include "../includes/dashboard_header.php"; ?>
<?php include "../includes/dashboard_nav.php"; ?>

<div class="mainContent">
    <div class="row dashBoardmain d-flex justify-content-around">
        <div class="col-lg-6 col-sm-12 neumorphismBorderDashboard mt-2 mb-2">
            <p class="taglineDashboard">Bonjour les parents !</p>
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <p>Soyez les bienvenus sur votre espace en ligne.</p>
                    <p>N'oubliez pas que si vous avez un souci, vous pouvez m'appeler à tout moment !</p>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12 text-center">
                <p><i class="bi bi-telephone-fill"></i></p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12 text-center text-wrap neumorphismBordercards mt-2 mb-2">
            <p class="taglineDashboard"><i class="fs-3 far fa-building"></i> Gérez vos appartements</p>
            <div class="row d-flex justify-content-center mt-4">
                <div class="col-5 d-flex justify-content-center text-wrap">
                    <a href="dashboard-apartments.php" class="btn btn-primary">Voir les appartements</a>
                </div>
                <div class="col-5 d-flex justify-content-center text-wrap">
                    <a href="add-apartment.php" class="btn btn-primary">Ajouter un appartement</a>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-4 mb-3">
                <div class="col-11 d-flex justify-content-center text-wrap">
                    <a href="add-image.php" class="btn btn-primary">Téléversez une photo</a>
                </div>
            </div>
        </div>

    </div>

    <div class="row dashBoardmain d-flex justify-content-center">
        <div class="col-lg-11 col-xs-12">
            <h1 class="taglineDashboard mt-3"><i class="fs-4 bi bi-calendar-date"></i> Vos derniers rendez-vous</h1>
            <div class="row m-3 d-flex justify-content-evenly">
                <?php
                foreach ($fourAppointmentsArray as $appointments) {
                ?> <div class="col-lg-3 col-sm-6 text-center text-wrap mt-2 mb-3">
                        <div class="userAppointment neumorphismBordercards p-3">
                            <p><i class="fs-3 bi bi-person-circle"></i></p>
                            <p class="text-wrap"><?= $appointments['lastname'] ?></p>
                            <p class="text-wrap"><?= $appointments['firstname'] ?></p>
                            <p class="text-wrap"><?= $appointments['phoneNumber'] ?></p>
                            <p class="text-wrap"><?= $appointments['email'] ?></p>
                            <p class="fw-bold"><?= strftime('%d-%m-%Y', strtotime($appointments['date'])) ?></p>
                            <p class="fw-bold"><?= strftime('%H:%M', strtotime($appointments['date'])) ?></p>
                            <p class="text-wrap"><?= $appointments['neighborhood'] ?></p>
                            <p class="text-wrap"><?= $appointments['floor'] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="row d-flex justify-content-center mt-5 mb-5">
                <div class="col-7 d-flex justify-content-center text-wrap">
                    <a href="dashboard-appointments.php" class="btn btn-primary">Voir plus de rdv</a>
                </div>
            </div>

        </div>

        <div class="col-lg-11 col-xs-12 mt-5">
            <div class="row dashBoardmain d-flex justify-content-evenly">
                <div class="col-lg-6 col-xs-12 mt-2 mb-5">
                    <h1 class="taglineDashboard"><i class="fs-4 bi bi-envelope"></i> Vos derniers messages</h1>
                    <div class="row m-3">
                        <?php
                        $index = 1;
                        foreach ($threeMessagesArray as $messages) {
                        ?> <div class="col-lg-12 col-sm-12 text-center text-wrap mt-2 mb-3">
                                <div class="userAppointment neumorphismBordercards pt-2">
                                    <p class="text-start ps-3"><?= $index ?>. <span class="fw-bold"><?= $messages['firstname'] ?> <?= $messages['lastname'] ?></span></p>
                                    <p class="text-start ps-3"><?= $messages['message'] ?></p>
                                </div>
                            </div>
                        <?php $index++;
                        } ?>
                    </div>
                    <div class="row d-flex justify-content-center mt-5 mb-3">
                        <div class="col-7 d-flex justify-content-center text-wrap">
                            <a href="dashboard-messages.php" class="btn btn-primary">Voir plus de messages</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xs-12 mt-2 mb-5">
                    <h1 class="taglineDashboard"><i class="fs-4 bi bi-folder"></i> Vos derniers dossiers de location
                    </h1>
                    <div class="row m-3">
                        <div class="col-lg-12 col-sm-12 text-center text-wrap mt-2 mb-2">
                            <div class="userAppointment neumorphismBordercards pt-2">
                                <p class="text-start ps-3">1. </span><span>Nom du dossier</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-lg-12 col-sm-12 text-center text-wrap mt-2 mb-2">
                            <div class="userAppointment neumorphismBordercards pt-2">
                                <p class="text-start ps-3">2. </span><span>Nom du dossier</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-lg-12 col-sm-12 text-center text-wrap mt-2 mb-2">
                            <div class="userAppointment neumorphismBordercards pt-2">
                                <p class="text-start ps-3">3. </span><span>Nom du dossier</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center mt-5 mb-3">
                        <div class="col-7 d-flex justify-content-center text-wrap">
                            <a href="dashboard-rental-application.php" class="btn btn-primary">Voir plus de dossiers</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <?php include "../includes/dashboard_footer.php"; ?>