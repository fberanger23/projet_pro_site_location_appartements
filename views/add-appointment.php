<?php
session_start();

if(!isset($_SESSION['admin']) || $_SESSION['admin'] == false ) {
    header('Location: login.php');
}

?>
<?php require("../models/database.php"); ?>
<?php require("../controllers/apartments-controller.php"); ?>
<?php require("../controllers/appointments-controller.php"); ?>


<?php include "../includes/dashboard_header.php"; ?>
<?php include "../includes/dashboard_nav.php"; ?>


<div class="mainContent">
<div class="row dashBoardmain d-flex justify-content-center">
        <div class="col-5 d-flex justify-content-center text-wrap mb-3">
            <a href="dashboard-appointments.php" class="btn btn-primary">Retour à la liste</a>
        </div>

        <div class="col-lg-11 col-xs-12 neumorphismBorderDashboard mt-2 mb-3">
            <h1 class="taglineDashboard mb-5"><i class="bi bi-plus-circle"></i> Ajouter un rendez-vous</h1>
            <div class="row m-3 d-flex justify-content-evenly mb-3">
                <div class="col-lg-11 col-sm-11 text-wrap mt-2 mb-2">
                <form method="POST">
            <div class="m-3">
                <label for="lastname" class="form-label fw-bold">Nom</label>
                <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastname" pattern="^[A-Za-z '-àâéèêôùûçÀÂÉÈÔÙÛÇ]+$" maxlengh="25" placeholder="ex. Dupont" required>
            </div>

            <div class="m-3">
                <label for="firstname" class="form-label fw-bold">Prénom</label>
                <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="firstname" pattern="^[A-Za-z '-àâéèêôùûçÀÂÉÈÔÙÛÇ]+$" maxlengh="25" placeholder="ex. Jean" required>
            </div>

            <div class="m-3">
                <label for="phoneNumber" class="form-label fw-bold">Numéro de téléphone</label>
                <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" aria-describedby="phoneNumber" maxlength="10" placeholder="ex. 0614XXXXXX" required>
            </div>

            <div class="m-3">
                <label for="email" class="form-label fw-bold">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" aria-describedby="email" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="ex. mail@mail.fr" required>
            </div>

            <div class="m-3">
                <label for="dateHour" class="form-label fw-bold">Date de la visite</label>
                <input type="date" class="form-control" id="dateHour" name="dateHour" aria-describedby="dateHour" required>
            </div>

            <div class="m-3">
            <label for="appointmentTime" class="form-label fw-bold">Heure de la visite</label>
                <select name="time" id="time" class="form-select" aria-label="Default select example" required>
                    <?php for ($i = 9; $i <= 19; $i++) : ?>
                        <option value="<?= $i; ?>"><?= date("h.iA", strtotime("$i:00")); ?></option>
                    <?php endfor; ?>
                </select>
            </div>

            <div class="m-3">
                <label for="id" class="form-label fw-bold">Veuillez choisir un appartement</label>
                <select name="id" class="form-select" aria-label="Default select example" required>
                    <option selected>Choix de l'appartement</option>
                    <?php foreach ($allApartments as $apartments) {
                    ?>
                        <option value="<?= $apartments['id'] ?>"><?= $apartments['neighborhood'] ?> - <?= $apartments['type'] ?> - <?= $apartments['floor'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <button type="submit" name="submitAppointment" class="btn btn-primary ms-3 mt-3 mb-3">Enregistrer</button>
            <button type="reset" class="btn btn-outline-danger" onclick="javascript:history.back()">Annuler</button>
        </form>
                </div>

            </div>

        </div>

        <div class="col-5 d-flex justify-content-center text-wrap mt-3">
            <a href="dashboard.php" class="btn btn-primary">Accueil</a>
        </div>

    </div>
    <?php include "../includes/dashboard_footer.php"; ?>