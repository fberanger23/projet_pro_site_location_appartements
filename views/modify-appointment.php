<?php
session_start();

if(!isset($_SESSION['admin']) || $_SESSION['admin'] == false ) {
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
            <a href="dashboard-appointments.php" class="btn btn-primary">Retour à la liste</a>
        </div>
        <div class="col-lg-11 col-xs-12 neumorphismBorderDashboard mt-2">

            <h1 class="taglineDashboard"><i class="fs-4 bi bi-calendar-date"></i> Modifiez vos rendez-vous</h1>
            <div class="row m-3 d-flex justify-content-evenly">
                <?php
                if (isset($_GET["idAppointment"]) && !empty($oneAppointmentArray)) { ?>
                    <form method="POST">
                        <div class="m-3">
                            <label for="lastname" class="form-label fw-bold">Nom</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastname" pattern="^[A-Za-z '-àâéèêôùûçÀÂÉÈÔÙÛÇ]+$" maxlengh="25" placeholder="ex. Dupont" value="<?= $oneAppointmentArray['lastname'] ?>" required>
                        </div>

                        <div class="m-3">
                            <label for="firstname" class="form-label fw-bold">Prénom</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="firstname" pattern="^[A-Za-z '-àâéèêôùûçÀÂÉÈÔÙÛÇ]+$" maxlengh="25" placeholder="ex. Jean" value="<?= $oneAppointmentArray['firstname'] ?>" required>
                        </div>

                        <div class="m-3">
                            <label for="phoneNumber" class="form-label fw-bold">Numéro de téléphone</label>
                            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" aria-describedby="phoneNumber" maxlength="10" placeholder="ex. 0614XXXXXX" value="<?= $oneAppointmentArray['phoneNumber'] ?>" required>
                        </div>

                        <div class="m-3">
                            <label for="email" class="form-label fw-bold">E-mail</label>
                            <input type="text" class="form-control" id="email" name="email" aria-describedby="email" pattern="^[A-Za-z]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$" placeholder="ex. mail@mail.fr" value="<?= $oneAppointmentArray['email'] ?>" required>
                        </div>

                        <div class="m-3">
                            <label for="dateHour" class="form-label fw-bold">Date de la visite</label>
                            <input type="date" class="form-control" id="dateHour" name="dateHour" aria-describedby="dateHour" value="<?= strftime('%Y-%m-%d', strtotime($oneAppointmentArray['date'])) ?>" required>
                        </div>

                        <div class="m-3">
                            <label for="appointmentTime" class="form-label fw-bold">Heure de la visite</label>
                            <select name="time" id="time" class="form-select" aria-label="Default select example" required>
                                <?php for ($i = 9; $i <= 19; $i++) : ?>
                                    <option value="<?= $i ?>" <?= strftime('%H', strtotime($oneAppointmentArray['date'])) == $i ? 'selected' : '' ?>><?= $i . ':00' ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>

                        <div class="m-3">
                            <label for="lastname" class="form-label fw-bold">Veuillez choisir un appartement</label>
                            <select name="id_apartment" class="form-select" aria-label="Default select example" required>
                                <?php foreach ($allApartments as $apartments) {
                                ?>
                                    <option value="<?= $apartments['id'] ?>" <?= $apartments['id'] == $oneAppointmentArray['id_apartment'] ? 'selected' : '' ?>><?= $apartments['neighborhood'] ?> - <?= $apartments['type'] ?> - <?= $apartments['floor'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <?php
                        if (isset($oneAppointmentArray['id'])) { ?>

                            <div class="m-3">
                                <input type="hidden" class="form-control" id="id" name="id" aria-describedby="id" value="<?= $oneAppointmentArray['id'] ?>">
                            </div>
                        <?php } ?>

                        <button type="submit" name="modifyAppointment" class="btn btn-primary ms-3 mt-3 mb-3">Modifier</button>
                        <button type="reset" class="btn btn-outline-danger" onclick="javascript:history.back()">Annuler</button>
                    </form>
                <?php } else { ?>
                    <p class="text-center fw-bold text-danger">Veuillez sélectionner un rdv</p>
                <?php } ?>

            </div>

        </div>
        <div class="col-5 d-flex justify-content-center text-wrap mt-3">
            <a href="dashboard.php" class="btn btn-primary">Accueil</a>
        </div>

    </div>


    <?php include("../includes/dashboard_footer.php"); ?>