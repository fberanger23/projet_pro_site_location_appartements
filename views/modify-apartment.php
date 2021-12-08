<?php
session_start();

if(!isset($_SESSION['admin']) || $_SESSION['admin'] == false ) {
    header('Location: login.php');
}

?>

<?php require("../models/database.php") ?>
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
            <h1 class="taglineDashboard mb-3"><i class="far fa-edit"></i> Modifier un appartement</h1>
            <div class="row m-3 d-flex justify-content-evenly mb-3">
                <div class="col-lg-11 col-sm-11 text-wrap mt-2 mb-2">
                <?php
            if (isset($_GET["idApartment"]) && !empty($oneApartmentArray)) { ?>
                    <form method="POST">
                    <div class="m-3">
                            <label for="mainPhoto" class="form-label fw-bold">Photo principale</label>
                            <select name="mainPhoto" class="form-select" aria-label="Default select example" required>
                                <?php foreach ($allPhotos as $photos) {
                                ?>
                                    <option value="<?= $photos['path'] ?>" <?= $photos['path'] == $oneApartmentArray['mainPhoto'] ? 'selected' : '' ?>><?= $photos['name'] ?> - <?= $photos['altText'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="m-3">
                            <label for="type" class="form-label fw-bold">Type</label>
                            <input type="text" class="form-control" id="type" name="type" aria-describedby="type" placeholder="ex. T1" value="<?= $oneApartmentArray['type'] ?>" required>
                        </div>

                        <div class="m-3">
                            <label for="floor" class="form-label fw-bold">Étage</label>
                            <input type="text" class="form-control" id="floor" name="floor" aria-describedby="floor" placeholder="ex. Rez-de-Chaussée" value="<?= $oneApartmentArray['floor'] ?>" required>
                        </div>

                        <div class="m-3">
                            <label for="neighborhood" class="form-label fw-bold">Quartier</label>
                            <select class="form-select" id="neighborhood" name="neighborhood" aria-label="neighborhood" required>
                                <?php foreach ($distinctInfo as $apartments) {
                                    ?>
                                <option value="<?= $apartments['neighborhood'] ?>" <?= $apartments['neighborhood'] == $oneApartmentArray['neighborhood'] ? 'selected' : '' ?>><?= $apartments['neighborhood'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="m-3">
                            <label for="squareFootage" class="form-label fw-bold">Nombre de m²</label>
                            <input type="text" class="form-control" id="squareFootage" name="squareFootage" aria-describedby="squareFootage" placeholder="ex. 24,34" value="<?= $oneApartmentArray['squareFootage'] ?>" required>
                        </div>

                        <div class="m-3">
                            <label for="heatSystem" class="form-label fw-bold">Chauffage</label>
                            <input type="text" class="form-control" id="heatSystem" name="heatSystem" aria-describedby="heatSystem" placeholder="ex. central collectif au gaz" value="<?= $oneApartmentArray['heatSystem'] ?>" required>
                        </div>

                        <div class="m-3">
                            <label for="monthlyRent" class="form-label fw-bold">Loyer mensuel (sans charge)</label>
                            <input type="text" class="form-control" id="monthlyRent" name="monthlyRent" aria-describedby="monthlyRent" placeholder="ex. 400" value="<?= $oneApartmentArray['monthlyRent'] ?>" required>
                        </div>

                        <div class="m-3">
                            <label for="services" class="form-label fw-bold">Charges</label>
                            <input type="text" class="form-control" id="services" name="services" aria-describedby="services" placeholder="ex. 68" value="<?= $oneApartmentArray['services'] ?>" required>
                        </div>

                        <div class="m-3">
                            <label for="totalRent" class="form-label fw-bold">Loyer Total</label>
                            <input type="text" class="form-control" id="totalRent" name="totalRent" aria-describedby="totalRent" placeholder="ex. 468" value="<?= $oneApartmentArray['totalRent'] ?>" required>
                        </div>

                        <div class="m-3">
                            <label for="vacant" class="form-label fw-bold">Disponible</label>
                            <select class="form-select" id="vacant" name="vacant" aria-label="vacant" required>
                            <?php foreach ($distinctInfo as $apartments) {
                                    ?>
                                <option value="<?= $apartments['vacant'] ?>" <?= $apartments['vacant'] == $oneApartmentArray['vacant'] ? 'selected' : '' ?>><?= $apartments['vacant'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="m-3">
                            <label for="apartmentLink" class="form-label fw-bold">Lien de la page de l'appartement</label>
                            <input type="text" class="form-control" id="apartmentLink" name="apartmentLink" aria-describedby="totalRent" placeholder="ex. index.php" value="<?= $oneApartmentArray['apartmentLink'] ?>" required>
                        </div>

                        <?php
                if (isset($oneApartmentArray['id'])) { ?>

                    <div class="m-3">
                        <input type="hidden" class="form-control" id="id" name="id" aria-describedby="id" value="<?= $oneApartmentArray['id'] ?>">
                    </div>
                <?php } ?>
                <div class="m-3">
                        <button type="submit" name="modifyApartment" class="btn btn-primary mb-3">Modifier</button>
                        <button type="reset" class="btn btn-outline-danger ms-3 mb-3" onclick="javascript:history.back()">Annuler</button>
                </div>
                    </form>
                    <?php } else { ?>
                <p class="text-center fw-bold text-danger">Veuillez sélectionner un appartement</p>
            <?php } ?>
                </div>

            </div>

        </div>

        <div class="col-5 d-flex justify-content-center text-wrap mt-3">
            <a href="dashboard.php" class="btn btn-primary">Accueil</a>
        </div>

    </div>
    <?php include "../includes/dashboard_footer.php"; ?>