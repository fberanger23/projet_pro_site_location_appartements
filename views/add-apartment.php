<?php
session_start();

if (!isset($_SESSION['admin']) || $_SESSION['admin'] == false) {
    header('Location: login.php');
}

?>
<?php require("../models/database.php"); ?>
<?php require("../controllers/apartments-controller.php"); ?>
<?php require("../controllers/image-upload-controller.php"); ?>

<?php include "../includes/dashboard_header.php"; ?>
<?php include "../includes/dashboard_nav.php"; ?>


<div class="mainContent">

    <div class="row dashBoardmain d-flex justify-content-center">
        <div class="col-5 d-flex justify-content-center text-wrap mb-3">
            <a href="dashboard-apartments.php" class="btn btn-primary">Retour à la liste</a>
        </div>

        <div class="col-lg-11 col-xs-12 neumorphismBorderDashboard mt-2 mb-3">
            <h1 class="taglineDashboard mb-5"><i class="bi bi-plus-circle"></i> Ajouter un appartement</h1>
            <div class="row m-3 d-flex justify-content-evenly mb-3">
                <div class="col-lg-11 col-sm-11 text-wrap mt-2 mb-2">
                    <form method="POST">
                        <div class="m-3">
                            <label for="mainPhoto" class="form-label fw-bold">Photo principale</label>
                            <select name="mainPhoto" class="form-select" aria-label="Default select example" required>
                                <option selected>Choix de la photo</option>
                                <?php foreach ($allPhotos as $photos) {
                                ?>
                                    <option value="<?= $photos['path'] ?>"><?= $photos['name'] ?> - <?= $photos['altText'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="m-3">
                            <label for="type" class="form-label fw-bold">Type</label>
                            <input type="text" class="form-control" id="type" name="type" aria-describedby="type" placeholder="ex. T1" required>
                        </div>

                        <div class="m-3">
                            <label for="floor" class="form-label fw-bold">Étage</label>
                            <input type="text" class="form-control" id="floor" name="floor" aria-describedby="floor" placeholder="ex. Rez-de-Chaussée" required>
                        </div>

                        <div class="m-3">
                            <label for="neighborhood" class="form-label fw-bold">Quartier</label>
                            <select class="form-select" id="neighborhood" name="neighborhood" aria-label="neighborhood" required>
                                <option selected>Choisissez le quartier</option>
                                <option value="Quartier Centre-Est">Quartier Centre-Est</option>
                                <option value="Quartier Université">Quartier Université</option>
                            </select>
                        </div>

                        <div class="m-3">
                            <label for="squareFootage" class="form-label fw-bold">Nombre de m²</label>
                            <input type="text" class="form-control" id="squareFootage" name="squareFootage" aria-describedby="squareFootage" placeholder="ex. 24,34" required>
                        </div>

                        <div class="m-3">
                            <label for="heatSystem" class="form-label fw-bold">Chauffage</label>
                            <input type="text" class="form-control" id="heatSystem" name="heatSystem" aria-describedby="heatSystem" placeholder="ex. central collectif au gaz" required>
                        </div>

                        <div class="m-3">
                            <label for="monthlyRent" class="form-label fw-bold">Loyer mensuel (sans charge)</label>
                            <input type="text" class="form-control" id="monthlyRent" name="monthlyRent" aria-describedby="monthlyRent" placeholder="ex. 400" required>
                        </div>

                        <div class="m-3">
                            <label for="services" class="form-label fw-bold">Charges</label>
                            <input type="text" class="form-control" id="services" name="services" aria-describedby="services" placeholder="ex. 68" required>
                        </div>

                        <div class="m-3">
                            <label for="totalRent" class="form-label fw-bold">Loyer Total</label>
                            <input type="text" class="form-control" id="totalRent" name="totalRent" aria-describedby="totalRent" placeholder="ex. 468" required>
                        </div>

                        <div class="m-3">
                            <label for="vacant" class="form-label fw-bold">Disponible</label>
                            <select class="form-select" id="vacant" name="vacant" aria-label="vacant" required>
                                <option selected>Choisissez la disponibilité</option>
                                <option value="Disponible">Disponible</option>
                                <option value="Indisponible">Indisponible</option>
                            </select>
                        </div>

                        <div class="m-3">
                            <label for="apartmentLink" class="form-label fw-bold">Lien de la page de l'appartement</label>
                            <input type="text" class="form-control" id="apartmentLink" name="apartmentLink" aria-describedby="totalRent" placeholder="ex. index.php" required>
                        </div>

                        <button type="reset" class="btn btn-outline-danger ms-3 mb-3" onclick="javascript:history.back()">Annuler</button>
                        <button type="submit" name="submitApartment" class="btn btn-primary mb-3">Enregistrer</button>
                    </form>
                </div>

            </div>

        </div>

        <div class="col-5 d-flex justify-content-center text-wrap mt-3">
            <a href="dashboard.php" class="btn btn-primary">Accueil</a>
        </div>

    </div>
    <?php include "../includes/dashboard_footer.php"; ?>