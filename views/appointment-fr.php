<?php require("../models/database.php"); ?>
<?php require("../controllers/apartments-controller.php"); ?>
<?php require("../controllers/appointments-controller.php"); ?>

<?php include("../includes/header.php"); ?>
<?php include("../includes/nav.php"); ?>
        <h1><i class="bi bi-calendar-date"></i> Prenez rendez-vous</h1>
        <p class="text-center pb-3">Complétez le formulaire ci-dessous pour fixer la date et l'heure de votre visite</p>
        <div class="appartmentListing aptForm">
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
                <label for="lastname" class="form-label fw-bold">Veuillez choisir un appartement</label>
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
<?php include("../includes/footer.php"); ?>